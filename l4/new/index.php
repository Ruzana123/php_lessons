<?php
include 'function.php';
?>

<form action="" method="POST"> <!---путь куди відсил данні з форми-->
	<p>
		<label for="name">Name</label><br>
		<input type="text" name="name">
	</p>
	<p>
		<label for="email">Email</label><br>
		<input type="text" name="email">
	</p>
	<button type="submit">Short FIO</button>
</form>

<pre>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	process_request();
}
?>
</pre>