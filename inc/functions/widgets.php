<?php


//function that registers widget areas
function mts_widgets_init() {

    register_sidebar( array(
        'name' =>__( 'Single Page Sidebar', 'mts'),
        'id' => 'sidebar-single',
        'description' => __( 'This Widget space is for the Sidebar that will only appear on single pages', 'mts' ),
        'before_widget' => '<aside id="%1$s" class="s-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array( // for pages
        'name' =>__( 'Sidebar For Pages', 'mts'),
        'id' => 'sidebar-pages',
        'description' => __( 'This Sidebar Will appear only on the website pages like the about us page', 'mts' ),
        'before_widget' => '<aside id="%1$s" class="s-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );

    register_sidebar(array( // for category page
        'name' => __('Sidebar For Category Page', 'mts'),
        'id' => 'sidebar-category',
        'description' => __('This Sidebar Will appear only on the Category. That is, it will appear on the page of each category you created', 'mts'),
        'before_widget' => '<aside id="%1$s" class="s-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array( // for search page
        'name' => __('Sidebar For search Page', 'mts'),
        'id' => 'sidebar-search',
        'description' => __('This Sidebar Will appear only on the search.', 'mts'),
        'before_widget' => '<aside id="%1$s" class="s-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array( // for archive page
        'name' => __('Sidebar For Archive Page', 'mts'),
        'id' => 'sidebar-archive',
        'description' => __('This Sidebar Will appear only on An Archive Page.', 'mts'),
        'before_widget' => '<aside id="%1$s" class="s-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

}
add_action( 'widgets_init', 'mts_widgets_init' );

//function to render a sidebar
function mts_dynamic_sidebar($sidebar_id) {
    if (is_active_sidebar($sidebar_id)) :
        dynamic_sidebar($sidebar_id);
    else :
        // display a message if there is no active widget on the sidebar
        if (current_user_can( 'administrator' )) {
            ?>
            <aside class="s-card card">
                <h4>Add Widgets Here</h4>
                <div class="no-widget">
                    <p> Oops! It Seems There Are No Widgets Added Here. </p>
                    <p> Go to the admin or customizer section to add widget to this sidebar. </p>
                </div>
            </aside>
            <?php
        }
        else {
            echo '';
        }
    endif;
}
