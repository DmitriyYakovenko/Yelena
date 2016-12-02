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
              unset($cat);
              continue;
            }


            ?>
    
            <a href="<?php echo get_category_link($cat->term_id); ?>" class="cat">
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
            <h2>Search result:</h2>
                <?php
              if( have_posts() ) :
              while (have_posts()) : the_post(); ?>

            <div class="video-item">
                <div class="video-content">
                <?php if (get_the_post_thumbnail()): ?>
                    <?= get_the_post_thumbnail() ?>
                <?php endif; ?>
                
              </div>
              <div class="video-text">

                <h3><?php the_title(); ?></h3>

                <p class="text"><?= get_the_custom_excerpt(get_the_content(), 300) ?></p>
                
                <a href="<?= get_the_permalink() ?>" class="button">Link to <?= get_post_type()!='videos'? get_post_type():'video' ?></a>
              </div>
            </div>

              <?php endwhile; endif; ?>
              <?php  wp_reset_postdata() ; ?>

            <!-- 
            <ul class="pagination">
              <li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li class="no-active"><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
            </ul> -->
            <ul class="pagination">
              <?php  
                   $big = 999999999; // need an unlikely integer
                   echo paginate_links( array(
                       'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                       'format' => '?paged=%#%',
                       'current' => max( 1, get_query_var('paged') ),
                       'total' => $wp_query->max_num_pages,
                       'prev_text'          => __('«'),
                       'next_text'          => __('»'),
                   ) );
               ?>
            </ul>

            <div class="ask">
              <img src="<?php echo get_field('down_baner_img','option')['url']; ?>" alt="#">
              <div>
                <h2><?php echo get_field('down_baner_title', 'option'); ?></h2>
                <h4><?php echo get_field('down_baner_text', 'option'); ?></h4>
                <a href="<?php echo get_field('down_baner_link','option'); ?>" class="button">submit question</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    </section>
    <!--END CONTENT-->


<?php get_footer(); ?>