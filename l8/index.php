<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Гостьова книга</title>
		<link href="style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<header>
		</header>
		<?php
		include 'functions.php'; 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$k=process_request();
		}
		?>
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
		<div class="alert alert-danger" role="alert"><?php echo $k ?></div>
			<?php
			$new_array=rz_mas();
			for ($i=0; $i < count($new_array); $i++) { 
			?>
				<div class="media">
					  <a class="media-left media-middle" href="#">
					   <img src="<?php rz_rand_img($img) ?>" alt="">
					  </a>
					  <div class="media-body">
					    <h4 class="media-heading"><?php echo $new_array[$i]['name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $new_array[$i]['email'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. date("m.d.y");?></h4>
					    <p><?php echo $new_array[$i]['text'] ?></p>
					  </div>
					  <?php
					}
			?>
		</div>
		<footer>
			
		</footer>
		<!-- end footer -->
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	</body>
</html>