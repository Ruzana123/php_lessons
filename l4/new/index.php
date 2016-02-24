<?php
include 'function.php';
?>

<form action="" method="POST"> <!---путь куди відсил данні з форми-->
	<p>
		<label for="name">Name</label><br>
		<input type="text" name="name">
	</p>
	<p>
		<label for="email">Email</label><br>
		<input type="text" name="email">
	</p>
	<button type="submit">Short FIO</button>
</form>

<pre>
<?php
	$n=rz_myfile("data.txt");
	if(($_POST['name']!=null)||($_POST['email']!=null)){

		if($n>4){
			$people_array = rz_get_data();
		}

		else{
			$people_array = array();
		}
			rz_add_user($people); 
				
	}
	else echo 'Enter data';
?>
</pre>