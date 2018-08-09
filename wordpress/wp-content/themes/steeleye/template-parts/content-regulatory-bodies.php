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
				<div class="comply_options">
					<ul class="row">
						<?php
						if ( get_query_var('paged') ) $paged = get_query_var('paged');
						if ( get_query_var('page') ) $paged = get_query_var('page');
						$query = new WP_Query( array( 'post_type' => 'regulatory_bodies', 'paged' => $paged ) );
						if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						
						
						<li>
							<a href="<?php echo get_permalink( $post->ID ); ?>" class="">
								<p><?php the_title(); ?></p>
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/plus.png" alt="">
							</a>									
						</li>
						<?php endwhile; wp_reset_postdata(); ?>
						<!-- show pagination here -->
						<?php else : ?>
						<!-- show 404 error here -->
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic1.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">	
	</section>
	</article><!-- #post-<?php the_ID(); ?> -->