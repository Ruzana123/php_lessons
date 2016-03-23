<?php
	function router(){
		$action = $_GET['action'];
		
			switch ($action) {
			case 'form-mail':
				post_login_action();
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