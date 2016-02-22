<pre>
<?php
/*
$comma_separated = implode(" ", $array);
$m  = $comma_separated;
$s = explode(" ", $m);*/
$a=substr($_POST['imya'],0,1);
$b=substr($_POST['surname'],0,1);
$c=$_POST['last_name'];
$array=array($c,$a,$b);
list($m,$m1,$m2)=$array;
//echo $array[last_name] . ' ' . substr($array[imya],0,1) . '. ' . substr($array[surname],0,1) . '. ';
echo $m. ' ' .$m1. '. ' .$m2.'. ';
?>
<pre>