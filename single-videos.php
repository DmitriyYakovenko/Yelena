<?php get_header(); ?>
<?php get_sidebar(); ?>
<body class="video video-page">

	<section class="wrapper categorios">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="video-category">
						<div class="vidio-content">
							<div class="video-if" width="945" height="526">
								<p class="text"><?php the_post(); ?></p>
								<?php echo get_field('link_video', $post->ID) ;?>


							</div>
							<a href="#" class="button inspired">STAY inspired <i class="fa fa-caret-right" aria-hidden="true"></i></a>
								<!-- <ul class="video-soc">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook <span>24</span></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter <span>24</span></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i>LikedIn <span>358</span></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i>Pinterest <span>35</span></a></li>
								</ul> -->
								<?= get_social_likes( $post->ID ); ?>
								<!-- <p class="comments"></p> -->
								<h3><?php the_title(); ?></h3>
								
								<!-- <p class="text"><?php// echo "<p class=\"text\">".get_the_content()."</p>"; ?></p> -->
								<p class="text"><?= the_content() ?></p>
								
								<p class="text">
									<?= get_field('text1') ?>
								</p>
								
								

								<div class="description">
									<p class="text"><?= get_field('description_1') ?></p>
								</div> 
							
								<div class="twitter-block">
									
									<?php echo do_shortcode( '[bctt tweet="' .  get_field('quote_text', $post->ID) . '"]') ;?>
									<a href="http://twitter.com" class="twitter">@yelenkostyugova</a>
									
								</div>
	<!-- 									  	<div
											  class="fb-like"
											  data-share="true"
											  data-width="450"
											  data-show-faces="true">
											</div> -->

											<p class="text"><?= get_field('text2') ?></p>

											<a href="#" class="button last inspired">STAY inspired <i class="fa fa-caret-right" aria-hidden="true"></i></a>
							<!-- 	<ul class="video-soc">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook <span>24</span></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter <span>24</span></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i>LikedIn <span>358</span></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i>Pinterest <span>35</span></a></li>
								</ul> -->
								<?= get_social_likes( $post->ID ); ?>

								<div class="video-comments">
									<?php comments_template(); ?>

									<div class="add-comment">

									</div>

									
									<!-- <a href="#" class="button more">more comments<i class="fa fa-caret-down" aria-hidden="true"></i></a> -->
									<i class="fa fa-chevron-circle-up top" aria-hidden="true" class="scroll-top" data-scroll="scroll-top"></i>
									<?php

										$previous_post = get_previous_post($in_same_cat = true);
										$next_post = get_next_post($in_same_cat = true);
										$previous_post_short_title = wp_trim_words($previous_post->post_title, 5, '...');
										$next_post_short_title = wp_trim_words($next_post->post_title, 5, '...');

									?>

									<a href="<?php echo $previous_post->guid; ?>" class="how-to"><i class="fa fa-caret-left" aria-hidden="true"></i><?php echo $previous_post_short_title; ?></a>
									<a href="<?php echo $next_post->guid; ?>" class="the-most"><?php echo $next_post_short_title; ?><i class="fa fa-caret-right" aria-hidden="true"></i></a>

<!--									--><?//= next_post_link($in_same_term = true) ?>
<!--										--><?//= previous_post_link($in_same_term = true) ?>


								</div>
							</div>
						</div>	
					</div>
				</div>
				
				<?php $categories = get_terms('category', array(
					'post_type' => 'videos',
					'fields' => 'all'
					));	?>
				<?php $my_category = wp_get_post_terms($post->ID, 'category'); 
				$all_categories = array();

				foreach ($my_category as $value){

					if($value->name == 'Uncategorized'){
						continue;
					}
					$all_categories[] = $value->name;
				}
				?>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<hr class="sline">
						<h2>You may also like</h2>
						<div class="button categoria">

							<?php foreach ($categories as $cat) : 

							if($cat->name == 'Uncategorized'){
								continue;
							}
							?>

							<a href="<?php echo get_category_link($cat->term_id); ?>" class="cat">
								<div>
									<img src="<?php echo z_taxonomy_image_url($cat->term_id, 'thumbnail'); ?>" alt="">
									<p class="new">Watch now</p>
									<div class="text"><h4><?php echo $cat->name; ?></h4></div>
								</div>
							</a>

						<?php endforeach; ?>
					</div>
				</div>			
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>