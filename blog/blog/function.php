<?php
function get_username(){
	if(is_logged_in()){
		echo 'Hello '. $_SESSION['username'] . "<br>"; 
	}  
	else return false; 
};

function is_logged_in(){
	if (!isset($_SESSION['username'])) {
		return false; 
	} 
	else {
		return true; 
	}
}
?>