<?php
/*
    Template part : Portfolios Page
    Description : This Template Part Is Made Specifically To Display All Portfolios.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The FrontPage.

    Template Parts :    1) none template part
                        2) sidebar

*/

global $mtsThemeMods;
$mainSecWidth = ($mtsThemeMods['toggle_blog_sidebar'] == true) ? 'col-8' : 'col-12';

?>

<section class="wrapper portfoliosPage col-12 flex layout">
    <section class=" <?php echo $mainSecWidth; ?> main">
        <?php
        // blog template part
        get_template_part('template-parts/portfolios-page-parts/portfolios-post', get_post_format());
        ?>
    </section>

    <?php if ($mtsThemeMods['toggle_blog_sidebar']) { ?>
        <section class="col-4 side">
            <?php get_sidebar(); // The Side Bar. ?>
        </section>
    <?php } ?>
</section>