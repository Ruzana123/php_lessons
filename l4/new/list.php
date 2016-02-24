<pre>
<?php
include 'function.php';
?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<table>
	<tr>
		<th>User name</th>
		<th>Email</th>
	</tr>
	<tr>
	<?php
	$new_array=rz_mas();
	for ($i=0; $i < count($new_array); $i++) { 
	?>	
	<tr>
		<td><?php echo $new_array[$i]['name']?></td>
		<td><?php echo $new_array[$i]['email'] ?></td>
	</tr>
	<?php
	}
	?>
	</tr>
</table>
</html>