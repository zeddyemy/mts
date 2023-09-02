<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mts
 */

global $mtsThemeMods;
global $mtsPageThemeMods;
$mtsThemeMods = mts_theme_mods();
$mtsPageThemeMods = mts_page_theme_mods();

get_header();

get_template_part('template-parts/pages', get_post_format());

get_footer();
