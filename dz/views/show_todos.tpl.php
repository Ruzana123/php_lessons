<ul class="list-group">
	<?php 
	foreach (request_todos() as $key => $todo) {
		?>
 		<li class="list-group-item">
 			<div class="todo-btn" style="float:right;">
 				<form role="form" action="index.php?action=done" method="post">
		 			<button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
		 		</form>
		 		<form role="form" action="index.php?action=new" method="post">
					<button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></button>
				</form>
				<form role="form" action="index.php?action=delete" method="post">
					<button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-remove" aria-hidden="true"></button>
				</form>
			</div>
    		<span class="badge todos">14</span>
	    <?php echo $todo[todo] ?>
	  </li>
	<?php  }
	?>
</ul>

	
