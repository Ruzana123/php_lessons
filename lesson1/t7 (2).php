<pre>
<?php
include 'data.php';

foreach ($lang2 as $index=>$lan1) { // для перебору масиву! знач запис в перем
	if (is_array($lan1)){
		foreach ($lan1 as $name) { // для перебору масиву! знач запис в перем
			echo '&nbsp; &nbsp;' . $name . '<br>';
		}
	} else{
		echo 'KEY' . ':' . $index . ' ' .$lan1. '<br>';
	}
}


?>
</pre>