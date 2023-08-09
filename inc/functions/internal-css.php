<?php

function internal_css()
{

    $bgColor = get_theme_mod('background_color', get_theme_support('custom-background', 'default-color')); // Custom background Color
    $themeColor = get_theme_mod('mts_theme_color', '#2869ff'); // Theme Color
    $headerTextColor = get_theme_mod('header_text_color', '#000000'); // Text Color In The Header
    $footerTextColor = get_theme_mod('footer_text_color', '#f2f2f2'); // Text Color In The Footer
    $headerBgColor = get_theme_mod('header_bg_color', '#ffffff'); // Background Color Of Header
    $headerBgImage = get_theme_mod('header_bg_image'); // Background Image Of Header
    $footerBgColor = get_theme_mod('footer_bg_color', '#212121;'); // Background Color Of Footer
    $footerBgImage = get_theme_mod('footer_bg_image'); // Background Image Of Footer

    $navbarCaseMod  = get_theme_mod('nav_text_transform', 'capitalize'); // To check If Uppercase is set for the nav items
    $navbarCase = ($navbarCaseMod == 'capitalize') ? 'capitalize' : (($navbarCaseMod == 'uppercase') ? 'uppercase' : 'lowercase');

    $titleCaseMod  = get_theme_mod('title_text_transform', 'capitalize');
    $titleCase = ($titleCaseMod == 'capitalize') ? 'capitalize' : (($titleCaseMod == 'uppercase') ? 'uppercase' : 'lowercase');

    $adminBar = is_admin_bar_showing(); ?>

    <style>
        body {
            --theme-clr: <?php echo $themeColor;  ?>;
            --header-text-color: <?php echo $headerTextColor;  ?>;
            --header-background-color: <?php echo $headerBgColor;  ?>;
            --navbar-background-color: <?php echo $headerBgColor . 'c5'; ?>;
            --header-background-image: url(' <?php echo $headerBgImage; ?> ');
            --footer-background-color: <?php echo $footerBgColor;  ?>;
            --footer-background-image: url(' <?php echo $footerBgImage; ?> ');
            --footer-text-color: <?php echo $footerTextColor;  ?>;

            --title-text-transform: <?php echo $navbarCase; ?>;
            --navbar-text-transform: <?php echo $titleCase; ?>;
        }

        <?php
        // if custom background color is not set
        if (!$bgColor) {
            echo 'body { background-image: var(--body-background); }';
        }
        ?>
    </style> <?php

            }
            add_action('wp_head', 'internal_css');
