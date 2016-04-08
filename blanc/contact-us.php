<?php include("header.php") ?>
	<!-- container -->
	<div class="container">
		<!-- contact-content -->
		<div class="contact-content">
			<ul class="navigation-in-page">
				<li><a href="#">Home</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li><a href="#">Pages</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li>About us</li>
			</ul>
			<!-- map -->
			<div class="map">
				<div class="overlay" onClick="style.pointerEvents='none'" style="	background:transparent; position:absolute; width:100%; height:330px;"></div>
				<script>
				$(document).ready(function(){
				$('.overlay').click(function() {
					$(this).remove();
				});
				});
				</script>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d42083.32495333591!2d30.21726005!3d48.7588277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1452418010402" width="100%" height="330" frameborder="0" style="border:0" scrollwheel="false" allowfullscreen></iframe>
			</div>
			<!--end map -->
		
			<div class="row contact-us">
				<!-- contact-form -->
				<div class="col-md-8 contact-form">
					<form action="" class="contact-us-form"> 
						<input type="text" class="half" placeholder="Your Name (required)"> 
						<input type="text" class="half" placeholder="Your Surname (required)"> 
						<input type="text" class="half" placeholder="Your Email (required)"> 
						<input type="text" class="half" placeholder="Website"> 
						<textarea rows="12" placeholder="Your Message" style="width: 100%;"></textarea> 
						<button type="submit" class="button-send">Send message</button> 
					</form>
				</div>
				<!--end contact-form -->
				<!-- contact-info -->
				<div class="col-md-4 contact-info">
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					<!-- contact-us-details -->
					<div class="contact-us-details">
						<span>30 South Avenue San Francisco</span>
						<span>Phone: +78 123 456 789</span>
						<span>Email: Support@blanco.com</span>
						<a href="#" class="website">www.blanc.com</a>
					</div>
					<!--end contact-us-details -->
					<!-- icons-social-networks -->
					<ul class="icons-social-networks">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-globe"></i></a></li>
					</ul>
					<!--end icons-social-networks -->
				</div>
				<!--end contact-info -->
			</div>
		</div>
		<!-- contact-content -->
	</div>
	<!--end container -->
<?php include("footer.php") ?>	


