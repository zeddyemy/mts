<?php

/**=====================================
 * OTHER SETTINGS SECTION
=======================================*/
$otherSettingsSection = new Clarusmod_Customize_Section($wp_customize, 'other_settings_sec_id', array(
    'title'    => __('Other Settings', 'mts'),
    'description' => esc_html__('Other settings for your site.', 'mts'),
    'priority' => 100,
    'panel' => 'mtsTheme_panel_id',
));
$wp_customize->add_section($otherSettingsSection);


/**==========================================
 * SETTINGS AND CONTROLS FOR 'OTHER SETTINGS'
============================================*/
// setting and control To disable About Section
$wp_customize->add_setting(
    'button_style',
    array(
        'default' => 'normal',
        'transport' => 'refresh',
        'sanitize_callback' => 'clarusmod_radio_sanitization'
    )
);
$wp_customize->add_control(new Btn_Style_Custom_Control(
    $wp_customize,
    'button_style',
    array(
        'label' => __('Button Style', 'mts'),
        'description' => esc_html__('Change Button Style'),
        'section' => 'other_settings_sec_id',
        'settings'   => 'button_style',
    )
));
