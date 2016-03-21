<?php 
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





function bd_reg(){
    $conn=conn();
    if (!is_logged_in()){
        show_template_website("reg");
    } 
        else echo "To register, leave the current account";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err_message1 = array();
    $email=htmlspecialchars($_POST['email']);
    $pas=htmlspecialchars($_POST['password']);
    $nick=htmlspecialchars($_POST['nick']);
    
    if ($_POST['password']!=$_POST['password2']){
        array_push($err_message1, 'Введені паролі не співпадають');
    }
    if (empty($_POST['nick'])){
        array_push($err_message1, 'Введіть нік');
    }
    if (!preg_match('/^[0-9a-z_-]+[@]{1,1}+[0-9a-z_-]+[.]{1,1}+[0-9a-z]{2,5}+$/',$_POST['email'])) {
        array_push($err_message1, 'Email введено не вірно');
    }
    if (empty($_POST['email'])){
        array_push($err_message1, 'Введіть email');
    }
    if (empty($_POST['password'])){
        array_push($err_message1, 'Введiть паролі');
    }

    $n=count($err_message1);
    if ($n!=0) {
        ?><div class="alert alert-danger" role="alert"><?php
        foreach ($err_message1 as $value) {
            echo $value;
            echo "<br>";
        }   
        ?></div><?php                   
    }
    if ($n==0) {
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
                array_push($err_message, 'Користувач з таким ніком вже існує');
            }
            if ($users['email']==$email) {
                array_push($err_message, 'Користувач з таким email вже існує');
            }
            $err=count($err_message);
            if ($err!=0) {
                ?><div class="alert alert-danger" role="alert"><?php
                foreach ($err_message as $value) {
                    echo $value;
                    echo "<br>";
                }   
                ?></div><?php                   
            }
            if ($err==0){
                try { 
                    $stmt = $conn->prepare("INSERT INTO `users` (`nick`, `email`, `password`) 
                    VALUES (:nick, :email, :password)"); 
                    $stmt->bindParam(':nick', $nick); 
                    $stmt->bindParam(':email', $email); 
                    $stmt->bindParam(':password', $password);
                    // insert a row     
                    $nick = htmlspecialchars($_POST['nick']); 
                    $email = htmlspecialchars($_POST['email']);
                    $password= htmlspecialchars($_POST['password']);            
                    if ( $stmt -> execute() == true ) {
                        $s = "<span> Ви створили користувача </span>";
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
    if (!empty($s)){
        ?><div class="alert alert-success" role="alert">
        <?php echo $s?></div>
    </div><?php
    }
}
}
?>