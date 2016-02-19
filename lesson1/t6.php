<pre>
<?php
$lang=array('html'=>'HTML','css'=>'CSS','js'=>'JS');
$lang1=array('html','css','js');
echo count($lang), '<br>'; //вив кількість ел масиву

$i=0;
while ($i<count($lang1)){  //зазвичай не для перебору масиву, а коли не ясно скільки раз вуконується
	echo $lang1[$i] . '<br>';
	$i++;
}  
echo '<br>';

for ($i=0; $i < count($lang1); $i++) { 
		echo $lang1[$i] . '<br>';
	}
echo '<br>';

foreach ($lang1 as $lan) { // для перебору масиву! знач запис в перем
	echo $lan . '<br>';
}
echo '<br>';

foreach ($lang as $index=>$lan) { // для перебору масиву! знач запис в перем
	echo 'KEY' . ':' . $index . ' ' .$lan . '<br>';
}
echo '<br>';

$lang2=array('html'=>'HTML',
	'css'=>'CSS',
	'js'=>'JS',
	'c'=>array(
		'va',
		'vaaa'
		)
	);
foreach ($lang2 as $index=>$lan1) { // для перебору масиву! знач запис в перем
	if (is_array($lan1)){
		foreach ($lan1 as $name) { // для перебору масиву! знач запис в перем
			echo '&nbsp; &nbsp;' . $name . '<br>';
		}
	} else{
		echo 'KEY' . ':' . $index . ' ' .$lan1. '<br>';
	}
}


count();
is_array(var);
isset(var);
unset(var);
empty(var);
unset(var);
//роб з мас
require
require_once
include
include_once
?>
</pre>