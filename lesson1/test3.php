
<pre>
<?php
$my_array=array(
	'img_src'=>'b2.png',
	'name'=>'Ruzana',
	'position'=>'vagjhfgjhgjk',
	'age'=>'dfhdgjfjhsg',
	'bio'=>'dggdfjhgfjghf',
	'vk_link'=>'https://vk.com/login.php?u=2&to=YWxfZmVlZC5waHA/c2VjdGlvbj1waG90b3M-'
	);

?>

<table>
	<tr>
		<td><img src="<?php echo $my_array['img_src']?>" alt=''></td>
		<td>
			<h1><?php echo $my_array['name'],'<br>'?></h1>
			<?php echo $my_array['position'],'<br>'?>
			<?php echo $my_array['age'],'<br>'?>
			<?php echo $my_array['bio'],'<br>'?>
			<a href="<?php echo $my_array['vk_link']?>">link</a>
		</td>
	</tr>
		
</table>

</pre>