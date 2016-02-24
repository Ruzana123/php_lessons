<pre>
<?php
include 'function.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	process_request();
}
?>
</pre>

<form action="" method="POST"> <!---путь куди відсил данні з форми пишеться в action=' '-->
	<p>
		<label for="name">Name</label><br>
		<input type="text" name="name">
	</p>
	<p>
		<label for="email">Email</label><br>
		<input type="email" name="email">
	</p>
	<button type="submit">Add informations</button>
</form>

<a href="list.php">Result</a>
