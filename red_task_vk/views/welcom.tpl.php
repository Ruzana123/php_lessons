<?php
echo "<h1> Hello ". get_username() . "</h1><br>";
echo '<img src="' . $_SESSION['img'] . '" />';  echo "<br />";
?><a href="?logout" style="color:red; text-decoration:none; display:block; font-size:18px;">Logout</a>