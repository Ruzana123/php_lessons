<?php include("header.php") ?>
	<!-- container -->
	<div class="container">
		<!-- site-content -->
		<div class="row site-content">
			<!-- aside sidebar -->
			<aside class="col-md-3 sidebar widget-area">
				<!-- widget-menu -->
				<div class="widget widget-menu">
					<h2 class="widget-title">All Departments</h2>
					<ul class="product-categories">
						<li class="category-item"><a href="#">Woman Clothing</a></li>
						<li class="category-item"><a href="#">Man Clothing</a></li>
						<li class="category-item"><a href="#">Cameras & Photography</a></li>
						<li class="category-item"><a href="#">TV & Audio</a></li>
						<li class="category-item"><a href="#">Laptops & Computers</a></li>
						<li class="category-item"><a href="#">Smart Phones & Tablets</a></li>
						<li class="category-item"><a href="#">Video Games & Consoles</a></li>
						<li class="category-item"><a href="#">Gadgets</a></li>
						<li class="category-item"><a href="#">Accessories</a></li>
						<li class="category-item"><a href="#">Car Electronics & GPS</a></li>
						<li class="category-item"><a href="#">Sales Products</a></li>
						<li class="category-item"><a href="#">Buy this theme</a></li>
					</ul>
				</div>	
				<!--end widget-menu -->
				<!-- widget-products -->
				<div class="widget widget-products">
					<h2 class="widget-title">Popular Products</h2>
					<!-- widget-nimi-product -->
					<ul class="widget-nimi-product">
						<?php for ($i=0; $i < 3 ; $i++) { ?>
								<li class="widget-nimi-product"><!-- nimi-product -->
							<a href="#"><img src="images/assets/mini-prod.png" alt="" width="48" height="48"></a>						
							<a href="#"><h4>Winter shoes by Duffy</h4></a>								
							<span class="price">$59,90</span>
						</li>
						<?php } ?>
					</ul>
					<!--end widget-nimi-product -->
				</div>	
				<!--end widget_products -->
				<!-- widget-banner -->
				<div class="widget widget-banner">
					<img src="images/assets/w-banner.png" alt="" width="263" height="486">
					<div class="widget-banner-mask">
						<a href="#">main Category</a>
						<h2>Woman clothing</h2>
						<span>(58 products)</span>
					</div>
				</div>	
				<!-- widget-banner -->
			</aside>
			<!--end aside sidebar -->

			<!-- content-area -->
			<div class="col-md-9 content-area">
				<!-- banners -->
				<div class="banners">
					<!-- big-banner -->
					<div class="big-banner">
						<img src="images/assets/big-banner.png" alt="" width="848" height="487">
						<div class="banner-content main-banner-content">
							<h3>do not miss this promotion!</h3>
							<h2>Sherrie AOP Floral Sweat</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br> do eiusmod tempor incididunt ut labore et dolore.</p>
							<h2 class="banner-price">$99<sup>,59</sup></h2>
							<a href="#" class="button-on-banner">Read more</a>
						</div>
					</div>
					<!--end big-banner -->
					<!-- mini-banner -->
					<div class="row mini-banners">
						<div class="col-md-6 mini-banner">
							<a href="#"><img src="images/assets/banner.png" alt="" width="409" height="192"></a>
							<div class="banner-content">
								<h3>Winter 2014</h3> 
								<h2>Woman</h2>
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit ipsum dolor.</p>
							</div>
						</div>
						<!--end mini-banner -->
						<!-- mini-banner -->
						<div class="col-md-6 mini-banner">
							<a href="#"><img src="images/assets/banner.png" alt="" width="409" height="192"></a>
							<div class="banner-content">
								<h3>Winter 2014</h3> 
								<h2>Sales</h2>
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit ipsum dolor.</p>
							</div>
						</div>
					</div>
					<!--end mini-banner -->
				</div>
				<!--end banners -->
				<!-- block-title -->
				<div class="block-title">
					<span>Lorem ipsum dolor sit amet</span>
					<h2>Blanco products</h2>
				</div>
				<!--end block-title -->
				<!-- products -->
				<div class="row products">
					<!-- one-product -->
					<?php for ($i=0; $i < 8; $i++) { ?>
						<div class="col-md-3 product">
						<!-- product-photo -->
						<a href="#" class="product-img"><img src="images/assets/pr.png" alt="" width="189" height="259"></a>
						<!--emd product-photo -->
						<!--mini-product-information -->
						<div class="product-information">
							<a href="#" class="category">Oneness</a>
							<a href="#" class="link-product"><h3>Velvet Sequins Open Back</h3></a>
							<span class="price">$59,90</span>
						</div>
						<!--end mini-product-information -->
					</div>
					<?php }
					?>			
					<!--end one-product -->
				</div> 
				<!--end products -->

				<!-- advert-banner -->
				<div class="row advert-banner">
					<div class="col-md-6 advert">
						<a href="#"><img src="images/assets/advert-banner.png" alt="" width="409" height="154"></a>
					</div>
					<div class="col-md-6 advert">
						<a href="#"><img src="images/assets/advert-banner.png" alt="" width="409" height="154"></a>
					</div>					
				</div>
				<!--end advert-banner -->
				</div>
			<!--end content-area -->
		</div>
		<!-- site-content -->
	</div>
	<!--end container -->
<?php include("footer.php") ?>	

