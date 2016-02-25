<?php 
include 'function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		rz_file_htlm($_POST['str']);
}
?>