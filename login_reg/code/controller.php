<?php
	function login_form_action(){
		show_template_website("login");
		if (has_errors()) {
            show_template("print_error");
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
		    $err_message1 = array();
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

	function show_comments_action()
	{
		$comments = array(
			"1"=>array("name"=>"Ruzana",
				"date"=>"18/03/2015",
				"text"=>"Вдалеке снаряды взрываются с низким, гулким звуком, который скорее ощущаешь, а не слышишь."),
			"2"=>array("name"=>"Misha",
				"date"=>"18/03/2015",
				"text"=>"Когда взрыв близко, звук высокий и пронзительный."),
			"3"=>array("name"=>"Ernest",
				"date"=>"18/03/2015","text"=>
				"Они кричат голосами, от которых ломит зубы, и ты знаешь, что один из этих снарядов - твой."),
			"4"=>array("name"=>"Neko",
				"date"=>"18/03/2015",
				"text"=>"Они зарываются глубоко в землю, поднимая облако пыли, и ждут момента, когда разорвутся на куски."),
			"5"=>array("name"=>"Colobok",
				"date"=>"18/03/2015",
				"text"=>"Тысячи бомб, летящих с неба - куски металла не больше твоего пальца - но чтобы тебя убить, нужен всего один."),
		);
		$data = array(
			"comments" => $comments,
		);
		how_template_website("comments",$data);
	}
?>