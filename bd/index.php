
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BD table</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <form role="form" action="data.php" method="post">
        <label for="sel1">Кількість країн:</label>
        <select name="sel1"> 
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="All">All</option>
        </select>
        <label for="sel2">Сортування по:</label>
        <select name="sel2"> 
            <option value="Code">Код</option>
            <option value="Name">ім'я</option>
            <option value="Population">населення</option>
            <option value="IndepYear">рік незалежності</option>
        </select>
        <input type="submit" value="Ok"></p>
    </form>

  <div class="table-responsive">
	<table class='table table-condensed table-hover'>
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
echo $_POST['coll'];
try {
    $stmt = $conn->query("SELECT * FROM `country` LIMIT 10"); 
    $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);
	//print_r($countries);
    }
	catch(PDOException $e)
    {
   	echo "Error: " . $e->getMessage();
    }  
	?> 

    <tr class='success'>
    <th>Code</th>
    <th>Name</th>
    <th>Continent</th>
    <th>Region</th>
    <th>SurfaceArea</th>
    <th>IndepYear</th>
    <th>Population</th>
    <th>LifeExpectancy</th>
    <th>GNP</th>
    <th>GNPOld</th>
    <th>LocalName</th>
    <th>GovernmentForm</th>
    <th>HeadOfState</th>
    <th>Capital</th>
    <th>Code2</th>
    <?php

    foreach ($countries as $key => $country) {

    $c=$country['Capital'];
    try {
    $stmt = $conn->query("SELECT `Name` 
            FROM `city` 
            WHERE `id` = $c"); 
    $city = $stmt->fetchAll();
    }
    catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }  ?>

    <tr class='info'>
        <td><?php echo $country['Code'] ?></td>
        <td><a href="data.php?code=<?php echo $country['Code']?>"><?php echo $country['Name'] ?></a></td>
        <td><?php echo $country['Continent'] ?></td>
        <td><?php echo $country['Region'] ?></td>
        <td><?php echo $country['SurfaceArea'] ?></td>
        <td><?php echo $country['IndepYear'] ?></td>
        <td><?php echo $country['Population'] ?></td>
        <td><?php echo $country['LifeExpectancy'] ?></td>
        <td><?php echo $country['GNP'] ?></td>
        <td><?php echo $country['GNPOld'] ?></td>
        <td><?php echo $country['LocalName'] ?></td>
        <td><?php echo $country['GovernmentForm'] ?></td>
        <td><?php echo $country['HeadOfState'] ?></td>
        <td><?php echo $city[0][0] ?></td>
        <td><?php echo $country['Code2'] ?></td>
    </tr><?php
    }
    ?>
        
 
</table>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
