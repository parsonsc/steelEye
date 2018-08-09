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
	
	<section class="coponent features_intro">
		<div class="container">
			<div class="features_copy">
				<?php the_content(); ?>

								
			</div>
		</div>
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic1.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">
	</section>
	
	<!-- Features grid -->
	<section class="component features_grid">
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic2.svg" alt="" class="piechart piechart_green os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">		
		<div class="container">			
			<div class="wrapper">
				
				<article>
					<div class="feature_article_block feature">
						<div class="feature_article_intro">
							<h3><?php the_field('features_grid_intro'); ?></h3>
						</div>
					</div>

					<?php $loop = new WP_Query( array( 'post_type' => 'product_features', 'paged' => $paged ) );
					if ( $loop->have_posts() ) :
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
						<div class="feature_article_block">
							
							<h3 class="title"><?php echo get_the_title( $post_id ); ?></h3>
							<h4><?php the_field('product_features_extended_intro'); ?></h4>
							<?php the_field('product_feature_page_copy'); ?>
							<a href="<?php echo get_permalink( $post->ID ); ?>" class="read_more cta cta_blue">Read more</a>
						</div>
					
					<?php endwhile;
					if (  $loop->max_num_pages > 1 ) : ?>
					
					<?php endif;
					endif;
					wp_reset_postdata(); ?>

					
				</article>
			</div>
		</div>
	</section>
	<!-- End features grid -->
	<!-- Comply banner -->
	<section class="component comply">
		<div class="container">
			<div class="col-sm-6">
				<h2><?php the_field('comply_title'); ?></h2>
			</div>
			<div class="col-sm-6">
				<p><?php the_field('comply_text'); ?></p>
				<a href="<?php echo get_page_link( get_page_by_title( performance )->ID ); ?>" class="cta">See our performance tab</a>
			</div>
		</div>
	</section>
	<!-- End comply banner -->
	
	</article><!-- #post-<?php the_ID(); ?> -->