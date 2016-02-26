<?php
/*
Написала функцію для перевірки чи є строка
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
			<form action="" method="POST"> <!---путь куди відсил данні з форми пишеться в action=' '-->
				<p>
					<label for="surname">Surname</label><br>
					<input type="text" name="surname">
				</p>
				<button type="submit">Validation</button>
			</form>
			<?php
				rz_valid_surname($_POST['surname']);
			?>
			<form action="" method="POST"> <!---путь куди відсил данні з форми пишеться в action=' '-->
				<p>
					<label for="nik">Nickname</label><br>
					<input type="text" name="nik">
				</p>
				<button type="submit">Validation</button>
			</form>
			<?php
				rz_valid_nik($_POST['nik']);
			?>
			<form action="" method="POST"> <!---путь куди відсил данні з форми пишеться в action=' '-->
				<p>
					<label for="phone1">Phone number</label><br>
					<input type="text" name="phone1">
				</p>
				<button type="submit">Validation</button>
			</form>
			<?php
				rz_valid_phone1($_POST['phone1']);
			?>
		</div>
	</body>
</html>



