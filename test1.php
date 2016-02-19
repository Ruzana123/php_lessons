<pre>
<?php

//масиви #koment
$array=array(1,2,5,'hello',false);
print_r($array);
$array1=array(1,
	'va'=>2,
	5,
	'hello',
	false);
print_r($array1);
echo $array1; //не виведе масив
echo $array1[1]; //вив 2 ел масиву
echo $array1[2] 
	.$array1[4] 
	.'<br>'
	.$array1[3];

echo $array1[va];


?>
</pre>



<pre>
<?php
$array2=array(1,2,5, //двовимірний масив
	array('va','13')
	);
print_r($array2[3][0]);
?>
</pre>