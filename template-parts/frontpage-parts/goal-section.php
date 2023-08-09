<?php
$goal_sec_title = get_theme_mod('goal_sec_title', 'Our Goal');
$goal_sec_content = get_theme_mod('goal_sec_content', 'Our goal is to empower businesses with innovative tech solutions, delivering seamless web and mobile experiences, captivating design, and cutting-edge SEO strategies, enabling them to thrive in the digital world.');

?>
<section id="goal" class="goal noPad">
    <div class="container col-12 noPad">
        <div class="col-6 noPad">
            <div class="fitImg imgBg"></div>
        </div>
        <div class="col-6 noPad" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
            <div class="txtContain">
                <span class="title"> <?php echo $goal_sec_title; ?> </span>
                <p> <?php echo $goal_sec_content; ?> </p>
            </div>
        </div>
    </div>
</section>