<?php ?>
<div class="container">
	<div class="registration-blog">
		<div class="comments" id="form-comment">
			<div class="by-element">
				<h2>Registration</h2>
			</div>
				<form class="registration-form" role="form" action="index.php?action=reg" method="POST">
				  	<div class="middle-group reg">
					    <label for="nick" class="form-label">Nick</label>
					    <input type="text" name="nick" class="form-control">
				  	</div>
				  	<div class="middle-group reg">
						<label for="email" class="form-label">Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="middle-group reg">
						<label for="password" class="form-label">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="middle-group reg">
						<label for="password2" class="form-label">Confirm password</label>
						<input type="password" name="password2" class="form-control">
					</div>
				  <button type="submit" class="send reg-btn" style="margin-top:20px; margin-bottom:20px;">Registration</button>
				</form>
				</div>
			</div>
		</div>
	</div>

</div>