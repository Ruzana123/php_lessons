<?php
	function router(){
		$action = $_GET['action'];
		
			switch ($action) {
			case 'login':
				form_logout_action();
				form_log_action();
				break;
			case 'reg':
				show_reg_action();
				break;
			case 'showComments':
				show_comments_action();
				break;
			case '':
				form_logout_action();
				form_log_action();
            default:
                //show_err_action();
                break;
			}
		
	}
?>