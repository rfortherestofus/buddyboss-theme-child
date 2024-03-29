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
    | is_page_template('rru-rin3-feedback-fall-2021.php')
    | is_page_template('rru-rin3-feedback-spring-2022.php')
    | is_page_template('rru-rin3-feedback-fall-2022.php')
    | is_page_template('rru-rin3-feedback-spring-2023.php')
    | is_page_template('rru-rin3-feedback-vsa.php')
    | is_page_template('rru-rin3-feedback-loop.php')
    | is_page_template('single-rin3_feedback.php')
    | is_page_template('rru-custom-training.php')
    | is_page_template('rru-3months.php')
    | is_page_template('rru-email.php')
    | is_page_template('rru-demystifying.php')
    | is_page_template('rru-1pct.php')
    | is_page_template('rru-podcast.php')
    | is_page_template('rru-2021-thank-you.php')
    | is_page_template('rru-apr-2022-fundraiser.php')
    | is_page_template('rru-intern-application.php')
    | is_page_template('rru-vsa.php')
    | is_singular('resource')
    | is_singular('rin3_feedback')
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
 * Auto Complete all WooCommerce orders.
 * https://woocommerce.com/document/automatically-complete-orders/
 */
add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
function custom_woocommerce_auto_complete_order( $order_id ) { 
    if ( ! $order_id ) {
        return;
    }

    $order = wc_get_order( $order_id );
    $order->update_status( 'completed' );
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

if (!function_exists('rin3_feedback_video_meta')) {

  function rin3_feedback_video_meta($taxonomy)
  {

    $terms = get_the_terms(get_the_ID(), $taxonomy);

    if ($terms && !is_wp_error($terms)) :


      foreach ($terms as $term) {

        echo $term->name;
      }

    endif;
  }
}

if (!function_exists('rin3_feedback_video_meta_participant')) {

  function rin3_feedback_video_meta_participant($taxonomy)
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


add_theme_support('resource-featured-image');
add_image_size('resource-featured-image', 400, 225, true);

// FacetWP


add_filter('facetwp_assets', function ($assets) {
  $assets['custom.css'] = 'assets/css/custom.css';
  return $assets;
});

add_filter('facetwp_facet_html', function ($output, $params) {
  if ('search' == $params['facet']['type']) {
    $output = str_replace('facetwp-facet-search', 'facetwp-facet-search mb-0', $output);
  }
  return $output;
}, 10, 2);


// Open external links in new tab
// Source: https://themepalace.com/topic/open-all-external-links-in-new-window/

add_action('wp_enqueue_scripts', 'photomania_pro_child_style');
function photomania_pro_child_style()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
  wp_enqueue_script('photomania-child-custom-js', get_stylesheet_directory_uri() . 'assets/js/custom.js', array('jquery'), '', true);
}


// Add muse.ai
// Taken from https://wordpress.org/plugins/muse-ai/

// add_action('init', 'museai_init');


// function museai_init()
// {
//   wp_oembed_add_provider('#https://muse.ai/(v|vc|vd|vt)/.+#', 'https://muse.ai/oembed', true);
//   wp_enqueue_script('museai-embed-player', 'https://muse.ai/static/js/embed-player.min.js');
// }


add_shortcode('muse-video', 'museai_shortcode_video');


function museai_shortcode_video($atts = [])
{
  $embed_id = bin2hex(random_bytes(16));
  $video_id = preg_replace('/[^a-z0-9%]/i', '', $atts['id']);
  $width = preg_replace('/[^0-9%]/', '', $atts['width'] ?? '100%');
  $start_time = $atts['start_time'];
  $title = $atts['title'];
  $download = true ?? $atts['download'];
  $out = sprintf(
    '<script src="https://muse.ai/static/js/embed-player.min.js"></script>' .
      '<div id="museai-player-%s" class="mb-4"></div>' .
      '<script>MusePlayer({container: "#museai-player-%1$s", 
        video: "%s", 
        width: "%s", 
        start: "%s", 
        title: "%s", 
        download: "%s",
        logo: false, 
        links: false})
        </script>',
    $embed_id,
    $video_id,
    $width,
    $start_time,
    $title,
    $download
  );
  return $out;
}

add_shortcode('muse-collection', 'museai_shortcode_collection');


function museai_shortcode_collection($atts = [])
{

  $collection_id = preg_replace('/[^a-z0-9%]/i', '', $atts['id']);

  $out = sprintf(
    '<script src="https://muse.ai/static/js/embed-search.min.js"></script>' .
      '<div id="muse-search"></div><div class="mb-4" id="muse-videos-grid"></div><script src="https://muse.ai/static/js/embed-search.min.js"></script>' .
      '<script>MuseCollection({collection: "%s",containerResults: "#muse-videos-grid",containerInput: "#muse-search", sort: "title"})</script>',
    $collection_id
  );
  return $out;
}


add_filter('woocommerce_get_checkout_order_received_url', 'add_email_in_order_received_url', 10, 2);
function add_email_in_order_received_url($return_url, $order)
{

  return $return_url . '&email=' . $order->get_billing_email();
}

// Add upsell for hourly coaching
// add_action('comment_form_before', 'add_comment_notice');
// function add_comment_notice()
// {
//   $commenter = wp_get_current_commenter();
//   echo '<p class="commentnotice">We are only able to answer questions about the concepts and data covered in the course. Need further support? <a href="https://rfortherestofus.com/product/coaching/">We offer 1-on-1 coaching by the hour</a>.</p>';
// }

// Disable smart quotes
// https://www.foxinfotech.in/2021/02/disable-smart-quotes-wordpress.html

add_filter('run_wptexturize', '__return_false');