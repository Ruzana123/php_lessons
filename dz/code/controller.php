<?php
	if (!defined("HOME")) {
	    die('Сторінка не доступна.');
	}

	function todos_action(){ 
		add_todos();
		show_template("todos");
	}

	function show_err_action(){  
		show_template("page404");
	}

	function new_todo_action(){
		substitute_todos($_GET['id'],0);
		redirect("todos");
	} 

	function done_todo_action(){
		substitute_todos($_GET['id'],1);
		redirect("todos");
	} 
	function add_todos(){
		 if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 		$todo=$_POST['todo'];
			if (empty($todo)){
			    add_errors('Введіть завдання');
			}
			if (!has_errors()) {
				request_add_todos($todo);
				//redirect("todos"); 
		    }
		}
	}

?>