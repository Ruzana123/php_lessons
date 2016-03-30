<?php
	if (!defined("HOME")) {
	    die('Сторінка не доступна.');
	}

	function login_form_action(){
		show_template_website("login");
		if (has_errors()) {
            show_template("print_error");
            save_values();
        }  
	}

	function vk_aktion(){
		show_template("vk");
	}

	function delete_action(){
		delete_todos($_GET['id']);
		redirect_new("task","id_category",$_GET['category']);
	}

	function delete_category_action(){
		delete_category($_GET['id_category']);
		redirect_new("todos");
	}

	function todos_action(){ 
		add_todos($_GET['id']);
		show_template_website("task");
	}

	function category_action(){
		add_category();
		show_template_website("todos");
	}

	function new_todo_action(){
		substitute_todos($_GET['id'],0);
		redirect_new("task","id_category",$_GET['category']);
	} 

	function done_todo_action(){
		substitute_todos($_GET['id'],1);
		redirect_new("task","id_category",$_GET['category']);
	} 

	function add_todos($id_list){
		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 		$todo=$_POST['todo'];
			if (empty($todo)){
			    add_errors('Введіть завдання');
			}
			if (!has_errors()) {
				$user_mas=request_user_id(get_username());
				request_add_todos($todo,$user_mas['id'],$_POST['id_list']);
				redirect("todos"); 
		    }
		}
	}

	function add_category(){
		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 		$name=$_POST['category'];
			if (empty($name)){
			    add_errors('Введіть категорію');
			}
			if (!has_errors()) {
				$user_mas=request_user_id(get_username());
				request_add_category($name,$user_mas['id']);
				//redirect("todos"); 
		    }
		}
	}

	function post_login_action(){
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
	    }
	        form_logout_action();
			if(!is_logged_in_new()){
		        redirect('login_redirect');
	        }
	        else{
	           	redirect('welcom');
	        }
	}

	function reg(){
	    logined();
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    $email=htmlspecialchars($_POST['email']);
		    $pas=htmlspecialchars($_POST['password']);
		    $nick=htmlspecialchars($_POST['nick']);
		    
		    if ($_POST['password']!=$_POST['password2']){
		        add_errors('Введені паролі не співпадають');
		    }
		    if (empty($_POST['nick'])){
		        add_errors('Введіть нік');
		    }
		    if (!preg_match('/^[0-9a-z_-]+[@]{1,1}+[0-9a-z_-]+[.]{1,1}+[0-9a-z]{2,5}+$/',$_POST['email'])) {
		        add_errors('Email введено не вірно');
		    }
		    if (empty($_POST['email'])){
		        add_errors('Введіть email');
		    }
		    if (empty($_POST['password'])){
		        add_errors('Введiть паролі');
		    }
		    if (!has_errors()) {
		        bd_reg();
		        if (has_errors()) {
		           	show_template("print_error");                 
		        }
		    }
		}
		    if (has_errors()) {
		        show_template("print_error");                 
		    }
	}


	function form_logout_action(){
		if(isset($_GET['logout'])) { 
	        unset($_SESSION['username']);
	        header('Location: '. DOMEN ."index.php");
			die();
	    }
	}


	function show_reg_action(){ 
		reg();
	}

	function show_err_action(){  
		show_template("page404");
	}

?>