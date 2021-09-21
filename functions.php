<?php
function add_bootstrap(){
    wp_enqueue_style("bs_css", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css");
}
add_action("wp_enqueue_scripts", "add_bootstrap");

function load_stylesheets() {
    wp_register_style('styles', get_template_directory_uri() . '/css/custom.css', array(), 1, 'all');
    wp_enqueue_style('styles');
    
    
}
 
add_action('wp_enqueue_scripts', 'load_stylesheets');



function load_js() {
    wp_register_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
    // wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('script');
    // wp_enqueue_scripts('jquery');
   
  }

  add_action('wp_enqueue_scripts', 'load_js');

  function add_themes_features() {
      add_theme_support('woocommerce');
      add_theme_support('post-thumbnails');
  }
  add_action('after_setup_theme', 'add_themes_features');






?>
