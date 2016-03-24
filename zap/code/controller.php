<?php
	if (!defined("HOME")) {
	    die('Сторінка не доступна.');
	}

	function login_form_action(){
		show_template_website("login"); 
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
		    }
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
		show_template("print_error");
		show_template("footer");
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
		show_template_website("comments",$data);
	}

	function mail_action(){
	    if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    	$name=$_POST['name'];
	        $email=$_POST['email'];
	        $mail=$_POST['text'];
	        $subject=$_POST['subject'];
	        $message = '
	        <html>
	        <head>
	          <title>'.$subject.'</title>
	        </head>
	        <body>
	          <p>'.$mail.'</p>
	        </body>
	        </html>
	        ';
		    $headers  = 'MIME-Version: 1.0' . "\r\n";
		    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		    $headers .= 'From: '.$name.'<'.$email.'>' . "\r\n";

	        if (!preg_match('/^[0-9a-z_-]+[@]{1,1}+[0-9a-z_-]+[.]{1,1}+[0-9a-z]{2,5}+$/',$_POST['email'])) {
	            add_errors('Email введено не вірно');
	        }
	        if (empty($email)) {
	            add_errors('Введіть email');
	        }
	        if (empty($name)) {
	            add_errors('Введіть ім*я');
	        }
	         if (empty($subject)) {
	            add_errors('Введіть subject');
	        }
	        if (empty($mail)) {
	            add_errors('Введіть повідомлення');
	        }
	        if (!has_errors()) {    
	            mail("ruzana3008@gmail.com",  $subject , $message, $headers);
	            show_template("good_mail");
	        } 
	        else{
	        	show_template("print_error");
	        }                     
	    }
	}

	function form_action(){
		show_template("header"); 
		show_template("form");
		add_post();
		show_template("footer"); 
	}

	function contact_action(){
		show_template("header"); 
		show_template("contact");
		mail_action();
		show_template("footer"); 
	}

	function blog_action(){
		show_template_website("blog-main");
	}

	function add_post(){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$err_message = array();
			if ((empty($_POST['title']))&&
				(empty($_POST['author']))&&
				(!preg_match( "/^.*\.(jpg|jpeg|png|gif)$/i", $_POST['Images']))&&
				(empty($_POST['description']))&&
				(empty($_POST['paper']))){
				array_push($err_message, 'Введіть дані.');
			}
			if (empty($_POST['title'])) {
				array_push($err_message, 'Потрібно ввести вірний заголовок');
			}
			if (empty($_POST['author'])) {
				array_push($err_message, 'Потрібно ввести автора вірно');
			}
			if (!preg_match( "/^.*\.(jpg|jpeg|png|gif)$/i", $_POST['images'])) {
				array_push($err_message, 'Введіть шлях до картинки');
			}
			if (empty($_POST['description'])) {
				array_push($err_message, 'Введіть короткий опис');
			}
			if (empty($_POST['paper'])) {
				array_push($err_message, 'Введіть статтю');
			}
			if (!is_logged_in()){ 
				array_push($err_message, 'Для додання даних ввійдіть в систему');
			}
			if (is_logged_in()){ 
				if (is_admin()!=true){
					array_push($err_message, 'У вас немає прав для здійснення цієї дії');
				}
			}
			$n=count($err_message);	
			if ($n!=0) {
				print_errors_add($err_message);	
			}		
			if ($n==0) {
				post();
				show_template("good_add");
			}
		?>				
		<?php
	}
	
}
?>