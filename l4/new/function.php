<pre>
<?php 
	

function rz_get_data(){
	$p=file_get_contents('data.txt');
	$people=unserialize($p);
	print_r($people);
	return $people; // Return array of people
}


function rz_add_user($people_array){
	$user = array('name'=>$_POST['name'],'email'=>$_POST['email']);
	array_push($people_array, $user);
	print_r($people_array);
	rz_write_data($people_array);
}

function rz_write_data($people_array){
	$string=serialize($people_array);
	file_put_contents('data.txt', $string);
}

function rz_myfile($name) //функція для визначення чи існує файл та його розміру
{
	if (file_exists($name)) {
		$s=filesize($name);
	}
	else {
		$s=0;
	}
	return $s;
}	
?>
</pre>