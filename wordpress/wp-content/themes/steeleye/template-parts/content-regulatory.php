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
		<div class="container">
			<div class="intro_content">
				<?php echo the_content(); ?>

				
			</div>
		</div>
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic1.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">	
	</section>
	<!-- End intro section -->


	<section class="component generic_features reg_body_features">
		<div class="container">
			<header>
				<h2>Other regulatory bodies</h2>
			</header>
			<div class="features">
				<ul class="row">
					<?php $loop = new WP_Query( array( 'post_type' => 'regulatory_bodies', 'post__not_in' => array (get_the_ID()), 'paged' => $paged ) );
					if ( $loop->have_posts() ) :
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li class="col-sm-4 ">
						<div class="advice_article_block">
							<h3 class="title"><?php the_title(); ?></h3>
							<p><?php the_field('regulatory_body_intro'); ?></p>
							<a href="<?php echo get_permalink( $post->ID ); ?>" class="cta cta_blue">Read more</a>
						</div>
					</li>
					<?php endwhile;
					if (  $loop->max_num_pages > 1 ) : ?>
		
					<?php endif;
					endif;
					wp_reset_postdata();
					?>

					<li class="feature_demo col-sm-4">
						<div class="demo_block">
							<p style="height: 46px;">See how we take your regulatory data and turn it into competitive advantage</p>
							<a href="#demo" rel="modal:open" class="">Book a demo</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	
	
	<!-- End meet the team -->
	<div class="clearfix"></div>
	<!-- end -->

		
</article><!-- #post-<?php the_ID(); ?> -->