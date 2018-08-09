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
	<section class="component intro_section">
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic2.svg" alt="" class="piechart piechart_green os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">
		<div class="container">
			<div class="intro_content">
				<?php echo the_content(); ?>

				<div class="download_case_study">
					<h3>Download the case study</h3>

					<div class="col-sm-5 nopadding">
						<img src="<?php the_field('case_study_image'); ?>" alt="">
					</div>
					<div class="col-sm-7 nopadding download">
						<p>Register with us for expert insights and case studies, or log in to download</p>
						<a href="#register" rel="modal:open" class="cta">Download</a>
					</div>
				</div>
			</div>
		</div>
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic1.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">
	</section>
	<!-- End intro section -->

	
	
	<!-- End meet the team -->
	<div class="clearfix"></div>
	<!-- end -->

	<div id="register" class="modal">
		<div class="table">
			<h2 class="header margin-bottom-10">Register</h2>
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
							<input type="email" name="email" placeholder="Email *">
						</div>
					</div>
					<div class="col-sm-6 nopadding">
						<div class="form_item">
							<input type="text" name="company" placeholder="Company  *">
						</div>
					</div>
					<div class="col-sm-6 nopadding">
						<div class="form_item">
							<input type="password" name="password" placeholder="Password *">
						</div>
					</div>
					<div class="col-sm-6 nopadding">
						<div class="form_item">
							<input type="password" name="confirmPassword" placeholder="Confirm password *">
						</div>
					</div>
					<div class="col-sm-12 submit_terms">
						<p>By clicking “Submit” I agree to SteelEye’s <a href="<?php echo get_page_link(67); ?>">terms</a>.</p>
					</div>
					<button type="submit" class="submit button yellow left">Submit</button>
				</div>
				
			</div>
		</form>
		<a href="#" rel="modal:close" class="close_button"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/close_blue.svg" alt=""></a>
	</div>
		
</article><!-- #post-<?php the_ID(); ?> -->