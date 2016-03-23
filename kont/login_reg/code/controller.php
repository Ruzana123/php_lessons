<?php
	function form_action(){
		show_template_website("form"); 
	}

	function show_err_action(){  
		show_template("page404");
	}

	function post_login_action(){
		form_action();
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	$name=$_POST['name'];
	        $email=$_POST['email'];
	        $mail=$_POST['text'];
	        if (!preg_match('/^[0-9a-z_-]+[@]{1,1}+[0-9a-z_-]+[.]{1,1}+[0-9a-z]{2,5}+$/',$_POST['email'])) {
	            add_errors('Email введено не вірно');
	        }
	        if (empty($email)) {
	            add_errors('Введіть email');
	        }
	        if (empty($name)) {
	            add_errors('Введіть ім*я');
	        }
	        if (empty($mail)) {
	            add_errors('Введіть повідомлення');
	        }
	        if (!has_errors()) {    
	            mail("ruzana3008@gmail.com", "Message", $name . " " . $email . " " . $mail);
	        } 
	        else{
	        	print_errors();
	        }                     
	    }
	}


?>