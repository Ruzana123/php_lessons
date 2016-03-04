<?php
	$host='localhost';
    $database='world';
    $user='root';
    $pswd='';
    $dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
    mysql_select_db($database) or die("Не могу подключиться к базе.");

    $query = "SELECT `IndepYear`,`Name`
            FROM `country`
            WHERE `IndepYear` > 1900";
	$res = mysql_query($query);
        while($row = mysql_fetch_array($res))
        {
        	echo $row['Name'];
            echo $row['IndepYear']."<br>";              
        }

   $query = "SELECT `population`,`Name`
            FROM `country`
            WHERE `population` > 10000000";
	$res = mysql_query($query);
        while($row = mysql_fetch_array($res))
        {
        	echo $row['Name'];
            echo $row['population']."<br>"; 
        }

    $query = "SELECT * FROM `country` where name like 'A%'";
	$res = mysql_query($query);
        while($row = mysql_fetch_array($res))
        {
            echo $row['Name']."<br>";
        }

    $query = "SELECT * 
		FROM `country` 
		WHERE `continent` = 'Europe'";
	$res = mysql_query($query);
        while($row = mysql_fetch_array($res))
        {
            echo $row['Name']."<br>";
        }


?>