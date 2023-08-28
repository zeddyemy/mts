<?php

// Load Clarusmod Customizer
include_once get_template_directory() . '/inc/clarusmod/clarusmod.php';

// Initialize Customizer settings
$panels_path = trailingslashit(dirname(__FILE__)) . 'panels/panels.php';
$mts_settings = new initialize_clarusmod_customizer_settings($panels_path);


if (!function_exists('mts_theme_mods')) {
    function mts_theme_mods() {
        $mts_mods = array(
            'placeholder_img'               => get_theme_mod('placeholder_img'),
            'background_color'              => get_theme_mod('background_color', get_theme_support('custom-background', 'default-color')),

            'your_theme_logo'               => get_theme_mod('your_theme_logo'),
            'mts_theme_color'               => get_theme_mod('mts_theme_color', '#2869ff'),
            'header_text_color'             => get_theme_mod('header_text_color', ''),
            'header_bg_color'               => get_theme_mod('header_bg_color', ''),
            'header_bg_image'               => get_theme_mod('header_bg_image'),
            
            'footer_text_color'             => get_theme_mod('footer_text_color', '#f2f2f2'),
            'footer_bg_color'               => get_theme_mod('footer_bg_color', '#212121;'),
            'footer_bg_image'               => get_theme_mod('footer_bg_image'),

            'nav_text_transform'            => get_theme_mod('nav_text_transform', 'capitalize'),
            'title_text_transform'          => get_theme_mod('title_text_transform', 'capitalize'),

            'toggle_home_sec'               => get_theme_mod('toggle_home_sec', true),
            'home_sec_img'                  => get_theme_mod('home_sec_img', get_mts_assets('img') . 'team.jpg'),
            'home_sec_title'                => get_theme_mod('home_sec_title', 'Stay ahead of the curve with our forward thinking.'),
            'home_sec_info'                 => get_theme_mod('home_sec_info', 'We take extreme pride at being the very best at what we do.'),
            'toggle_home_sec_btn'           => get_theme_mod('toggle_home_sec_btn', true),
            'home_sec_btn_url'              => get_theme_mod('home_sec_btn_url', '#'),
            'home_sec_btn_text'             => get_theme_mod('home_sec_btn_text', 'Get in touch'),
            
            'toggle_about_sec'              => get_theme_mod('toggle_about_sec', true),
            'toggle_about_title'            => get_theme_mod('toggle_about_title'),
            'about_sec_title'               => get_theme_mod('about_sec_title', 'Who Are We?'),
            'about_sec_content'             => get_theme_mod('about_sec_content', 'Here at Meridian Tech Solutions, we believe creating a website shouldn’t be difficult or complicated. We build quality products and tools that are simple to use, affordable, and reliable to help entrepreneurs, professionals, and bloggers grow online. <p>We’ve kept the small business feel while competing with the big boys. Our high level of expertise and success keeps driving us to learn and grow. We all know that in today’s fast paced tech world, if you’re not growing, you’re dying. Just like your website.</p>'),
            'toggle_about_readMore_btn'     => get_theme_mod('toggle_about_readMore_btn', true),
            'about_readMore_btn_text'       => get_theme_mod('about_readMore_btn_text', 'Read More'),
            'about_readMore_btn_url'        => mts_format_url(get_theme_mod('about_readMore_btn_url', 'about.com')),
            'toggle_about_sec_img'          => get_theme_mod('toggle_about_sec_img', true),
            'about_sec_img'                 => get_theme_mod('about_sec_img'),

            'toggle_goal_sec'               => get_theme_mod('toggle_goal_sec', true),
            'goal_sec_img'                  => get_theme_mod('goal_sec_img', get_mts_assets('img') . 'team.jpg'),
            'goal_sec_title'                => get_theme_mod('goal_sec_title', 'Our Goal'),
            'goal_sec_content'              => get_theme_mod('goal_sec_content', 'Our goal is to empower businesses with innovative tech solutions, delivering seamless web and mobile experiences, captivating design, and cutting-edge SEO strategies, enabling them to thrive in the digital world.'),
            'toggle_goal_tags'              => get_theme_mod('toggle_goal_tags', true),
            'goal_tags'                     => get_theme_mod('goal_tags', 'Captivating, Insightful, fast'),

            'service_section_title'         => get_theme_mod('service_section_title', 'Our Services'),
            'frontpage_service_card_1'      => get_theme_mod('frontpage_service_card_1', 0),
            'frontpage_service_card_2'      => get_theme_mod('frontpage_service_card_2', 0),
            'frontpage_service_card_3'      => get_theme_mod('frontpage_service_card_3', 0),
            'additional_card_title'         => get_theme_mod('additional_card_title', 'We offer More'),
            'additional_card_content'       => get_theme_mod('additional_card_content', 'Our team of creative thinkers simplify the complex challenges businesses face everyday. Our services are tailored to offer the most effective solutions, to grow your business.'),
            'additional_card_btn'           => get_theme_mod('additional_card_btn', 'Explore More'),

            'toggle_portfolios_sec'         => get_theme_mod('toggle_portfolios_sec', true),
            'portfolios_sec_title'          => get_theme_mod('portfolios_sec_title', 'Our Portfolio'),
            'portfolios_count'              => get_theme_mod('portfolios_count', 9),

            'toggle_blog_sec'               => get_theme_mod('toggle_blog_sec', true),
            'blog_sec_title'                => get_theme_mod('blog_sec_title', 'Our Latest Blogs'),

            'button_style'                  => get_theme_mod('button_style', 'normal'),
        );

        return apply_filters('mts_theme_mods', $mts_mods);
    }
}
global $mtsThemeMods;
$mtsThemeMods = mts_theme_mods();