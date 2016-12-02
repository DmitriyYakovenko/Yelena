<?php
/*
Template Name: Yelena-contact
*/?>
<?php get_header(); ?>
<?php get_sidebar() ?>
<body>
		<section class="wrapper ">
			<div class="container contact">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h4><?php echo get_post_meta($post->ID, 'title', true); ?></h4>
						<p><?php echo get_post_meta($post->ID, 'text', true); ?></p>
						<?php echo do_shortcode( '[contact-form-7 id="252" title="Contact-page"]' ); ?>						
					</div>
				</div>
			</div>
		</section>
		
</body>
<?php get_footer(); ?>