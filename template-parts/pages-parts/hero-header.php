<?php

global $mtsThemeMods;
?>

<section class="wrapper col-12 pages-home">
    
    <section id="home" class="home noPad fitImg" style="background-image: url('<?php echo $mtsThemeMods['pages_hero_header_img']; ?>');">
        <div class="container col-12">
            <div class="slide flex flexCenter">
                <div class="home-content flex flexCenter" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                    <h1> <?php the_title(); ?> </h1>

                    <?php if (!empty($mtsThemeMods['pages_hero_header_subtext'])) { ?>
                        <p> <?php echo $mtsThemeMods['pages_hero_header_subtext']; ?> </p>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>
    
</section>