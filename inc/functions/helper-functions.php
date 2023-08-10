<?php

/**
 * MTS Helper functions
 *
 * @author Emmanuel Zeddy 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package MTS
 */

// function to register nav menus
function mts_menu() {
    register_nav_menus(
        array(
            'main-nav-menu' => __( 'Main Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'mts_menu' );

// FUNCTION TO FETCH POST THUMBNAIL
function theme_post_thumb($class='') {

    $id = get_post_thumbnail_id(); // gets the id of the current post_thumbnail (in the loop)
    $alt = get_the_title($id); // gets the post thumbnail title
    $userSetImgPlaceholder = get_theme_mod('placeholder_img');
    $defaultImgPlaceholder = get_template_directory_uri() . '/assets/img/placeholder.jpg';

    if ( has_post_thumbnail() ) {
        the_post_thumbnail('small-thumbnail', array('class' => 'lazyload ' . $class));
    }
    elseif ( $userSetImgPlaceholder == true ) {
        ?> <img class="lazyload" src="<?php echo $userSetImgPlaceholder ?>" data-src=" <?php echo $userSetImgPlaceholder ?> " alt=" <?php echo $alt ?> " /> <?php
    }
    else {
        ?> <img class="lazyload" src="<?php echo $defaultImgPlaceholder ?>" data-src=" <?php echo $defaultImgPlaceholder ?> " alt=" <?php echo $alt ?> " /> <?php
    }
}

// FUNCTION FOR COPYRIGHT DATE IN FOOTER
function mts_copyright() {
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
		SELECT
		YEAR(min(post_date_gmt)) AS firstdate,
		YEAR(max(post_date_gmt)) AS lastdate
		FROM
		$wpdb->posts
		WHERE
		post_status = 'publish'
		");
    $output = '';

    if ($copyright_dates) {
        $copyright = "&copy; " . $copyright_dates[0]->firstdate;
        if ($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
            $copyright .= '-' . $copyright_dates[0]->lastdate;
        }
        $output = $copyright . " " . get_bloginfo('name') . " | All Rights Reserved.";
    }
    return $output;
}

// Format URL To Make Sure It Has "https://"
function mts_format_url( $url ) {
    // Check if the URL starts with "http://" or "https://"
    if ( ! empty( $url ) && ! preg_match( '/^https?:\/\//i', $url ) ) :
        $url = 'https://' . $url;
    endif;

    return esc_url( $url );
}

// FUNCTION TO DISPLAY A LINK TO THEME AUTHOR'S PAGE
function mts_author_url($url, $name) {
    $url = mts_format_url($url);

	return '<div class="theme-author-link">' .
		sprintf(
			esc_html__('Designed by: %s', 'mts'),
			'<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer" title="' . esc_attr__($name, 'mts') . '">' . esc_html__($name, 'mts') . '</a>'
		) . '</div>';
}

// Theme's assets url
function get_mts_assets($type = '') {
    $assetsPath = !empty($type) ? 'assets/' . $type : 'assets';
    $url = trailingslashit(get_template_directory_uri()) . $assetsPath;
    
    return trailingslashit($url);
}

// Function to render a button
function mts_render_btn($btn_txt='Button', $url='#', $class='') {
    global $mtsThemeMods;
    $class = $mtsThemeMods['button_style'] . ' ' . $class;
    echo '<a href="' . esc_url($url) . '">
            <span class="btn ' . esc_attr($class) . '">' . esc_html($btn_txt) . '</span>
        </a>';
}