<?php

function internal_css() {
    global $mtsThemeMods;

    $navbarCaseMod  = $mtsThemeMods['nav_text_transform']; // To check If Uppercase is set for the nav items
    $navbarCase = ($navbarCaseMod == 'capitalize') ? 'capitalize' : (($navbarCaseMod == 'uppercase') ? 'uppercase' : 'lowercase');

    $titleCaseMod  = $mtsThemeMods['title_text_transform'];
    $titleCase = ($titleCaseMod == 'capitalize') ? 'capitalize' : (($titleCaseMod == 'uppercase') ? 'uppercase' : 'lowercase');

    $adminBar = is_admin_bar_showing(); ?>

    <style>
        body {
            --theme-clr: <?php echo $mtsThemeMods['mts_theme_color'];  ?>;
            --header-text-color: <?php echo $mtsThemeMods['header_text_color'];  ?>;
            --header-background-color: <?php echo $mtsThemeMods['header_bg_color'];  ?>;
            --navbar-background-color: <?php echo $mtsThemeMods['header_bg_color'] . 'c5'; ?>;
            --header-background-image: url(' <?php echo $mtsThemeMods['header_bg_image']; ?> ');
            --footer-background-color: <?php echo $mtsThemeMods['footer_bg_color'];  ?>;
            --footer-background-image: url(' <?php echo $mtsThemeMods['footer_bg_image']; ?> ');
            --footer-text-color: <?php echo $mtsThemeMods['footer_text_color'];  ?>;

            --title-text-transform: <?php echo $navbarCase; ?>;
            --navbar-text-transform: <?php echo $titleCase; ?>;
        }

        <?php
        // if custom background color is not set
        if (!$mtsThemeMods['background_color']) {
            echo 'body { background-image: var(--body-background); }';
        }
        ?>
    </style> 
    <?php
}
add_action('wp_head', 'internal_css');
