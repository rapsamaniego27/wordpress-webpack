<?php 

function cf_setup(){

  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed&display=swap');
  wp_enqueue_style('app', get_template_directory_uri() . '/dist/css/style.css', array(), false, 'all');
  

  wp_deregister_script('jquery');

  wp_enqueue_script('script', get_template_directory_uri() . '/dist/js/jquery-3.4.1.min.js', '', 1, true);
  wp_enqueue_script('fontawesome','https://kit.fontawesome.com/e33b567028.js');
  
 

}
add_action('wp_enqueue_scripts', 'cf_setup');


