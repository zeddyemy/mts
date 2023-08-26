<?php

global $mtsThemeMods;
?>

<section id="home" class="home noPad fitImg" style="background-image: url('<?php echo $mtsThemeMods['home_sec_img']; ?>');">
    <div class="container col-12">
        <div class="slide flex flexCenter">
            <div class="home-content flex flexCenter" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                <h1> <?php echo $mtsThemeMods['home_sec_title']; ?> </h1>

                <?php if (!empty($mtsThemeMods['home_sec_info'])) { ?>
                    <p> <?php echo $mtsThemeMods['home_sec_info']; ?> </p>
                <?php }

                if ($mtsThemeMods['toggle_home_sec_btn'] == true) {
                    mts_render_btn($mtsThemeMods['home_sec_btn_text'], $mtsThemeMods['home_sec_btn_url']);
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