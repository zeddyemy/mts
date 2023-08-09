<?php

/**
 * function that sets card structure of each Post Types such as,
 * service, portfolio or default post type. (POST CARD)
 * 
 * @author Emmanuel Zeddy
 * @package MTS
 */


// POST CARD FOR EACH SERVICE POST TYPE
function get_service_card() {
    // Retrieve service data
    $service_title = get_the_title();
    $service_excerpt = get_the_excerpt();
    $service_icon = get_post_meta(get_the_ID(), 'service_icon', true); ?>

    <article class="card serCard" data-aos="zoom-in" data-aos-easing="ease-in-out-quart">
        <i class="<?php echo $service_icon ?>"></i>
        <label><?php echo $service_title ?></label>
        <span> <?php echo $service_excerpt ?></span>
    </article>

<?php }

function viewMore_service_card() { ?>
    <div class="card serCard" data-aos="zoom-in" data-aos-easing="ease-in-out-quart">
        <label><?php echo esc_html(get_theme_mod('additional_card_title', 'We offer More')); ?></label>
        <span><?php echo esc_html(get_theme_mod('additional_card_content', 'Our team of creative thinkers simplify the complex challenges businesses face everyday. Our services are tailored to offer the most effective solutions, to grow your business.')); ?></span>
        <a href="<?php echo esc_html(get_post_type_archive_link('services')); ?>" class="btn plainBtn"><?php echo esc_html(get_theme_mod('additional_card_btn', 'Explore More')); ?></a>
    </div>
    
<?php }


// POST CARD FOR EACH DEFAULT POST TYPE
function get_default_card() { ?>
    <div class="card blogCard" data-aos="zoom-in" data-aos-easing="ease-in-out-quart">
        <div class="fitImg cardImg">
            <a href="<?php the_permalink() ?>">
                <?php theme_post_thumb('lazyload'); ?>
            </a>
        </div>
        <div class="ovrLay">
            <div class="cardBody txtShadowDrk">
                <h3 class="title">
                    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?> </a>
                </h3>
            </div>
        </div>
    </div>
<?php }