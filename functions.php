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



  function wpb_custom_new_menu() {
    register_nav_menu('header',__( 'My Custom Header Menu' ));
    register_nav_menu('top_header',__( 'My Custom Header Menu Top Part' ));
    register_nav_menu('middle_header',__( 'My Custom Header Menu Middle Part' ));
//menus for footer below
register_nav_menu('categories_footer',__( 'My Custom Footer Menu Categories' ));
register_nav_menu('about_us_footer',__( 'My Custom Footer Menu About Us' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  


//add_action('wp_head','quadlayers_checkout_style'); 

//css på checkout sidan

/* function quadlayers_checkout_style(){
         if(is_checkout()==true){

                 echo '<style>
                 #order_review_heading{padding:20px!important;}
                 .woocommerce-checkout-review-order{padding:20px!important;}
                 #place_order{background-color: green!important;}<style>';
         }
} */

add_action('wp_head','quadlayers_cart_style');

//css på cart sidan 
function quadlayers_cart_style(){
  if(is_cart()==true){

          echo '<style> .woocommerce-cart-form{padding:20px!important;}
          .product-thumbnail{width:15%!important; height:15%!important;}
          .input-text{color:black!important;}
          #coupon_code{width:150px!important; height:45px!important;}
          .wc-proceed-to-checkout{padding-bottom:10px!important;}
          .checkout-button{background-color: green!important;}<style>';
  }
}

function searchfilter($query) {
 
  if ($query->is_search && !is_admin() ) {
      $query->set('post_type',array('product','post'));
  }

return $query;
}

add_filter('pre_get_posts','searchfilter');

add_action('wp_head','quadlayers_category_style');

//css på category sidorna 
function quadlayers_category_style(){
  if(is_archive()==true){

          echo '<style> .content-area{padding:20px!important;}
          .size-woocommerce_thumbnail{width:220px!important; height:220px!important;}
          .onsale{background-color:red!important; font-size: 12px!important;}
          .attachment-woocommerce_thumbnail{width:300px!important; height:300px!important;}
          .woocommerce-loop-product__title{font-size: 15px!important;} 
          .price{font-size: 13px!important;}
          .button{font-size: 15px!important;} 

          
          <style>';
  }
}

add_action('wp_head','quadlayers_product_style');

function quadlayers_product_style(){
  if(is_product()==true){

          echo '<style> .site-main{padding:20px!important;}
          .woocommerce-product-gallery__image{width:220px!important; height:220px!important;}
          .woocommerce-product-gallery__wrapper{padding-left: 60px!important;}
          .input-text{height:30px!important; color:black!important;}
          .single_add_to_cart_button{height:32px!important; background-color: green!important;}
          .onsale{background-color:red!important;}
          
          .onsale{background-color:red!important; font-size: 12px!important;}
          .attachment-woocommerce_thumbnail{width:300px!important; height:300px!important;}
          .woocommerce-loop-product__title{font-size: 15px!important;} 
          .price{font-size: 13px!important;}
          .button{font-size: 15px!important;}
          .tabs{font-size: 18px!important; }
          <style>';
  }
}

//tar bort "Additional notes" på checkout page
/*
add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 ); */

//tar bort sidebar på produktsidor
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

function addWidgets() {
  register_sidebar(
    array(
      'name' => 'categories',
      'id' => 'categories'
    )
    );
    register_sidebar(
      array(
        'name' => 'about_us',
        'id' => 'about_us'
      )
      );
      register_sidebar(
        array(
          'name' => 'social_media',
          'id' => 'social_media'
        )
        );
        register_sidebar(
          array(
            'name' => 'newsletter',
            'id' => 'newsletter'
          )
          );
  }
  add_action('widgets_init', 'addWidgets');
?>