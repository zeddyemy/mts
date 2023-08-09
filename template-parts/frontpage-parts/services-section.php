<?php

$service_section_title = get_theme_mod('service_section_title', 'Our Services');

$service_ids = array(
    get_theme_mod('frontpage_service_card_1', 0),
    get_theme_mod('frontpage_service_card_2', 0),
    get_theme_mod('frontpage_service_card_3', 0),
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
        <div class="secTitle flex flexCenter row" data-aos="zoom-in" data-aos-easing="ease-in-out-quart">
            <span class="title"> <?php echo $service_section_title; ?> </span>
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