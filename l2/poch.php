<pre>
<?php
//phpinfo();

/*$_GET
$_POST   //суперглобальні масиви
$_SERVER
$_SESSION
$_GLOBALS*/

/*
//print_r($_SERVER);//масив зберіг інформ про сервер, користувача і тд.
print_r($_GET); //http://test1.ru/php/l2/poch.php/?name=Maxim&surname=Vaaa
echo $_GET['name'];
echo '<br>';
echo '<br>';
*/

?>
</pre>

<form action="http://test1.ru/php/l2/handler.php" method="GET"> <!---путь куди відсил данні з форми-->
	<p>
		<label for="name">Name</label><br>
		<input type="text" name="imya">
	</p>
	<p>
		<label for="name">Surname</label><br>
		<input type="text" name="surname">
	</p>
	<button type="submit">Submit form</button>
</form>


<ul>
	<li><a href="city.php?name=Kyiv">Kyiv</a></li>
	<li><a href="city.php?name=Uman">Uman</a></li>
</ul>
