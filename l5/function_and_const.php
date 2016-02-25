
<?php
/*
define ($name, $value, $case_sen), где:

$name - имя константы;
$value - значение константы;
$case_sen - необязательный параметр логического типа, 
указывающий, следует ли учитывать регистр букв (true) или нет (false).*/

define("pi",3.14,true);

/*
bool defined ( string name)//перевіряє чи існує данна іменована константа
*/

if (defined("pi")){ // Обратите внимание на наличие кавычек
echo pi; 
}

/*
Сортувати можна як прості, так і асоціативні масиви. Для сортування масивів в PHP існують певні функції:
 • sort() - сортує масив в алфавітному порядку, якщо хоч би один з його елементів є рядком, і в числовому порядку, якщо усі його елементи - числа.
 • rsort() - працює як sort( ), але в зворотному порядку.
 • asort() - сортує асоціативний масив; працює як sort( ), але зберігає імена елементів.
 • arsort()- працює як asort( ), але в зворотному порядку.
 • ksort() - сортує масив по ключам.
 • krsort()- працює як ksort( ), але в зворотному порядку.
*/
echo "<br>";
echo "<br>";

$my_array=array("a"=>"Zero",
	"b"=>"Weapon",
	"c"=>"Alpha",
	"d"=>"Processor");

asort($my_array);
foreach($my_array as $k=>$v) echo "$k=>$v "; // результат "c=>Alpha d=>Processor b=>Weapon a=>Zero"
echo "<br>";
echo "<br>";

arsort($my_array);
foreach($my_array as $k=>$v) echo "$k=>$v "; //a=>Zero b=>Weapon d=>Processor c=>Alpha 
echo "<br>";
echo "<br>";

ksort($my_array);
foreach($my_array as $k=>$v) echo "$k=>$v "; //a=>Zero b=>Weapon c=>Alpha d=>Processor
echo "<br>";
echo "<br>";

krsort($my_array);
foreach($my_array as $k=>$v) echo "$k=>$v "; //d=>Processor c=>Alpha b=>Weapon a=>Zero
echo "<br>"; 
echo "<br>";

natcasesort($my_array);
echo "\nNatural order сортировка (без учета регистра)\n";// Array ( [c] => Alpha [d] => Processor [b] => Weapon [a] => Zero )
print_r($my_array);
echo "<br>"; 
echo "<br>";

natsort($my_array); //Array ( [c] => Alpha [d] => Processor [b] => Weapon [a] => Zero )
print_r($my_array);
echo "<br>"; 
echo "<br>";

rsort($my_array);
foreach ($my_array as $key => $val) echo "$key = $val\n"; //0 = Zero 1 = Weapon 2 = Processor 3 = Alpha
echo "<br>"; 
echo "<br>";

shuffle($my_array); //змішує елементи масиву
foreach ($my_array as $my_array) {
    echo "$my_array ";
}
echo "<br>"; 
echo "<br>";

$my_array1=array("Zero",
	"Weapon",
	"Alpha",
	"Processor");

sort($my_array1); //сортує в порядку зростання
foreach ($my_array1 as  $my_array) {
    echo "$my_array ";
}
echo "<br>"; 
echo "<br>";

?>
