<?php

$toggle_about_title  = get_theme_mod('toggle_about_title');
$about_sec_title = get_theme_mod('about_sec_title', 'Who Are We?');
$about_sec_content = get_theme_mod('about_sec_content', 'Here at Meridian Tech Solutions, we believe creating a website shouldn’t be difficult or complicated. We build quality products and tools that are simple to use, affordable, and reliable to help entrepreneurs, professionals, and bloggers grow online. <p>We’ve kept the small business feel while competing with the big boys. Our high level of expertise and success keeps driving us to learn and grow. We all know that in today’s fast paced tech world, if you’re not growing, you’re dying. Just like your website.</p>');

$toggle_about_readMore_btn  = get_theme_mod('toggle_about_readMore_btn', true);
$about_readMore_btn_text  = get_theme_mod('about_readMore_btn_text', 'Read More');
$about_readMore_btn_url  = mts_format_url(get_theme_mod('about_readMore_btn_url', 'about.com'));

$toggle_about_sec_img  = get_theme_mod('toggle_about_sec_img', true);
$about_sec_img  = get_theme_mod('about_sec_img');
?>

<section id="about" class="about">
    <div class="container col-12">
        <div class="container col-12 noPad flex flexCenter row">
            <div class="noPad" data-aos="fade-right" data-aos-easing="ease-in-out-quart">
                <div class="txtContain">
                    <?php if ($toggle_about_title == true) : ?>
                        <div class="secTitle flex flexStart row">
                            <span class="title"> <?php echo $about_sec_title; ?> </span>
                        </div>
                    <?php endif; ?>
                    <p><?php echo $about_sec_content; ?></p>
                    <?php if ($toggle_about_readMore_btn == true) : ?>
                        <a href="<?php echo $about_readMore_btn_url; ?>">
                            <span class="btn" style="display: inline-block;"> <?php echo $about_readMore_btn_text; ?> </span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($toggle_about_sec_img == true) : ?>
                <div class="noPad" data-aos="fade-left" data-aos-easing="ease-in-out-quart">
                    <div class="card logo">
                        <div class="cardImg">
                            <img src="<?php echo $about_sec_img; ?>" alt="<?php echo $about_sec_title ?>">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>