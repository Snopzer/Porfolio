<?php get_header();?>
<body>
	<!--banner-->
	<div class="banner">
		<div class="container">
			<div class="col-md-3 b-part1">
				<img src="<?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'picture' );	}	?>" alt=" " />
				<h1><?php bloginfo('name'); ?></h1>
				<h2><?php bloginfo('description');  ?></h2>
			</div>
			<div class="col-md-3 b-part2">
				<h3>Contact</h3>
				<h4><a><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'email' );	}	?></a></h4>
				<h4 class="agile"><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'phone_number' );	}	?></h4>
				<h4><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'address' );	}	?></h4>
			</div>
			<div class="col-md-3 b-part3">
				<h3>Follow</h3>
				<?php if ( function_exists( 'ot_get_option' ) ) { echo ot_get_option( 'facebook_url' );	} ?>
				<a href="<?php if ( function_exists( 'ot_get_option' ) ) { echo ot_get_option( 'facebook_url' );	} ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="<?php if ( function_exists( 'ot_get_option' ) ) { echo ot_get_option( 'linkedin_url' );	} ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="<?php if ( function_exists( 'ot_get_option' ) ) { echo ot_get_option( 'google_plus_url' );	} ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				
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
			<img src="<?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'picture' );	}	?>" alt=" " />
			<p><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'about_me' );	}	?></p>
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
				<p><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'about_skills' );	}	?></p>	
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
		<a href="<?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'resume' );	}	?>">Download</a>
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
					<p><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'projects_count' );	}	?></p>
					<p>Projects</p>
					<span> <i class="p-icon"> </i></span>
				</div>
				<div class="project-grid clientsgrid">
					<div>
						<p><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'clients_count' );	}	?></p>
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
			<label class="line"></label>
			<div class="sap_tabs">			
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list wow fadeInUp animated" data-wow-delay=".7s">
						<li class="resp-tab-item"><span>Works Where i Involved</span></li>
					</ul>	
					<div class="clearfix"> </div>	
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								
								<?php
									$args = array(
									'posts_per_page'   => -1, // -1 here will return all posts
									'post_type'        => 'projects', //your custom post type
									'post_status'      => 'publish',
									);
									$projects = get_posts( $args );
									
									foreach ($projects as $project) { ?>
									
									<?php //print_r($project);?>
									<?php //echo wp_get_attachment_image($project->project_image, 'full') ?>
									<?php $image = wp_get_attachment_image_src($project->project_image, 'full'); ?>
									<?php //echo "Image : ".get_the_post_thumbnail($project->ID, 'project_image');?>
									
									
									<div class="col-md-4 portfolio-grids grid first">
										<div class="effect1 wow fadeInUp animated" data-wow-delay=".5s">
											<a href="<?php echo $image[0];?>" class="swipebox" title="<?php echo $project->project_description;?>">
												<img src="<?php echo $image[0];?>" alt="" class="img-responsive" />
												<div class="figcaption">
													<p><?php echo $project->project_title;?></p>
												</div>
											</a>	
										</div>
									</div>
								<?php } ?>
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
	<!--<div class="blog">
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
	</div>-->
	<!-- //blog -->
	<!--<div class="modal fade" id="myModal" role="dialog">
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
	</div>-->
	<!--contact-->
	<div class="contact">
		<div class="container">
			<h3>Contact</h3>
			<label class="line"></label>
			<div class="col-md-4 c-w3l">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
				<h4><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'address' );	}	?></h4>
			</div>
			<div class="col-md-4 c-w3l c-mail">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<h4><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'email' );	}	?></h4>
			</div>
			<div class="col-md-4 c-w3l c-phn">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<h4><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'phone_number' );	}	?></h4>
			</div>
			<div class="clearfix"></div>
			<form action="#" method="post" id="contactForm">
				<textarea  name="your message" placeholder="Your Message"  required=""></textarea>
				<input type="button" id="submitForm" value="Send Message">
				<input type="hidden" name="action" value="addCustomer"/>
			</form>
			
		</div>
	</div>
	
	<script>
	$("#submitForm").on("click",function(){		
		jQuery.ajax({
			  type:"POST",
			  url: "/fareed/wp-admin/admin-ajax.php",
			  data: {
				  action: "add_customer",
				  amount: 1
			  },
			  success:function(data){
			  alert(data);
			  },
			  error: function(errorThrown){
				  alert(errorThrown);
			  } 

		});
	});
	</script>
	<!--//contact-->
	
	<?php get_footer();?>
