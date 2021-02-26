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
  load_theme_textdomain('buddyboss-theme', get_stylesheet_directory() . '/languages');

  // Translate text from the CHILD theme only.
  // Change 'buddyboss-theme' instances in all child theme files to 'buddyboss-theme-child'.
  // load_theme_textdomain( 'buddyboss-theme-child', get_stylesheet_directory() . '/languages' );

}
add_action('after_setup_theme', 'buddyboss_theme_child_languages');

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
  wp_enqueue_style('buddyboss-child-css', get_stylesheet_directory_uri() . '/assets/css/custom.css', '', '1.0.0');


  // Javascript
  wp_enqueue_script('buddyboss-child-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', '', '1.0.0');
}
add_action('wp_enqueue_scripts', 'buddyboss_theme_child_scripts_styles', 9999);


/****************************** CUSTOM FUNCTIONS ******************************/

// Add your own custom functions here


function tailwind_theme_child_scripts_styles()
{

  if (
    is_page_template('rru-home.php')
    | is_page_template('rru-contact.php')
    | is_page_template('rru-live.php')
    | is_page_template('rru-about.php')
    | is_page_template('rru-you-can.php')
    | is_page_template('rru-office-hours.php')
    | is_page_template('rru-community.php')
    | is_page_template('rru-my-community.php')
    | is_page_template('rru-consulting.php')
    | is_page_template('rru-courses.php')
    | is_page_template('rru-resources.php')
    | is_page_template('rru-resources-loop.php')
    | is_page_template('single-resource.php')
    | is_page_template('rru-custom-training.php')
    | is_page_template('rru-3months.php')
    | is_page_template('rru-email.php')
    | is_page_template('rru-demystifying.php')
    | is_singular( 'resource' )
  ) {
    wp_enqueue_style('tailwindrru', get_stylesheet_directory_uri() . '/assets/css/tailwindrru.css', '', '1.0.0');
  }
}
add_action('wp_enqueue_scripts', 'tailwind_theme_child_scripts_styles', 1);

function animatecss_theme_child_scripts_styles()
{

  if (is_page_template('rru-home.php') | is_page_template('rru-3months.php')) {
    wp_enqueue_style('animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css', '', '1.0.0');
  }
}
add_action('wp_enqueue_scripts', 'animatecss_theme_child_scripts_styles', 10001);


# Remove zoom etc on single product image

function remove_product_zoom_support()
{
  remove_theme_support('wc-product-gallery-zoom');
  remove_theme_support('wc-product-gallery-lightbox');
  remove_theme_support('wc-product-gallery-slider');
}
add_action('wp', 'remove_product_zoom_support', 100);

# Remove link on single product image
# https://community.getbeans.io/discussion/removing-the-html-image-link-from-woocommerce-single-product/

function e12_remove_product_image_link($html, $post_id)
{
  return preg_replace("!<(a|/a).*?>!", '', $html);
}
add_filter('woocommerce_single_product_image_thumbnail_html', 'e12_remove_product_image_link', 10, 2);

/**
 * Remove related products output
 */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

/**
 * Shortcode for product price.
 * https://www.quora.com/How-do-I-display-a-WooCommerce-Product-Price-via-a-ShortCode
 *
 * @param $atts
 *
 * @return string
 */
function iconic_woo_product_price_shortcode($atts)
{
  $atts = shortcode_atts(array(
    'id' => null
  ), $atts, 'iconic_product_price');

  if (empty($atts['id'])) {
    return '';
  }

  $product = wc_get_product($atts['id']);

  if (!$product) {
    return '';
  }

  return $product->get_price_html();
}

add_shortcode('iconic_product_price', 'iconic_woo_product_price_shortcode');



// Make phone number optional on Woo checkout. See https://woorkup.com/make-phone-number-field-required-checkout-woocommerce/

add_filter('woocommerce_billing_fields', 'wc_npr_filter_phone', 10, 1);

function wc_npr_filter_phone($address_fields)
{
  $address_fields['billing_phone']['required'] = false;
  return $address_fields;
}

/**
 * Auto Complete all WooCommerce orders. See https://docs.woocommerce.com/document/automatically-complete-orders/
 */
add_action('woocommerce_thankyou', 'custom_woocommerce_auto_complete_order');
function custom_woocommerce_auto_complete_order($order_id)
{
  if (!$order_id) {
    return;
  }

  $order = wc_get_order($order_id);
  $order->update_status('completed');
}

// Disable admin emails about user password changes. See https://wordpress.stackexchange.com/questions/206353/disable-email-notification-after-change-of-password

/**
 * Disable Admin Notification of User Password Change
 *
 * @see pluggable.php
 */

if (!function_exists('wp_password_change_notification')) {
  function wp_password_change_notification($user)
  {
    return;
  }
}

// Hide SKUs completely. https://www.skyverge.com/blog/how-to-hide-sku-woocommerce-product-pages/

add_filter('wc_product_sku_enabled', '__return_false');


add_filter('the_excerpt', 'do_shortcode');
remove_filter('get_the_excerpt', 'wp_trim_excerpt', 10);
add_filter('get_the_excerpt', 'my_custom_wp_trim_excerpt', 99, 1);
function my_custom_wp_trim_excerpt($text)
{
  if ('' == $text) {
    $text = preg_replace('/\s/', ' ', wp_strip_all_tags(get_the_content('')));
    $text = explode(' ', $text, 56);
    array_pop($text);
    $text = implode(' ', $text);
  }
  return $text;
}

add_filter('get_the_excerpt', 'shortcode_unautop');
add_filter('get_the_excerpt', 'do_shortcode');

// Add new tab to BuddyPress
// https://rtmedia.io/docs/developers/create-new-buddypress-profile-tab/


// function profile_tab_yourtabname() {
//   global $bp;

//   bp_core_new_nav_item( array( 
//         'name' => 'yourtab', 
//         'slug' => 'yourtab', 
//         'screen_function' => 'yourtab_screen', 
//         'position' => 100,
//         'parent_url'      => bp_loggedin_user_domain() . '/yourtab/',
//         'parent_slug'     => $bp->profile->slug,
//         'default_subnav_slug' => 'yourtab'
//   ) );
// }
// add_action( 'bp_setup_nav', 'profile_tab_yourtabname' );


// function yourtab_screen() {

// // Add title and content here - last is to call the members plugin.php template.
// add_action( 'bp_template_title', 'yourtab_title' );
// add_action( 'bp_template_content', 'yourtab_content' );
// bp_core_load_template( 'buddypress/members/single/plugins' );
// }
// function yourtab_title() {
// echo 'Title';
// }

// function yourtab_content() { 
// echo 'Content';
// }



// Source: https://developer.wordpress.org/reference/functions/get_the_terms/#comment-3874

if (!function_exists('wpdocs_example_get_the_terms')) {

  function wpdocs_example_get_the_terms($taxonomy)
  {

    $terms = get_the_terms(get_the_ID(), $taxonomy);

    if ($terms && !is_wp_error($terms)) :

     
      foreach ($terms as $term) {
        echo '<div class="py-1 pr-2 text-sm font-medium leading-4 text-blue-800';
        echo '-200 rounded-full">';
        echo $term->name;
        echo '</div>';
      }

    endif;
  }
}

// Generate custom image size for resources

	
add_theme_support( 'resource-featured-image' );
add_image_size( 'resource-featured-image', 400, 225, true);

// FacetWP


add_filter( 'facetwp_assets', function( $assets ) {
  $assets['custom.css'] = 'assets/css/custom.css';
  return $assets;
});

add_filter( 'facetwp_facet_html', function( $output, $params ) {
  if ( 'search' == $params['facet']['type'] ) {
      $output = str_replace( 'facetwp-facet-search', 'facetwp-facet-search mb-0', $output );
  }
  return $output;
}, 10, 2 );


