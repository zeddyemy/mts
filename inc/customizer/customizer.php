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

            'toggle_services_sec'           => get_theme_mod('toggle_services_sec', true),
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

            'toggle_single_sidebar'         => get_theme_mod('toggle_single_sidebar', true),
            'toggle_single_featured_img'    => get_theme_mod('toggle_single_featured_img', true),
            'toggle_single_excerpt'         => get_theme_mod('toggle_single_excerpt', true),
            'toggle_excerpt_italics'        => get_theme_mod('toggle_excerpt_italics', false),
            'toggle_share_btns'             => get_theme_mod('toggle_share_btns', true),
            'toggle_facebook_btn'           => get_theme_mod('toggle_facebook_btn', true),
            'toggle_x_btn'                  => get_theme_mod('toggle_x_btn', true),
            'toggle_whatsapp_btn'           => get_theme_mod('toggle_whatsapp_btn', true),
            'toggle_telegram_btn'           => get_theme_mod('toggle_telegram_btn', false),
            'toggle_pinterest_btn'          => get_theme_mod('toggle_pinterest_btn', false),
            'toggle_linkedin_btn'           => get_theme_mod('toggle_linkedin_btn', false),

            'pages_hero_header_img'         => get_theme_mod('pages_hero_header_img', get_mts_assets('img') . 'pages-img.jpg'),
            'toggle_pages_featured_img'     => get_theme_mod('toggle_pages_featured_img', false),
        );

        return apply_filters('mts_theme_mods', $mts_mods);
    }
}

if (!function_exists('mts_page_theme_mods')) {
    function mts_page_theme_mods() {
        global $pubPageIDs, $post;
        // check if $post is not null and if the current post is a page
        if (!is_null($post) && $post->post_type === 'page') {
            $current_pageID = $post->ID; // get the current page ID from wp global $post object
            $mts_page_mods = array();

            // Check if current page ID exist in $pubPageIDs array
            if (in_array($current_pageID, $pubPageIDs)) {
                // get theme mods for the current page
                $mts_page_mods['toggle_hero_header'] = get_theme_mod('toggle_hero_header_' . $current_pageID, true);
                $mts_page_mods['hero_header_img'] = get_theme_mod('hero_header_img_' . $current_pageID, '');
                $mts_page_mods['hero_header_subtext'] = get_theme_mod('hero_header_subtext_' . $current_pageID, '');
                $mts_page_mods['toggle_sidebar'] = get_theme_mod('toggle_sidebar_' . $current_pageID, true);
            } else {
                // Set default values
                $mts_page_mods['toggle_hero_header'] = true;
                $mts_page_mods['hero_header_img'] = '';
                $mts_page_mods['hero_header_subtext'] = '';
                $mts_page_mods['toggle_sidebar'] = true;
            }
    
            return apply_filters('mts_page_theme_mods', $mts_page_mods);
        }
    }
}

global $mtsThemeMods;
global $mtsPageThemeMods;
$mtsThemeMods = mts_theme_mods();
$mtsPageThemeMods = mts_page_theme_mods();