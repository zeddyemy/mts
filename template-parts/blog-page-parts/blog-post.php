<?php

$blog_query = new WP_Query(array(
    'post_type' => 'post',
    'post_per_page' => -1
));
?>

<section class="all-post">
    <?php if ($blog_query->have_posts()) : ?>

        <div class="all-post-title">
            <div class="title"> Blog Posts </div>
        </div>

        <article class="grid blogCards">
            <?php

            while ($blog_query->have_posts()) : $blog_query->the_post();

                echo get_default_card();

            endwhile;
            ?>
        </article>

        <div class="pagination"><?php echo paginate_links(); ?></div>

    <?php else :

        get_template_part('template-parts/none', get_post_format()); // None template part

    endif;
    wp_reset_postdata(); ?>
</section>