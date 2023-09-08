<?php

/**=====================================
 * SINGLE PAGE PANEL
=======================================*/
$singleFolioPagePanel = new Clarusmod_Customize_Panel($wp_customize, 'single_folio_panel_id', array(
    'title' => 'Singular Portfolio Page',
    'description' => esc_html__('Customize how a singular portfolio looks like', 'mts'),
    'priority' => 60,
    'panel' => 'mtsTheme_panel_id',
));
$wp_customize->add_panel($singleFolioPagePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// Hero Header Section with its settings and controls.
include_once dirname(__FILE__) . '/single-folio-page-panel/hero-header.php';