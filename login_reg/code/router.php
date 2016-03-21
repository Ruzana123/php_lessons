<?php
	function router(){
		$action = $_GET['action'];
		
			switch ($action) {
			case 'login':
				post_login_action();
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
            default:
                show_err_action();
                break;
			}
		
	}
?>