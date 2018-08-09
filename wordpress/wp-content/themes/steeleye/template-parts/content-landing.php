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
	<section class="component ">
		<div class="container">
			<div class="basic_content">
				<?php echo the_content(); ?>


			</div>
		</div>
	</section>
	<!-- End intro section -->
	
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
					$query = new WP_Query( array( 'post_type' => 'product_features', 'paged' => $paged ) );
					if ( $query->have_posts() ) : ?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					
					
					<li class="col-sm-4 ">
						<div class="feature_block">
							<h3 class="title"><?php the_title(); ?></h3>
							<?php the_content(); ?>
							<a href="<?php the_field('product_features_read_more_link'); ?>" class="cta cta_blue read_more">READ MORE</a>
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
							<a href="">Book a demo</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	
	

		
</article><!-- #post-<?php the_ID(); ?> -->