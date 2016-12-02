<?php
define('THEMROOT', get_stylesheet_directory_uri());


//For header
add_image_size('header_img', 455, 429, array( 'center', 'center' ));
//for header
add_image_size('footer_img', 552, 240, array( 'center', 'center' ));
//Index_page
add_image_size('index_img_one', 360, 540, array( 'center', 'center' ));
add_image_size('index_img_two', 360, 450, array( 'center', 'center' ));

//video_thumbnaol
add_image_size('video_thumbnail_hd', 1280, 720, array( 'center', 'center' ));


//About page
add_image_size('about_first', 488, 731, array( 'center', 'center' ));
add_image_size('about_two_three', 355, 455, array( 'center', 'center' ));

//Courses
add_image_size('first_courses', 328, 589, array( 'center', 'center' ));
add_image_size('footer_modal', 291, 337, array( 'center', 'center' ));
//Ask image
add_image_size('ask_question', 322, 427, array( 'center', 'center' ));


/**
    *Function for get attachment id from url
    *@param string $image_src (image url)
    *@return integer $id (Attachment id)
*/
function get_attachment_id_from_src($image_src) {
    global $wpdb;
    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
    $id = $wpdb->get_var($query);
    return $id;
}


//example
//$attachment_id = get_attachment_id_from_src($img);
//$new_img = wp_get_attachment_image_src ( $attachment_id, 'your_image_name');



register_nav_menus(array(
	'header_menu' => 'Header Menu',
	'footer_menu' => 'Footer Menu'
));



function main_manu()
   {
       register_nav_menus(array(
           'main_menu'=>'Main menu',
       ));
   }   
   add_action( 'init', 'main_manu');




add_action( 'init', 'testimonials' );
function testimonials() {
  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' )
      ),
      'public' => true,
      'has_archive' => true,
     'supports' => array( 'title', 'editor', 'thumbnail' )
    )
  );
}
add_theme_support( 'post-thumbnails', array( 'testimonials' ) );





add_action( 'init', 'register_cpt_videos' );

function register_cpt_videos() {

    $labels = array(
        'name' => __( 'Videos', 'videos' ),
        'singular_name' => __( 'Video', 'videos' ),
        'add_new' => __( 'Add New', 'videos' ),
        'add_new_item' => __( 'Add New Video', 'videos' ),
        'edit_item' => __( 'Edit Video', 'videos' ),
        'new_item' => __( 'New Video', 'videos' ),
        'view_item' => __( 'View Video', 'videos' ),
        'search_items' => __( 'Search Videos', 'videos' ),
        'not_found' => __( 'No videos found', 'videos' ),
        'not_found_in_trash' => __( 'No videos found in Trash', 'videos' ),
        'parent_item_colon' => __( 'Parent Video:', 'videos' ),
        'menu_name' => __( 'Videos', 'videos' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
        'taxonomies' => array( 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'videos', $args );
 }     

add_theme_support( 'post-thumbnails' );

function get_the_custom_excerpt($content, $cnt=300, $after='...'){
       if($content){
           mb_internal_encoding("utf8");
           $excerpt = strip_shortcodes($content);
           $excerpt = strip_tags($excerpt);
           $the_str = $excerpt;
           if(mb_strlen($excerpt) > $cnt){

               $the_str = mb_substr(html_entity_decode($excerpt, NULL, 'UTF-8'), 0, $cnt, 'utf8');
               $the_str = trim(preg_replace( '/\s+/', ' ', $the_str));
               $the_str .=  $after;
           }
           return $the_str;

       }
   }

/**
 * Modify the search query with posts_where
 * @param string where (Conditional of the sql request)
 * @return string 
 */
function meta_search_where( $where ) {
    global $pagenow, $wpdb;
    if (is_search()) { 
        $where = preg_replace("/wp_posts\.post_type\sIN\s\([^\)]+\)/i", "wp_posts.post_type IN ('post', 'page', 'videos')", $where);
    }
    return $where;
}
add_filter( 'posts_where', 'meta_search_where' );

/**
 * Prevent duplicates
 */
function meta_search_distinct( $where ) {
    global $wpdb;

    if (is_search()){
        return "DISTINCT";
    }
    return $where;
}
add_filter( 'posts_distinct', 'meta_search_distinct' );





//Next and previous post
function shrink_previous_post_link($format, $link){
    $in_same_cat = false;
    $excluded_categories = '';
    $previous = true;
    $link='%title';
    $format='&laquo; %link';


    if ( $previous && is_attachment() )
        $post = & get_post($GLOBALS['post']->post_parent);
    else
        $post = get_adjacent_post($in_same_cat, $excluded_categories, $previous);

    if ( !$post )
        return;

    $title = $post->post_title;

    if ( empty($post->post_title) )
        $title = $previous ? __('Previous Post') : __('Next Post');

    $rel = $previous ? 'prev' : 'next';

    //Save the original title
    $original_title = $title;

    //create short title, if needed
    if (strlen($title)>40){
        $first_part = substr($title, 0, 23);
        $last_part = substr($title, -17);
        $title = $first_part."...".$last_part;
    }   

    //$string = '<a href="'.get_permalink($post).'" rel="'.$rel.'" title="'.$original_title.'">';

    $string = '<a href="' . get_permalink($post) . '" class="how-to"><i class="fa fa-caret-left" aria-hidden="true">' . $original_title . '</i></a>';
    // $link = str_replace('%title', $title, $link);   
    // $link = $string . $link . '</a>';

    // $format = str_replace('%link', $link, $format);

    echo $string;   
}



function shrink_next_post_link($format, $link){
    $in_same_cat = false;
    $excluded_categories = '';
    $previous = false;
    $link='%title';
    $format='%link &raquo;';

    if ( $previous && is_attachment() )
        $post = & get_post($GLOBALS['post']->post_parent);
    else
        $post = get_adjacent_post($in_same_cat, $excluded_categories, $previous);

    if ( !$post )
        return;

    $title = $post->post_title;

    if ( empty($post->post_title) )
        $title = $previous ? __('Previous Post') : __('Next Post');

    $rel = $previous ? 'prev' : 'next';

    //Save the original title
    $original_title = $title;

    //create short title, if needed
    if (strlen($title)>40){
        $first_part = substr($title, 0, 23);
        $last_part = substr($title, -17);
        $title = $first_part."...".$last_part;
    }   


    $string = '<a href="'. get_permalink($post) . '" class="the-most">' . $original_title . '<i class="fa fa-caret-right" aria-hidden="true"></i></a>';
    // $link = str_replace('%title', $title, $link);   
    // $link = $string . $link . '</a>';

    // $format = str_replace('%link', $link, $format);

    echo $string;   
}

add_filter('next_post_link', 'shrink_next_post_link',10,2);
add_filter('previous_post_link', 'shrink_previous_post_link',10,2);





