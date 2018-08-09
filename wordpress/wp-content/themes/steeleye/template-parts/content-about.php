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

	<!-- Regulatory duties -->
	<section class="component regulatory_duties">
		<div class="container">
			<div class="col-sm-7 nopadding">
				<div class="regulatory_duties_block">
					<h2><?php the_field('regulatory_champion_title'); ?></h2>
					<div>
						<?php the_field('regulatory_champion_text'); ?>						
						<a href="#meet-the-team" class="read_more">Meet the team behind SteelEye.</a>
						
					</div>
				</div>
			</div>
		</div>
		<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/graphic2.svg" alt="" class="piechart piechart_blue os-animation desktop_only" data-os-animation="zoomIn" data-os-animation-delay="0s">
	</section>
	<!-- End -->
	<!-- Meet the team -->
	<section class="component teams" id="meet-the-team">
		<div class="container">
			<header>
				<div class="col-sm-6">
					<h2><?php the_field('meet_the_team_title'); ?></h2>
				</div>
				<div class="col-sm-6">
					<p><?php the_field('meet_the_team_intro'); ?></p>
				</div>
				
			</header>

			<!-- Tabbed section -->		
			<div class='multitab-section'>
				<ul class='multitab-widget multitab-widget-content-tabs-id'>
					<li class='multitab-tab'><a href='#multicolumn-widget-id1'>The Team</a></li>
					<li class='multitab-tab'><a href='#multicolumn-widget-id2'>The Board</a></li>
				</ul>
				<div class='multitab-widget-content multitab-widget-content-widget-id advice' id='multicolumn-widget-id1'>

					<ul class="advice_grid row">
						<?php $loop = new WP_Query( array( 'post_type' => 'team_members', 'category_name' => 'team', 'paged' => $paged ) );
						    if ( $loop->have_posts() ) :
						        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						            <li class="col-md-6  team_member ">										
										<div class="team_member_inner ">

											<a href="#<?php echo get_the_ID() ?>" rel="modal:open">
												<div class="col-sm-6 nopadding member_image member_block">
													<?php the_post_thumbnail(); ?>
												</div>
											</a>						            	
											
											<div class="team_member_details member_block col-sm-6">	
												<a href="#<?php echo get_the_ID() ?>" rel="modal:open">											
													<h3 class="title"><?php the_title() ?></h3></a>
													<span class="job_title"><?php the_field('team_member_job_title'); ?></span>
												
												<div class="contact_links">
													<ul>
														<li><a href=""><i class="fas fa-envelope"></i></a></li>
														<li><a href=""><i class="fab fa-linkedin"></i></a></li>
													</ul>
												</div> 
										        
											</div>
										</div>

										<div id="<?php echo get_the_ID() ?>" class="modal">
											<div class="col-sm-4 member_modal_block">
								           		
									           	<?php the_post_thumbnail(); ?>
									           	<h3 class="title"><?php the_title() ?></h3>
												<span class="job_title"><?php the_field('team_member_job_title'); ?></span>
												<div class="contact_links">
													<ul>
														<li><a href=""><i class="fas fa-envelope"></i></a></li>
														<li><a href=""><i class="fab fa-linkedin"></i></a></li>
													</ul>
												</div>
								           	</div>
											<div class="col-sm-8 member_modal_block">
												<?php echo the_content(); ?>
											</div>
										  <a href="#" rel="modal:close" class="close_button"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/close_blue.svg" alt=""></a>
										</div>


									</li>
						        <?php endwhile;
						        if (  $loop->max_num_pages > 1 ) : ?>
						            
						        <?php endif;
						    endif;
						    wp_reset_postdata();
						?>					
					</ul>
				</div>
				<div class='multitab-widget-content multitab-widget-content-widget-id advice ' id='multicolumn-widget-id2'>
					<ul class="advice_grid row">
						<?php $loop = new WP_Query( array( 'post_type' => 'team_members', 'category_name' => 'board', 'paged' => $paged ) );
						    if ( $loop->have_posts() ) :
						        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            <li class="col-md-6  team_member ">
						            	<div class="team_member_inner">
											<div class="col-sm-6 nopadding member_image member_block">
												<a href="#<?php echo get_the_ID() ?>" rel="modal:open">
													<?php the_post_thumbnail(); ?>
												</a>
											</div>
											<div class="team_member_details member_block col-sm-6">
												<a href="#<?php echo get_the_ID() ?>" rel="modal:open">
													<h3 class="title"><?php the_title() ?></h3>
												</a>
												<span class="job_title"><?php the_field('team_member_job_title'); ?></span>
												
												<div class="contact_links">
													<ul>
														<li><a href=""><i class="fas fa-envelope"></i></a></li>
														<li><a href=""><i class="fab fa-linkedin"></i></a></li>
													</ul>
												</div>

												<div id="<?php echo get_the_ID() ?>" class="modal">
										           	<div class="col-sm-4 member_modal_block">
										           		
											           	<?php the_post_thumbnail(); ?>
											           	<h3 class="title"><?php the_title() ?></h3>
														<span class="job_title"><?php the_field('team_member_job_title'); ?></span>
														<div class="contact_links">
															<ul>
																<li><a href=""><i class="fas fa-envelope"></i></a></li>
																<li><a href=""><i class="fab fa-linkedin"></i></a></li>
															</ul>
														</div>
										           	</div>
													<div class="col-sm-8 member_modal_block">
														<?php echo the_content(); ?>
													</div>
													<a href="#" rel="modal:close" class="close_button"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/static/images/layout/close_blue.svg" alt=""></a>
										        </div>
												<!-- <a href="<?php echo get_permalink( $post->ID ); ?>" class="read_more">READ MORE +</a> -->
											</div>
										</div>
									</li>
					        <?php endwhile;
					        if (  $loop->max_num_pages > 1 ) : ?>
					            
					        <?php endif;
					    endif;
					    wp_reset_postdata();
						?>					
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End meet the team -->
	<div class="clearfix"></div>
	<!-- end -->

		
</article><!-- #post-<?php the_ID(); ?> -->