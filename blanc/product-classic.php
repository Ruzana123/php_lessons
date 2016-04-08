<?php include("header.php") ?>
	<!-- container -->
	<div class="container">
		<!-- main-product -->
		<div class="main-product">
			<!-- navigation-in-page -->
			<ul class="navigation-in-page">
				<li><a href="#">Home</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li><a href="#">Pages</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li><a href="#">About us</a></li>
			</ul>
			<!--end navigation-in-page -->
			<!-- product-information -->
			<div class="row block-product-information">
				<!-- product-images --> 
				<div class="col-md-1 product-mini-image">
					<div class="small-img swiper-container gallery-thumbs">
						<div class="swiper-wrapper top-swiper">
							<div class="swiper-slide" style="background-image:url(images/assets/s1.png)"></div>
							<div class="swiper-slide" style="background-image:url(images/assets/s2.png)"></div>
							<div class="swiper-slide" style="background-image:url(images/assets/s3.png)"></div>
							<div class="swiper-slide" style="background-image:url(images/assets/s1.png)"></div>
							<div class="swiper-slide" style="background-image:url(images/assets/s2.png)"></div>
							<div class="swiper-slide" style="background-image:url(images/assets/s3.png)"></div>
						</div>
					</div>
				</div>
				<div class="col-md-5 main-image">
					<div class="big-img swiper-container gallery-top">
						<div class="swiper-wrapper">
							<div class="swiper-slide" style="background-image:url(images/assets/main-product.png)"></div>
								<div class="swiper-slide" style="background-image:url(images/assets/main-product.png)"></div>
								<div class="swiper-slide" style="background-image:url(images/assets/main-product.png)"></div>
								<div class="swiper-slide" style="background-image:url(images/assets/main-product.png)"></div>
								<div class="swiper-slide" style="background-image:url(images/assets/main-product.png)"></div>
								<div class="swiper-slide" style="background-image:url(images/assets/main-product.png)"></div>
						</div>
					</div>
				</div>
				<!--end product-images -->
				<!-- summary entry-summary -->
				<div class="col-md-6 summary entry-summary">
					<h2>T-shirt Basic Stampata</h2>
					<a href="#">Loremous Clothing</a>
					<ul class="star-line">
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star-o"></i></li>
						<li><i class="fa fa-star-o"></i></li>
					</ul>
					<span class="review">25 Reviews</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<div class="offers"><!-- offers -->
						<span class="old-price">$90.00</span>
						<span class="new-price">$70.00</span>
					</div>
					<div class="size"><!-- size -->
						<label for="size">Size:</label>
						<div class="size-line">
							<span class="size">XL</span>
							<span class="size">S</span>
							<span class="size">M</span>
							<span class="size">L</span>
							<span class="size">XL</span>
						</div>
					</div>
					<div class="color"><!-- color -->
						<label for="color">Color:</label>
						<select name="color-selection" id="color-selection" class="jquery-ui-select">
							<option selected="selected">White with black</option>
							<option>White</option>
							<option>Black</option>
						</select>
					</div>
					<div class="quantity"><!-- quantity -->
						<label for="quantity">Quantity:</label>
						<input type="number" id="spinner" name="value" value="1" min="1" max="9999">					
					</div>
					<div class="add-to-cart"><!-- add-to-cart -->
						<button type="submit" class="buttons_added">Add to cart</button>
						<a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i>Add to wishlist</a>
					</div>
					<div class="tags"><!-- tags -->
						<label for="tags">Tags:</label>
						<ul>
							<li><a href="#">bootstrap</a></li>
							<li>/</li>
							<li><a href="#">collections</a></li>
							<li>/</li>
							<li><a href="#">color</a></li>
							<li>/</li>
							<li><a href="#">responsive</a></li>
						</ul>
					</div>
					<div class="storefront-product-sharing"><!-- storefront-product-sharing -->
						<span>Share in social media</span>
						<ul class="icons-social-networks">
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		                   	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		                   	<li><a href="#"><i class="fa fa-globe"></i></a></li>
		                   	<li><a href="#"><i class="fa fa-google-plus"></i></a></li>		                   	
						</ul>
					</div>
				</div>
				<!--end summary entry-summary -->
			</div>
			<!--end product-information -->
		</div>
		<!--end main-product -->
	</div>
	<!--end container -->
<?php include("footer.php") ?>	