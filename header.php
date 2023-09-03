<?php

/**
 * The header for our theme
 *
 * @package MTS
 */

global $mtsThemeMods, $mtsBodyClass;
$mtsThemeMods = mts_theme_mods();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class($mtsBodyClass); ?>>
    <header id="header">
        <div class="header-c">
            <div class="logo">
                <a href="<?php echo get_bloginfo('wpurl'); ?>">
                    <h1>
                        <span>M</span>er<span>id</span>ian
                    </h1>
                </a>
            </div>
            <nav class=" nav nav-links">
                <div class="nav-actionBtns flexSB">
                    <div class="actionBtns flex flexCenter">
                        <span class="searchBtn icoBtn"> <i class='bx bx-search'></i> </span>
                        <span class="themeBtn icoBtn"> <i class='bx bxs-moon'></i> </span>
                    </div>
                    <span class="menuCloseBtn icoBtn"> <i class='bx bx-x'></i> </span>
                </div>
                <?php
                if (has_nav_menu('main-nav-menu')) {
                    wp_nav_menu(array(
                        'menu_class' => 'links',
                        'menu_id' => 'items',
                        'theme_location' => 'main-nav-menu',
                        'container' => '',
                        'walker' => new Custom_Nav_Menu()
                    ));
                } else {
                    wp_nav_menu(array(
                        'menu_class' => 'links',
                        'menu_id' => 'items',
                        'theme_location' => 'main-nav-menu',
                        'container' => ''
                    ));
                }
                ?>
            </nav>
            <div class="actionBtns flex flexCenter">
                <span class="searchBtn icoBtn"> <i class='bx bx-search'></i> </span>
                <span class="themeBtn icoBtn"> <i class='bx bxs-moon'></i> </span>
                <span class="menuBtn icoBtn btn"> <i class='bx bx-menu'></i> </span>
            </div>
            <div class="nav-overlay"></div>
            <div class="search-block flex flexCenter">
                <div class="search-card card flex flexCenter">
                    <span class="close-search icoBtn">
                        <i class='bx bx-x'></i>
                    </span>
                    <span class="search-title">What are you searching for?</span>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </header>