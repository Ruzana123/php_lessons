<div class="container">
	<div class="registration-blog">
		<div class="comments" id="form-comment">
			<div class="comments" id="form-comment">	<div class="by-element">
					<h2>Add comments</h2>
				</div>
				<form role="form" action="" method="POST" style="margin-bottom:130px;">
					<div class="form-group">
						<div class="middle-group form-3">
							<label class="form-label star">Author</label>
							<input type="text" name="author" class="form-control">
						</div>
						<div class="middle-group form-3">
							<label class="form-label star">Email address</label>
							<input type="email" name="for-email" class="form-control">
						</div>
						<div class="middle-group form-3">
							<label class="form-label star">Images</label>
							<input type="text" name="images" class="form-control">
						</div>
						<input type=hidden name="id_post" VALUE="$posts['ID']" class="form-control"> 
						<textarea class="form-control textarea" rows="11" name="comment" placeholder="COMMENT"></textarea>
						<button type="submit" class="send">Send message</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
