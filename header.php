<?php

/**
 * The header for our theme
 *
 * @package MTS
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <title>Meridian Tech Solutions</title>
</head>

<body <?php body_class(''); ?>>
    <header id="header">
        <div class="header-c">
            <div class="logo">
                <a href="<?php echo get_bloginfo('wpurl'); ?>">
                    <h1>
                        <span>M</span>er<span>id</span>ian
                    </h1>
                </a>
            </div>
            <span class="menuBtn"> <i class='bx bx-menu'></i> </span>
            <nav class=" nav nav-links">
                <div class="nav-logo">
                    <span class="logo-name"> <?php echo get_bloginfo('name'); ?> </span>
                    <i class='bx bx-x'></i>
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
        </div>
    </header>