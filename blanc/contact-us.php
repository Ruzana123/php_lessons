<?php include("header.php") ?>
	<!-- container -->
	<div class="container">
		<!-- contact-content -->
		<div class="contact-content">
			<ul class="navigation-in-page breadcrumbs">
				<li><a href="#">Home</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li><a href="#">Pages</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li>About us</li>
			</ul>
			<!-- map -->
			<div class="map" style="position:relative">
				<div id="map" style="width:100%; height:330px; z-index:1;"></div>
				<div class="overlay" onClick="style.pointerEvents='none'" style="z-index:2;	background:transparent; position:absolute; width:100%; height:330px; top:0;"></div>
				<script>
				$(document).ready(function(){
				$('.overlay').click(function() {
					$(this).remove();
				});
				});
				</script>
				<!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d42083.32495333591!2d30.21726005!3d48.7588277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1452418010402" width="100%" height="330" frameborder="0" style="border:0" scrollwheel="false" allowfullscreen></iframe>  -->
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
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNcXU5CUCXyrzPNBSL2JIX6naV7TbuzU0"></script>
		<script type="text/javascript">
	            // When the window has finished loading create our google map below
	            google.maps.event.addDomListener(window, 'load', init);
	        
	            function init() {
	                // Basic options for a simple Google Map
	                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	                var mapOptions = {
	                    // How zoomed in you want the map to start at (always required)
	                    zoom: 11,

	                    // The latitude and longitude to center the map (always required)
	                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

	                    // How you would like to style the map. 
	                    // This is where you would paste any style found on Snazzy Maps.
	                    styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
	                };

	                // Get the HTML DOM element that will contain your map 
	                // We are using a div with id="map" seen below in the <body>
	                var mapElement = document.getElementById('map');

	                // Create the Google Map using our element and options defined above
	                var map = new google.maps.Map(mapElement, mapOptions);

	                // Let's also add a marker while we're at it
	                var marker = new google.maps.Marker({
	                    position: new google.maps.LatLng(40.6700, -73.9400),
	                    map: map,
	                    title: 'Snazzy!'
	                });
	            }
	        </script>        
<?php include("footer.php") ?>	
