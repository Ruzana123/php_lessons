
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BD table</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form role="form" action="hundler.php" method="POST">
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

try {
    $stmt = $conn->prepare("SELECT * FROM `country` LIMIT 10"); 
    $stmt->execute();
    $countries = $stmt->fetchAll();
	//print_r($countries);
    }
	catch(PDOException $e)
    {
   	echo "Error: " . $e->getMessage();
    }  
	
    foreach ($countries as $key => $country_h) {
        echo "<tr class='success'>";
        if ($key<1) {
            foreach ($country_h as $key_h => $value_h) {
               if (gettype($key_h) != 'integer') {
                    echo "<th>".$key_h."</th>";  
                }  
            }
        echo "</tr>";
        }
    }

    foreach ($countries as $key => $country) {
        echo "<tr class='info'>";
        $c=$country['Capital'];
        try{
            $stmt = $conn->prepare("SELECT `Name` 
            FROM `city` 
            WHERE `id` = '$c' "); 
            $stmt->execute();
            $city = $stmt->fetchAll();
            //print_r($city);
        }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }

        foreach ($country as $key1 => $value) {
            if (gettype($key1) != 'integer') {
                if (($key1 != 'Capital')&&($key1 != 'Name')) {
                    echo "<td>".$value."</td>";
                }
                if ($key1 == 'Capital') {
                    echo "<td>".$city[0][0]."</td>";
                }
                if ($key1 == 'Name') {
                    echo "<td><input type='submit' name='country' value='$value'></td>";
                }
            }
        }
        echo "</tr>";  
    }
        
?>  
</table>
</div>
</form>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
