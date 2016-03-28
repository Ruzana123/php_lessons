<?php 
    if (!defined("HOME")) {
        die('Сторінка не доступна.');
    }

    $servername = "localhost";
    $username = "ruzana";
    $password = "yzrjctyctq";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=todo", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Connected successfully"; 
        }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    global $conn;

    function request_todos(){
        global $conn;
        try {
            $stmt = $conn->prepare("SELECT * FROM `todos` "); 
            $stmt->execute();
            $todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $todos;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        } 
    }

    function request_add_todos($todo){
        global $conn;
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

    function substitute_todos($id_todo,$marker){
        global $conn;
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

?>