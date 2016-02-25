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


/*
Сортувати можна як прості, так і асоціативні масиви. Для сортування масивів в PHP існують певні функції:
 • sort() - сортує масив в алфавітному порядку, якщо хоч би один з його елементів є рядком, і в числовому порядку, якщо усі його елементи - числа.
 • rsort() - працює як sort( ), але в зворотному порядку.
 • asort() - сортує асоціативний масив; працює як sort( ), але зберігає імена елементів.
 • arsort()- працює як asort( ), але в зворотному порядку.
 • ksort() - сортує асоціативний масив по іменах елементів.
 • krsort()- працює як ksort( ), але в зворотному порядку.
*/

}
?>