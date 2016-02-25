<?php

function rz_1z(){
	$s=strtoupper(substr($_POST['str'],0,1));
	$l=strtoupper(substr($_POST['str'],strlen($_POST['str'])-1,1));
	echo "<b> $s $l <b> ";
};

function rz_valid() {
		
}

function rz_file_htlm(){
	header('Content-type: text/plain'); 

	$url = $_POST['str']; 
	$html_code = file_get_contents($url);  

	echo '<pre>'.$html_code.'</pre>'; 
}

?>