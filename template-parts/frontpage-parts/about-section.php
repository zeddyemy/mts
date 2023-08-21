<?php

global $mtsThemeMods;
?>

<section id="about" class="about">
    <div class="container col-12">
        <div class="container col-12 noPad flex flexCenter row">
            <div class="noPad flex flexCenter" data-aos="fade-right" data-aos-easing="ease-in-out-quart">
                <div class="txtContain">
                    <?php if ($mtsThemeMods['toggle_about_title'] == true) : ?>
                        <div class="secTitle flex flexStart row">
                            <span class="title"> <?php echo $mtsThemeMods['about_sec_title']; ?> </span>
                        </div>
                    <?php endif; ?>
                    <p><?php echo $mtsThemeMods['about_sec_content']; ?></p>
                    <?php if ($mtsThemeMods['toggle_about_readMore_btn'] == true) :
                        mts_render_btn($mtsThemeMods['about_readMore_btn_text'], $mtsThemeMods['about_readMore_btn_url']);
                    endif; ?>
                </div>
            </div>
            <?php if ($mtsThemeMods['toggle_about_sec_img'] == true) : ?>
                <div class="noPad" data-aos="fade-left" data-aos-easing="ease-in-out-quart">
                    <div class="card logo">
                        <div class="cardImg">
                            <img src="<?php echo $mtsThemeMods['about_sec_img']; ?>" alt="<?php echo $mtsThemeMods['about_sec_title'] ?>">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>