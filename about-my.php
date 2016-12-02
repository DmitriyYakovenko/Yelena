<?php
/*
Template Name: Yelena-about-my2
*/?>
<?php get_header(); ?>

<?php get_sidebar(); ?>
<div class="about-my">	
		<section class="wrapper about-me">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4 size">

					<?php
					$img = get_field('img_1', $post->ID)['url'];
						if($img):
                        $attachment_id = get_attachment_id_from_src($img);
                        $new_img = wp_get_attachment_image_src ( $attachment_id, 'about_first');
                    ?>
                    <img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
                    <?php endif;?>


					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-8 size">
						<h2><?php echo get_post_meta($post->ID, 'title_1', true); ?></h2>
						<p class="text"><?= get_field('text_area_1') ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="wrapper comment">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<div class="comment-item">
							<div class="photo-after">
								<?php 
									$val = get_field('icon_coment_ab', $post->ID)['url'];
									if (!empty($val)) :  ?> 
									<img src="<?php echo get_field('icon_coment_ab', $post->ID)['url']; ?>" alt="#">
									<?php else: ?>
							 		<img src="<?php echo get_field('no_comment_icon_image', 'option')['url']; ?>"> 
								<?php endif; ?>
							</div>
							<div class="text">
								<p><?= get_field('coment_text_ab') ?></p>
								
							</div>
							<h5 class="after"><?= get_field('author_coment_ab') ?></h5>
						</div>
					</div>

					<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div class="tweet-this">
							<?php echo do_shortcode( '[bctt tweet="' .  get_field('midle_baner_text') . '"]') ;?>
						</div>
							<a href="<?= get_field('midle_baner_button_link') ?>" class="twitter"><?= get_field('email_name') ?></a>
						
					</div>
					

				</div>
			</div>
		</section>

		<section class="wrapper about-me">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-8 size-5">
						<h2><?php echo get_post_meta($post->ID, 'title_2', true); ?></h2>
						<p><?= get_field('text_area_2') ?></p>

					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4 size-5">
						<?php 
							$img = get_field('img_2', $post->ID)['url'];
							if($img):
		                        $attachment_id = get_attachment_id_from_src($img);
		                        $new_img = wp_get_attachment_image_src ( $attachment_id, 'about_first');
		                    ?>
	                    	<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
	                    <?php endif;?>
					</div>
				</div>
			</div>
		</section>
		<section class="wrapper about-me eyedrops">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4 size">	
						<?php 
							$img = get_field('img_3', $post->ID)['url'];
							if($img):
		                        $attachment_id = get_attachment_id_from_src($img);
		                        $new_img = wp_get_attachment_image_src ( $attachment_id, 'about_first');
		                    ?>
	                    	<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
	                    <?php endif;?>	
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-8 size">
						<h2><?php echo get_post_meta($post->ID, 'title_3', true); ?></h2>
						<p><?= get_field('text_area_3') ?></p>

					</div>
				</div>
			</div>
		</section>
		<section class="wrapper be-shared partner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<img src="<?php echo get_field('partner', $post->ID)['url']; ?>" alt="#">
					</div>
				</div>
			</div>
		</section>
</div>
<?php get_footer(); ?>