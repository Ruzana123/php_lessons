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
					<label for="kr">KR-n</label><br>
					<input type="text" name="kr">
				</p>
				<button type="submit">Validation</button>
			</form>
			<?php 
				rz_valid_kr($_POST['kr']);
			?>
			<form action="" method="POST"> <!---путь куди відсил данні з форми пишеться в action=' '-->
				<p>
					<label for="email1">Email</label><br>
					<input type="text" name="email1">
				</p>
				<button type="submit">Validation</button>
			</form>
			<?php 
				rz_valid_email1($_POST['email1']);
			?>
		</div>
	</body>
</html>



