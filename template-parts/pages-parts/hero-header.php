<?php

global $mtsThemeMods;
global $mtsPageThemeMods;

$heroHeaderSubtext = $mtsPageThemeMods['hero_header_subtext'];
$thisPageHeroHeaderImg = (!empty($mtsPageThemeMods['hero_header_img'])) ? $mtsPageThemeMods['hero_header_img'] :
$mtsThemeMods['pages_hero_header_img'];


?>

<section class="wrapper col-12 pages-heroHeader">
    
    <section id="heroHeader" class="heroHeader noPad fitImg" style="background-image: url('<?php echo $thisPageHeroHeaderImg; ?>');">
        <div class="container col-12">
            <div class="slide flex flexCenter">
                <div class="heroHeader-content flex flexCenter" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                    <h1> <?php the_title(); ?> </h1>

                    <?php if (!empty($heroHeaderSubtext)) { ?>
                        <p> <?php echo $heroHeaderSubtext; ?> </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
</section>