<?php

global $mtsThemeMods;
$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
));

?>
<section id="blog" class="blog">
    <div class="container col-12">
        <div class="secTitle flex flexCenter row" data-aos="zoom-in" data-aos-easing="ease-in-out-quart">
            <span class="title"> Our Latest Blogs </span>
        </div>
        <div class="grid blogCards">
            <?php while ($query->have_posts()) :
                $query->the_post();
                echo get_default_card();
            endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>