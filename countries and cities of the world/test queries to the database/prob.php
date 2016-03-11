<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BD world</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "ruzana";
    $password = "yzrjctyctq";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=store", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Connected successfully"; 
        }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }

    include "functions_table.php";

    try {
        $stmt = $conn->query("SELECT * 
            FROM `products` 
            WHERE `id` = 3"); 
        $tov = $stmt->fetchAll();
        }
        catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }?>

    <div class="table-responsive">
        <table class='table table-condensed'>
        <h3> Виборка товару по id </h3><?php
          rz_bd_table_h($tov);
          rz_bd_table($tov);?>
        </table><?php

         try {
            $stmt = $conn->query("SELECT * 
            FROM `products` 
            WHERE `category` = 'anime'"); 
            $cat = $stmt->fetchAll();
            }
            catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
        }
      ?>
        <table class='table table-condensed'>
        <h3> Виборка по категорії </h3><?php
          rz_bd_table_h($cat);
          rz_bd_table($cat);?>
        </table><?php

        try {
            $stmt = $conn->query("SELECT *
            FROM `products` 
            WHERE `price` >100"); 
            $c = $stmt->fetchAll();
            }
            catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
        }
        ?>
        <table class='table table-condensed'>
        <h3> Виборка по ціні більше чим 100 </h3><?php
          rz_bd_table_h($c);
          rz_bd_table($c);?>
        </table><?php

        try {
            $stmt = $conn->query("SELECT *
            FROM `products` 
            WHERE `price` 
            BETWEEN 100 
            AND 200"); 
            $interv = $stmt->fetchAll();
            }
            catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
        }
        ?>
        <table class='table table-condensed'>
        <h3> Виборка по ціні в діапазоні 100-200 </h3><?php
          rz_bd_table_h($interv);
          rz_bd_table($interv);?>
        </table><?php

     
        try {
            ?><h3> Запрос оновлення ціни по id=5 </h3><?php
            $stmt = $conn->query("UPDATE `products` SET `price` = '1000' WHERE `id` = 5"); 
            $i = $stmt->fetchAll();
            echo "Ціну оновлено";
            }
            catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
        }
        
        try {
            ?><h3> Видаленя продукту з id=9 </h3><?php
            $stmt = $conn->query("DELETE FROM `products` WHERE `id`=9"); 
            $i = $stmt->fetchAll();
            echo "Видалено";
            }
            catch(PDOException $e)
            {
            echo "Error: " . $e->getMessage();
        }
        
        try { 
        ?><h3> Повертає ід ост вставленого запису </h3><?php
        $sql = "INSERT INTO `clients` (name, email) 
        VALUES ('Vaa', 'dsfdg@bigmir.com')"; 
        // use exec() because no results are returned 
        $conn->exec($sql); 
        $last_id = $conn->lastInsertId(); 
        echo "New record created successfully. Last inserted ID is: " . $last_id; 
        } 
        catch(PDOException $e) 
        { 
        echo $sql . "<br>" . $e->getMessage(); 
        }
        
        
        try {  
        ?><h3> Повертає кількість модифікованих рядків (вставили записи в таблицю) </h3><?php
        $stmt = $conn->prepare("INSERT INTO `clients` (`id`, `name`, `email`) 
        VALUES (NULL, 'Va1', 'vvvv1@aaaa.ru'),(NULL, 'Va2', 'vvv@vavvava.ru')"); 
        $stmt->execute(); 
        $row = $stmt->rowCount(); 
        print_r($row); 
        } 
        catch(PDOException $e) 
        { 
        echo $sql . "<br>" . $e->getMessage(); 
        }

       // exec("Z:\home\/test1.ru\www\php\BD\index.php");


        try { 
        $stmt = $conn->prepare("INSERT INTO `store`.`clients` (`name`, `email`) VALUES (:name,:email)"); 
        $stmt->bindParam(':name', $name); 
        $stmt->bindParam(':email', $email); 

        // insert a row 
        $name = "Nikola"; 
        $email = "Nikola@mail.ru"; 
        $stmt->execute(); 
        } 
        catch(PDOException $e) { 
        echo "Error: " . $e->getMessage(); 
        }

        ?>
    </table>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>