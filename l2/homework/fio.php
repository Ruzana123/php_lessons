<pre>
<?php
$array = $_POST;
//повертає стрічку поєднанням строкових представлень елементів масива із вставленням стрічки між сусідніми ел
$comma_separated = implode(" ", $array);
$pizza  = $comma_separated;//повертає масив стрічок, отриманих розбиттям стрічки з використанням сепаратора в якості розділювача
$pieces = explode(" ", $pizza);
echo $pieces[0] . ' ' . substr($pieces[1],0,1) . '. ' . substr($pieces[2],0,1) . '. ';
?>
<pre>