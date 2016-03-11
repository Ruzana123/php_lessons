<?php
/*
PDO ($conn) - створює з'єднання
	$conn = new PDO("mysql:host=$servername;dbname=world", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully"; 

prepare() - підготовлює запрос //$stmt = $conn->prepare("SELECT * FROM `country` LIMIT 10"); 
query() - виконує запит до бд
	/* Select запросы возвращают результирующий набор */
	/*if ($result = $mysqli->query("SELECT Name FROM City LIMIT 10")) {
	    printf("Select вернул %d строк.\n", $result->num_rows);

	    /* очищаем результирующий набор */
	   /* $result->close();
	}*/

/*
exec() - виконує зовнішню програму 
string exec ( string command [, array output [, int return_var]])
exec() выполняет данную команду command, но ничего не выводит.
Она просто возвращает последнюю строку результата выполнения команды. 
Если вам необходимо выполнить команду и передать все данные из команды непосредственно обратно без изменения, 
используйте функцию passthru().
<?php
// выводит имя пользователя, от имени которого запущен процесс php/httpd
// (применимо к системам с командой "whoami" в системном пути)
echo exec('whoami');
?>*/

//lastInsertId() - повертає ід останнього вставленого рядка або послідовне значення // $smf = $dbh->prepare("INSERT INTO test (`numer`) VALUES (?)");

//PDOStatement ($stmt)-підготовлений запит до бази даних, а після виконання запиту відповідний результуючий набір

//bindParam()-Прив'язує параметр запиту до перемінної
	/*<?php
	/* Выполнение запроса с привязкой PHP переменных */
	/*$calories = 150;
	$colour = 'red';
	$sth = $dbh->prepare('SELECT name, colour, calories
	    FROM fruit
	    WHERE calories < :calories AND colour = :colour');
	$sth->bindParam(':calories', $calories, PDO::PARAM_INT);
	$sth->bindParam(':colour', $colour, PDO::PARAM_STR, 12);
	$sth->execute();
	?>*/

//execute()-запускає підготовлений запит на виконання

//fetch()-витяг наступного рядка з результуючого набору 
	/*<?php
	$sth = $dbh->prepare("SELECT name, colour FROM fruit");
	$sth->execute();

	/* Примеры различных режимов работы PDOStatement::fetch */
	/*print("PDO::FETCH_ASSOC: ");
	print("Возвращаем следующую строку в виде массива, индексированного именами столбцов\n");
	$result = $sth->fetch(PDO::FETCH_ASSOC);
	print_r($result);
	print("\n");

	print("PDO::FETCH_BOTH: ");
	print("Возвращаем следующую строку в виде массива, индексированного как именами столбцов, так и их номерами\n");
	$result = $sth->fetch(PDO::FETCH_BOTH);
	print_r($result);
	print("\n");

	print("PDO::FETCH_LAZY: ");
	print("Возвращаем следующую строку в виде анонимного объекта со свойствами, соответствующими столбцам\n");
	$result = $sth->fetch(PDO::FETCH_LAZY);
	print_r($result);
	print("\n");

	print("PDO::FETCH_OBJ: ");
	print("Возвращаем следующую строку в виде анонимного объекта со свойствами, соответствующими столбцам\n");
	$result = $sth->fetch(PDO::FETCH_OBJ);
	print $result->NAME;
	print("\n");
	?>*/

//fetchAll() - повертає масив, що містить всі рядки результуючого набору $countries = $stmt->fetchAll();
//rowCount() - повертає кількість рядків, модифікованих останнім SQL запитом
	/* Удалим все строки из таблицы FRUIT 
	$del = $dbh->prepare('DELETE FROM fruit');
	$del->execute();

	/* Выведем число удаленных строк 
	print("Количество удаленных строк:\n");
	$count = $del->rowCount();
	print("Удалено $count строк.\n");
	*/

?>