<?php ?>
<form class="registration-form" role="form" action="index.php?action=form-mail" method="POST" style="margin-bottom: 20px;">
	<div class="form-group">
		<label for="exampleInputEmail1">Name</label>
		<input type="text" class="form-control" name="name">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="text" class="form-control" name="email">
	</div>
	<div class="form-group">
		<label for="text">Text</label><br>
		<textarea class="form-control textarea" name="text" rows="9" placeholder="CONTENT"></textarea>
	</div>
		<button type="submit" class="btn btn-default">Submit</button>
</form>
