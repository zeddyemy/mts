<?php

// Register Custom Post Type for Portfolios
if (!function_exists('custom_post_type_portfolios')) {
    function custom_post_type_portfolios()
    {
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

        // Add custom meta box for portfolio url
        add_action('add_meta_boxes', 'add_portfolio_url_meta_box');
        add_action('save_post', 'save_portfolio_url_meta_box');

        function add_portfolio_url_meta_box() {
            add_meta_box(
                'portfolio_url',
                'Portfolio URL',
                'render_portfolio_url_meta_box',
                'portfolios', // custom post type name
                'normal',
                'default'
            );
        }

        // Render the contents of the meta box
        function render_portfolio_url_meta_box($post) {
            $portfolio_url = get_post_meta($post->ID, 'portfolio_url', true);
            
            echo '<label for="portfolio_url">Portfolio URL:</label> &nbsp;&nbsp;&nbsp;';
            echo '<input type="url" id="portfolio_url" name="portfolio_url" value="' . esc_url($portfolio_url) . '" size="30" placeholder="Add url" />';
        }

        // Save the meta box data
        function save_portfolio_url_meta_box($post_id) {
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }

            if (!current_user_can('edit_post', $post_id)) {
                return;
            }
            
            if ($post_id && isset($_POST['portfolio_url'])) {
                update_post_meta($post_id, 'portfolio_url', esc_url($_POST['portfolio_url']));
            }
        }
    }
}
add_action('init', 'custom_post_type_portfolios', 1);

include_once dirname(__FILE__) . '/none/no-portfolio.php';