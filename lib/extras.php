<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

//GOOGLE MAP API
function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyDWxFHYJfYwWACgI7G0a70u-0aUpkI6xZE';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

/*=========================================
=            Woocommerce Pagination          =
=========================================*/
function pagination_bar() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}


/*=========================================
=            CUSTOM POST TYPES            =
=========================================*/
  $cpt_enabled = [
            'events' => true,
            'testimonials' => false,
            'representative_teams' => true,
            'clubs' => true,
            'galleries' => true,


  ];

/*======================================
=            EXTRA FUCTIONS            =
======================================*/
$custom_includes = [
  /* Utilitys */
  'lib/aq_resizer.php',    // Scripts and stylesheets
  'lib/nav-walker.php',    // Scripts and stylesheets
  'lib/acf-option-page.php', //ACF Option Page
  'lib/gravity_forms-v5.php',

  /* Post Types */
  //'lib/post_type_foodstorm.php',
  //'lib/post_type_testimonial.php',

  /* Functions */
  'lib/function-debug.php',    // Scripts and stylesheets
  'lib/acf-map.php',    // Scripts and stylesheets
  'lib/function-display-gravity-form.php',    // Scripts and stylesheets
  'lib/function-is_realy_woocommerce_page.php',    // Scripts and stylesheets
  'lib/function-get_component.php',    // Scripts and stylesheets
  'lib/function-get_id_from_slug.php',    // Scripts and stylesheets
  'lib/function-get-featured-image-url.php',    // Scripts and stylesheets
  'lib/function-truncate-content.php',    // Scripts and stylesheets
  'lib/custom_post_type_class.php',    // Create Custom Post Types
  'lib/post-types.php',    // Create Custom Post Types
  'lib/supports.php',    // Create Custom Post Types
  'lib/function-getYoutubeId.php',
  'lib/create-home-page.php',    // Create Custom Post Types
  'lib/function-get_section_options.php',    // Scripts and stylesheets
];

foreach ($custom_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
