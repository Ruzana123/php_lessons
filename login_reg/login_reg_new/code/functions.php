<?php
	function show_template($name,$data=NULL){	
		if ($data){
			extract($data);
		}
		include "views/" . $name . ".tpl.php";
	};
	function get_username(){
	    if(is_logged_in()){
	        return $_SESSION['username']; 
	    }  
	    else return false; 
	};
	function is_logged_in(){
	    if (!isset($_SESSION['username'])) {
	        return false; 
	    } 
	    else {
	        return true; 
	    }
	}


	function bd_log(){
	    if(isset($_GET['logout'])) { 
	        unset($_SESSION['username']);
	    }
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	        $email=$_POST['email'];
	        $pas=$_POST['password'];
	        if (!preg_match('/^[0-9a-z_-]+[@]{1,1}+[0-9a-z_-]+[.]{1,1}+[0-9a-z]{2,5}+$/',$_POST['email'])) {
	            add_errors('Email введено не вірно');
	        }
	        if (empty($email)) {
	            add_errors('Введіть email');
	        }
	        if (empty($pas)) {
	            add_errors('Введіть пароль');
	        }
	        if ((!empty($email))&&(!empty($pas))) {
	            $us=bd_zapros($email,$pas);
	        }
	        if (!has_errors()) {    
	            $_SESSION['username'] = $us;          
	        }   
	        else {
	            print_errors();
	        }                           
	    }
	        if(!is_logged_in_new()){
	            show_template("login");
	        }
	        else{
	            echo "<h1> Hello ". get_username() . "</h1><br>";
	            ?><a href="?logout" style="color:white; text-decoration:none">Logout</a><?php
	        }
	}

	function is_logged_in_new(){
	    return  isset($_SESSION['username']);
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
?>
