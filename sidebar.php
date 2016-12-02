<section class="wrapper banner">
	<div class="bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-8 col-sm-7 col-xs-6">
					<div class="content">
						<h1 class="title"><?php echo get_field('slogan_1', 'option'); ?><span><?php echo get_field('slogan_2', 'option'); ?></span></h1>
						<h3 class="mini-title"><?php echo get_field('downbanner_text', 'option'); ?></h3>
					</div>
				</div>
				<div class="col-lg-5 col-md-4 col-sm-5 col-xs-6">
				<?php $img= get_field('banner', 'option')['url']; 
					if($img):
						$attachment_id = get_attachment_id_from_src($img);
						$new_img = wp_get_attachment_image_src ( $attachment_id, 'header_img');
					?>

					<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>	
</section>
<section class="wrapper sign-up">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				
				<form action="//successinmind.us8.list-manage.com/subscribe/post?u=8edf1b753e8239b1e09a41242&amp;id=6677111390" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">  	
					    <input type="submit" value="sign up" name="subscribe" id="mc-embedded-subscribe" class="button">  
				</form>			
			</div>
		</div>
	</div>
</section>

 
 <!-- <section class="wrapper sign-up">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form action="#">
					<input type="text" placeholder="First name">
					<input type="text" placeholder="E-mail">
					<input type="submit" value="Sign up">
				</form>
				<p><?php //echo get_field('sign_up_text', 'option'); ?></p>
			</div>
		</div>
	</div>
</section> -->