<?php
/*
    Template part : Front Page
    Description : This Template Part Is Made Specifically For The Front Page.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The FrontPage.

    Template Parts :    

*/

?>

<section class="wrapper col-12">
    <?php
    get_template_part('template-parts/frontpage-parts/home-section', get_post_format());

    get_template_part('template-parts/frontpage-parts/about-section', get_post_format());
    get_template_part('template-parts/frontpage-parts/goal-section', get_post_format());
    get_template_part('template-parts/frontpage-parts/services-section', get_post_format());
    get_template_part('template-parts/frontpage-parts/blog-section', get_post_format());
    get_template_part('template-parts/frontpage-parts/portfolio-section', get_post_format());
    ?>
</section>