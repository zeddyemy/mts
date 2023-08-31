<?php

/**
 * MTS functions and definitions
 *
 * @author Emmanuel Zeddy 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package MTS
 */


if (!function_exists('mts_setup')) {
    /*--------------------------------------------------------------------------------
	mts_setup - sets up theme
	- adds theme support for post formats, post thumbnails, HTML5 and automatic feed links
	- registers a translation file
	- registers navigation menus
	---------------------------------------------------------------------------------*/

    function mts_setup() {
        // Load TextDomain.
        load_theme_textdomain('mts');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // post formats
        add_theme_support('post-formats', array('aside', 'image', 'link', 'quote', 'status'));

        // use wp_nav_menu() in one location.
        register_nav_menu('primary', __('Primary Menu', 'mts'));

        // HTML5
        add_theme_support('html5');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails', array('post', 'page', 'events', 'gallery', 'portfolios'));

        // Set up the WordPress core custom background feature.
        $defaults = array(
            'default-color'          => '2869ff',
            'default-image'          => '',
            'default-repeat'         => '',
            'default-position-x'     => '',
            'default-attachment'     => '',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => ''
        );
        add_theme_support('custom-background', $defaults);

        // Enable widget sidebars to use selective refresh in the Customizer.
        add_theme_support('customize-selective-refresh-widgets');
    }
}
add_action('after_setup_theme', 'mts_setup');

// REMOVE WP-EMOJI JAVASCRIPT & CSS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Helper Functions
require get_template_directory() . '/inc/functions/helper-functions.php';

// Theme's Dynamic Internal CSS.
require get_template_directory() . '/inc/functions/internal-css.php';
require get_template_directory() . '/inc/functions/internal-css-single-page.php';

// Enqueue Theme's CSS and JavaScripts.
require get_template_directory() . '/inc/functions/enqueues.php';

// LazyLoad Images.
require get_template_directory() . '/inc/functions/lazyload.php';

// Custom Post Types (CPT)
require get_template_directory() . '/inc/custom-post-type/service-post-type.php';
require get_template_directory() . '/inc/custom-post-type/portfolio-post-type.php';

// Post Card Functions
require get_template_directory() . '/inc/functions/post-cards-functions.php';

// Load Clarusmod Customizer
include_once get_template_directory() . '/inc/customizer/customizer.php';

// CUSTOM WP NAV
require get_template_directory() . '/inc/functions/custom-wp-nav.php';

// WIDGET AREAS.
require get_template_directory() . '/inc/functions/widgets.php';