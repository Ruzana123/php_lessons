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
			case 'blog_main':
				blog_action();
				break;
			case 'form':
				form_action();
				break;
			case 'contact':
				contact_action();
				break;
			case 'login_redirect':
				login_form_action();
				break;
			case 'reg':
				show_reg_action();
				break;
			case 'showComments':
				show_comments_action();
				break;
			case '':
				post_login_action();
				break;
			case 'welcom':
				show_template_website("welcom");
				break;
			case 'single_post':
				post_action();
				break;
			case 'add_comments':
				comments_action();
				break;
            default:
                show_err_action();
                break;
			}
		
	}
?>