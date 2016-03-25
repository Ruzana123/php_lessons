<?php  
	$posts=single_post_bd($_GET['id']);
 ?>

<div class="container">
			<div class="row content-blog">
				<div class="col-md-9 col-sm-12">
					<div class="blog-post">
						<img class="big-img-blog" src="<?php echo $posts['Images']?>" alt="">
						<div class="information-post">
							<h4 class="h-entry entry-title big-title-product"><?php echo $posts['Title']?></h4>
							<span>by <a href="#"><?php echo $posts['Author']?></a></span>
							<div class="meta-post">
								<a href="#"><i class="fa fa-comments"></i> 97</a>
								<a href="#"><i class="fa fa-eye"></i> 567</a>
								<a href="#"><i class="fa fa-bookmark-o"></i> Photography</a>
								<div class="date">
									<a href="#" class="day">07</a><a href="#" class="month">jun</a>
								</div>
							</div>
							<div class="article-information">
								<p><?php echo $posts['Paper']?></p>
							</div>
						</div>
						<div class="writer">
							<h3><a href="#" class="title-writer">White shadow walker</a></h3>
							<a href="#">Writer</a><a href="#">/Personal blog</a>
						</div>
						<ul class="social-networks share-icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="pinterest-p"><i class="fa fa-pinterest-p"></i></a></li>
						</ul>
						<div class="post-navigation">
							<a href="#" class="previous-article"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp;Previous article</a>
							<a href="#" class="next-article">Next article &nbsp; <i class="fa fa-long-arrow-right"></i></a>
						</div>
						<div class="comments">
							<div class="by-element">
								<h2>Comment (37)</h2>
							</div>
							<div class="comments-content">
								<div class="comment-post">
									<a href="#" class="comment-img"> <img src="images/blog/com.png" alt=""></a>
									<div class="comment-info-post">
										<a href="#"><h4>John Snow</h4></a>
										<span>24.03.2015 at 10:21</span>
										<p>“Sensibus oportere signiferumque id mea. At usu lucilius phaedrum, vix oratio epicurei ne. Eripuit conceptam sea cu, ius minim delectus euripidis cu. Probo nonumy gubergren id nec. In est probo ridens, his laoreet euripidis et.”</p>
										<a href="#form-comment" class="reply">Reply <i class="fa fa-share"></i></a>
									</div>
								</div>
								<div class="comment-post">
									<a href="#" class="comment-img"> <img src="images/blog/com.png" alt=""></a>
									<div class="comment-info-post">
										<a href="#"><h4>John Snow</h4></a>
										<span>24.03.2015 at 10:21</span>
										<p>“Sensibus oportere signiferumque id mea. At usu lucilius phaedrum, vix oratio epicurei ne. Eripuit conceptam sea cu, ius minim delectus euripidis cu. Probo nonumy gubergren id nec. In est probo ridens, his laoreet euripidis et.”</p>
										<a href="#form-comment" class="reply">Reply <i class="fa fa-share"></i></a>
									</div>
								</div>
								<div class="more-comments">
									<div class="sub">
										<a href="#" class="more" id="comment-button-more">More comment <i class="fa fa-chevron-down"></i></a>
										<div class="comment-post hidden-comment first-hidden-comment">
											<a href="#" class="comment-img"> <img src="images/blog/com.png" alt=""></a>
											<div class="comment-info-post">
												<a href="#"><h4>John Snow</h4></a>
												<span>24.03.2015 at 10:21</span>
												<p>“Sensibus oportere signiferumque id mea. At usu lucilius phaedrum, vix oratio epicurei ne. Eripuit conceptam sea cu, ius minim delectus euripidis cu. Probo nonumy gubergren id nec. In est probo ridens, his laoreet euripidis et.”</p>
												<a href="#form-comment" class="reply">Reply <i class="fa fa-share"></i></a>
											</div>
										</div>
										<div class="comment-post hidden-comment">
											<a href="#" class="comment-img"> <img src="images/blog/com.png" alt=""></a>
											<div class="comment-info-post">
												<a href="#"><h4>John Snow</h4></a>
												<span>24.03.2015 at 10:21</span>
												<p>“Sensibus oportere signiferumque id mea. At usu lucilius phaedrum, vix oratio epicurei ne. Eripuit conceptam sea cu, ius minim delectus euripidis cu. Probo nonumy gubergren id nec. In est probo ridens, his laoreet euripidis et.”</p>
												<a href="#form-comment" class="reply">Reply <i class="fa fa-share"></i></a>
											</div>
										</div>
										<a href="#" class="more" id="comment-button-hidden">Hide comment</a>
									</div>
								</div>
							</div>
						</div>
						
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