<pre>
<?php 
$my_array=array(3, //задання масиву
	4,
	true,
	3.14,
	'hello'
	);
print_r($my_array);
echo '<br>';
echo '<br>';

$a=count($my_array); //визначення кількості ел масиву
echo 'Number of array elements'. ': count- ' . $a;
echo '<br>';
echo '<br>';

$b = 0;
if (empty($b)) { //перевіряє чи встановлена перемінна
	echo '$b is either 0 or not set at all';
}
echo '<br>';
echo '<br>';

$c=10;
echo isset($c); //true, якщо перемінна існує
unset($c); //знищення перемінної
echo isset($c); //перевіряє чи існує перемінна
echo empty($c);
echo '<br>';
echo '<br>';


$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";//повертає масив стрічок, отриманих розбиттям стрічки з використанням сепаратора в якості розділювача
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
echo '<br>';
echo '<br>';


$array = array('lastname', 'email', 'phone');//повертає стрічку поєднанням строкових представлень елементів масива із вставленням стрічки між сусідніми ел
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone
echo '<br>';
echo '<br>';

/*
require //дозволяє включати файли в PHP сценарій до виконання сценарію PHP
require_once //одноразове вкл
include //призначена для включення файлів в код сценарію PHP під час виконання сценарію PHP
include_once
*/
?>
</pre>