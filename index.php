<?php get_header();?>
<body>
	<!--banner-->
	<div class="banner">
		<div class="container">
			<div class="col-md-3 b-part1">
				<img src="<?php bloginfo('template_url'); ?>/images/1.jpg" alt=" " />
				<h1>Kristin Stewart</h1>
				<h2>Web Designer</h2>
			</div>
			<div class="col-md-3 b-part2">
				<h3>Contact</h3>
				<h4><a href="mailto:info@example.com">exam@gmail.com</a></h4>
				<h4 class="agile">+18044261158</h4>
				<h4>Richmond,USA</h4>
			</div>
			<div class="col-md-3 b-part3">
				<h3>Follow</h3>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
				
			</div>
			<div class="col-md-3 b-part4">
				<h3>Visit</h3>
				<i class="fa fa-behance" aria-hidden="true"></i>
				<h4>Follow my behance portfolio</h4>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--//banner-->
	
	<!--about-->
	<div class="about">
		<div class="container">
			<h3>About Me</h3>
			<label class="line"></label>
			<img src="<?php bloginfo('template_url'); ?>/images/1.jpg" alt=" " />
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
			<p>As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum.</p>
		</div>
	</div>
	<!--//about-->
	
	
	<!--skills-->
	<div class="skills">
		<div class="container">
			<h3>My Skills</h3>
			<label class="line"></label>
			<div class="col-md-6 skills-left">
				<h4>The standard chunk</h4>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
				<p>As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search of lorem ipsum</p> 	
			</div>
			<div class="col-md-6 skills-right">
				<div class="bar_group">
					<div class='bar_group__bar thin' label='HTML' show_values='true' tooltip='true' value='350'></div>
					<div class='bar_group__bar thin' label='Java Script' show_values='true' tooltip='true' value='222'></div>
					<div class='bar_group__bar thin' label='PHP' show_values='true' tooltip='true' value='475'></div>
					<div class='bar_group__bar thin' label='Designing' show_values='true' tooltip='true' value='286'></div>
				</div>
				<script src="<?php bloginfo('template_url'); ?>/js/bars.js"></script>
			</div>
			<div class="clearfix"></div>
			
		</div>
	</div>
	<!--/skills-->
	
	<!-- download-->
	<div class="download">
		<h3>Download my resume here</h3>
		<a href="#">Download</a>
	</div>
	<!-- //download -->
	
	<!-- projects -->
	<div class="projects">
		<div class="container">
			<div class="project-grids">
				<div class="cycle">
					<span> </span>
				</div>
				<div class="project-grid total-project">
					<p>79</p>
					<p>Projects</p>
					<span> <i class="p-icon"> </i></span>
				</div>
				<div class="project-grid clientsgrid">
					<div>
						<p>25</p>
						<p>Clients</p>
					</div>
					<span> <i class="p-icon"> </i></span>
				</div>
				<div class="project-grid people-grid">
					<div>
						<p>100%</p>
						<p>Satisfaction</p>
					</div>
					<span> <i class="p-icon"> </i></span>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //projects -->
	
	
	<!--portfolio-->
	<div id="portfolio" class="portfolio">
		<div class="container">
			<h3>My Portfolio</h3>
			<?php
				$args = array(
				'posts_per_page'   => -1, // -1 here will return all posts
				'post_type'        => 'projects', //your custom post type
				'post_status'      => 'publish',
				);
				$projects = get_posts( $args );
				
				foreach ($projects as $project) {
					printf('<div><a href="%s">%s</a></div>',
					get_permalink($project->ID),
					$project->post_title);
				}
			?>
		</div>
	</div>
	<div id="portfolio" class="portfolio">
		<div class="container">
			<h3>My Portfolio</h3>
			<label class="line"></label>
			<div class="sap_tabs">			
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list wow fadeInUp animated" data-wow-delay=".7s">
						<li class="resp-tab-item"><span>All</span></li>
						<li class="resp-tab-item"><span>Elements</span></li>
						<li class="resp-tab-item"><span>Templates</span></li>
						<li class="resp-tab-item"><span>Trending</span></li>				
					</ul>	
					<div class="clearfix"> </div>	
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids grid first">
									<div class="effect1 wow fadeInUp animated" data-wow-delay=".5s">
										<a href="<?php bloginfo('template_url'); ?>/images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g1.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>At veroeos</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1 wow fadeInUp animated" data-wow-delay=".7s">
										<a href="<?php bloginfo('template_url'); ?>/images/g2.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g2.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Ducimus vero</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1 wow fadeInUp animated" data-wow-delay=".9s">
										<a href="<?php bloginfo('template_url'); ?>/images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g3.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Accusamus dignis</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid grid-mdl">
									<div class="effect1 wow fadeInUp animated" data-wow-delay=".5s">
										<a href="<?php bloginfo('template_url'); ?>/images/g4.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g4.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Ducimus vero</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid grid-mdl">
									<div class="effect1 wow fadeInUp animated" data-wow-delay=".7s">
										<a href="<?php bloginfo('template_url'); ?>/images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g5.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Ccusaamus dignis</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid grid-mdl">
									<div class="effect1 wow fadeInUp animated" data-wow-delay=".9s">
										<a href="<?php bloginfo('template_url'); ?>/images/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g6.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Musaccusa dignis</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1 wow fadeInUp animated" data-wow-delay=".5s">
										<a href="<?php bloginfo('template_url'); ?>/images/g7.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g7.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Qignissimos ducimus</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1 wow fadeInUp animated" data-wow-delay=".7s">
										<a href="<?php bloginfo('template_url'); ?>/images/g8.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g8.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Dignissimos vero</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid last">
									<div class="effect1 wow fadeInUp animated" data-wow-delay=".9s">
										<a href="<?php bloginfo('template_url'); ?>/images/g9.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g9.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Accusamus digni</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1">
										<a href="<?php bloginfo('template_url'); ?>/images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g1.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Qignissimos ducimus</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1">
										<a href="<?php bloginfo('template_url'); ?>/images/g4.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g4.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Dignissimos vero</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1">
										<a href="<?php bloginfo('template_url'); ?>/images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g5.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Accusamus digni</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1">
										<a href="<?php bloginfo('template_url'); ?>/images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g3.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Qignissimos vero</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1">
										<a href="<?php bloginfo('template_url'); ?>/images/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g6.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Accusamus digni</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1">
										<a href="<?php bloginfo('template_url'); ?>/images/g9.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g9.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Accusamus ducimus</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1">
										<a href="<?php bloginfo('template_url'); ?>/images/g9.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g9.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Qignissimos vero</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1">
										<a href="<?php bloginfo('template_url'); ?>/images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g1.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Dignissimos ducimus</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids grid">
									<div class="effect1">
										<a href="<?php bloginfo('template_url'); ?>/images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="<?php bloginfo('template_url'); ?>/images/g5.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<p>Dignissimos  vero</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--ResponsiveTabs-->
			<script src="<?php bloginfo('template_url'); ?>/js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});		
			</script>
			<!--//ResponsiveTabs-->
			<!-- swipe box js -->
			<script src="<?php bloginfo('template_url'); ?>/js/jquery.swipebox.min.js"></script> 
			<script type="text/javascript">
				jQuery(function($) {
					$(".swipebox").swipebox();
				});
			</script>
			<!-- //swipe box js -->
		</div>
	</div>
	<!--//portfolio-->
	
	
	<!-- blog -->
	<div class="blog">
		<div class="container">
			<h3>Seminars</h3>
			<label class="line"></label>
			<div class="blog-grids">
				<div class="col-md-6 blog-left">
					<div class="col-md-3 agile1">
						<h5>25</h5>
						<h6>March-2016</h6>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<a href="#"><h6 class="spcl">Comments-7</h6></a>
						<i class="fa fa-eye" aria-hidden="true"></i>
						<a href="#"><h6 class="spcl">Views-28</h6></a>
					</div>
					<div class="col-md-9 agile2">
						<a href="#" data-toggle="modal" data-target="#myModal"><img src="<?php bloginfo('template_url'); ?>/images/b1.jpg" alt="" /></a>
						<a href="#" data-toggle="modal" data-target="#myModal"><h4>Contrary to popular belief</h4></a>
						<p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 blog-right">
					<div class="col-md-3 agile1">
						<h5>10</h5>
						<h6>Feb-2016</h6>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<a href="#"><h6 class="spcl">Comments-8</h6></a>
						<i class="fa fa-eye" aria-hidden="true"></i>
						<a href="#"><h6 class="spcl">Views-48</h6></A>
					</div>
					<div class="col-md-9 agile2">
						<a href="#" data-toggle="modal" data-target="#myModal2"><img src="<?php bloginfo('template_url'); ?>/images/b2.jpg" alt="" /></a>
						<a href="#" data-toggle="modal" data-target="#myModal2"><h4>The standard chunk</h4></a>
						<p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor</p>
					</div>
					<div class="clearfix"></div>				
				</div>
				<div  class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //blog -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Contrary to popular belief</h4>
				</div>
				<div class="modal-body">
					<img src="<?php bloginfo('template_url'); ?>/images/b1.jpg "alt=" " />
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				
			</div>
		</div> 
	</div>
	
	<div class="modal fade" id="myModal2" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">The standard chunk</h4>
				</div>
				<div class="modal-body">
					<img src="<?php bloginfo('template_url'); ?>/images/b2.jpg "alt=" " />
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				
			</div>
		</div> 
	</div>
	<!--contact-->
	<div class="contact">
		<div class="container">
			<h3>Contact</h3>
			<label class="line"></label>
			<div class="col-md-4 c-w3l">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
				<h4>house no:132/8a</h4>
				<h4>Richmond,USA</h4>
			</div>
			<div class="col-md-4 c-w3l c-mail">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<h4><a href="mailto:info@example.com">exam@gmail.com</a></h4>
				<h4><a href="mailto:info@example.com">exam2@yahoo.com</a></h4>
			</div>
			<div class="col-md-4 c-w3l c-phn">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<h4>+18044261158</h4>
				<h4>+17365481278</h4>
			</div>
			<div class="clearfix"></div>
			<form action="#" method="post">
				<input type="text" name="name" class="name" placeholder="Your Name" required="">
				<input type="text" name="email" class="email" placeholder="Your Email" required="">
				<textarea  name="your message" placeholder="Your Message"  required=""></textarea>
				<input type="submit" value="Send Message">
			</form>
		</div>
	</div>
	<!--//contact-->
	
	<?php get_footer();?>
