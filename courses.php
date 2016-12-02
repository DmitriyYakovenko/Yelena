<?php
/*
Template Name: Yelena-courses
*/?>
<?php get_header(); ?>
<?php// get_sidebar() ?>

<section class="wrapper">
			<div class="container">
				<div class="row">
				<div class="about-opti">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="title"><?= get_field('title_courses') ?></h2>
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
						<h3 class="mini-title"><?= get_field('title_about_1') ?></h3>
						<?= get_field('text_1') ?>

				<form action="//alscon-clients.us8.list-manage.com/subscribe/post?u=8edf1b753e8239b1e09a41242&amp;id=771c2b2008" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"placeholder="E-mail">  	
					    <input type="submit" value="sign up" name="subscribe" id="mc-embedded-subscribe" class="button" >  
				</form>
					</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>