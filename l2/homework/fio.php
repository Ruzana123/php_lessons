<pre>
<?php
$array = $_POST;
$comma_separated = implode(" ", $array);
$m  = $comma_separated;
$s = explode(" ", $m);
echo $s[0] . ' ' . substr($s[1],0,1) . '. ' . substr($s[2],0,1) . '. ';
?>
<pre>