<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>table</title>
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
    $conn = new PDO("mysql:host=$servername;dbname=world", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    include "functions_table.php";
    //include "index.php";
    $order= 'ORDER BY '.$_POST['sel2'];
    if ($_POST['sel1']!='All') {
      $sel1= 'LIMIT '.$_POST['sel1'];
    }
    else{
      $sel1='';
    }
     try {
        $stmt = $conn->query("SELECT * FROM `country` $order $sel1");
        $lim = $stmt->fetchAll();
        //print_r($codeee);
        }
      catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        } ?> 

     <table class='table table-condensed'><?php
      rz_bd_table_h($lim);
      rz_bd_table($lim);?>
      </table><?php

    $code=$_GET['code'];
    try {
        $stmt = $conn->query("SELECT `Name`, `District`, `Population` FROM `city` WHERE `CountryCode`= '$code'");
        $codeee = $stmt->fetchAll();
        //print_r($codeee);
        }
      catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        } ?> 

     <table class='table table-condensed'><?php
      rz_bd_table_h($codeee);
      rz_bd_table($codeee);?>
      </table><?php
?>  
</table>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
