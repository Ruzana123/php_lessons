<form class="registration-form" role="form" action="index.php?action=login" method="POST" style="margin-bottom: 20px;">
	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="text" class="form-control" name="email" value="<?php echo get_value('email'); ?>">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" name="password" value="<?php echo get_value('password'); ?>">
	</div>
		<button type="submit" class="btn btn-default">Submit</button>
</form>
