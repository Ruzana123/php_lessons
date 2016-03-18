<?php
	function show_form_action(){
		show_template("login");
	}

	function show_form_action1(){  
		show_template("reg");
	}

	function show_form_action_comments()
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
		show_template_mas("comments",$data);
	}
?>