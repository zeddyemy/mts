<?php

/**
 * The main template file
 *
 * @package MTS
 */
global $mtsThemeMods;
$mtsThemeMods = mts_theme_mods();

get_header();

get_template_part('template-parts/frontpage', get_post_format());

get_footer();
