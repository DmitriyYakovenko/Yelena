<?php
/*
Template Name: Yelena-about-my
*/?>
<?php get_header();?>

<body class="mainpage">
<?php get_sidebar(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=1676474622573242";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- vivod postov -->
<section class="wrapper watch">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3 class="mini-title"><?php echo get_post_meta($post->ID, 'watch_video', true); ?></h3>
			</div>
			<?php 					
			$type = 'videos';
			$args=array(
						 'post_type' => $type,
						 'post_status' => 'publish',
						 'posts_per_page' => 6,
						 'caller_get_posts'=> 1,
						 'tax_query' => array(
							 	array(
						            'taxonomy' => 'category',
						            'field' => 'name',
						            'terms' => 'Uncategorized'
						            ),
							 	),

							 );

							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) :
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<a href="<?= get_the_permalink(); ?>">
					<div class="watch-item">
						<div class="indeximage">
							<img src="<?php the_post_thumbnail_url( $post->ID,  'video_thumbnail_hd' ); ?>" alt="#">
						</div>
						<h5><?php the_title(); ?></h5>
					</div>
				</a>
			</div>
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata() ; ?>
		</div>
	</div>
</section>
<section class="wrapper about-me">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

			<?php $img= get_field('image_1', $post->ID)['url']; 
				if($img):
					$attachment_id = get_attachment_id_from_src($img);
					$new_img = wp_get_attachment_image_src ( $attachment_id, 'index_img_one');
				?>

				<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
			<?php endif;?>

			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<span class="title-1"><h2><?php echo get_post_meta($post->ID, 'title_about_1', true); ?></h2></span>
				<p><?= get_field('about_me_1') ?></p>
				<a href="<?= get_field('find_out_more_1') ?>" class="button">find out more</a>
			</div>
		</div>
	</div>
</section>
<section class="wrapper comment">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="comment-item">
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
						<p><?= get_field('coment_text_1') ?></p>
					</div>
					<h5 class="after"><?= get_field('author_coment_1') ?></h5>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="comment-item">
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
						<p><?= get_field('coment_text_2') ?></p>
					</div>
					<h5 class="after"><?= get_field('author_coment_2') ?></h5>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="comment-item">
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
						<p><?= get_field('coment_text_3') ?></p>
					</div>
					<h5 class="after"><?= get_field('author_coment_3') ?></h5>
				</div>
			</div>
			
		</div>
	</div>
</section>
<section class="wrapper about-me destiny">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
				<h2><?php echo get_post_meta($post->ID, 'title_about_2', true); ?></h2>
				<p><?= get_field('about_me_2') ?></p>
				<a href="<?= get_field('find_out_more_2') ?>" class="button">find out more</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<?php $img= get_field('image_2', $post->ID)['url']; 
					if($img):
						$attachment_id = get_attachment_id_from_src($img);
						$new_img = wp_get_attachment_image_src ( $attachment_id, 'index_img_one');
					?>

					<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
				<?php endif;?>
			</div>
		</div>
	</div>
</section>
	<section class="wrapper about-me coaching">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<?php $img= get_field('image_3', $post->ID)['url']; 
						if($img):
							$attachment_id = get_attachment_id_from_src($img);
							$new_img = wp_get_attachment_image_src ( $attachment_id, 'index_img_two');
						?>

						<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
					<?php endif;?>	
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
					<h2><?php echo get_post_meta($post->ID, 'title_about_3', true); ?></h2>
					<p><?= get_field('about_me_3') ?></p>
					<a href="<?= get_field('find_out_more_3') ?>" class="button">find out more</a>
				</div>
			</div>
		</div>
	</section>
	<section class="wrapper soc">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="button-soc">
						<div class="youtube-subscribe">
							<script src="https://apis.google.com/js/platform.js"></script> 
							<div class="g-ytsubscribe" data-channel="kostyugova" data-layout="default" data-count="hidden" style="display: none"></div><?= get_field('youtube_subscribe_text', $post->ID) ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="button-soc">
						<div class="facebook-subscribe">
							<div class="fb-follow" data-href="https://www.facebook.com/Yelena-Kostyugova-236909600007583" data-layout="button" data-show-faces="false"></div><?= get_field('facebook_subscribe_text', $post->ID) ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="button-soc">
						<div class="instagram-subscribe">
							<a href="https://www.instagram.com/yelenakostyugova/?ref=badge" class="ig-b- ig-b-48" target="_blank"><img src="<?php  bloginfo('template_directory')?>/images/ins.png" alt="#"></a>
						<?= get_field('instagram_subscribe_text', $post->ID) ?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="wrapper be-shared">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2><?= get_field('bottom_text') ?></h2>
				</div>
				<?= get_field('foogallery_name','option')? do_shortcode(get_field('foogallery_name','option')):""  ?> 
			</div>
		</div>
	</section>

	
<!--END CONTENT-->
<?php get_footer(); ?>