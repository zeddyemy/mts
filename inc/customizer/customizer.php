<?php

// Load Clarusmod Customizer
include_once get_template_directory() . '/inc/clarusmod/clarusmod.php';

// Initialize Customizer settings
$panels_path = trailingslashit(dirname(__FILE__)) . 'panels/panels.php';
$mts_settings = new initialize_clarusmod_customizer_settings($panels_path);