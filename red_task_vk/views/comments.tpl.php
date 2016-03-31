<?php 
	foreach ($comments as $key => $value) { ?>
		<div class="media">
		  	<div class="media-body">
		   	 	<h4 class="media-heading"><?php echo $value['name'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
		   	 	. $value['date'].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ?> </h4>
		    	<p><?php echo $value['text'] ?></p>
		  	</div>
		</div><?php
	}
?>