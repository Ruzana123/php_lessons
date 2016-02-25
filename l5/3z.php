<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="" method="POST"> <!---путь куди відсил данні з форми пишеться в action=' '-->
			<p>
				<label for="email">Email</label><br>
				<input type="text" name="email">
			</p>
			<button type="submit">Рerform</button>
		</form>
	</body>
</html>

<?php 
include 'function.php';
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		rz_valid_email();
	}
	
?>
