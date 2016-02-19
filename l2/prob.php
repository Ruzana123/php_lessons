<?php 
	$city = 'Uman,Kyiv,Odessa';
		$c = explode(",", $city);
		foreach ($c as $name=>$value) {?>
			<a href="city.php?name=<?php echo $value?>"><?php  echo $value; ?></a><?php
		}
?>