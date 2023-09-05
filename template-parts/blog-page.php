<?php
/*
    Template part : Blog Page
    Description : This Template Part Is Made Specifically To Display All Blog Post.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The FrontPage.

    Template Parts :    1) none template part
                        2) sidebar

*/

global $mtsThemeMods;

?>

<section class="wrapper blogPage col-12 flex layout">
    <section class=" <?php echo '$mainSecWidth col-9'; ?> main">
        <?php
        // blog template part
        get_template_part('template-parts/blog-page-parts/blog-post', get_post_format());
        ?>
    </section>

    <section class="col-3 side">
        <?php get_sidebar(); // The Side Bar. ?>
    </section>
</section>