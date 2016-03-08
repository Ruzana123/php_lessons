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
    $conn = new PDO("mysql:host=$servername;dbname=world", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    echo "<h3> Kраїни, які оголосили незалежність після 1900 </h3>";
    try {
        $stmt = $conn->prepare("SELECT `IndepYear`,`Name`
                FROM `country`
                WHERE `IndepYear` > 1900"); 
        $stmt->execute();
        $countries = $stmt->fetchAll();
        }
        catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }

    foreach ($countries as $key => $c_h) {
        echo "<tr class='success'>";
        if ($key<1) {
            foreach ($c_h as $key_h => $value_h) {
               if (gettype($key_h) != 'integer') {
                    echo "<th>".$key_h."</th>";  
                }  
            }
        echo "</tr>";
        }
    }

    foreach ($countries as $key => $country) {
        echo "<tr class='info'>";
        foreach ($country as $key1 => $value) {
            if (gettype($key1) != 'integer') {
                echo "<td>".$value."</td>";
            }
        }
        echo "</tr>";    
    }
      
?>  
</table>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>