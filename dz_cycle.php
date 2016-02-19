
<?php

for ($i=3; $i<=15; $i++) { ?>
	<span style="font-size:<?php echo ($i*$i)/2?>"><?php echo $i*$i,'<br>'?></span>
	<?php
} 
echo '<br>';
echo '<br>';

$my_size=array();
for ($i=3; $i < 16; $i++) { 
	array_push($my_size, $i*$i);
}
foreach ($my_size as $value) {?>
	<span style="font-size:<?php echo $value/2?>"><?php echo $value,'<br>'?></span>
	<?php
}
?>
