<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Steeleye
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<?php if ( have_posts() ) : ?>
			<div class="resource_hero_banner">
				<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				<div class="banner hero_banner" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover;">
					<div class="container">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'steeleye' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
						
					</div>				
				</div>
			</div>
			<div class="search_results">


				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
