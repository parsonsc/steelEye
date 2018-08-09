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
	
	<section class="component slideshow">
		<div class="background_animation homepage_animation">
			<ul>
				<li class="circle circle_01">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_01.png" alt="">
				</li>

				<li class="circle circle_02">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_02.png" alt="">
				</li>

				<li class="circle circle_03">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_03.png" alt="">
				</li>

				<li class="circle circle_04">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_04.png" alt="">
				</li>

				<li class="circle circle_05">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_05.png" alt="">
				</li>

				<li class="circle circle_06">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_06.png" alt="">
				</li>

				<li class="circle circle_07">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_07.png" alt="">
				</li>

				<li class="circle circle_08">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_08.png" alt="">
				</li>

				<li class="circle circle_09">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_09.png" alt="">
				</li>

				<li class="circle circle_10">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_10.png" alt="">
				</li>

				<li class="circle circle_11">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_11.png" alt="">
				</li>

				<li class="circle circle_12">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_01.png" alt="">
				</li>

				<li class="circle circle_13">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_02.png" alt="">
				</li>

				<li class="circle circle_14">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_03.png" alt="">
				</li>
				<li class="circle circle_15">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_04.png" alt="">
				</li>

				<li class="circle circle_16">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_05.png" alt="">
				</li>

				<li class="circle circle_17">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_06.png" alt="">
				</li>

				<li class="circle circle_18">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_07.png" alt="">
				</li>

				<li class="circle circle_19">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_08.png" alt="">
				</li>

				<li class="circle circle_20">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/header/circle_09.png" alt="">
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="homepage_banner">
				<h1><?php the_field('hero_banner_title'); ?></h1>
				<a href="#demo" rel="modal:open" class="cta mobile_only">Book a demo</a>
			</div>
			<div class="carousel_wrap desktop_only">				
				<div id="carousel">					
					<?php $loop = new WP_Query( array( 'post_type' => 'homepage_carousel', 'paged' => $paged ) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
				            <div class="shadow">
								<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/circle.png" id="item-1" />
								<div class="caption carous_item ">
									<a href="<?php the_field('carousel_slide_link'); ?>"><span class="carous_desc"><?php echo the_title(); ?></span></a>
									<!-- <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/plus.svg"  /> -->
								</div>
							</div>
				        <?php endwhile;
				        if (  $loop->max_num_pages > 1 ) : ?>
				            
				        <?php endif;
				    endif;
				    wp_reset_postdata();
					?>						
				</div>
				
				<div class="carousel_controls">
			    	<a href="#" id="prev" class="carousel_arrow prev"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/carousel_left.svg"  /></a>
			    	<a href="#" id="next" class="carousel_arrow next"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/carousel_right.svg"  /></a>
			    </div>
			</div>
		</div>
	</section>
	
	<!-- Improve your business -->
	<section class="component improve_business">
		<div class="container">
			<div class="col-sm-6">
				<h2><?php the_field('improvetitle'); ?></h2>
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic1.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">				
			</div>
			<div class="col-sm-6  business_options">
				<ul>
					<li>
						<h3><?php the_field('option_1_title'); ?></h3>
						<?php the_field('improve_option_1'); ?>
					</li>
					<li>
						<h3><?php the_field('option_2_title'); ?></h3>
						<?php the_field('improve_option_2'); ?>
					</li>
					<li>
						<h3><?php the_field('option_3_title'); ?></h3>
						<?php the_field('improve_option_3'); ?>
					</li>
					<a href="#demo" rel="modal:open" class="cta demo_cta">Book a demo</a>
				</ul>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>
	<!-- End -->
	<!-- Regulatory duties -->
	<section class="component regulatory_duties">
		<div class="container">
			<div class="col-sm-7 nopadding">
				<div class="regulatory_duties_block">
					<h2><?php the_field('regulatory_duties_title'); ?></h2>
					<div>
						<div class="mobile_only regulatory_duties_video"><?php the_field('regulatory_duties_video'); ?> </div>
						<?php the_field('regulatory_duties_text'); ?>						
						<a href="<?php the_field('regulatory_duties_read_more_link'); ?>" class="read_more">READ MORE +</a>
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
			</div>
			<div class="col-sm-5 regulatory_duties_video desktop_only">
				<?php the_field('regulatory_duties_video'); ?>


			</div>
			<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic2.svg" alt="" class="piechart piechart_green os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">		
		</div>
	</section>
	<div class="clearfix"></div>
	<!-- end -->
	
	<!-- Product features -->
	<section class="component product_features">
		<div class="container">
			<header>
				<h2>Our product features</h2>
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
							<a href="#demo" rel="modal:open" class="">Book a demo</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Product features -->
	<section class="component built_accordion os- " id="built_accordion" data-os-animation="fadeIn" data-os-animation-delay="0.5s">
		<div class="background_animation accordion_animation">
			<ul>
				<li class="circle circle_01">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_01.png" alt="">
				</li>

				<li class="circle circle_02">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_02.png" alt="">
				</li>

				<li class="circle circle_03">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_03.png" alt="">
				</li>

				<li class="circle circle_04">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_04.png" alt="">
				</li>

				<li class="circle circle_05">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_05.png" alt="">
				</li>

				<li class="circle circle_06">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_06.png" alt="">
				</li>

				<li class="circle circle_07">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_07.png" alt="">
				</li>

				<li class="circle circle_08">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_08.png" alt="">
				</li>

				<li class="circle circle_09">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_09.png" alt="">
				</li>

				<li class="circle circle_10">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_10.png" alt="">
				</li>

				<li class="circle circle_11">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_11.png" alt="">
				</li>
				<!--  -->
				<li class="circle circle_12">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_01.png" alt="">
				</li>

				<li class="circle circle_13">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_02.png" alt="">
				</li>

				<li class="circle circle_14">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_03.png" alt="">
				</li>

				<li class="circle circle_15">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_04.png" alt="">
				</li>

				<li class="circle circle_16">
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/background/accordion/circle_05.png" alt="">
				</li>

				
			</ul>
		</div>
		<div class="container">
			<div class="accordion desktop_only">
				<div class="tabbed-content tabs-side">
					<h2>Built for you</h2>

					
					<nav class="tabs">
						<ul>
							<?php $loop = new WP_Query( array( 'post_type' => 'builtforyou', 'paged' => $paged ) );
						    if ( $loop->have_posts() ) :
						        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						          <li><a href="#<?php echo get_the_ID() ?>" class=""><?php the_title(); ?></a></li>
						        <?php endwhile;
						       
						    endif;
						    wp_reset_postdata();
						?>			
							
					</nav>

					<?php $loop = new WP_Query( array( 'post_type' => 'builtforyou', 'paged' => $paged ) );
						    if ( $loop->have_posts() ) :
						        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						          <section id="<?php echo get_the_ID() ?>" class="item" data-title="<?php echo get_the_ID() ?>">
						          	<div class="item-content">
										<?php the_content(); ?>
									</div>
						          </section>
						        <?php endwhile;
						        if (  $loop->max_num_pages > 1 ) : ?>
						            
						        <?php endif;
						    endif;
						    wp_reset_postdata();
						?>			
					
				</div>
			</div>

			<div class="mobile_accordion mobile_only">
				
				<section class="ac-container"><h2>Built for you</h2>
					<div>
						<input id="ac-1" name="accordion-1" type="checkbox" />
						<label for="ac-1">Banks</label>
						<article class="ac-small">
							<p>Insurance companies face many regulatory reporting requirements. SteelEye’s features allow compliance officers to quickly gather the required data and submit it to their regulatory body with minimum workflow. The business also benefits by having access to analytical tools that provide genuine insights into business performance and productivity.</p>
						</article>
					</div>
					<div>
						<input id="ac-2" name="accordion-1" type="checkbox" />
						<label for="ac-2">Asset Management Funds</label>
						<article class="ac-medium">
							<p>Insurance companies face many regulatory reporting requirements. SteelEye’s features allow compliance officers to quickly gather the required data and submit it to their regulatory body with minimum workflow. The business also benefits by having access to analytical tools that provide genuine insights into business performance and productivity.</p>
						</article>
					</div>
					<div>
						<input id="ac-3" name="accordion-1" type="checkbox" />
						<label for="ac-3">Insurance Companies</label>
						<article class="ac-large">
							<p>Insurance companies face many regulatory reporting requirements. SteelEye’s features allow compliance officers to quickly gather the required data and submit it to their regulatory body with minimum workflow. The business also benefits by having access to analytical tools that provide genuine insights into business performance and productivity.</p>
						</article>
					</div>
					<div>
						<input id="ac-4" name="accordion-1" type="checkbox" />
						<label for="ac-4">Brokerage Firms</label>
						<article class="ac-large">
							<p>Insurance companies face many regulatory reporting requirements. SteelEye’s features allow compliance officers to quickly gather the required data and submit it to their regulatory body with minimum workflow. The business also benefits by having access to analytical tools that provide genuine insights into business performance and productivity.</p>
						</article>
					</div>
					<div>
						<input id="ac-5" name="accordion-1" type="checkbox" />
						<label for="ac-5">Mutual Funds</label>
						<article class="ac-large">
							<p>Insurance companies face many regulatory reporting requirements. SteelEye’s features allow compliance officers to quickly gather the required data and submit it to their regulatory body with minimum workflow. The business also benefits by having access to analytical tools that provide genuine insights into business performance and productivity.</p>
						</article>
					</div>
					<div>
						<input id="ac-6" name="accordion-1" type="checkbox" />
						<label for="ac-6">Credit Unions</label>
						<article class="ac-large">
							<p>Insurance companies face many regulatory reporting requirements. SteelEye’s features allow compliance officers to quickly gather the required data and submit it to their regulatory body with minimum workflow. The business also benefits by having access to analytical tools that provide genuine insights into business performance and productivity.</p>
						</article>
					</div>

				</section>
			</div>
		</div>
	</section>
	<!-- End accordion -->
	<!-- Expertise -->
	<section class="component expertise">
		<div class="container">
			<header>
				<h2><?php the_field('expertise_title'); ?></h2>
			</header>
			<div class="expertise_list">
				<ul class="row">
					<?php $loop = new WP_Query( array( 'post_type' => 'advice', 'posts_per_page' => 4, 'paged' => $paged ) );
					if ( $loop->have_posts() ) :
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<li class="col-sm-3 advice_article">
						<div class="col-sm-12 nopadding">
							<a href="<?php echo get_permalink( $post->ID ); ?>"><img src="<?php the_field('article_thumbnail'); ?>" alt="Thumbnail"></a>
						</div>
						<div class="advice_article_block col-sm-12">
							<a href="<?php echo get_permalink( $post->ID ); ?>"><h3 class="title"><?php the_field('advice_block_title'); ?></h3></a>
							<p><?php the_field('advice_block_text'); ?></p>
							<a href="<?php echo get_permalink( $post->ID ); ?>" class="read_more">READ MORE +</a>
						</div>
					</li>
					<?php endwhile;
					if (  $loop->max_num_pages > 1 ) : ?>
					<div id="nav-below" class="navigation">
						<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'domain' ) ); ?></div>
						<div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'domain' ) ); ?></div>
					</div>
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
		</div>
	</section>
	<!-- End Expertise -->
	</article><!-- #post-<?php the_ID(); ?> -->