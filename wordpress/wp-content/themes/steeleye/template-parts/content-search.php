<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Steeleye
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search_result'); ?>>
	<div class="container results_container">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			
			<?php endif; ?>
		</header><!-- .entry-header -->

		

		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="cta cta_blue">Read more</a>
		</div><!-- .entry-summary -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
