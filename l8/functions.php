
<?php 

function process_request() {

	if(($_POST['name']!=null)||($_POST['email']!=null)){
		if (rz_valid_name($_POST['name'])==true) {
			if (rz_valid_email1($_POST['email'])==true) {
				$people_array=rz_get_data();
				rz_add($people_array); 
				$s='Данні успішно додані';
				return $s;
			}
				else $message='Email введено невірно. Введіть дані повторно';
		}
		else $message='Ім\'я введено невірно.';
	}
	else {$message='Введіть дані. Email введено невірно. Ім\'я введено невірно.';}
	return $message;
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

function rz_add($people_array){
	$user = array('name'=>$_POST['name'],'email'=>$_POST['email'],'text'=>$_POST['text']);
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

function rz_valid_email1($str){
    if(preg_match('/^[0-9a-z_-]+[@]{1,1}+[0-9a-z_-]+[.]{1,1}+[0-9a-z]{2,5}+$/',$str)){ 
    	$m=true;
    }
    else{ 
        $m=false; 
    }
    return $m;
}

function rz_valid_name($str){
    if(preg_match('/^[a-zA-Z0-9а-яА-Я.-]*$/',$str)){ 
    	$n=true;
    }
    else{ 
        $n=false; 
    }
    return $n;
}

function rz_rand_img(){
  $p='images/'. rand(1, 5) .'.png';
  echo $p;
}
?>