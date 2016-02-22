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
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu">
								<?php
											$cities="Kyiv Uman Odessa Talne Chernihiv";
											$city = explode(" ", $cities);
								for ($i=0; $i < count($city); $i++) { ?>
								<li><a href="#<?php echo $city[$i]?>"> Погода в <?php echo $city[$i]?> </a></li>
								<?php }
								?>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			
		</header>
		<div>
			<div id="meteoprog_informer_standart" data-params="boy:Uman:300x100:grey:48x50" ><a href="http://www.meteoprog.ua/ru/">погода</a><br /><a href="http://www.meteoprog.ua/ru/weather/Uman/">Погода в  Умані </a><br /></div><script src="http://www.meteoprog.ua/ru/weather/informer/standart.js"></script>
			<div id="meteoprog_informer_standart" data-params="boy:<?php echo $city[$i]?>:300x100:grey:48x50" ><a href="http://www.meteoprog.ua/ru/">погода</a><br /><a href="http://www.meteoprog.ua/ru/weather/<?php echo $city[$i]?>/">Погода в  <?php echo $city[$i]?> </a><br /></div><script src="http://www.meteoprog.ua/ru/weather/informer/standart.js"></script>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>