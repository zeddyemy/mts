<?php

global $mtsThemeMods;

// Custom query to retrieve Portfolios
$portfolios_query = new WP_Query(array(
    'post_type' => 'portfolios',
    'posts_per_page' => $mtsThemeMods['portfolios_count'],
));

?>
<section id="portfolio" class="portfolio noPad">
    <div class="container col-12">
        <div class="card secCard col-12 fitImg" data-aos="fade-up" data-aos-easing="ease-in-out-quart">

            <div class="secTitle flex flexCenter row" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                <span class="title"> <?php echo $mtsThemeMods['portfolios_sec_title']; ?> </span>
            </div>

            <?php if ($portfolios_query->have_posts()) : ?>
                <div class="grid thePortfolios">
                    <?php
                        while ($portfolios_query->have_posts()) :
                            $portfolios_query->the_post();
                            echo get_portfolio_card();
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div>
            <?php else :
                echo no_portfolio_post();
            endif; ?>

        </div>

    </div>
</section>