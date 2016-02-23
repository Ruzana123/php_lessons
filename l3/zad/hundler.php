<pre>
<?php
include 'function.php';

$handle2 = fopen("data.txt", "r+");
$n=rz_myfile("data.txt");
fclose($handle2);

if ($n<=4) {
	$user = array('name'=>$_POST['name'],'email'=>$_POST['email']);
	$string=serialize($user);
	$handle=fopen("data.txt", "w");
	fwrite($handle, $string);
	print_r($user);
	fclose($handle);
	}
	elseif(($_POST['name']!=null)||($_POST['email']!=null)){
		$handle = fopen("data.txt", "r+");
		$b=fread($handle,filesize("data.txt")); 
		$array=unserialize($b); 
		print_r($array); 
		$user = array('name'=>$_POST['name'],'email'=>$_POST['email']); 
		array_push($array, $user); 
		print_r($array); 
		$string=serialize($array); 
		fclose($handle); 
		$handle1=fopen("data.txt", "w"); 
		fwrite($handle1, $string); 
		fclose($handle1);
	}
	else echo 'Enter data';


?>
</pre>