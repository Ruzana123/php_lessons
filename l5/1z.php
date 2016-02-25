<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="" method="POST"> <!---путь куди відсил данні з форми пишеться в action=' '-->
			<p>
				<label for="str">String</label><br>
				<input type="text" name="str">
			</p>
			<button type="submit">Рerform</button>
		</form>
	</body>
</html>

<pre>
<?php
include 'function.php';

	?><span style="color: red;"><?php rz_formatting_letters($_POST['str']); ?></span><?php
	
?>
</pre>
