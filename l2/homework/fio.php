<pre>
<?php
$array = $_POST;
/*
$comma_separated = implode(" ", $array);
$m  = $comma_separated;
$s = explode(" ", $m);*/
echo $array[last_name] . ' ' . substr($array[imya],0,1) . '. ' . substr($array[surname],0,1) . '. ';
?>
<pre>