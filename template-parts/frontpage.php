<?php
/*
    Template part : Front Page
    Description : This Template Part Is Made Specifically For The Front Page.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The FrontPage.

    Template Parts :    1) home section template part
                        2) about section template part
                        3) goal section template part
                        4) service section template part
                        5) blog section template part
                        6) portfolio section template part

*/

global $mtsThemeMods;
?>

<section class="wrapper col-12">
    <?php
    if ($mtsThemeMods['toggle_home_sec'] == true) {
        get_template_part('template-parts/frontpage-parts/home-section', get_post_format());
    }

    if ($mtsThemeMods['toggle_about_sec'] == true) {
        get_template_part('template-parts/frontpage-parts/about-section', get_post_format());
    }
    if ($mtsThemeMods['toggle_goal_sec'] == true) {
        get_template_part('template-parts/frontpage-parts/goal-section', get_post_format());
    }
    get_template_part('template-parts/frontpage-parts/services-section', get_post_format());
    get_template_part('template-parts/frontpage-parts/blog-section', get_post_format());
    get_template_part('template-parts/frontpage-parts/portfolio-section', get_post_format());
    ?>
</section>