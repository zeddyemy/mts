<?php

global $mtsThemeMods;
?>

<section id="heroHeader" class="heroHeader noPad fitImg" style="background-image: url('<?php echo $mtsThemeMods['hero_header_sec_img']; ?>');">
    <div class="container col-12">
        <div class="slide flex flexCenter">
            <div class="heroHeader-content flex flexCenter" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                <h1> <?php echo $mtsThemeMods['hero_header_sec_title']; ?> </h1>

                <?php if (!empty($mtsThemeMods['hero_header_sec_subtext'])) { ?>
                    <p> <?php echo $mtsThemeMods['hero_header_sec_subtext']; ?> </p>
                <?php }

                if ($mtsThemeMods['toggle_hero_header_sec_btn'] == true) {
                    mts_render_btn($mtsThemeMods['hero_header_sec_btn_text'], $mtsThemeMods['hero_header_sec_btn_url']);
                } ?>
            </div>
        </div>
    </div>
    <a href="#about" class="mouse smoothscroll" data-scrollto="about">
        <span class="mouse-icon">
            <span class="mouse-wheel"></span>
        </span>
    </a>
</section>