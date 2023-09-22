<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S ABOUT SECTION
========================================================*/
$wp_customize->add_section(
	'about_Sec',
	array(
		'title'    => __("About Section", "pureFolio"),
		'description' => esc_html__('Short info/thesis about you or your Brand.'),
		'priority' => 10,
		'panel' => 'frontpage_panel_id',
	)
);


/**========================================
 * SETTINGS AND CONTROLS FOR ABOUT SECTION
==========================================*/
// setting and control To disable About Section
$wp_customize->add_setting(
	'toggle_about_sec',
	array(
		'default' => 'true',
	)
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
	$wp_customize,
	'toggle_about_sec',
	array(
		'label' => __('About Section', 'pureFolio'),
		'description' => esc_html__('Use The Toggle Button to Disable or Enable the about section'),
		'section' => 'about_Sec',
		'settings'   => 'toggle_about_sec',
		'capability' => 'edit_theme_options',
	)
));

// Setting and Control To disable the Title
$wp_customize->add_setting(
	'toggle_about_title',
	array(
		'default' => 'true',
	)
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
	$wp_customize,
	'toggle_about_title',
	array(
		'label' => __('Title', 'pureFolio'),
		'description' => esc_html__('Hide The title if you do not want it'),
		'section' => 'about_Sec',
		'settings'   => 'toggle_about_title',
		'capability' => 'edit_theme_options',
	)
));

// setting and control To Edit the TitLE
$wp_customize->add_setting(
	'about_sec_title', //give it an ID
	array(
		'capability' => 'edit_theme_options',
		'default' => 'Who Are We?',
		'sanitize_callback' => 'sanitize_textarea_field',
		'type' => 'theme_mod',
	)
);
$wp_customize->add_control(
	'about_sec_title',
	array(
		'label' => "Edit Title",
		'description' => __('Edit The title of the about Section.'),
		'settings' => 'about_sec_title',
		'section' => 'about_Sec',
		'type' => 'text',
	)
);

// Setting and Control for to type the The content for the About Section
$wp_customize->add_setting(
	'about_sec_content', //give it an ID
	array(
		'capability' => 'edit_theme_options',
		'default' => 'Here at Meridian Tech Solutions, we believe creating a website shouldn’t be difficult or complicated. We build quality products and tools that are simple to use, affordable, and reliable to help entrepreneurs, professionals, and bloggers grow online. <p>We’ve kept the small business feel while competing with the big boys. Our high level of expertise and success keeps driving us to learn and grow. We all know that in today’s fast paced tech world, if you’re not growing, you’re dying. Just like your website.</p>',
		'sanitize_callback' => 'wp_kses_post',
		'type'       => 'theme_mod',
	)
);
$wp_customize->add_control(new Clarusmod_TinyMCE_Custom_control(
	$wp_customize,
	'about_sec_content',
	array(
		'label' => "Content",
		'description' => __('Type in your short speech here.'),
		'settings' => 'about_sec_content',
		'section' => 'about_Sec',
		'input_attrs' => array(
			'toolbar1' => 'undo redo blocks bold italic bullist numlist alignleft aligncenter alignright link',
			'mediaButtons' => true,
		)
	)
));


// Setting and Control to change Disable or Enable About section's "Read More" Button
$wp_customize->add_setting(
	'toggle_about_readMore_btn',
	array(
		'default' => true,
	)
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
	$wp_customize,
	'toggle_about_readMore_btn',
	array(
		'label' => "Read More Button",
		'description' => __('Disable or Enable The Read More Button'),
		'section' => 'about_Sec',
		'settings' => 'toggle_about_readMore_btn',
		'capability' => 'edit_theme_options',
	)
));


// Setting and Control to add Url for the About Read More Button
$wp_customize->add_setting(
	'about_readMore_btn_url', //give it an ID
	array(
		'capability' => 'edit_theme_options',
		'default' => 'about.com',
		'sanitize_callback' => 'sanitize_textarea_field',
		'type' => 'theme_mod',
	)
);
$wp_customize->add_control(new Clarusmod_Url_Custom_Control(
	$wp_customize,
	'about_readMore_btn_url',
	array(
		'label' => "Read More Button Url",
		'description' => __('Change The URL for the Read More Button'),
		'settings' => 'about_readMore_btn_url',
		'section' => 'about_Sec',
	)
));


// setting and control To Change the Button Text
$wp_customize->add_setting(
	'about_readMore_btn_text', //give it an ID
	array(
		'capability' => 'edit_theme_options',
		'default' => 'Read More',
		'sanitize_callback' => 'sanitize_textarea_field',
		'type' => 'theme_mod',
	)
);
$wp_customize->add_control(
	'about_readMore_btn_text',
	array(
		'label' => "Change Button Text",
		'description' => __('Change The Text for the Read More Button'),
		'settings' => 'about_readMore_btn_text',
		'section' => 'about_Sec',
		'type' => 'text',
	)
);


// setting and control to toggle ON or OFF the About Section Image
$wp_customize->add_setting(
	'toggle_about_sec_img', //give it an ID
	array(
		'capability' => 'edit_theme_options',
		'default' => 'true',
		'sanitize_callback' => 'wp_kses_post',
		'type'       => 'theme_mod',
	)
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
	$wp_customize,
	'toggle_about_sec_img',
	array(
		'label' => "About Section Image",
		'description' => __('Disable or Enable The Image that is displayed next to your about content'),
		'settings' => 'toggle_about_sec_img',
		'section' => 'about_Sec',
	)
));


// add a setting for image in About Section
$wp_customize->add_setting(
	'about_sec_img',
	array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'esc_url_raw'
	)
);
$wp_customize->add_control(new WP_Customize_Image_Control(
	$wp_customize,
	'about_sec_img',
	array(
		'label' => __('Change About Section Image'),
		'description' => esc_html__('You can change This to be an image of Yourself or Brand.'),
		'section' => 'about_Sec',
		'settings' => 'about_sec_img',
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
