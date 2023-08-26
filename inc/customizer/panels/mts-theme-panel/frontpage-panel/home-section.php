<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S HOME SECTION
========================================================*/
$wp_customize->add_section(
    'home_Sec',
    array(
        'title'    => __("Home Section", "mts"),
        'description' => esc_html__("Home Section is basically a short intro to your visitors", "mts"),
        'priority' => 10,
        'panel' => 'frontpage_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR HOME SECTION
==========================================*/
// setting and control To disable Home Section
$wp_customize->add_setting(
    'toggle_home_sec',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_home_sec',
    array(
        'label' => __('Home Section', 'mts'),
        'description' => esc_html__('Use The Toggle Button to Disable or Enable the Home section', 'mts'),
        'section' => 'home_Sec',
        'settings'   => 'toggle_home_sec',
        'capability' => 'edit_theme_options',
    )
));


// setting for image in Home section
$wp_customize->add_setting(
    'home_sec_img',
    array(
        'default' => get_mts_assets('img') . 'team.jpg',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'home_sec_img',
    array(
        'label' => __('Home Section Background Image', 'mts'),
        'description' => esc_html__('This is the background image of the home section. You can change it to your own image below.', 'mts'),
        'section' => 'home_Sec',
        'settings' => 'home_sec_img',
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


// setting and control To Change Home TitLE
$wp_customize->add_setting(
    'home_sec_title', //give it an ID
    array(
        'capability' => 'edit_theme_options',
        'default' => __('Stay ahead of the curve with our forward thinking.', 'mts'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'home_sec_title',
    array(
        'label' => __("Title", 'mts'),
        'description' => __('Change The title of the Home Section.', 'mts'),
        'settings' => 'home_sec_title',
        'section' => 'home_Sec',
        'type' => 'text',
    )
);


// setting and control To Change Home Short info
$wp_customize->add_setting(
    'home_sec_info',
    array(
        'default' => __('We take extreme pride at being the very best at what we do.', 'mts'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'home_sec_info',
    array(
        'label' => __("Short Info", 'mts'),
        'description' => __('Change The short info in the Home Section.', 'mts'),
        'settings' => 'home_sec_info',
        'section' => 'home_Sec',
        'type' => 'text',
    )
);


// Setting and Control to change Disable or Enable Home section's Button
$wp_customize->add_setting(
    'toggle_home_sec_btn',
    array(
        'default' => true,
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_home_sec_btn',
    array(
        'label' => "Home Section Button",
        'description' => __('Disable or Enable The Home Section Button', 'mts'),
        'section' => 'home_Sec',
        'settings' => 'toggle_home_sec_btn',
    )
));


// Setting and Control to add Url for the Home Section Button
$wp_customize->add_setting(
    'home_sec_btn_url', //give it an ID
    array(
        'default' => '#',
        'sanitize_callback' => 'clarusmod_url_sanitization',
    )
);
$wp_customize->add_control(new Clarusmod_Url_Custom_Control(
    $wp_customize,
    'home_sec_btn_url',
    array(
        'label' => __("Home Section Button Url", 'mts'),
        'description' => __('Change The URL for the Button in Home Section'),
        'section' => 'home_Sec',
        'settings' => 'home_sec_btn_url',
    )
));


// setting and control To Change the Button Text
$wp_customize->add_setting(
    'home_sec_btn_text', //give it an ID
    array(
        'default' => __('Get in touch', 'mts'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'home_sec_btn_text',
    array(
        'label' => __("Change Button Text", 'mts'),
        'description' => __('Change The Text for the Home Section Button', 'mts'),
        'settings' => 'home_sec_btn_text',
        'section' => 'home_Sec',
        'type' => 'text',
    )
);