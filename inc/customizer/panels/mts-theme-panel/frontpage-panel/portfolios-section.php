<?php

/**======================================================
 * CREATE SECTION TO MODIFY THE FRONTPAGE'S PORTFOLIO SECTION
========================================================*/
$wp_customize->add_section(
    'portfolios_sec',
    array(
        'title'    => __("Portfolios Section", "mts"),
        'description' => esc_html__("Your portfolios are displayed in this section", 'mts'),
        'priority' => 50,
        'panel' => 'frontpage_panel_id',
    )
);

/**========================================
 * SETTINGS AND CONTROLS FOR PORTFOLIO SECTION
==========================================*/
// setting and control To disable or enable Portfolios Section
$wp_customize->add_setting(
    'toggle_portfolios_sec',
    array(
        'default' => 'true',
    )
);
$wp_customize->add_control(new Clarusmod_Toggle_Switch_Custom_control(
    $wp_customize,
    'toggle_portfolios_sec',
    array(
        'label' => __('Portfolios Section', 'mts'),
        'description' => esc_html__('Use The Toggle Button to Disable or Enable the Portfolios section', 'mts'),
        'section' => 'portfolios_sec',
        'settings'   => 'toggle_portfolios_sec',
    )
));

// setting and control To Change Portfolios TitLE
$wp_customize->add_setting(
    'portfolios_sec_title',
    array(
        'default' => __('Our Portfolio', 'mts'),
        'sanitize_callback' => 'sanitize_textarea_field',
    )
);
$wp_customize->add_control(
    'portfolios_sec_title',
    array(
        'label' => __("Title", 'mts'),
        'description' => __('Change The title of the Portfolios Section.', 'mts'),
        'settings' => 'portfolios_sec_title',
        'section' => 'portfolios_sec',
        'type' => 'text',
    )
);


// setting and control To Specify The Total Number of Portfolios To Be Displayed
$wp_customize->add_setting(
    'portfolios_count',
    array(
        'default' => 9,
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(
    'portfolios_count',
    array(
        'label' => __("Number of portfolios", 'mts'),
        'description' => __('Specify the total number of portfolios to be displayed. Maximum number allowed is 12', 'mts'),
        'settings' => 'portfolios_count',
        'section' => 'portfolios_sec',
        'type' => 'text',
        'input_attrs' => array(
            'min' => 1,
            'max' => 12
        ),
    )
);