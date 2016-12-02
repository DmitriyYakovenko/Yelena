<?php
/*
Template Name: Yelena-coaching
*/?>
<?php get_header(); ?>
<?php get_sidebar() ?>
<body class="about-my coaching">
		<section class="wrapper about-me">
			<div class="container">
				<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="title"><?php echo get_post_meta($post->ID, 'title_coaching', true); ?></h2>
				</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4 size">
						<?php 
							$img = get_field('photo_1', $post->ID)['url'];
							if($img):
		                        $attachment_id = get_attachment_id_from_src($img);
		                        $new_img = wp_get_attachment_image_src ( $attachment_id, 'about_first');
		                    ?>
	                    	<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
	                    <?php endif;?>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-8 size">
						<h2><?php echo get_post_meta($post->ID, 'title_about_1', true); ?></h2>
						
						<p><?= get_field('text_1') ?></p>


					</div>
				</div>
			</div>
		</section>
		<section class="wrapper about-me descr testimonials bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="descriptions">
							<h2><?php echo get_post_meta($post->ID, 'title_about_2', true); ?></h2>
							<p class="text"><?= get_field('text_2') ?></p>
							<ul class="description">
								<li><?= get_field('par_1') ?></li>
								<li><?= get_field('par_2') ?></li>
								<li><?= get_field('par_3') ?></li>
								<li><?= get_field('par_4') ?></li>
							</ul> 						
					</div>
						<p><?= get_field('description_2') ?></p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="comment-item white">
							<div class="photo-after">
								<?php 
									$val = get_field('icon_coment_1', $post->ID)['url'];
									if (!empty($val)) :  ?> 
									<img src="<?php echo get_field('icon_coment_1', $post->ID)['url']; ?>" alt="#">
									<?php else: ?>
							 		<img src="<?php echo get_field('no_comment_icon_image', 'option')['url']; ?>"> 
								<?php endif; ?>
							</div>
							<div class="text">
								<p><?= get_field('text_coment_1') ?></p>
							</div>
							<h5 class="after"><?= get_field('author_1') ?></h5>
						</div>
						<div class="comment-item white">
							<div class="photo-after">
								<?php 
									$val = get_field('icon_coment_2', $post->ID)['url'];
									if (!empty($val)) :  ?> 
									<img src="<?php echo get_field('icon_coment_2', $post->ID)['url']; ?>" alt="#">
									<?php else: ?>
							 		<img src="<?php echo get_field('no_comment_icon_image', 'option')['url']; ?>"> 
								<?php endif; ?>
							</div>
							<div class="text">
								<p><?= get_field('text_coment_2') ?></p>
							</div>
							<h5 class="after"><?= get_field('author_2') ?></h5>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="wrapper about-me bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-6 col-sm-7 col-xs-8 size-2">
						<h2><?php echo get_post_meta($post->ID, 'title_about_3', true); ?></h2>
						<p class="text"><?= get_field('text_3') ?></p>

					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-4 size-2">
						<?php 
							$img = get_field('photo_2', $post->ID)['url'];
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
		<section class="wrapper about-me descr testimonials bg-white">
			<div class="container">
				<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="comment-item white">
							<div class="photo-after">
								<?php 
									$val = get_field('icon_coment_3', $post->ID)['url'];
									if (!empty($val)) :  ?> 
									<img src="<?php echo get_field('icon_coment_3', $post->ID)['url']; ?>" alt="#">
									<?php else: ?>
							 		<img src="<?php echo get_field('no_comment_icon_image', 'option')['url']; ?>"> 
								<?php endif; ?>
							</div>
							<div class="text">
								<p><?= get_field('text_coment_3') ?></p>
							</div>
							<h5 class="after"><?= get_field('author_3') ?></h5>
						</div>
						<div class="comment-item white">
							<div class="photo-after">
								<?php 
									$val = get_field('icon_coment_4', $post->ID)['url'];
									if (!empty($val)) :  ?> 
									<img src="<?php echo get_field('icon_coment_4', $post->ID)['url']; ?>" alt="#">
									<?php else: ?>
							 		<img src="<?php echo get_field('no_comment_icon_image', 'option')['url']; ?>"> 
								<?php endif; ?>
							</div>
							<div class="text">
								<p><?= get_field('text_coment_4') ?></p>
							</div>
							<h5 class="after"><?= get_field('author_4') ?></h5>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="descriptions">
							<h2><?php echo get_post_meta($post->ID, 'title_about_4', true); ?></h2>
							<p class="text"><?= get_field('text_4') ?></p>
							<div class="description">
								<p><?= get_field('description_4') ?></p>
							</div> 
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="wrapper appl-form">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h3><?php echo get_post_meta($post->ID, 'form_name', true); ?></h3>
						
<?php echo do_shortcode( '[contact-form-7 id="264" title="form_coaching_page"]'); ?>
					</div>
				</div>
			</div>
		</section>
		<section class="wrapper  testimonials bg-white">
			<div class="container">
				<div class="row">

					<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
						<div class="comment-item">
							<div class="photo-after">
								<?php 
									$val = get_field('icon_coment_5', $post->ID)['url'];
									if (!empty($val)) :  ?> 
									<img src="<?php echo get_field('icon_coment_5', $post->ID)['url']; ?>" alt="#">
									<?php else: ?>
							 		<img src="<?php echo get_field('no_comment_icon_image', 'option')['url']; ?>"> 
								<?php endif; ?>
							</div>
							<div class="text">
								<p><?= get_field('text_coment_5') ?></p>

							</div>
							<h5 class="after"><?= get_field('author_5') ?></h5>
						</div>
					</div>
					<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
						<div class="comment-item">
							<div class="photo-after">
								<?php 
									$val = get_field('icon_coment_6', $post->ID)['url'];
									if (!empty($val)) :  ?> 
									<img src="<?php echo get_field('icon_coment_6', $post->ID)['url']; ?>" alt="#">
									<?php else: ?>
							 		<img src="<?php echo get_field('no_comment_icon_image', 'option')['url']; ?>"> 
								<?php endif; ?>
							</div>
							<div class="text">
								<p><?= get_field('text_coment_6') ?></p>
							</div>
							<h5 class="after"><?= get_field('author_6') ?></h5>
						</div>
						
					</div>
					<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
						<div class="comment-item">
							<div class="photo-after">
								<?php 
									$val = get_field('icon_coment_7', $post->ID)['url'];
									if (!empty($val)) :  ?> 
									<img src="<?php echo get_field('icon_coment_7', $post->ID)['url']; ?>" alt="#">
									<?php else: ?>
							 		<img src="<?php echo get_field('no_comment_icon_image', 'option')['url']; ?>"> 
								<?php endif; ?>
							</div>
							<div class="text">
								<p><?= get_field('text_coment_7') ?></p>
							</div>
							<h5 class="after"><?= get_field('author_7') ?></h5>
						</div>

					</div>
					<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
						<div class="comment-item">
							<div class="photo-after">
								<?php 
									$val = get_field('icon_coment_8', $post->ID)['url'];
									if (!empty($val)) :  ?> 
									<img src="<?php echo get_field('icon_coment_8', $post->ID)['url']; ?>" alt="#">
									<?php else: ?>
							 		<img src="<?php echo get_field('no_comment_icon_image', 'option')['url']; ?>"> 
								<?php endif; ?>
							</div>
							<div class="text">
								<p><?= get_field('text_coment_8') ?></p>

							</div>
							<h5 class="after"><?= get_field('author_8') ?></h5>
						</div>
					</div>
				</div>
			</div>
		</section>
</body>
<?php get_footer(); ?>