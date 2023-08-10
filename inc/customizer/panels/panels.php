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

// Other settings section
include_once dirname(__FILE__) . '/mts-theme-panel/other-settings-section.php';
