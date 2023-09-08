<?php

/**
 * The template for displaying single portfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MTS
 */
global $mtsThemeMods;
$mtsThemeMods = mts_theme_mods();

get_header();

get_template_part('template-parts/single-folio-page', get_post_format());

get_footer();
