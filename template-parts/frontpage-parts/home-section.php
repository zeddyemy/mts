<?php

global $mtsThemeMods;
?>

<section id="home" class="home noPad fitImg" style="background-image: url('<?php echo get_mts_assets('img') . 'team.jpg' ?>');">
    <div class="container col-12">
        <div class="slide flex flexCenter">
            <div class="home-content flex flexCenter" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                <h1> Stay ahead of the curve with our forward thinking. </h1>
                <?php mts_render_btn('Get in touch', '#'); ?>
            </div>
        </div>
    </div>
    <a href="#about" class="mouse smoothscroll" data-scrollto="about">
        <span class="mouse-icon">
            <span class="mouse-wheel"></span>
        </span>
    </a>
</section>