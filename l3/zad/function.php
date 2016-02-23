<?php
function rz_get_data(){
	
}

function rz_add_user(){

}

function rz_write_data(){
}

function rz_myfile($name) //функція для визначення чи існує файл та його розміру
{
	if (file_exists($name)) {
		$s=filesize($name);
	}
	else {
		$s=0;
	}
	return $s;
}
?>