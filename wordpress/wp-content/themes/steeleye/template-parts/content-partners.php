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
	<section class="component partners_intro">
		<div class="container">
			<div class="intro_content">
				<?php echo the_content(); ?>
			</div>
		</div>

	</section>
	<!-- End intro section -->

	<!-- Office Locations -->
	<section class="component partners">
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic2_v2.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">
		<div class="container">
			<div class="partners_grid">
				
					<?php
					if ( get_query_var('paged') ) $paged = get_query_var('paged');
					if ( get_query_var('page') ) $paged = get_query_var('page');
					$query = new WP_Query( array( 'post_type' => 'steeleye_partners', 'paged' => $paged ) );
					if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					
					
					<div class="partner">
						<div class="feature_block">
							<a href="<?php the_field('partners_external_link');?>" target="_blank"><?php the_post_thumbnail(); ?></a>
							
						</div>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- show pagination here -->
					<?php else : ?>
					<!-- show 404 error here -->
					<?php endif; ?>
				
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

