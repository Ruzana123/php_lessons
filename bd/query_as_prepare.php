<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BD world</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    <?php
    include "functions_table.php";
        $servername = "localhost";
        $username = "ruzana";
        $password = "yzrjctyctq";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=world", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // echo "Connected successfully"; 
            }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }
        $s="SELECT 'Name' FROM `country`  ORDER BY RAND() LIMIT 3";
        
        try {
                $stmt = $conn->query($s); 
                $countries = $stmt->fetchAll();
                print_r($countries);
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }  

        try {
                $stmt = $conn->prepare($s); 
                $stmt->execute();
                $countries = $stmt->fetchAll();
                print_r($countries);
            }
            catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }  
        ?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>