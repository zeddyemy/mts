<?php

/**
 * Enqueue MTS Theme's Styles and Scripts
 * @author Emmanuel Zeddy <http://zeddyemy.github.io>
 */

if (!is_admin()) {
    // Add async or defer attributes to script enqueues
    function add_async_defer_attribute($tag, $handle) {
        // if script handle contains 'async' or 'defer
        if (strpos($handle, 'async') !== false) {
            $tag = str_replace('<script ', '<script async ', $tag);
        } else if (strpos($handle, 'defer') !== false) {
            $tag = str_replace('<script ', '<script defer ', $tag);
        }
        return $tag;
    }
    add_filter('script_loader_tag', 'add_async_defer_attribute', 10, 2);

    // Function to allow preloading of Styles
    function preload_style($tag, $handle) {
        if (strpos($handle, 'preload') !== false) {
            $preload_tag = str_replace('rel="stylesheet"', 'rel="preload"', $tag);
            return $preload_tag . $tag;
        }
        return $tag;
    }
    add_filter('style_loader_tag', 'preload_style', 10, 2);
}

// Enqueue MTS Styles and Scripts
function mts_scripts() {
    // Box Icons.
    wp_enqueue_style('preload-box-icons', get_mts_assets('library/boxicons/css') . 'boxicons.min.css');
	
    // aos library
    wp_enqueue_style('aos', get_mts_assets('library/aos') . 'aos.css');
    wp_enqueue_script('aosJS', get_mts_assets('library/aos') . 'aos.js', '', '1.0', true);
    
    //tiny slider library
    wp_enqueue_style('slider', get_mts_assets('library/tiny-slider'). 'tiny-slider.css');
    wp_enqueue_script('slider-defer', get_mts_assets('library/tiny-slider/min') . 'tiny-slider.js', '', '1.0', true);
    wp_enqueue_script('tsJSArgs-defer', get_mts_assets('library/tiny-slider') . 'tiny-slider-args.js', '', '1.0', true);

    wp_enqueue_style('main', get_mts_assets('css') . 'main.css'); // Main stylesheet
    wp_enqueue_style('header', get_mts_assets('css') . 'header.css'); // Header stylesheet
    wp_enqueue_script('headerJS', get_mts_assets('js') . 'header.js', '', '1.0', true); // Header Script
    wp_enqueue_script('darkmode', get_mts_assets('js') . 'darkmode.js', '', '1.0', true); // Header Script

    if (is_front_page() || is_home()) {
        wp_enqueue_style('home',     get_mts_assets('css') . 'home.css');
        wp_enqueue_style('mtsAbout', get_mts_assets('css') . 'about.css');
        wp_enqueue_style('goal',     get_mts_assets('css') . 'goal.css');
        wp_enqueue_style('blog',     get_mts_assets('css') . 'blog.css');
    }

    if (is_front_page() || is_home() || is_post_type_archive('services')) {
        wp_enqueue_style('services', get_mts_assets('css') . 'services.css');
    }
}
add_action('wp_enqueue_scripts', 'mts_scripts');
