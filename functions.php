<?php 

function cf_setup(){

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  

  // wp_deregister_script('jquery');

  wp_enqueue_script('script', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
  wp_enqueue_script('fontawesome','https://kit.fontawesome.com/e33b567028.js');

}
add_action('wp_enqueue_scripts', 'cf_setup');

//Add menus
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'woocommerce');

/** post formats */
$post_formats = array('aside','image','gallery','video','audio','link','quote','status');
add_theme_support( 'post-formats', $post_formats);

/** automatic feed link*/
add_theme_support( 'automatic-feed-links' );
 
/** tag-title **/
add_theme_support( 'title-tag' );

//Register menus
register_nav_menus([
  'top-menu' => 'Top Menu'
]);


// Add image sizes
add_image_size('post_image', 1100, 550, false);

//Add a widget
register_sidebar([
  'name' => 'Page Sidebar',
  'id' => 'page-sidebar',
  'class' => '',
  'before_title' => '<h4>',
  'after_title' => '</h4>'

]);

register_sidebar([
  'name' => 'Blog Sidebar',
  'id' => 'blog-sidebar',
  'class' => '',
  'before_title' => '<h4>',
  'after_title' => '</h4>'

]);

