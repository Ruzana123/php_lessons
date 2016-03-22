<?php

	function router(){
		$action = $_GET['action'];
		if (empty($action)){
			form_action_log();
		}
		else{
			switch ($action) {
			case 'login':
				form_action_log();
				break;
			case 'reg':
				show_form_action_reg();
				break;
			case 'showComments':
				show_form_action_comments();
				break;
            default:
                show_form_action_err();
                break;
			}
		}
	}
?>