<?php

	function router(){
		$action = $_GET['action'];
		$comments = $_GET['comments'];

		switch ($action) {
			case 'login':
				show_form_action();
				break;
			case 'reg':
				show_form_action1();
				break;
            default:
                echo "Clicking on links";
                break;
		}
		switch ($comments) {
			case 'showComments':
				show_form_action_comments();
				break;
		}
	}
?>