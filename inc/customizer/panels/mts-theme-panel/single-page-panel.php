<?php

/**=====================================
 * SINGLE PAGE PANEL
=======================================*/
$singlePagePanel = new Clarusmod_Customize_Panel($wp_customize, 'single_blog_panel_id', array(
    'title' => 'Single Blog Page',
    'description' => esc_html__('Customize how the blog pages looks like', 'mts'),
    'priority' => 40,
    'panel' => 'mtsTheme_panel_id',
));
$wp_customize->add_panel($singlePagePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// single blog page sidebar with its settings and controls.
include_once dirname(__FILE__) . '/single-page-panel/single-page-side.php';