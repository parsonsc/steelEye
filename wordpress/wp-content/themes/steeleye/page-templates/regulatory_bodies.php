<?php
/**
 * Template Name: Regulatory Bodies
 *
 * @package WordPress
 * @subpackage DRGN
 * @since 
 */
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main main_content regulatory_bodies">

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
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-regulatory-bodies', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>