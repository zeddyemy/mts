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
    global $mtsThemeMods;

    // Box Icons.
    wp_enqueue_style('preload-box-icons', get_mts_assets('library/boxicons/css') . 'boxicons.min.css');
	
    // aos library
    wp_enqueue_style('aos', get_mts_assets('library/aos') . 'aos.css');
    wp_enqueue_script('aosJS', get_mts_assets('library/aos') . 'aos.js', '', '1.0', true);
    
    wp_enqueue_style('main', get_mts_assets('css') . 'main.css'); // Main stylesheet
    wp_enqueue_style('header', get_mts_assets('css') . 'header.css'); // Header stylesheet
    wp_enqueue_script('headerJS', get_mts_assets('js') . 'header.js', '', '1.0', true); // Header Script
    wp_enqueue_script('darkmode', get_mts_assets('js') . 'darkmode.js', '', '1.0', true); // Header Script

    if (is_front_page() || is_home()) {
        if ($mtsThemeMods['toggle_home_sec'] == true) {
            wp_enqueue_style('home',     get_mts_assets('css') . 'home.css');
        }
        if ($mtsThemeMods['toggle_about_sec'] == true) {
            wp_enqueue_style('mtsAbout', get_mts_assets('css') . 'about.css');
        }
        if ($mtsThemeMods['toggle_goal_sec'] == true) {
            wp_enqueue_style('goal',     get_mts_assets('css') . 'goal.css');
        }
        if ($mtsThemeMods['toggle_services_sec'] == true || is_post_type_archive('services')) {
            wp_enqueue_style('services', get_mts_assets('css') . 'services.css');
        }
        if ($mtsThemeMods['toggle_portfolios_sec'] == true || is_post_type_archive('portfolios')) {
            wp_enqueue_style('portfolios', get_mts_assets('css') . 'portfolios.css');
        }
        if ($mtsThemeMods['toggle_blog_sec'] == true) {
            wp_enqueue_style('blog', get_mts_assets('css') . 'blog.css');
        }
    }

    if (is_category() || is_search() || is_archive() || is_author()) {
        wp_enqueue_style('blog', get_mts_assets('css') . 'blog.css');
    }

    if (is_single() || is_page()) {
        // enqueue stylesheet for single post.
        wp_enqueue_style('single-css', get_mts_assets('css') . 'single.css');

        if (comments_open() || get_comments_number()) {
            // enqueue stylesheet for the comment section.
            wp_enqueue_style('comment-css', get_mts_assets('css') . 'comments.css');
        }
    }

    if (is_author()) {
        // enqueue stylesheet for Author page.
        wp_enqueue_style('author-css', get_mts_assets('css') . 'author.css');
    }

    if (is_404()) {
        // enqueue stylesheet for 404 page.
        wp_enqueue_style('404-css', get_mts_assets('css') . '404.css');
    }
}
add_action('wp_enqueue_scripts', 'mts_scripts');
