<?php
	function login_form_action(){
		show_template_website("login");
	}

	function redirect(){
		if(!is_logged_in_new()){
	        	login_form_action();
        }
        else{
           	show_template_website("welcom");
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
	        else {
	            show_template("print_error");
	        }                           
	    }
	        redirect();
	}

	function form_logout_action(){
		if(isset($_GET['logout'])) { 
	        unset($_SESSION['username']);
	    }
	}




	function show_reg_action(){ 
		bd_reg();
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
		show_template("comments",$data);
	}
?>