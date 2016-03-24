<div class="container">
	<div class="registration-blog">
		<div class="comments" id="form-comment">
			<div class="by-element">
				<h2>Enter the site</h2>
			</div>
			<form class="registration-form" role="form" action="index.php?action=login" method="POST" style="margin-bottom: 80px;">
				<div class="form-group middle-group reg">
					<label for="exampleInputEmail1">Email address</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group middle-group reg">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
					<button type="submit" class="send reg-btn ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" role="button"><span class="ui-button-text">OK</span></button>
			</form>
		</div>
	</div>
	<?php print_errors();?>
</div>
