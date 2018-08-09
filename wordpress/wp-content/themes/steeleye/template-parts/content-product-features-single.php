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
	
	<!-- Page content -->
	<section class="component page_content">
		<div class="container">
			<div class="page_content_content">
				<?php echo the_content(); ?>
					
			</div>			
		</div>
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic2.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">
	</section>
	
	<section class="component generic_features product_features">
		<div class="container">
			<header>
				<h2>Our other product features</h2>
			</header>
			<div class="features">
				<ul class="row">
					<?php
					if ( get_query_var('paged') ) $paged = get_query_var('paged');
					if ( get_query_var('page') ) $paged = get_query_var('page');
					$query = new WP_Query( array( 'post_type' => 'product_features', 'post__not_in' => array (get_the_ID()), 'paged' => $paged ) );
					if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					
					
					<li class="col-sm-4 ">
						<div class="feature_block">
							<h3 class="title"><?php the_title(); ?></h3>
							<?php the_field('product_feature_page_copy'); ?>
							<a href="<?php echo get_permalink( $post->ID ); ?>" class="cta cta_blue read_more">READ MORE</a>
						</div>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- show pagination here -->
					<?php else : ?>
					<!-- show 404 error here -->
					<?php endif; ?>
					<li class="feature_demo col-sm-4">
						<div class="demo_block">
							<p>See how we take your regulatory data and turn it into competitive advantage</p>
							<a href="#demo" rel="modal:open">Book a demo</a>
						</div>
					</li>
				</ul>
			</div>
			
		</div>
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic1.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">	
	</section>
	
	</article><!-- #post-<?php the_ID(); ?> -->