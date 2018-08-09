<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package drgn
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<!-- Intro section -->
	<section class="component contact_intro">
		<div class="container">
			<div class="intro_content">
				<div class="intro_block">
					<h2><?php the_field('know_more_title'); ?></h2>
					<?php the_field('know_more_copy'); ?>
				</div>
				
				<div class="intro_block">
					<h2><?php the_field('talk_to_us_title'); ?></h2>
					<?php the_field('talk_to_us_copy'); ?>
				</div>
			</div>
		</div>
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic2.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">
	</section>
	<!-- End intro section -->

	<!-- Office Locations -->
	<section class="component office_locations">
		<div class="container">
			<header>
				<h2><?php the_field('office_locations_title'); ?></h2>
			</header>

			<div class="row">
				<div class="col-sm-4">
					<div class="location">
						<img src="<?php the_field('office_location_london_map_image'); ?>" alt="London Office Map">
						<div class="location_info">
							<h3><?php the_field('office_location_london_title'); ?></h3>
							<div class="address">
								<?php the_field('office_location_london_address'); ?>
							</div>
							<a class="google_link" href="<?php the_field('office_location_london_map_link'); ?>">View on Google Maps</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="location">
						<img src="<?php the_field('office_location_geneva_map_image'); ?>" alt="London Office Map">
						<div class="location_info">
							<h3><?php the_field('office_location_geneva_title'); ?></h3>
							<div class="address">
								<?php the_field('office_location_geneva_address'); ?>
							</div>
							<a class="google_link" href="<?php the_field('office_location_geneva_map_link'); ?>">View on Google Maps</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="location">
						<img src="<?php the_field('office_location_zurich_map_image'); ?>" alt="London Office Map">
						<div class="location_info">
							<h3><?php the_field('office_location_zurich_map_title'); ?></h3>
							<div class="address">
								<?php the_field('office_location_zurich_address'); ?>
							</div>
							<a class="google_link" href="<?php the_field('office_location_zurich_map_link');?>">View on Google Maps</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End office locations -->

	<!-- Contact form -->
	<section class="component contact_form send-message">
		<div class="container">
			<div class="form_wrapper">
				<header>
					<h2 class="header margin-bot-20">Send us a message</h2>
				</header>
				<div class="table margin-left width-70perc">
		            
		            
		            <!--
		            <p>
		                Use the form to contact us with any general enquiries and we’ll get back to you as soon as we can.
		            </p>
		            -->
		        </div>
		        <form method="post" action="/content/contact/contactus#message" name="contact_us">
		            <div class="row">
						<div class="col-sm-12 nopadding">
							<div class="col-sm-6 nopadding">
								<div class="form_item">
				                	<input class="fs16" type="text" name="fname" placeholder="First name *" required>
				                </div>
							</div>
							<div class="col-sm-6 nopadding">
								 <div class="form_item">
									<input class="fs16" type="text" name="lname" placeholder="Last name *" required>
				                </div>
							</div>
							<div class="col-sm-6 nopadding">
								<div class="form_item">
									<input class="fs16" type="email" name="email" placeholder="Email *" required>
								</div>
							</div>
							<div class="col-sm-6 nopadding">
								<div class="form_item">		                    
				                    <input class="fs16" type="text" name="phone" placeholder="Phone number">
				                </div>	
							</div>
							<div class="col-sm-6 nopadding">
								<div class="form_item">		                    
				                    <input class="fs16" type="text" name="company" placeholder="Company">
				                </div>
							</div>
						</div>	                	                
		            </div>
		            <div class="clear"></div>
		            <div class="row">
		            	<div class="form_item">	
		                	<textarea class="fs16" type="text" name="message" placeholder="Comments or questions" rows="10" cols="100"></textarea>
		                	<button type="submit" class="button yellow left">Submit</button>
		                </div>               
		            </div>
		        </form>
			</div>
		</div>
	</section>
	<!-- End contact form -->	

</article><!-- #post-<?php the_ID(); ?> -->

