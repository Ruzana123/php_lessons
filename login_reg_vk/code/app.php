<?php
	if (!defined("HOME")) {
	    die('Сторінка не доступна.');
	}
	session_start();
	define("DOMEN", "http://student4.e-u.org.ua/task_log/login_reg/");
	include "router.php";
	include "controller.php";
	include "model.php";
	include "functions.php";
?>