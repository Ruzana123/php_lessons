<pre>
<?php
include 'function.php';

$n=rz_myfile("data.txt");


if(($_POST['name']!=null)||($_POST['email']!=null)){

	if($n>4){
		$people=rz_get_data();
	}

	else{
		$people = array();
	}
		rz_add_user($people); 

	}
	else echo 'Enter data';


?>
</pre>