<?php
	if (!defined("HOME")) {
	    die('Сторінка не доступна.');
	}
	
	function router(){
		$action = $_GET['action'];
			switch ($action) {
			case 'login':
				post_login_action();
				break;
			case 'login_redirect':
				show_template("vk");
				login_form_action();
				break;
			case 'reg':
				show_reg_action();
				break;
			case 'showComments':
				show_comments_action();
				break;
			case 'todos':
				category_action();
				break;
			case 'task':
				todos_action();
				break;
			case 'category':
				category_action();
				break;
			case 'done':
				done_todo_action();
				break;
			case 'new':
				new_todo_action();
				break;
			case 'delete':
				delete_action();
				break;
			case 'delete_category':
				delete_category_action();
				break;
			case '':
				show_template("vk");
				login_form_action();
				break;
			case 'welcom':
				show_template_website("welcom");
				break;
            default:
                show_err_action();
                break;
			}
		
	}
?>