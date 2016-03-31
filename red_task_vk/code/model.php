<?php 
    if (!defined("HOME")) {
        die('Сторінка не доступна.');
    }
    
    $servername = "localhost";
    $username = "Ruzana";
    $password = "123";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=form", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Connected successfully"; 
        }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    global $conn;

function bd_zapros($email,$pas){
    global $conn;

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

function vk_zapros($vk_name,$vk_id){
    global $conn;
     try {
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE `vk_name`=:vk_name AND `vk_id`=:vk_id"); 
        $stmt->bindParam(':vk_name', $vk_name); 
        $stmt->bindParam(':vk_id', $vk_id); 
        $stmt->execute();
        $user = $stmt->fetch();
        if (empty($user)) {
                $stmt = $conn->prepare("INSERT INTO `users`(`vk_name`, `vk_id`,`nick`) VALUES (:vk_name,:vk_id,:vk_name)"); 
                $stmt->bindParam(':vk_name', $vk_name); 
                $stmt->bindParam(':vk_id', $vk_id); 
                $stmt->execute();
                return false;
        }
        else{
            return true;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    } 
   
}


   function request_user_id($user){
       global $conn;
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

    function request_todos($user,$id_list){
       global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM `todos` WHERE `id_user`=:user AND `id_list`=:id_list "); 
            $stmt->bindParam(':user', $user); 
            $stmt->bindParam(':id_list', $id_list); 
            $stmt->execute();
            $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $todos;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function request_task_list($user){
       global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM `task_list` WHERE `id_user`=:user"); 
            $stmt->bindParam(':user', $user); 
            $stmt->execute();
            $lists = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $lists;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function request_add_category($name,$id_user){
        global $conn;
        try {
            $stmt = $conn->prepare("INSERT INTO `task_list`(`name`,`id_user`)  VALUES (:name,:id_user)"); 
            $stmt->bindParam(':name', $name); 
            $stmt->bindParam(':id_user', $id_user); 
            $stmt->execute();
            add_good('Category created');
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function request_add_todos($todo,$id_user,$id_list){
        global $conn;
        try {
            $stmt = $conn->prepare("INSERT INTO `todos`(`todo`,`id_user`,`id_list`) VALUES (:todo,:id_user,:id_list)"); 
            $stmt->bindParam(':todo', $todo); 
            $stmt->bindParam(':id_user', $id_user); 
            $stmt->bindParam(':id_list', $id_list); 
            $stmt->execute();
            add_good('Todos created');
            redirect_new("task","id_category",$id_list);
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function delete_todos($id_todo){
       global $conn;
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

    function delete_category($list_id){
       global $conn;
        try {
            $stmt = $conn->prepare("DELETE FROM `task_list`  WHERE `list_id` = :list_id;"); 
            $stmt->bindParam(':list_id',$list_id);
            $stmt->execute();
            add_good('Category has been deleted');

            $stmt1 = $conn->prepare("DELETE FROM `todos`  WHERE `id_list` = :list_id;"); 
            $stmt1->bindParam(':list_id',$list_id);
            $stmt1->execute();
            add_good('Task this category has been deleted');
        
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function edit_category($list_id,$name){
        global $conn;
        try {
            $stmt = $conn->prepare("UPDATE `task_list` SET `name`=:name WHERE `list_id` = :list_id");
            $stmt->bindParam(':name',$name); 
            $stmt->bindParam(':list_id',$list_id);
            $stmt->execute();
            add_good('Category renamed');
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function new_name_category($list_id){
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT `name` FROM `task_list` WHERE `list_id` = :list_id");
            $stmt->bindParam(':list_id',$list_id);
            $stmt->execute();
            $name = $stmt->fetch();
            return $name;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function edit_task($name,$list_id,$id_user,$id_task){
        global $conn;
        try {
            $stmt = $conn->prepare("UPDATE `todos` SET `todo`=:name WHERE `id_list` = :list_id AND `id_user`=:id_user AND `id`=:id_task");
            $stmt->bindParam(':name',$name); 
            $stmt->bindParam(':list_id',$list_id);
            $stmt->bindParam(':id_user',$id_user);
            $stmt->bindParam(':id_task',$id_task);
            $stmt->execute();
            add_good('Task renamed');
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function name_task($list_id,$id,$id_user){
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT `todo` FROM `todos` WHERE `id_list` = :list_id AND `id`=:id_todo AND `id_user`=:id_user");
            $stmt->bindParam(':list_id',$list_id);
            $stmt->bindParam(':id_todo',$id);
            $stmt->bindParam(':id_user', $id_user); 
            $stmt->execute();
            $name = $stmt->fetch();
            return $name;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function substitute_todos($id_todo,$marker){
        global $conn;
        try {
            $stmt = $conn->prepare("UPDATE `todos` SET `marker`=:marker WHERE `id` = :id_todo;"); 
            $stmt->bindParam(':id_todo',$id_todo);
            $stmt->bindParam(':marker',$marker);
            $stmt->execute();
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function count_task($id,$id_user){
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT COUNT(`todo`) FROM `todos` WHERE `id_list`=:id AND `id_user`=:id_user"); 
            $stmt->bindParam(':id',$id);
            $stmt->bindParam(':id_user', $id_user); 
            $stmt->execute();
            $count = $stmt->fetch();
            return $count;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    /*function tasks_all_count($list_id){
        global $conn;
        try {
            $count = $conn -> prepare( "SELECT COUNT(*) AS 'tasks_count' FROM `todos` WHERE `id_list`=:list_id" 
            );
            $count -> bindParam(':id_list', $list_id);
            $count -> execute();
            $tasks_count = $count -> fetch(PDO::FETCH_ASSOC);
            
            $counts = $conn -> prepare("UPDATE `task_list` SET `tasks_count` = :count WHERE `list_id` = :list_id" 
            );
            $counts -> bindParam(':count', $tasks_count['tasks_count']);
            $counts -> bindParam(':list_id', $list_id);
            $counts -> execute(); 
        } 
        catch (PDOException $e) {
            error_log( "Update tasks count: " . $e -> getMessage() );
        }
    }*/

function bd_reg(){
    global $conn;
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
                    $_SESSION['username']=$nick;
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