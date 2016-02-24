<pre>
<?php 

function process_request() {

	

	if(($_POST['name']!=null)||($_POST['email']!=null)){

		$people_array=rz_get_data();

		rz_add_user($people_array); 
		echo 'Данні успішно додані';
	}

	else echo 'Enter data';

}

function rz_get_data(){
	$n=rz_sizefile("data.txt");
	if($n>4){
		$p=file_get_contents('data.txt');
		$people=unserialize($p);
	}

	else{
		$people = array();
	}
	return $people; // Return array of people
}

function rz_add_user($people_array){
	$user = array('name'=>$_POST['name'],'email'=>$_POST['email']);
	array_push($people_array, $user);
	rz_write_data($people_array);
}

function rz_write_data($people_array){
	$string=serialize($people_array);
	file_put_contents('data.txt', $string);
}

function rz_sizefile($name) //функція для визначення чи існує файл та його розміру
{
	if (file_exists($name)) {
		$s=filesize($name);
	}
	else {
		$s=0;
	}
	return $s;
}	
function rz_mas(){
	$s=file_get_contents('data.txt');
	$ss=unserialize($s);
	return $ss;
}
?>
</pre>