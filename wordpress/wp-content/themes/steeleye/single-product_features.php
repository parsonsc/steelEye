	<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Steeleye
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="banner hero_banner">
				<div class="container">
					<h1><?php the_field('hero_banner_title'); ?></h1>
					<a href="#demo" rel="modal:open" class="cta mobile_only">Book a demo</a>
				</div>
			</div>
			<!-- Breadcrumbs -->
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				<div class="container">
					<?php if(function_exists('bcn_display')) {bcn_display(); }?>
				</div>
			</div>	
			<!-- End breadcrumb -->
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-product-features-single', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
