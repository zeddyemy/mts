<?php

/**=====================================
 * HEADER PANEL
=======================================*/
$headerPanel = new Clarusmod_Customize_Panel($wp_customize, 'header_panel_id', array(
	'title' => 'Header',
	'priority' => 20,
	'panel' => 'mtsTheme_panel_id',
));
$wp_customize->add_panel($headerPanel);


/**=====================================
 * CHILD PANELS / SECTIONS
=======================================*/
