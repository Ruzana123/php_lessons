<?php
	if (!defined("HOME")) {
	    die('Сторінка не доступна.');
	}
	session_start();
	define("DOMEN", "http://test1.ru/php/login_reg_vk/");
	include "router.php";
	include "controller.php";
	include "model.php";
	include "functions.php";
?>