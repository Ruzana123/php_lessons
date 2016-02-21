<pre>
<?php

$my_array=array();

for ($i=0; $i < 10; $i++) { 
	array_push($my_array, rand());
}
print_r($my_array);

$min = $max = $my_array[0]; 
$index_min = $index_max = 0;
 
for ($i = 1; $i < count($my_array); $i++) {
	if ($my_array[$i] > $max) { 
 		$index_max = $i; 
  		$max = $my_array[$i]; 
 	} 
 		else if ($my_array[$i] < $min) { 
	  		$index_min = $i; 
	  		$min = $my_array[$i]; 
	  	} 
}
echo 'max:' . ' ' . $max . ' ' . 'min:' . ' ' . $min;
echo '<br>';
echo '<br>';
$some=$min;
$my_array[$index_min]=$max;
$my_array[$index_max]=$some;
print_r($my_array);
?>
</pre>