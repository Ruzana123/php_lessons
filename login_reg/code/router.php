<?php
	function router(){
		$action = $_GET['action'];
		
			switch ($action) {
			case 'login':
				post_login_action();
				form_logout_action();
				break;
			case 'reg':
				show_reg_action();
				break;
			case 'showComments':
				show_comments_action();
				break;
			case '':
				post_login_action();
				form_logout_action();
            default:
                //show_err_action();
                break;
			}
		
	}
?>