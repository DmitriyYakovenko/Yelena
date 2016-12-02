<?php
/*
Template Name: Yelena-testimonials
*/?>


<?php get_header(); ?>
<?php get_sidebar() ?>
		<section class="wrapper comment testimonials">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php
					$args = array( 'post_type' => 'testimonials', 'posts_per_page' => -1 );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="comment-item">
							<div class="photo-after"> 
							<?php 
									$val = the_post_thumbnail( 'thumbnail' );
									if (!empty($val)) : echo the_post_thumbnail( 'thumbnail' );
									else: ?>
									<img src="<?php echo get_field('no_comment_icon_image', 'option')['url']; ?>">  
							<?php endif; ?>		
							

							<!-- <?php 
									//$val = the_post_thumbnail( 'thumbnail' );
									//if (the_post_thumbnail( 'thumbnail' )) : echo the_post_thumbnail( 'thumbnail' );
									//else: echo (get_field('no_comment_icon_image', 'option')); 
									//endif;
							?>  -->
							</div>
							<div class="text">
								<?php the_content();?>
							</div>
							<h5 class="after"><?php the_title();?></h5>
						</div>
						</div>

					
						<?php endwhile;  ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</section>
		<!--END CONTENT-->
		<!--	section.wrapper>.container>.row>.col-lg-12.col-md-12.col-sm-12.col-xs-12-->
			<!--END MODAL-->
		

	<section class="wrapper testimonials-slider">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!--
						<div class="owl-carousel">
							<div class="item"><img src="<?php echo get_field('slide1', 'option')['url']; ?>" alt="#"></div>
							<div class="item"><img src="<?php echo get_field('slide2', 'option')['url']; ?>" alt="#"></div>
							<div class="item"><img src="<?php echo get_field('slide3', 'option')['url']; ?>" alt="#"></div>
							<div class="item"><img src="<?php echo get_field('slide4', 'option')['url']; ?>" alt="#"></div>
						</div>
-->
						<?php echo do_shortcode('[foogallery id="398"]'); ?>
					</div>
				</div>
			</div>
	</section>

	

		<!--END CONTENT-->
		<!--	section.wrapper>.container>.row>.col-lg-12.col-md-12.col-sm-12.col-xs-12-->

<?php get_footer(); ?>


