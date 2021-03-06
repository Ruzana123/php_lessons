<?php
	if (!defined("HOME")) {
	    die('Сторінка не доступна.');
	}

	function show_template($name,$data=NULL) {	
		if ($data){
			extract($data);
		}
		include "views/" . $name . ".tpl.php";
	};

	function add_good($msg){
	    if (!isset($_SESSION['good'])) {
	        $_SESSION['good']= array();
	    }
	    array_push($_SESSION['good'],$msg);
	}

	function has_good(){
	    if(!empty($_SESSION['good'])){
	        return true;
	    }
	    else return false;
	}

	function show_template_website($name,$data=NULL) { 
		if ($data){
			extract($data);
		}
		include "views/header.tpl.php"; 
		include "views/" . $name . ".tpl.php"; 
		include "views/footer.tpl.php"; 
	}

	function get_username() {
	    if(is_logged_in()){
	        return $_SESSION['username']; 
	    }  
	    else return false; 
	};


	function save_values(){
		foreach ($_POST as $key => $value) {
			$_SESSION['values'][$key] = $_POST[$key];
		}
	}

	function get_value($name){
		if (isset($_SESSION['values'][$name])) {
			$current_value = $_SESSION['values'][$name];
			unset($_SESSION['values'][$name]);
			return $current_value;
		}
	}

	function is_logged_in(){
	    if (!isset($_SESSION['username'])) {
	        return false; 
	    } 
	    else {
	        return true; 
	    }
	}
	
	function redirect($action){
		header('Location: '. DOMEN ."index.php?action=". $action);
		die();
	}

	function is_logged_in_new(){
	    return  isset($_SESSION['username']);
	}
	function logined(){
		if (!is_logged_in()){
	        show_template_website("reg");
	    } 
	        else show_template_website("account");
	}

	function add_errors($msg){
	    if (!isset($_SESSION['errors'])) {
	        $_SESSION['errors']= array();
	    }
	    array_push($_SESSION['errors'],$msg);
	}

	function has_errors(){
	    if(!empty($_SESSION['errors'])){
	        return true;
	    }
	    else return false;
	}
	
	function print_errors(){
	    if (has_errors()) {
	        ?><div class="alert alert-danger" role="alert"><?php
	        foreach ($_SESSION['errors'] as $value) {
	            echo $value;
	            echo "<br>";
	        }   
	        ?></div><?php
	        unset($_SESSION['errors']);
	    }   
	}

	function print_errors_add($name){
	?><div class="alert alert-danger" role="alert"><?php
		foreach ($name as $value) {
			echo $value;
			echo "<br>";
		}	
		?></div><?php	
	}

	function get_url($action){
		echo DOMEN ."index.php?action=". $action;
	}

	function get_url_post($action,$arg_key,$arg_value){
		echo DOMEN ."index.php?action=". $action."&" .$arg_key."=".$arg_value;
	}
?>
