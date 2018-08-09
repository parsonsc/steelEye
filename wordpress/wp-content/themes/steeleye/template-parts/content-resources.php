<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package drgn
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(resources_container); ?>>
	
	<section class="component resources">
		
		<div class="container">
			<!-- Tabbed section -->
		
			<div class='multitab-section'>
				<ul class='multitab-widget multitab-widget-content-tabs-id'>
					<li class='multitab-tab'><a href='#multicolumn-widget-id1'>Whitepapers</a></li>
					<li class='multitab-tab'><a href='#multicolumn-widget-id2'>News</a></li>
					<li class='multitab-tab'><a href='#multicolumn-widget-id3'>Press</a></li>
				</ul>
				<div class='multitab-widget-content multitab-widget-content-widget-id advice' id='multicolumn-widget-id1'>
					<header>
						<h2><?php the_field('advice_section_title'); ?></h2>
					</header>

					<ul class="advice_grid row">
					
						<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args = array('posts_per_page' => 4, 'paged' => $paged, 'post_type' => advice,);

						$custom_query = new WP_Query( $args );


						while($custom_query->have_posts()) : 
						   $custom_query->the_post();	
						?>

						<li class="col-sm-6 nopadding advice_article">
							<div class="col-sm-6 nopaddingmobile">
								<a href="<?php echo get_permalink( $post->ID ); ?>" class=""><img src="<?php the_field('article_thumbnail'); ?>" alt="Thumbnail"></a>
							</div>
							<div class="advice_article_block col-sm-6">
								<a href="<?php echo get_permalink( $post->ID ); ?>"><h3 class="title"><?php the_field('advice_block_title'); ?></h3></a>
								<p><?php the_field('advice_block_text'); ?></p>
								<a href="<?php echo get_permalink( $post->ID ); ?>" class="read_more">READ MORE +</a>
							</div>
						</li>										
					    <?php endwhile; ?>	
						
   					
					</ul>
					<div class="pagination_container">
						<ul>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li class="pagination_controls pagination_next">
								<a href="#"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/pagination_next.svg" alt=""></a>	
							</li>
							<li class="pagination_controls last">
								<a href="#"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/pagination_final.svg" alt=""></a>	
							</li>
						</ul>
				</div>
				</div>
				<div class='multitab-widget-content multitab-widget-content-widget-id news' id='multicolumn-widget-id2'>
					<header>
						<h2>SteelEye news stream</h2>
						<p>Stay informed with SteelEye’s announcements as we continue to innovate in financial regulatory compliance software.</p>
						<!-- <p>For SteelEye press enquiries, click here</p> -->
					</header>

					<ul class="news_grid row">
						<?php $loop = new WP_Query( array( 'post_type' => 'news', 'paged' => $paged ) );
						    if ( $loop->have_posts() ) :
						        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						            <li class="col-sm-6 nopadding news_article">
										<div class="col-sm-6 nopaddingmobile">
											<a href="<?php echo get_permalink( $post->ID ); ?>"><img src="<?php the_field('article_thumbnail'); ?>" alt="Thumbnail"></a>
										</div>
										<div class="news_article_block col-sm-6">
											<p class="date"><?php the_time('F Y') ?></p>
											<a href="<?php echo get_permalink( $post->ID ); ?>"><h3 class="title"><?php echo get_the_title( $post_id ); ?></h3></a>
								
											<a href="<?php echo get_permalink( $post->ID ); ?>" class="read_more">READ MORE +</a>
										</div>
									</li>
						        <?php endwhile;
						        if (  $loop->max_num_pages > 1 ) : ?>
						           
						        <?php endif;
						    endif;
						    wp_reset_postdata();
						?>					
					</ul>
					<div class="pagination_container">
						<ul>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li class="pagination_controls pagination_next">
								<a href="#"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/pagination_next.svg" alt=""></a>	
							</li>
							<li class="pagination_controls last">
								<a href="#"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/pagination_final.svg" alt=""></a>	
							</li>
						</ul>
					</div>
				</div>
				<div class='multitab-widget-content multitab-widget-content-widget-id press' id='multicolumn-widget-id3'>
					<header>
						<h2><?php the_field('press_section_title'); ?></h2>
						<?php the_content(); ?>
					</header>	
							
				</div>
			</div>
		</div>
			
	</section>				
				
</article><!-- #post-<?php the_ID(); ?> -->