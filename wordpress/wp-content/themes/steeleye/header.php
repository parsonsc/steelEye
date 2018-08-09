<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
	*
	* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	*
	* @package Steeleye
	*/
	?>
	<!doctype html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="https://gmpg.org/xfn/11">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
			<!-- Remember to include jQuery :) -->


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
		    <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
		    <script>var $j = jQuery.noConflict(true);</script>
		    <script>
		      	$(document).ready(function(){
		       		console.log($().jquery); // This prints v1.4.2
		       		console.log($j().jquery); // This prints v1.9.1
		      	});
		     
		   </script>

			



			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
				<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
			<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
			<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/jquery.waterwheelCarousel.min.js" type="text/javascript" charset="utf-8"></script>
			<script src="<?php echo get_bloginfo( 'template_directory' ); ?>/js/noframework.waypoints.min.js"></script>
			
			<script type="text/javascript">
 
      			$(document).ready(function () {
			        var carousel = $("#carousel").waterwheelCarousel({
			          	flankingItems: 2,
					    separation:200,
					     sizeMultiplier:0.8,
					     separationMultiplier:0.9,
					     speed:250,
			          movingToCenter: function ($item) {
			            $('#callback-output').prepend('movingToCenter: ' + $item.attr('id') + '<br/>');
			          },
			          movedToCenter: function ($item) {
			            $('#callback-output').prepend('movedToCenter: ' + $item.attr('id') + '<br/>');
			          },
			          movingFromCenter: function ($item) {
			            $('#callback-output').prepend('movingFromCenter: ' + $item.attr('id') + '<br/>');
			          },
			          movedFromCenter: function ($item) {
			            $('#callback-output').prepend('movedFromCenter: ' + $item.attr('id') + '<br/>');
			          },
			          clickedCenter: function ($item) {
			            $('#callback-output').prepend('clickedCenter: ' + $item.attr('id') + '<br/>');
			          }
			        });

			        $('#prev').bind('click', function () {
			          carousel.prev();
			          return false
			        });

			        $('#next').bind('click', function () {
			          carousel.next();
			          return false;
			        });

			        $('#reload').bind('click', function () {
			          newOptions = eval("(" + $('#newoptions').val() + ")");
			          carousel.reload(newOptions);
			          return false;
			        });

			      });
			    
			</script>
			
			<?php wp_head(); ?>
		</head>
		<body <?php body_class(); ?>>
			<div id="page" class="site site_container">
				
				<div class="menu-wrap">
					<nav class="menu">
						<div class="menu_logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/logo.svg" alt="SteelEye">
							</a>
						</div>
						<div class="menu_nav">
							<?php wp_nav_menu( array('theme_location' => 'menu-1', 'menu_id' => 'navigation',));?>
							<div class="header_subnav">
								<?php wp_nav_menu( array('theme_location' => 'headersubnav', 'menu_id' => 'navigation',));?>
								<div class="mobile_only">
									<!-- <?php wp_nav_menu( array('theme_location' => 'headermenu', 'menu_id' => 'headermenu',));?> -->
									<a href="#login" rel="modal:open" class=" modal_login">
										Login
									</a>
									
									<a href="#demo" rel="modal:open" class="cta">
										Book a demo
									</a>
								</div>
								
							</div>
						</div>
					</nav>
					<button class="close-button" id="close-button">Close Menu</button>
				</div>
				
				<div class="content-wrap">
					<div class="content">
						<header id="site_header" class="site_header">
							<div class="container nopadding">
								<a class="menu-button" id="open-button">
								open-button
								</a>
								
								<div class="site_logo">
									<a href="<?php echo home_url(); ?>">
										<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/logo.svg" alt="SteelEye">
									</a>
									
								</div>
								
								
								
								<div class="header_menu">
									<a href="#demo" rel="modal:open" class="cta modal_demo">
										Book a demo
									</a>
									<a href="#login" rel="modal:open" class=" modal_login">
										Login
									</a>
								</div>
								<!-- Menu button -->
								
								<!-- end button -->
							</div>
						</header>
						<div id="demo" class="modal">
							<div class="table">
								<h2 class="header margin-bottom-10">Book a demo</h2>
							</div>
							<form action="/ajax/index/book" onsubmit="return false;">
								<div class="row">
									<div class="col-sm-12 nopadding">
										<div class="col-sm-6 nopadding">
											<div class="form_item">
												<input type="text" name="fname" placeholder="First name *">
											</div>
										</div>
										<div class="col-sm-6 nopadding">
											<div class="form_item">
												<input type="text" name="lname" placeholder="Last name *">
											</div>
										</div>
										<div class="col-sm-6 nopadding">
											<div class="form_item">
												<input type="text" name="company" placeholder="Company  *">
											</div>
										</div>
										<div class="col-sm-6 nopadding">
											<div class="form_item">
												<input type="text" name="jobtitle" placeholder="Job title *">
											</div>
										</div>
										<div class="col-sm-6 nopadding">
											<div class="form_item">
												<input type="email" name="email" placeholder="Email *">
											</div>
										</div>
										<div class="col-sm-6 nopadding">
											<div class="form_item">
												<input type="text" name="phone" placeholder="Phone number">
											</div>
										</div>
										<button type="submit" class="submit button yellow left">Submit</button>
									</div>
									
								</div>
							</form>
							<a href="#" rel="modal:close" class="close_button"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/close_blue.svg" alt=""></a>
						</div>

						<div id="login" class="modal">
							<div class="table">
								<h2 class="header margin-bottom-10">Login</h2>
							</div>
							<form action="/ajax/index/book" onsubmit="return false;">
								<div class="row">
									<div class="col-sm-12 nopadding">
										
										<div class="col-sm-12 nopadding">
											<div class="form_item">
												<input type="email" name="email" placeholder="Email *">
											</div>
										</div>
										<div class="col-sm-12 nopadding">
											<div class="form_item">
												<input type="password" name="password" placeholder="Password *">
											</div>
										</div>
										<div class="col-sm-12 password_reminder">
											<a href="#passwordReminder">Forgot your password?</a>
										</div>
										<button type="submit" class="submit button yellow left">Login</button>
									</div>
									
								</div>
							</form>
							<a href="#" rel="modal:close" class="close_button"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/close_blue.svg" alt=""></a>
						</div>

						<div id="passwordReminder" class="modal">
							<div class="table">
								<h2 class="header margin-bottom-10">Forgot your password?</h2>
								<p>Enter your email address to reset your password. You may need to check your spam folder.</p>
							</div>
							<form action="/ajax/index/book" onsubmit="return false;">
								<div class="row">
									<div class="col-sm-12 nopadding">
										
										<div class="col-sm-12 nopadding">
											<div class="form_item">
												<input type="email" name="email" placeholder="Email">
											</div>
										</div>
									
										
										<button type="submit" class="submit button yellow left">Request reset link</button>
										<a href="#login" class="back_link">Back to login</a>
									</div>
									
								</div>
							</form>
							<a href="#" rel="modal:close" class="close_button"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/close_blue.svg" alt=""></a>
						</div>

