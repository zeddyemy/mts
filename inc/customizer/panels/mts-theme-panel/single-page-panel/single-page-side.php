<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S ABOUT SECTION
========================================================*/
$wp_customize->add_section(
    'single_blog_page_sidebar',
    array(
        'title'    => __('Single Blog Page Sidebar', 'mts'),
        'description' => esc_html__('customizer the sidebar on single blog page. Click on a blog post to see your changes reflect there.', 'mts'),
        'panel' => 'single_blog_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR ABOUT SECTION
==========================================*/
// Setting and Control To Disable or Enable Sidebar on the single page
$wp_customize->add_setting(
    'toggle_single_sidebar',
    array(
        'default' => false,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_single_sidebar',
    array(
        'label' => __('Sidebar', 'mts'),
        'description' => esc_html__('Use this toggle to Disable or Enable the Sidebar of single blog page.', 'mts'),
        'section'  => 'single_blog_page_sidebar',
        'settings'   => 'toggle_single_sidebar',
    )
));
