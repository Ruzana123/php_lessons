<?php 
    if (!defined("HOME")) {
        die('Сторінка не доступна.');
    }
    
function conn(){
    $servername = "localhost";
    $username = "ruzana";
    $password = "yzrjctyctq";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=form", $username, $password);
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

    function request_user_id($user){
       $conn=conn();
        try {
            $stmt = $conn->prepare("SELECT * FROM `users` WHERE `nick`=:user "); 
            $stmt->bindParam(':user', $user); 
            $stmt->execute();
            $user_mas = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user_mas;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function request_todos($user){
       $conn=conn();
        try {
            $stmt = $conn->prepare("SELECT * FROM `todos` WHERE `id_user`=$user "); 
            $stmt->execute();
            $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $todos;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function request_add_todos($todo){
        $conn=conn();
        try {
            $stmt = $conn->prepare("INSERT INTO `todos`(`todo`) VALUES (:todo)"); 
            $stmt->bindParam(':todo', $todo); 
            $stmt->execute();
            add_good('Todos created');
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function delete_todos($id_todo){
       $conn=conn();
        try {
            $stmt = $conn->prepare("DELETE FROM `todos` WHERE `id` = :id_todo;"); 
            $stmt->bindParam(':id_todo',$id_todo);
            $stmt->execute();
            add_good('Task has been deleted');
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function substitute_todos($id_todo,$marker){
        $conn=conn();
        try {
            $stmt = $conn->prepare("UPDATE `todos` SET `marker`=:marker WHERE `id` = :id_todo;"); 
            $stmt->bindParam(':id_todo',$id_todo);
            $stmt->bindParam(':marker',$marker);
            $stmt->execute();
            add_good('New accomplished');
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
                // insert a row     
                $nick = htmlspecialchars($_POST['nick']); 
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

?>