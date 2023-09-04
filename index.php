<?php

/**
 * The main template file
 *
 * @package MTS
 */

global $mtsBodyClass;
$mtsThemeMods = mts_theme_mods();
if (!$mtsThemeMods['toggle_hero_header_sec']) {
    $mtsBodyClass[] = 'noHero';
}

get_header();

get_template_part('template-parts/frontpage', get_post_format());

get_footer();
