<?php

/**=====================================
 * FRONTPAGE PANEL
=======================================*/
$frontpagePanel = new Clarusmod_Customize_Panel($wp_customize, 'frontpage_panel_id', array(
    'title' => 'Front Page',
    'description' => esc_html__('Customize how the Front Page Feels And Look'),
    'priority' => 30,
    'panel' => 'mtsTheme_panel_id',
));
$wp_customize->add_panel($frontpagePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// site identity Section with its settings and controls.
include_once dirname(__FILE__) . '/frontpage-panel/about-section.php';