<?php
	if (!defined("HOME")) {
	    die('Сторінка не доступна.');
	}
	session_start();
	define("DOMEN", "http://test1.ru/php/dz/");
	include "router.php";
	include "controller.php";
	include "model.php";
	include "functions.php";
?>