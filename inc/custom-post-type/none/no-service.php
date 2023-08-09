<?php


function no_service_post()
{
    $services_query = new WP_Query(array(
        'post_type' => 'services',
        'posts_per_page' => -1,
    )); ?>

    <section class="content-none flex flexCenter">
        <div class="card serCard noneCard" data-aos="zoom-in" data-aos-easing="ease-in-out-quart">
            <?php if ($services_query->have_posts()) : ?>
                <label>NO SELECTED SERVICES</label>
                <span> Oops! Seems you haven't selected any of your services to display here yet. PLease Use the button below to go to the customizer and select any Three Services you want displayed here</span>
                <a href="<?php echo wp_customize_url(); ?>" class="btn plainBtn">Go To Customizer</a>
            <?php else : ?>
                <label>NO SERVICES</label>
                <span> Oops! Seems you do not have any services yet. Please go to the dashboard to add a new service</span>
                <a href="<?php echo admin_url('post-new.php?post_type=services'); ?>" class="btn plainBtn">Add New Service</a>
            <?php endif; ?>
        </div>
    </section>
<?php
}
