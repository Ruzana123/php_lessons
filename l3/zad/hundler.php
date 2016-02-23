<pre>
<?php
$filename = "data.txt";
$handle2 = fopen($filename, "r+");
function myfile($name) //функція для визначення чи існує файл та його розміру
{
	if (file_exists($name)) {
		$s=filesize($name);
	}
	else {
		$s=0;
	}
	return $s;
}
$n=myfile($filename);
fclose($handle2);

if ($n<=4) {
	$user = array('name'=>$_POST['name'],'email'=>$_POST['email']);
	$string=serialize($user);
	$handle=fopen($filename, "w");
	fwrite($handle, $string);
	print_r($user);
	fclose($handle);
	}
	else{
		$handle = fopen($filename, "r+");
		$b=fread($handle,filesize($filename)); 
		$array=unserialize($b); 
		print_r($array); 
		$user = array('name'=>$_POST['name'],'email'=>$_POST['email']); 
		array_push($array, $user); 
		print_r($array); 
		$string=serialize($array); 
		fclose($handle); 
		$handle1=fopen($filename, "w"); 
		fwrite($handle1, $string); 
		fclose($handle1);
	}
?>
</pre>