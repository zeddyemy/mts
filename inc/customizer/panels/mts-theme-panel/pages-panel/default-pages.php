<?php

/**======================================================
 * CREATE SECTION TO MODIFY HERO HEADER
========================================================*/
$wp_customize->add_section(
    'pages_default_settings',
    array(
        'title'    => __('Default Settings For Pages', 'mts'),
        'description' => esc_html__('The settings on here, are the defualt settings for all pages across your website. Visit a page to see your changes reflect there.', 'mts'),
        'panel' => 'pages_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR HERO HEADER
==========================================*/
// Setting and Control To Disable or Enable Hero Header on wordpress pages
$wp_customize->add_setting(
    'toggle_pages_hero_header',
    array(
        'default' => True,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_pages_hero_header',
    array(
        'label' => __('Hero Header', 'mts'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Hero Header on your site\'s pages.', 'mts'),
        'section'  => 'pages_default_settings',
        'settings'   => 'toggle_pages_hero_header',
    )
));


// setting for Background image of Hero Header
$wp_customize->add_setting(
    'pages_hero_header_img',
    array(
        'default' => get_mts_assets('img') . 'pages-img.jpg',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'pages_hero_header_img',
    array(
        'label' => __('Hero Header Background Image', 'mts'),
        'description' => esc_html__('This is the Background Image the Hero Header. You can change it to your own image below.', 'mts'),
        'section'  => 'pages_default_settings',
        'settings' => 'pages_hero_header_img',
        'button_labels' => array( // Optional.
            'select' => __('Select Image'),
            'change' => __('Change Image'),
            'remove' => __('Remove'),
            'default' => __('Default'),
            'frame_title' => __('Select Image'),
            'frame_button' => __('Choose Image'),
        )
    )
));


// setting and control To Edit Hero Header subtext
$wp_customize->add_setting(
    'pages_hero_header_subtext',
    array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);
$wp_customize->add_control(
    'pages_hero_header_subtext',
    array(
        'label' => __('Hero Subtext', 'mts'),
        'description' => __('Input your desired subtext for the Hero Header. (Optional)', 'mts'),
        'settings' => 'pages_hero_header_subtext',
        'section'  => 'pages_default_settings',
        'type' => 'textarea',
    )
);


// Setting and Control To disable featured image
$wp_customize->add_setting(
    'toggle_pages_featured_img',
    array(
        'default' => false,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_pages_featured_img',
    array(
        'label' => __('Featured Image', 'mts'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Featured Image on your site\'s pages.', 'mts'),
        'section'  => 'pages_default_settings',
        'settings'   => 'toggle_pages_featured_img',
    )
));


// Setting and Control To Disable or Enable Sidebar on wordpress pages
$wp_customize->add_setting(
    'toggle_pages_sidebar',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_pages_sidebar',
    array(
        'label' => __('Sidebar', 'mts'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Sidebar on your site\'s pages.', 'mts'),
        'section'  => 'pages_default_settings',
        'settings'   => 'toggle_pages_sidebar',
    )
));
