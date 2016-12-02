<?php
/*
Template Name: Catygoria
*/?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
	<body class="video">
		<section class="wrapper categorios">
			<div class="container">
				<?php $categories = get_terms('category', array(
								 	'post_type' => 'videos',
								 	'fields' => 'all'
								));
				?>						
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2><?php single_term_title(); ?></h2>

						

						<?php $term_title=single_term_title('', 0);
						foreach ($categories as $cat) : 

						if($cat->name == 'Uncategorized'){
							continue;
						}
						?>
						<a href="<?php echo get_category_link($cat->term_id); ?>" class="cat <?= ($cat->name==$term_title)? 'active':"" ?>">
						<div>
							<img src="<?php echo z_taxonomy_image_url($cat->term_id, 'thumbnail'); ?>" alt="">
							<p class="new">Watch now</p>
							<div class="text"><h4><?php echo $cat->name; ?></h4></div>
						</div>
						</a>
						<?php endforeach; ?>
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="video-category">

							<h4>
								<?php
											$cat = get_query_var('cat');
											$categories=get_categories('include='.$cat);
											if ($categories) {
											  foreach($categories as $category) {
											    echo $category->count;
											  }
											}
								?> videos 
							</h4>
							<?php 			
							$paged = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;


							$type = 'videos';
							$args=array(
							 'post_type' => $type,
							 'post_status' => 'publish',
							 'posts_per_page' => 3,
							 'caller_get_posts'=> 1,
							 'paged'          =>  $paged,
							 'tax_query' => array(
							 	array(
						            'taxonomy' => 'category',
						            'field' => 'name',
						            'terms' => single_term_title("", false)
						            ),
							 	),

							 );
							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) :
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<div class="vidio-content">

								<div class="video-if">
									<?= get_the_post_thumbnail( $post->ID, 'video_thumbnail_hd') ?>

								</div>
								<a href="#" class="button last inspired">STAY inspired <i class="fa fa-caret-right" aria-hidden="true"></i></a>
								<?= get_social_likes( $post->ID ); ?>

								
								<h3><?= get_the_title(); ?></h3>
								<p class="text"><?= get_the_custom_excerpt(get_the_content()); ?></p>
								<a href="<?= get_the_permalink() ?>" class="button">Read more</a>
							</div>	
						<?php endwhile; endif; ?>
						</div>	
						<ul class="pagination">
							<?php  
				                $big = 999999999; // need an unlikely integer
				                $pgn =  paginate_links( array(
				                   'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				                   'format' => ' ',
				                   'current' => max( 1, get_query_var('page') ),
				                   'total' => $my_query->max_num_pages,
				                   'prev_text'          => __('«'),
                       			   'next_text'          => __('»'),
				                ) );

			
								$pattern =array('/\/?page=[\d]*/i');
				                $pgn = preg_replace ($pattern , array('') , $pgn);

								$pattern =array('/\/[\s]+[\d]+/i');
				                $res = preg_replace ($pattern , array(' ') , $pgn);

				                $pgn = str_replace(array('/page/', '?page=', '/?%2F', '/?'), array('?page=', '?page=', '', '') , $pgn );
				     

				                echo $pgn;
				            ?>
			        	</ul>

						<div class="ask">
							<?php
								$img = get_field('down_baner_img','option')['url'];
								if($img):
                       				 		$attachment_id = get_attachment_id_from_src($img);
                       						 $new_img = wp_get_attachment_image_src ( $attachment_id, 'ask_question');
                   					 ?>
                    						<img src="<?= $new_img?$new_img[0]: $img ?>" alt="#">
                   						 <?php endif;?>
              						<div>
							<div>
								<h2><?php echo get_field('down_baner_title', 'option'); ?></h2>
								<h4><?php echo get_field('down_baner_text', 'option'); ?></h4>
								<a href="<?php echo get_field('down_baner_link', 'option'); ?>" class="button ask-question">submit question</a>
							</div>
						</div>

					</div>

				</div>
			</div>
		</section>
	</body>
		</section>
<!--<script type="text/javascript">
	jQuery("div.text").addClass("div.text active");
</script>-->

	<?php get_footer(); ?>