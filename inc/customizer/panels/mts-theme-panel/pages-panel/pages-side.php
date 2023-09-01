<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE SIDE BAR
========================================================*/
$wp_customize->add_section(
    'pages_sidebar',
    array(
        'title'    => __('Pages Sidebar', 'mts'),
        'description' => esc_html__('customizer the sidebar on your site\'s pages. Visit a page to see your changes reflect there.', 'mts'),
        'panel' => 'pages_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR SIDE BAR
==========================================*/
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
        'section'  => 'pages_sidebar',
        'settings'   => 'toggle_pages_sidebar',
    )
));
