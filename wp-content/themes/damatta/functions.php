<?php
/**
 * Include file
 */
class DCClass {
  const TEMPLATE_NAME = 'damatta';
}
require_once get_template_directory() . '/inc/menu/nav-walker.php';
require_once get_template_directory() . '/inc/customposttype/slider.php';
require_once get_template_directory() . '/inc/sidebar/shop.php';
require_once get_template_directory() . '/inc/customizer/index.php';
require_once get_template_directory() . '/inc/woocommerce/addtocart/addtocart.php';
require_once get_template_directory() . '/inc/woocommerce/order/newsletter.php';



/**
 * Enqueue scripts and styles.
 */
function damatta_scripts()
{
  //CSS files
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0.2', 'all');
  wp_enqueue_style('fontawesome-css', "https://pro.fontawesome.com/releases/v5.10.0/css/all.css");

  wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css', array(), '', 'all');

  //owl carousel
  wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '', 'all');
  wp_enqueue_style('owl-carousel-default-css', get_template_directory_uri() . '/css/owl.theme.default.css', array(), '', 'all');

  wp_enqueue_style('slider-css', get_template_directory_uri() . '/css/slider.css', array(), '', 'all');
  wp_enqueue_style('swiper-css', get_template_directory_uri() . '/css/swiper.css', array(), '', 'all');

  // Js
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '5.0.2', true);
  wp_enqueue_script('bootstrap-bundle-js', get_template_directory_uri() . '/js/bootstrap.bundle.js', array('jquery'), '5.0.2', true);
  wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true);
  wp_enqueue_script('animate-js', get_template_directory_uri() . '/js/animate.js', array('jquery'), '', true);


  wp_enqueue_script('swiper-js', get_template_directory_uri() . '/js/swiper.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('reflection-js', get_template_directory_uri() . '/js/jquery.reflection.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('cloud9-js', get_template_directory_uri() . '/js/jquery.cloud9carousel.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true);

  // Theme's main stylesheet
  wp_enqueue_style('damatta-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

}

add_action('wp_enqueue_scripts', 'damatta_scripts');




/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function damatta_config()
{

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus(
    array(
      'Damatta_main_menu' => 'Damatta Main Menu',
      'Damatta_footer_menu' => 'Damatta Footer Menu',
    )
  );

  // This theme is WooCommerce compatible, so we're adding support to WooCommerce
  add_theme_support('woocommerce', array(
    'thumbnail_image_width' => 255,
    'single_image_width' => 1024,
    'product_grid' => array(
      'default_rows' => 10,
      'min_rows' => 6,
      'max_rows' => 10,
      'default_columns' => 3,
      'min_columns' => 3,
      'max_columns' => 3,
    )
  ));
//  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');


}

add_action('after_setup_theme', 'damatta_config', 0);






// Remove the additional information tab
function woo_remove_product_tabs($tabs)
{
  unset($tabs['reviews']);
  unset($tabs['additional_information']);
  return $tabs;
}

add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);


// Rename a default WooCommerce tab
add_filter('woocommerce_product_tabs', 'li_change_description_text', 98, 1);

function li_change_description_text($tabs)
{

  if (isset($tabs['description'])) {
    $tabs['description']['title'] = 'INGREDIENTES';
  }

  return $tabs;
}



// single page add to cart text change
add_filter('woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text');
function woocommerce_custom_single_add_to_cart_text()
{
  return __('ADICIONAR', 'woocommerce');
}


// change order of short description
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
//remove sale on product page
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);


add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);







//Add to cart to view product

add_filter( 'woocommerce_loop_add_to_cart_link', 'ts_replace_add_to_cart_button', 10, 2 );
function ts_replace_add_to_cart_button( $button, $product ) {
  if (is_product_category() || is_shop() || is_single()) {
    $button_text = __("Ver Produto", "woocommerce");
    $button_link = $product->get_permalink();

    $button = '<a href="' . $button_link . '">
                          <button class="product__inner__btn">Ver Produto</button>
                        </a>';
    return $button;
  }
}

//order minium amount

add_action( 'woocommerce_check_cart_items', 'required_min_cart_subtotal_amount' );
function required_min_cart_subtotal_amount() {

  // HERE Set minimum cart total amount
  $minimum_amount = 10;

  // Total (before taxes and shipping charges)
  $cart_subtotal = WC()->cart->subtotal;

  // Add an error notice is cart total is less than the minimum required
  if( $cart_subtotal < $minimum_amount  ) {
    // Display an error message
    wc_add_notice( '<strong>' . sprintf( __("A encomenda minima e %s."), wc_price($minimum_amount) ) . '<strong>', 'error' );
  }
}

//force shop to show 3 column
add_filter('loop_shop_columns',function(){return 3;});

//featured image
add_theme_support( 'post-thumbnails' );





