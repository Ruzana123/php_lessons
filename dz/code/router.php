<?php
	if (!defined("HOME")) {
	    die('Сторінка не доступна.');
	}
	
	function router(){
		$action = $_GET['action'];
		
			switch ($action) {
			case 'todos':
				todos_action();
				break;
			case 'done':
				done_todo_action();
				break;
			case 'new':
				new_todo_action();
				break;
			case 'delete':
				delete_todos($_GET['id']);
				show_template("good"); 
				show_template("todols"); 
				break;
			case '':
				todos_action();
				break;
            default:
                show_err_action();
                break;
			}
		
	}
?>