<?php

	function show_template($name){	
		include "views/" . $name . ".tpl.php";
	};

	function show_template_mas($name,$data){	
		extract($data);
		include "views/" . $name . ".tpl.php";
	};

?>
