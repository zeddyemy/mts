<?php

/**
 * The main template file
 *
 * @package MTS
 */
global $mtsThemeMods, $mtsBodyClass;
$mtsThemeMods = mts_theme_mods();
$mtsBodyClass[] = 'noHero';

get_header();

get_template_part('template-parts/blog-page', get_post_format());

get_footer();
