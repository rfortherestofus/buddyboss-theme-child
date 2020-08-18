<?php
/**
 * @package BuddyBoss Child
 * The parent theme functions are located at /buddyboss-theme/inc/theme/functions.php
 * Add your own functions at the bottom of this file.
 */


/****************************** THEME SETUP ******************************/

/**
 * Sets up theme for translation
 *
 * @since BuddyBoss Child 1.0.0
 */
function buddyboss_theme_child_languages()
{
  /**
   * Makes child theme available for translation.
   * Translations can be added into the /languages/ directory.
   */

  // Translate text from the PARENT theme.
  load_theme_textdomain( 'buddyboss-theme', get_stylesheet_directory() . '/languages' );

  // Translate text from the CHILD theme only.
  // Change 'buddyboss-theme' instances in all child theme files to 'buddyboss-theme-child'.
  // load_theme_textdomain( 'buddyboss-theme-child', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'buddyboss_theme_child_languages' );

/**
 * Enqueues scripts and styles for child theme front-end.
 *
 * @since Boss Child Theme  1.0.0
 */
function buddyboss_theme_child_scripts_styles()
{
  /**
   * Scripts and Styles loaded by the parent theme can be unloaded if needed
   * using wp_deregister_script or wp_deregister_style.
   *
   * See the WordPress Codex for more information about those functions:
   * http://codex.wordpress.org/Function_Reference/wp_deregister_script
   * http://codex.wordpress.org/Function_Reference/wp_deregister_style
   **/

  // Styles
  wp_enqueue_style( 'buddyboss-child-css', get_stylesheet_directory_uri().'/assets/css/custom.css', '', '1.0.0' );
  

  // Javascript
  wp_enqueue_script( 'buddyboss-child-js', get_stylesheet_directory_uri().'/assets/js/custom.js', '', '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'buddyboss_theme_child_scripts_styles', 9999 );


/****************************** CUSTOM FUNCTIONS ******************************/

// Add your own custom functions here


function tailwind_theme_child_scripts_styles()
{

  if( is_page_template( 'rru-home.php' ) 
    | is_page_template( 'rru-contact.php' ) 
    | is_page_template( 'rru-about.php' ) 
    | is_page_template( 'rru-you-can.php' ) 
    | is_page_template( 'rru-community.php' ) 
    | is_page_template( 'rru-consulting.php' ) 
    | is_page_template( 'rru-courses.php' ) 
    | is_page_template( 'rru-custom-training.php' )) {
  wp_enqueue_style( 'tailwindrru', get_stylesheet_directory_uri().'/assets/css/tailwindrru.css', '', '1.0.0' );
  }
}
add_action( 'wp_enqueue_scripts', 'tailwind_theme_child_scripts_styles', 1 );

function animatecss_theme_child_scripts_styles()
{

  if( is_page_template( 'rru-home.php' )) {
  wp_enqueue_style( 'animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css', '', '1.0.0' );
  }
}
add_action( 'wp_enqueue_scripts', 'animatecss_theme_child_scripts_styles', 10001 );


# Remove zoom etc on single product image

function remove_product_zoom_support() {
remove_theme_support( 'wc-product-gallery-zoom' );
remove_theme_support( 'wc-product-gallery-lightbox' );
remove_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'wp', 'remove_product_zoom_support', 100 );

# Remove link on single product image
# https://community.getbeans.io/discussion/removing-the-html-image-link-from-woocommerce-single-product/

function e12_remove_product_image_link( $html, $post_id ) {
  return preg_replace( "!<(a|/a).*?>!", '', $html );
}
add_filter( 'woocommerce_single_product_image_thumbnail_html', 'e12_remove_product_image_link', 10, 2 );

/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/**
 * Shortcode for product price.
 * https://www.quora.com/How-do-I-display-a-WooCommerce-Product-Price-via-a-ShortCode
 *
 * @param $atts
 *
 * @return string
 */
function iconic_woo_product_price_shortcode( $atts ) {
	$atts = shortcode_atts( array(
		'id' => null
	), $atts, 'iconic_product_price' );
 
	if ( empty( $atts[ 'id' ] ) ) {
		return '';
	}
 
	$product = wc_get_product( $atts['id'] );
 
	if ( ! $product ) {
		return '';
	}
 
	return $product->get_price_html();
}
 
add_shortcode( 'iconic_product_price', 'iconic_woo_product_price_shortcode' );