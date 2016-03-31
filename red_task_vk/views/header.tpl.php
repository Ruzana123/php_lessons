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
				 $params = array(
			        'client_id'     => CLIENT_ID,
			        'redirect_uri'  => REDIRECT_URI,
			        'response_type' => 'code'
			    );
				    $url = 'http://oauth.vk.com/authorize';

				    echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Вхід через ВК</a></p>';

			?>
			</div>
		</header>
		