<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FEATURED IMAGE
========================================================*/
// Featured Image section
$wp_customize->add_section(
    'pages_featured_img',
    array(
        'title'    => __('Featured Image', 'mts'),
        'panel' => 'pages_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR FEATURED IMAGE
==========================================*/
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
        'section'  => 'pages_featured_img',
        'settings'   => 'toggle_pages_featured_img',
    )
));
