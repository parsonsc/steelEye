<?php
/**
 * Template Name: Resources
 *
 * @package WordPress
 * @subpackage DRGN
 * @since 
 */
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="primary" class="content-area">
		<main id="main" class="site-main ">
			<div class="resource_hero_banner">
				<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				<div class="banner hero_banner" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover;">
					<div class="container">
						<h1><?php the_field('hero_banner_title'); ?></h1>
						<a href="#demo" rel="modal:open" class="cta mobile_only">Book a demo</a>
					</div>				
				</div>
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic2_v2.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">
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
					get_template_part( 'template-parts/content-resources', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>