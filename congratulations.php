<?php
/*
Template Name: Congratulations
*/?>
<?php get_header(); ?>
<section class="wrapper">
			<div class="container">
				<div class="row">
				<div class="about-opti">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="title"><?= get_field('title_congradulations') ?></h2>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 size">


						<?php $img= get_field('photo_1', $post->ID)['url']; 
							if($img):
							$attachment_id = get_attachment_id_from_src($img);
							$new_img = wp_get_attachment_image_src ( $attachment_id, 'index_img_one');
						?>

				<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
			<?php endif;?>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-6 col-xs-6 size">
						<h3 class="mini-title"><?= get_field('title') ?></h3>
						<p class="text"><?= get_field('text') ?></p>
					</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>