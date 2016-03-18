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
