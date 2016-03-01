<pre>
<?php
include 'functions.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	process_request();
}
?>
</pre>

<form action="" method="POST">
	<p>
		<label for="name">Name</label><br>
		<input type="text" name="name">
	</p>
	<p>
		<label for="email">Email</label><br>
		<input type="text" name="email">
	</p>
	<p>
		<label for="text">You messages</label><br>
		<textarea rows="10" cols="45" name="text"></textarea>
	</p>
	<button type="submit">Add informations</button>
</form>

<label for="m">Messages</label><br>
<?php
	echo rz_valid_email1($_POST['text']);
	echo process_request($s);
echo "<br>";
echo "<br>";
?>

<table>
	<?php
	$new_array=rz_mas();
	for ($i=0; $i < count($new_array); $i++) { 
	?>
	<tr>
		<th rowspan="2"><img src="<?php rz_rand_img($t) ?>" alt=""></th>
		<th><?php echo $new_array[$i]['name']?></th>
		<th><?php echo $new_array[$i]['email'] ?></th>
		<th rowspan="2">29.02</th>
	<tr>
	<tr>
		<td ></td>
		<td colspan="2"><?php echo $new_array[$i]['text'] ?></td>
		<td></td>
	</tr>
	<?php
	}
	?>
	</tr>
	
</table>


