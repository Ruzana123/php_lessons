<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<style>
		body{
			background-size: cover;
		}
	</style>
</head>
<body style="">
	<div class="container">
		<header>
			<div class="collapse navbar-collapse">
				<h1 style="display: inline-block;">Task</h1>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="?action=login" title="Login" style="font-size:18px;"> Login </a><br></li>
	    			<li><a href="?action=reg" title="Reg" style="font-size:18px;"> Registration </a><br></li>
	    			<li><a href="?action=todos" title="Task" style="font-size:18px;"> Task </a><br></li>
				</ul>
				<?php 	
					$client_id = '5384665'; // ID приложения
				    $client_secret = 'Zs3mdTvrB4B2FoemXkFl'; // Защищённый ключ
				    $redirect_uri = 'http://student4.e-u.org.ua/task_log/login_reg/index.php?action=vk'; // Адрес сайта

				    $url = 'http://oauth.vk.com/authorize';

				    $params = array(
				        'client_id'     => $client_id,
				        'redirect_uri'  => $redirect_uri,
				        'response_type' => 'code'
				    );

				    echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Вхід через ВК</a></p>';

			?>
			</div>
		</header>
		