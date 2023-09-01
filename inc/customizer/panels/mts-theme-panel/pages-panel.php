<?php

/**=====================================
 * SINGLE PAGE PANEL
=======================================*/
$singlePagePanel = new Clarusmod_Customize_Panel($wp_customize, 'pages_panel_id', array(
    'title' => 'Pages',
    'description' => esc_html__('Customize how pages on your site looks like. This includes contact page, about page, e.t.c', 'mts'),
    'priority' => 50,
    'panel' => 'mtsTheme_panel_id',
));
$wp_customize->add_panel($singlePagePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// wordpress pages 'Hero Header' section with its settings and controls.
include_once dirname(__FILE__) . '/pages-panel/hero-header.php';

// wordpress pages 'featured image' section with its settings and controls.
include_once dirname(__FILE__) . '/pages-panel/featured-image.php';

// wordpress pages 'sidebar' section with its settings and controls.
include_once dirname(__FILE__) . '/pages-panel/pages-side.php';