<?php include("header.php") ?>
	<!-- container -->
	<div class="container">
		<!-- site-content -->
		<div class="row site-content">
			<!-- aside sidebar -->
			<aside class="col-md-3 sidebar widget-area">
				<!-- widget_menu -->
				<section class="widget widget_menu">
					<h2 class="widget-title">All Departments</h2>
					<ul class="product-categories">
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
				</section>	
				<!--end widget_menu -->
				<!-- widget_products -->
				<section class="widget widget_products">
					<h2 class="widget-title">Popular Products</h2>
					<!-- widget-nimi-product -->
					<ul class="widget-nimi-product">
						<?php for ($i=0; $i < 3 ; $i++) { ?>
								<li class="widget-nimi-product"><!-- nimi-product -->
							<a href="#"><img src="images/mini-prod.png" alt=""></a>						
							<a href="#"><h4>Winter shoes by Duffy</h4></a>								
							<span class="price">$59,90</span>
						</li>
						<?php } ?>
					</ul>
					<!--end widget-nimi-product -->
				</section>	
				<!--end widget_products -->
				<!-- widget-baner -->
				<section class="widget widget-baner">
					<img src="images/w-baner.png" alt="">
					<div class="widget-baner-mask">
						<a href="#">main Category</a>
						<h2>Woman clothing</h2>
						<span>(58 products)</span>
					</div>
				</section>	
				<!-- widget-baner -->
			</aside>
			<!--end aside sidebar -->

			<!-- content-area -->
			<div class="col-md-9 content-area">
				<!-- baners -->
				<div class="baners">
					<!-- big-baner -->
					<div class="big-baner">
						<img src="images/big-baner.png" alt="">
						<div class="baner-content main-banner-content">
							<h3>do not miss this promotion!</h3>
							<h2>Sherrie AOP Floral Sweat</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
							<h2 class="baner-price">$99<sup>,59</sup></h2>
							<a href="#" class="button-on-baner">Read more</a>
						</div>
					</div>
					<!--end big-baner -->
					<!-- mani-baner -->
					<div class="row mini-baners">
						<div class="col-md-6 mini-baner">
							<img src="images/baner.png" alt="">
							<div class="baner-content">
								<h3>Winter 2014</h3> 
								<h2>Woman</h2>
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit ipsum dolor.</p>
							</div>
						</div>
						<!--end mani-baner -->
						<!-- mani-baner -->
						<div class="col-md-6 mini-baner">
							<img src="images/baner.png" alt="">
							<div class="baner-content">
								<h3>Winter 2014</h3> 
								<h2>Sales</h2>
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit ipsum dolor.</p>
							</div>
						</div>
					</div>
					<!--end mani-baner -->
				</div>
				<!--end baners -->
				<!-- products-title -->
				<div class="products-title">
					<span>Lorem ipsum dolor sit amet</span>
					<h2>Blanco products</h2>
				</div>
				<!--end products-title -->
				<!-- products -->
				<div class="row products">
					<!-- one-product -->
					<?php for ($i=0; $i < 8; $i++) { ?>
						<div class="col-md-3 product-el">
						<!-- product-photo -->
						<div class="product-img">
							<a href="#" class="product-photo-links"><img src="images/pr.png" alt=""></a>
						</div>
						<!--emd product-photo -->
						<!--mini-product-information -->
						<div class="product-information">
							<a href="#" class="category">Oneness</a>
							<h3>Velvet Sequins Open Back</h3>
							<span>$59,90</span>
						</div>
						<!--end mini-product-information -->
					</div>
					<?php }
					?>			
					<!--end one-product -->
				</div> 
				<!--end products -->

				<!-- advert-baner -->
				<div class="advert-baner">
					<div class="advert">
						<a href="#"><img src="images/advert-baner.png" alt=""></a>
					</div>
					<div class="advert">
						<a href="#"><img src="images/advert-baner.png" alt=""></a>
					</div>					
				</div>
				<!--end advert-baner -->
				</div>
			<!--end content-area -->
		</div>
		<!-- site-content -->
	</div>
	<!--end container -->
<?php include("footer.php") ?>	

