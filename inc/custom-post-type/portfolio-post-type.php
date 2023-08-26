<?php

// Register Custom Post Type for Portfolios
if (!function_exists('custom_post_type_portfolios')) {
    function custom_post_type_portfolios() {
        $labels = array(
            'name'               => __('Portfolios'),
            'singular_name'      => __('Portfolio'),
            'menu_name'          => __('Portfolios'),
            'all_items'          => __('All Portfolios'),
            'add_new'            => __('Add New'),
            'add_new_item'       => __('Add New Portfolio'),
            'edit_item'          => __('Edit Portfolio'),
            'new_item'           => __('New Portfolio'),
            'view_item'          => __('View Portfolio'),
            'search_items'       => __('Search Portfolios'),
            'not_found'          => __('No Portfolios found'),
            'not_found_in_trash' => __('No Portfolios found in Trash'),
            'parent_item_colon'  => __('Parent Portfolio:'),
        );

        $args = array(
            'label'               => __('Portfolios'),
            'description'         => __('Portfolios owned by individual or brand'),
            'labels'              => $labels,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'query_var'           => true,
            'capability_type'     => 'post',
            'menu_icon'           => 'dashicons-portfolio',
            'rewrite'             => array('slug' => 'portfolios'),
            'supports'            => array('title', 'thumbnail', 'excerpt'),
            'hierarchical'        => false,
            'menu_position'       => 5,
            'show_in_rest' => true,
        );

        register_post_type('portfolios', $args);
    }
}
add_action('init', 'custom_post_type_portfolios', 1);