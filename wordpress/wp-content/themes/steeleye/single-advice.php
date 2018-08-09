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
		<main id="main" class="site-main resource_article">
			<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div class="banner hero_banner" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover;">
				<div class="container">
					<h1><?php the_field('hero_banner_title'); ?></h1>
					<button class="mobile_only demo_btn btn btn--primary btn-demo js-tingle-modal-1">Book a demo</button>
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

			get_template_part( 'template-parts/content-advice', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
