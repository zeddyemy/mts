<?php

/**
 * The template for displaying single portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MTS
 */
global $mtsThemeMods, $mtsBodyClass;
$mtsThemeMods = mts_theme_mods();

if (!$mtsThemeMods['toggle_folio_hero_header']) {
    $mtsBodyClass[] = 'noHero';
}

get_header();

get_template_part('template-parts/single-folio-page', get_post_format());

get_footer();
