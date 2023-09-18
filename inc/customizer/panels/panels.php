<?php

/**=====================================
 * MTS THEME SETTINGS PANEL
=======================================*/
$mtsThemePanel = new Clarusmod_Customize_Panel($wp_customize, 'mtsTheme_panel_id', array(
    'title' => 'MTS Theme Settings',
    'priority' => 10,
));
$wp_customize->add_panel($mtsThemePanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
// Colors Panel
include_once dirname(__FILE__) . '/mts-theme-panel/colors-panel.php';

// Header Panel
include_once dirname(__FILE__) . '/mts-theme-panel/header-panel.php';

// Frontpage Panel
include_once dirname(__FILE__) . '/mts-theme-panel/frontpage-panel.php';

// Blog page Panel
include_once dirname(__FILE__) . '/mts-theme-panel/blog-page-panel.php';

// Singular blog Page panel
include_once dirname(__FILE__) . '/mts-theme-panel/single-page-panel.php';

// Singular Portfolio Page panel
include_once dirname(__FILE__) . '/mts-theme-panel/single-folio-page-panel.php';

// Pages panel
include_once dirname(__FILE__) . '/mts-theme-panel/pages-panel.php';

// Other settings panel
include_once dirname(__FILE__) . '/mts-theme-panel/other-settings-panel.php';
