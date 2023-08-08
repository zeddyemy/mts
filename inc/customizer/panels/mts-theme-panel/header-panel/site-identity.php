<?php


/**===================================
 * CREATE SECTION FOR SITE IDENTITY
=====================================*/
$wp_customize->remove_section('title_tagline');
$wp_customize->add_section(
	'title_tagline',
	array(
		'title'    => __('Site Identity', 'mts'),
		'description' => esc_html__(''),
		'priority' => 10,
		'panel' => 'header_panel_id',
	)
);


/**===================================
 * SETTINGS AND CONTROLS FOR SITE IDENTITY
=====================================*/
// Setting for the site logo (upload Logo)
$wp_customize->add_setting('your_theme_logo');
$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize, 'your_theme_logo',
		array(
			'label' => 'Upload Logo',
			'section' => 'title_tagline',
			'settings' => 'your_theme_logo',
		)
	)
);