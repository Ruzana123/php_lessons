<?php
	if (!defined("HOME")) {
	    die('Сторінка не доступна.');
	}
	session_start();
	
	define("CLIENT_ID", "5384665");
	define("CLIENT_SERCET", "Zs3mdTvrB4B2FoemXkFl");
	define("REDIRECT_URI", "http://student4.e-u.org.ua/task_log/login_reg/index.php?action=vk");
	define("DOMEN", "http://student4.e-u.org.ua/task_log/login_reg/");
	include "router.php";
	include "controller.php";
	include "model.php";
	include "functions.php";
?>