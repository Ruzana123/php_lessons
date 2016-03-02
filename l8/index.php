<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Гостьова книга</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<header>
		</header>
		
		<div class="container">
			<h1>Гостьова книга</h1>
			<form role="form" action="" method="POST">
			  	<div class="form-group">
				    <label for="name">Ім'я</label>
				    <input type="text" name="name" class="form-control">
			  	</div>
			  	<div class="form-group">
					<label for="email">Email адреса</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div>
					<label for="text">Текст повідомлення</label><br>
					<textarea class="form-control textarea" name="text" rows="9" placeholder="CONTENT"></textarea>
			  	</div>
			  <button type="submit" class="btn btn-default">Відправити</button>
			</form>
					
		<h2>Messages</h2>
		<?php
			include 'functions.php'; 
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				?><div class="alert alert-danger" role="alert"><?php
				$k=process_request();?></div><?php
			}
		?>
		<div class="alert alert-danger" role="alert">
			<?php echo $k.' '.rz_get();?></div>
			<?php rz_message(); ?>
		</div>

		<footer>
			
		</footer>
		<!-- end footer -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</body>
</html>