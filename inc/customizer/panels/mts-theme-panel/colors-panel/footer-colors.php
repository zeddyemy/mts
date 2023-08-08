<?php

	// Add section and controls to color panel
	$wp_customize->add_section( 'footer_color_sections',
		array(
			'title' => __( 'Footer Colors', 'mts' ),
			'priority'    => 40,
			'capability'  => 'edit_theme_options',
			'panel' => 'colors_panel_id',
		)
	);

	/* ++++++++++++++++++++++++++++++
	CUSTOMIZER SETTINGS 
	+++++++++++++++++++++++++++++++++ */

	// ++ add a setting for footer background color ++ //
	$wp_customize->add_setting(
		'footer_bg_color', //give it an ID
		array(
			'default' => '#212121', // Give it a default
		)
	);

	// add a setting for footer text color //
	$wp_customize->add_setting(
		'footer_text_color', //give it an ID
		array(
			'default' => '#f2f2f2', // Give it a default
		)
	);

	// add a setting for the footer's background Image //
	$wp_customize->add_setting('footer_bg_image');


	/* ++++++++++++++++++++++++++++++++++++++++
	CUSTOMIZER CONTROLS FOR THE SETTINGS ABOVE 
	+++++++++++++++++++++++++++++++++++++++++ */

	// ++ control for footer's background color ++ //
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'footer_bg_color_control', //give it an ID
			array(
				'label'      => __( 'Footer Background color', 'mts' ), //set the label to appear in the Customizer
				'section'    => 'footer_color_sections', //select the section for it to appear under  
	            'settings'   => 'footer_bg_color' //pick the setting it applies to
			)
		)
	);

	// ++ control for footer's Text color ++ //
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
	        'footer_text_color_control', //give it an ID
			array(
	            'label'      => __( ' Footer Text Color', 'mts' ), //set the label to appear in the Customizer
				'section'    => 'footer_color_sections', //select the section for it to appear under  
	            'settings'   => 'footer_text_color' //pick the setting it applies to
			)
		)
	);

	// ++ Control for footer's background image ++ //
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'footer_bg_img_control',
		
			array(
				'label' => 'Upload Footer Background Image',
				'section' => 'footer_color_sections',
				'settings' => 'footer_bg_image',
			)
		)
	);