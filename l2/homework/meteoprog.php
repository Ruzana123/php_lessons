<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Weather</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head>
	<body>
		<header class="weather">
			<nav class="navbar navbar-default ">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
					</div>
					<div class="container">
						<?php
						include 'city.php';
						?>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu">
								<?php 
								foreach ($cities as $city => $key){
									?>
									<li><a href="<?php printf('meteoprog.php?name=%s',$city);?>">Погода в <?php printf('%s', $key); ?></a></li>
									<?php
									}
									$city1 = $_GET['name'];
									if (empty($city1)) { //перевіряє чи встановлено 
									$city1 = "Uman";
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			
		</header>
		<div class="container" style="text-align: center;">
			<?php printf(
			"<div id='meteoprog_informer_standart' style='display:inline-block' data-params='boy:%s:300x100:grey:48x50' ><a href='http://www.meteoprog.ua/en/'>weather</a><br />
				<a href='http://www.meteoprog.ua/en/weather/%s/'>Weather in %s </a><br /></div>",
				$city1, $city1, $city1);
		?>
		</div>
		<script src="http://www.meteoprog.ua/ru/weather/informer/standart.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>