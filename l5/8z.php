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
			<button type="submit">Inverse</button>
		</form>
	</body>
</html>

<pre>
<?php
include 'function.php';

rz_lower_case();
	
?>
</pre>
