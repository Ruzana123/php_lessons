<pre>
<?php 

function process_request() {
	$n=rz_myfile("data.txt");
	if(($_POST['name']!=null)||($_POST['email']!=null)){

		if($n>4){
			$people_array = rz_get_data();
		}

		else{
			$people_array = array();
		}

		rz_add_user($people_array); 
	}

	else echo 'Enter data';
}

function rz_get_data(){
	$p=file_get_contents('data.txt');
	$people=unserialize($p);
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
	echo 'Данні успішно додані';
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
function rz_s(){
	$s=file_get_contents('data.txt');
	$ss=unserialize($s);
	return $ss;
}
?>
</pre>