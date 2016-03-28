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
		substitute_todos0($_GET['id']);
		
		redirect("todos");
	} 

	function done_todo_action(){
		substitute_todos1($_GET['id']);
		 
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
		    else{
	        	show_template("print_error");
	        }
		}
	}

?>