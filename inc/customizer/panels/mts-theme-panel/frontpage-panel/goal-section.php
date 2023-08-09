<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S GOAL SECTION
========================================================*/
$wp_customize->add_section(
    'ourGoal_Sec',
    array(
        'title'    => __("Goal Section", "Clarusmod" ),
		'description' => esc_html__( "Your Goal as an Individual or as a Brand" ),
		'priority' => 20,
		'panel' => 'frontpage_panel_id',
	)
);

/**========================================
 * SETTINGS AND CONTROLS FOR GOAL SECTION
==========================================*/
// setting and control To disable About Section
$wp_customize->add_setting(
    'toggle_goal_sec',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_goal_sec',
    array(
        'label' => __('Goal Section', 'Clarusmod'),
        'description' => esc_html__('Use The Toggle Button to Disable or Enable the Goal section'),

        'section' => 'ourGoal_Sec',
        'settings'   => 'toggle_goal_sec',
        'capability' => 'edit_theme_options',
    )
));

// setting for image in goal section
$wp_customize->add_setting(
    'goal_sec_img',
    array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    )
);
$wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    'goal_sec_img',
    array(
        'label' => __('Goal Background Image'),
        'description' => esc_html__('This is the Image that appears right before the written Goal for your brand. You can change it to your own image below. '),
        'section' => 'ourGoal_Sec',
        'settings' => 'goal_sec_img',
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

// setting and control To Change Goal TitLE
$wp_customize->add_setting(
    'goal_sec_title', //give it an ID
    array(
        'capability' => 'edit_theme_options',
        'default' => 'Our Goal?',
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(
    'goal_sec_title',
    array(
        'label' => "Title",
        'description' => __('Change The title of the Goal Section.'),
        'settings' => 'goal_sec_title',
        'section' => 'ourGoal_Sec',
        'type' => 'text',
    )
);

// setting and control To Change Goal Content
$wp_customize->add_setting(
    'goal_sec_content', //give it an ID
    array(
        'capability' => 'edit_theme_options',
        'default' => 'Our goal is to empower businesses with innovative tech solutions, delivering seamless web and mobile experiences, captivating design, and cutting-edge SEO strategies, enabling them to thrive in the digital world.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'type' => 'theme_mod',
    )
);
$wp_customize->add_control(new Clarusmod_TinyMCE_Custom_control(
    $wp_customize,
    'goal_sec_content',
    array(
        'label' => "Content",
        'description' => __('Type in your goals as a brand here.'),
        'settings' => 'goal_sec_content',
        'section' => 'ourGoal_Sec',
        'input_attrs' => array(
            'toolbar1' => 'undo redo blocks bold italic bullist numlist alignleft aligncenter alignright link',
            'mediaButtons' => true,
        )
    )
));