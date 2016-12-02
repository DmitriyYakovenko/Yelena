<?php
/*
Template Name: Yelena-videoall
*/?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
  <body class="video">
    <section class="wrapper categorios">
      <div class="container">
      <?php $categories = get_terms('category', array(
                  'post_type' => 'videos',
                  'fields' => 'all'
                )); ?>      
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2>CATEGORIES</h2>
            <?php foreach ($categories as $cat) : 

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
            <h2>Videos</h2>
                <?php           
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                $type = 'videos';
                $args=array(
                    'post_type' => $type,
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'caller_get_posts'=> 1,
                    'paged'=>$paged
                    );

              $my_query = null;
              $my_query = new WP_Query($args);
              if( $my_query->have_posts() ) :
              while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <div class="video-item">
              <div class="video-content">
                 <?= get_the_post_thumbnail($post->ID, 'video_thumbnail_hd'); ?>
              </div>
              <div class="video-text">

                <h3><?= get_the_custom_excerpt(get_the_title(), 70) ?></h3>

                <p class="text"><?= get_the_custom_excerpt(get_the_content(), 150) ?></p>
                
                <a href="<?= get_the_permalink() ?>" class="button">Watch now</a>
              </div>
            </div>

              <?php endwhile; endif; ?>
              <?php  wp_reset_postdata() ; ?>

            <ul class="pagination">
              <?php  
                   $big = 999999999; // need an unlikely integer
                   echo paginate_links( array(
                       'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                       'format' => '?paged=%#%',
                       'current' => max( 1, get_query_var('paged') ),
                       'total' => $my_query->max_num_pages,
                       'prev_text'          => __('«'),
                       'next_text'          => __('»'),
                   ) );
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
                <h2><?= get_field('down_baner_title', 'option') ?></h2>
                <h4><?= get_field('down_baner_text', 'option') ?></h4>
                <a href="<?= get_field('down_baner_link','option') ?>" class="button ask-question">submit question</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    </section>
    <!--END CONTENT-->
  <?php get_footer(); ?>