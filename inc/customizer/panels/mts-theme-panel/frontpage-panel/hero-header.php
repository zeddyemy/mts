<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S HERO HEADER SECTION
========================================================*/
$wp_customize->add_section(
    'hero_header_Sec',
    array(
        'title'    => __("Hero Header Section", "mts"),
        'description' => esc_html__("Hero Header is basically a short intro to your visitors", "mts"),
        'priority' => 10,
        'panel' => 'frontpage_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR HERO HEADER SECTION
==========================================*/
// setting and control To disable Hero Header Section
$wp_customize->add_setting(
    'toggle_hero_header_sec',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_hero_header_sec',
    array(
        'label' => __('Hero Header', 'mts'),
        'description' => esc_html__('Use The Toggle Button to Disable or Enable the Hero Header', 'mts'),
        'section' => 'hero_header_Sec',
        'settings'   => 'toggle_hero_header_sec',
        'capability' => 'edit_theme_options',
    )
));


// setting for image in Hero Header section
$wp_customize->add_setting(
    'hero_header_sec_img',
    array(
        'default' => get_mts_assets('img') . 'hands-1.jpg',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'hero_header_sec_img',
    array(
        'label' => __('Hero Header Background Image', 'mts'),
        'description' => esc_html__('This is the background image of the Hero Header. You can change it to your own image below.', 'mts'),
        'section' => 'hero_header_Sec',
        'settings' => 'hero_header_sec_img',
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


// setting and control To Change Hero Header TitLE
$wp_customize->add_setting(
    'hero_header_sec_title', //give it an ID
    array(
        'capability' => 'edit_theme_options',
        'default' => __('Stay ahead of the curve with our forward thinking.', 'mts'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'hero_header_sec_title',
    array(
        'label' => __("Title", 'mts'),
        'description' => __('Change The title of the Hero Header.', 'mts'),
        'settings' => 'hero_header_sec_title',
        'section' => 'hero_header_Sec',
        'type' => 'text',
    )
);


// setting and control To Change Hero Header Subtext
$wp_customize->add_setting(
    'hero_header_sec_subtext',
    array(
        'default' => __('We take extreme pride at being the very best at what we do.', 'mts'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'hero_header_sec_subtext',
    array(
        'label' => __("Hero Subtext", 'mts'),
        'description' => __('Change The Subtext in the Hero Header.', 'mts'),
        'settings' => 'hero_header_sec_subtext',
        'section' => 'hero_header_Sec',
        'type' => 'text',
    )
);


// Setting and Control to change Disable or Enable Hero Header section's Button
$wp_customize->add_setting(
    'toggle_hero_header_sec_btn',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_hero_header_sec_btn',
    array(
        'label' => "Hero Header Button",
        'description' => __('Disable or Enable The Hero Header Button', 'mts'),
        'section' => 'hero_header_Sec',
        'settings' => 'toggle_hero_header_sec_btn',
    )
));


// Setting and Control to add Url for the Hero Header Section Button
$wp_customize->add_setting(
    'hero_header_sec_btn_url', //give it an ID
    array(
        'default' => '#',
        'sanitize_callback' => 'clarusmod_url_sanitization',
    )
);
$wp_customize->add_control(new Clarusmod_Url_Custom_Control(
    $wp_customize,
    'hero_header_sec_btn_url',
    array(
        'label' => __("Hero Header Button Url", 'mts'),
        'description' => __('Change The URL for the Button in Hero Header.'),
        'section' => 'hero_header_Sec',
        'settings' => 'hero_header_sec_btn_url',
    )
));


// setting and control To Change the Button Text
$wp_customize->add_setting(
    'hero_header_sec_btn_text', //give it an ID
    array(
        'default' => __('Get in touch', 'mts'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'hero_header_sec_btn_text',
    array(
        'label' => __("Change Button Text", 'mts'),
        'description' => __('Change The Text for the Hero Header Button', 'mts'),
        'settings' => 'hero_header_sec_btn_text',
        'section' => 'hero_header_Sec',
        'type' => 'text',
    )
);