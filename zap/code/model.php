<?php 
    if (!defined("HOME")) {
        die('Сторінка не доступна.');
    }
    
function conn(){
    $servername = "localhost";
    $username = "ruzana";
    $password = "yzrjctyctq";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=blog", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Connected successfully"; 
        }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

function bd_zapros($email,$pas){
    $conn=conn();
    try {
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE `email`='$email'"); 
        $stmt->execute();
        $user = $stmt->fetch();
        if (empty($user['nick'])) {
            add_errors('Користувача не виявлено');
        }
        elseif ($user['password']!=md5($pas)) {
            add_errors('Пароль введено невірно');
        }
        return $user['nick'];
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    } 
}

function is_admin(){
    $conn=conn();  
    $nickname=get_username();
    try {
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE `nick`=:nick"); 
        $stmt->bindParam(':nick', $nickname); 
        $stmt->execute();
        $user = $stmt->fetch();
        if ($user['admin']==1) {
            return true;
        }
        else{
            return false;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    } 
}

function bd_reg(){
    $conn=conn();
    try {
        $err_message = array(); 
        $stmt = $conn -> prepare("SELECT * FROM `users` WHERE `nick` = :nick OR `email` = :email");
        $stmt->bindParam(':nick', $nick); 
        $stmt->bindParam(':email', $email); 
        $nick = htmlspecialchars($_POST['nick']); 
        $email = htmlspecialchars($_POST['email']);
        $stmt -> execute();
        $users = $stmt->fetch();
        if ($users['nick']==$nick) {
            add_errors('Користувач з таким ніком вже існує');
        }
        if ($users['email']==$email) {
            add_errors('Користувач з таким email вже існує');
        }
        if (!has_errors()){
            try { 
                $stmt = $conn->prepare("INSERT INTO `users` (`nick`, `email`, `password`) 
                VALUES (:nick, :email, :password)"); 
                $stmt->bindParam(':nick', $nick); 
                $stmt->bindParam(':email', $email); 
                $stmt->bindParam(':password', $password);
                // insert a row                $nick = htmlspecialchars($_POST['nick']); 
                $email = htmlspecialchars($_POST['email']);
                $password= md5(htmlspecialchars($_POST['password']));            
                if ( $stmt -> execute() == true ) {
                    show_template("good_result");
                } 
            } 
            catch(PDOException $e) { 
                echo "Error: " . $e->getMessage(); 
            }
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


function post(){
    $conn=conn();
    try { 
        $stmt = $conn->prepare("INSERT INTO `post` (`Images`, `Title`, `Author`, `Description`, `Paper`,`Date`) 
        VALUES (:images, :title, :author, :description, :paper, :datee)"); 
        $stmt->bindParam(':images', $images); 
        $stmt->bindParam(':title', $title); 
        $stmt->bindParam(':author', $author); 
        $stmt->bindParam(':description', $description); 
        $stmt->bindParam(':paper', $paper); 
        $stmt->bindParam(':datee', $date); 
        // insert a row 
        $images = htmlspecialchars($_POST['images']); 
        $title = htmlspecialchars($_POST['title']);
        $author = htmlspecialchars($_POST['author']);
        $description = htmlspecialchars($_POST['description']);
        $paper = htmlspecialchars($_POST['paper']);
        $date = date("d F Y");
        $stmt->execute(); 
    } 
    catch(PDOException $e) { 
        echo "Error: " . $e->getMessage(); 
    }
}
?>