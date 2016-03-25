<?php
   	$posts=main_blog();
?>

		<div class="container main-blog">
			<div class="row content-blog">
				<div class="col-md-9 col-sm-12">
					<?php rsort($posts);
					foreach ($posts as $key => $post) {
						?>
					<article class="blog-post">
						<a href="#" class="link-in-post"><img src="<?php echo $post['Images']?>" alt=""></a>
						<div class="information-post">
							<a href="#" class="blog-post-title"><h4 class="h-entry entry-title"><?php echo $post['Title']?></h4></a>
							<span>by <a href="#"><?php echo $post['Author']?></a></span>
							<div class="meta-post">
								<a href="#"><i class="fa fa-comments"></i> 97</a>
								<a href="#"><i class="fa fa-eye"></i> 567</a>
								<a href="#"><i class="fa fa-bookmark-o"></i> Photography</a>
								<div class="date">
									<a href="#" class="day"><?php echo  $post['Date'] ?></a>
								</div>
							</div>
							<p class="blog-product-info"><?php echo $post['Description']?></p>
						</div>
				
						<a href="<?php get_url_post("single_post",'id',$post['ID']) ?>" class="button-in-blog">Read more</a>
					</article>
					<?php }?>
					<div class="pages">
						<ul class="number">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
				<aside class="col-md-3 col-sm-12 sidebar">
					<div class="widget">
						<form class="form-search">
							<input type="text" class="input-medium search-query"  placeholder="Search Products...">
							<button type="submit" class="btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="widget writer-block">
						<div class="by-element">
							<h2>About me</h2>
						</div>
						<div class="writer-info">
							<a href="#" ><img class="writer-photo" src="images/blog/bg1.png" alt=""></a>
							<div class="writer">
								<h3><a href="#" class="title-writer">White shadow walker</a></h3>
								<a href="#" class="category-author">Writer</a><a href="#" class="category-author">/Personal blog</a>
							</div>
							<hr>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</p>
							<ul class="social-mini">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="widget">
						<div class="by-element">
							<h2>Latest Articles</h2>
						</div>
						<ul class="articles-menu">
							<li>
								<a href="#"><img class="widget-img" src="images/blog/bg2.png" alt=""></a>
								<div class="articles-information">
									<h4><a href="#">Hello Itaewon Project</a></h4>
									<span>Photography</span>
								</div>
							</li>
							<li>
								<a href="#"><img class="widget-img" src="images/blog/bg2.png" alt=""></a>
								<div class="articles-information">
									<h4><a href="#">Brooklyn</a></h4>
									<span>Webdesign</span>
								</div>
							</li>
							<li>
								<a href="#"><img class="widget-img" src="images/blog/bg2.png" alt=""></a>
								<div class="articles-information">
									<h4><a href="#">Maxxi Dress</a></h4>
									<span>Fashion</span>
								</div>
							</li>
							<li>
								<a href="#"><img class="widget-img" src="images/blog/bg2.png" alt=""></a>
								<div class="articles-information">
									<h4><a href="#">Transittions</a></h4>
									<span>Motion Graphic</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="widget">
						<div class="by-element">
							<h2>Cagegories</h2>
						</div>
						<ul class="right-menu">
							<li><a href="#">Business</a></li>
							<li><a href="#">Health</a></li>
							<li><a href="#">Motion Graphic</a></li>
							<li><a href="#">Conecpt Design</a></li>
							<li><a href="#">Lifestyle</a></li>
						</ul>
					</div>
					<div class="widget">
						<div class="by-element">
							<h2>Archies</h2>
						</div>
						<ul class="right-menu">
							<li><a href="#">January 2015</a></li>
							<li><a href="#">Febuary 2015</a></li>
							<li><a href="#">March 2015</a></li>
							<li><a href="#">April 2015</a></li>
							<li><a href="#">May 2015</a></li>
						</ul>
					</div>
					<div class="widget">
						<div class="by-element">
							<h2>Flickr Photo</h2>
						</div>
						<ul class="widget-photo">
							<li>
								<a href="#"><img src="images/blog/mini-img.png" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="images/blog/mini-img.png" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="images/blog/mini-img.png" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="images/blog/mini-img.png" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="images/blog/mini-img.png" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="images/blog/mini-img.png" alt=""></a>
							</li>
						</ul>
					</div>
					<div class="widget">
						<div class="by-element">
							<h2>Tags</h2>
						</div>
						<div  class="tag">
							<a href="#">Fashion</a>
							<a href="#">Trending</a>
							<a href="#">Musick</a>
							<a href="#">Minimal</a>
							<a href="#">Creative</a>
							<a href="#">Branding</a>
						</div>
					</div>
				</aside>
			</div>
		</div>
		<!-- footer -->