<?php

global $mtsThemeMods;

$service_ids = array(
    $mtsThemeMods['frontpage_service_card_1'],
    $mtsThemeMods['frontpage_service_card_2'],
    $mtsThemeMods['frontpage_service_card_3'],
);

// Custom query to retrieve services
$services_query = new WP_Query(array(
    'post_type' => 'services',
    'posts_per_page' => 3,
    'post__in' => $service_ids,
    'orderby' => 'post__in',
));
?>

<section id="services" class="services">
    <div class="container col-12">
        <div class="secTitle flex flexCenter row" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
            <span class="title"> <?php echo $mtsThemeMods['service_section_title']; ?> </span>
        </div>
        <?php if ($services_query->have_posts()) : ?>
            <div class="grid theServices">
                <?php
                    while ($services_query->have_posts()) :
                        $services_query->the_post();
                        echo get_service_card();
                    endwhile;
                    wp_reset_postdata();
                    echo viewMore_service_card();
                ?>
            </div>
        <?php else:
            echo no_service_post();
        endif; ?>
    </div>
</section>