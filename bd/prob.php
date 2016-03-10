<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BD world</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
  <div class="table-responsive">
    <table class='table table-condensed'>
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
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
include "functions_table.php";
    try {
        $stmt = $conn->prepare("SELECT * 
            FROM `products` 
            WHERE `id` = 3"); 
        $stmt->execute();
        $tov = $stmt->fetchAll();
        }
        catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
    }
?>
    <table class='table table-condensed'>
    <h3> Виборка товару по id </h3><?php
      rz_bd_table_h($tov);
      rz_bd_table($tov);?>
    </table><?php

     try {
        $stmt = $conn->prepare("SELECT * 
        FROM `products` 
        WHERE `category` = 'anime'"); 
        $stmt->execute();
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
        $stmt = $conn->prepare("SELECT *
        FROM `products` 
        WHERE `price` >100"); 
        $stmt->execute();
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
        $stmt = $conn->prepare("SELECT *
        FROM `products` 
        WHERE `price` 
        BETWEEN 100 
        AND 200"); 
        $stmt->execute();
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
        $stmt = $conn->prepare("UPDATE `products` SET `price` = '1000' WHERE `id` = 5"); 
        $stmt->execute();
        $i = $stmt->fetchAll();
        echo "Ціну оновлено";
        }
        catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
    }

    try {
        ?><h3> Видаленя продукту з id=9 </h3><?php
        $stmt = $conn->prepare("DELETE FROM `products` WHERE `id`=9;"); 
        $stmt->execute();
        $i = $stmt->fetchAll();
        echo "Видалено";
        }
        catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
    }
    ?>
</table>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>