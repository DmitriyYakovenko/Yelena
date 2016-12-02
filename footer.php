<?php wp_footer(); ?>
	<footer class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php 
						wp_nav_menu( array(
						'theme_location' => 'footer_menu',
						'menu_class'  => 'footer-menu',
						'items_wrap'  => '<ul  class="footer-menu">%3$s</ul>'
						)); ?>
				</div>


				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<?php $img= get_field('img_footer', 'option')['url']; 
						if($img):
							$attachment_id = get_attachment_id_from_src($img);
							$new_img = wp_get_attachment_image_src ( $attachment_id, 'footer_img');
						?>
					<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
					<?php endif;?>

				</div>


				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					
					
					
					<form action="//successinmind.us8.list-manage.com/subscribe/post?u=8edf1b753e8239b1e09a41242&amp;id=6677111390" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>	
						<p><?php echo get_field('footer_form_text','option'); ?></p>
						<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"placeholder="Email">  	
					    <input type="submit" value="sign up" name="subscribe" id="mc-embedded-subscribe" class="button" >  
					</form>
					<div class="footer-soc">
						<p><?php echo get_field('social_title', 'option'); ?></p>
						<ul>
							<li><a href="<?php echo get_field('social_1', 'option'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo get_field('social_2', 'option'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo get_field('social_3', 'option'); ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo get_field('social_4', 'option'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<section class="wrapper copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p><?php echo get_field('author_rights', 'option'); ?></p>
				</div>
			</div>
		</div>
	</section>
<!--END FOOTER-->
			<a class="support contact-support">Need Help ?</a>
			<!--START MODAL-->
			<div class="modal-support">
				<span class="sline"></span> 
				<?php echo do_shortcode( '[contact-form-7 id="248" title="Modal-form"]' ); ?>

			</div>
			<!--END MODAL-->  

<!--START MODAL-->
	<a class="modal-sugn-up" data-toggle="modal" data-target=".modal-sing-up"></a>
	
	<div class="modal fade modal-sing-up" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<?php $img= get_field('m_image', 'option')['url']; 
						if($img):
							$attachment_id = get_attachment_id_from_src($img);
							$new_img = wp_get_attachment_image_src ( $attachment_id, 'footer_modal');
						?>
					<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
					<?php endif;?>
	
				<div class="modal-text">
					<h2><span><?= get_field('m_slogan1', 'option') ?></span><?= get_field('m_slogan12', 'option') ?></h2>
					<h2><?= get_field('m_slogan2', 'option') ?></h2>
					<h5><?=get_field('m_slogan3', 'option') ?></h5>
					<ul>
						<li><?= get_field('m_str1', 'option') ?></li>
						<li><?= get_field('m_str2', 'option')?></li>
						<li><?= get_field('m_str3', 'option') ?></li>
					</ul>
				</div>
   
<section class="wrapper sign-up">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">			
				<form action="//successinmind.us8.list-manage.com/subscribe/post?u=8edf1b753e8239b1e09a41242&amp;id=6677111390" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="First Name">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"placeholder="Email">  	
					    <input type="submit" value="sign up" name="subscribe" id="mc-embedded-subscribe" class="button" >  
				</form>

			</div>
		</div>
	</div>
</section>
			</div>
		</div>
	</div>
<!--START MODAL ASK FORM -->
	<a class="modal-ask-form" data-toggle="modal" data-target=".modal-asking-form"></a>
	
	<div class="modal fade modal-asking-form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<?php  do_shortcode('[contact-form-7 id="612" title="ask-yelena-form"]');                 
                ?> 
				
			</div>
		</div>
	</div>	
<!--END MODAL ASK FORM-->
<script src="<?= THEMROOT?>/js/jquery-2.1.4.min.js"></script>
 <script src="<?= THEMROOT?>/js/bootstrap.min.js"></script>
 <script src="<?= THEMROOT?>/js/owl.carousel.min.js"></script>
 <script src="<?= THEMROOT?>/js/common.js"></script>
 <script src="//yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>
 <script>
	//setTimeout(function(){jQuery('a.modal-sugn-up').click()},3000);
	 (function($) {
$(function() {

	// Проверим, есть ли запись в куках о посещении посетителя
	// Если запись есть - ничего не делаем
	if (!$.cookie('was')) {

		setTimeout(function(){jQuery('a.modal-sugn-up').click()},3000);

	}

	//Запомним в куках, что посетитель к нам уже заходил
	$.cookie('was', true, {
	 expires: 365,
	 path: '/'
	});
})
})(jQuery)
 </script>


 <script>
	jQuery(".inspired").on("click", function(e){
	 	e.preventDefault();
	 	setTimeout(function(){jQuery('a.modal-sugn-up').click()},500);
	});

	if(jQuery('#cansecl').length){
		console.log(cansecl);
		jQuery("#cansecl").on("click", function(e){
			e.preventDefault();
			$(this).parents('form')[0].reset();
	 	})
	}
</script>
<!-- ask yelena modal form -->
<script>
	jQuery(".ask-question").on("click", function(e){
	 	e.preventDefault();
	 	setTimeout(function(){jQuery('a.modal-ask-form').click()},500);
	});

	if(jQuery('#cansecl').length){
		console.log(cansecl);
		jQuery("#cansecl").on("click", function(e){
			e.preventDefault();
			$(this).parents('form')[0].reset();
	 	})
	}
</script>
 </html>