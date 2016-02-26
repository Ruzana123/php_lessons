<?php
/*
Написаyyz функціq для перевірки чи є строка
URL (типу http://google.com)
Phone number (+38 (093) 560 50 50
Використовуючи regular expression
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<div>
			<?php 
				include 'functions_dz.php';
			?>
			<form action="" method="POST"> <!---путь куди відсил данні з форми пишеться в action=' '-->
				<p>
					<label for="email">Email</label><br>
					<input type="text" name="email">
				</p>
				<button type="submit">Validation</button>
			</form>
			<?php 
				rz_valid_email($_POST['email']);
			?>
			<form action="" method="POST"> <!---путь куди відсил данні з форми пишеться в action=' '-->
				<p>
					<label for="url">URL</label><br>
					<input type="text" name="url">
				</p>
				<button type="submit">Validation</button>
			</form>
			<?php 
				rz_valid_url($_POST['url']);
			?>
			<form action="" method="POST"> <!---путь куди відсил данні з форми пишеться в action=' '-->
				<p>
					<label for="phone">Phone number</label><br>
					<input type="text" name="phone">
				</p>
				<button type="submit">Validation</button>
			</form>
			<?php
				rz_valid_phone($_POST['phone']);
			?>
		</div>
	</body>
</html>



