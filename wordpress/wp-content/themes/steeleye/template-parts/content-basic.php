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
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
		<div class="container">
			<?php if(function_exists('bcn_display')) {bcn_display(); }?>
		</div>
	</div>	
	<section class="basic_banner">
		<div class="container">
			<h1><?php echo get_the_title(); ?></h1>
		</div>
	</section>
	<!-- End breadcrumb -->
	<!-- Intro section -->
	<section class="component basic_content_container">
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic1.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">
		<div class="container">
			<div class="basic_content">
				<?php echo the_content(); ?>
			</div>
		</div>
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic2.svg" alt="" class="piechart piechart_green os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">
	</section>
	<!-- End intro section -->

	
	

		
</article><!-- #post-<?php the_ID(); ?> -->