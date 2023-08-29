<?php

/**
 * The sidebar for the frontpage/homepage (default sidebar)
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kandor
 */

?>
<div id="secondary" class="side-content widget-area" role="complementary">
    <?php
    if (is_active_sidebar('sidebar-home')) :
        dynamic_sidebar('sidebar-home');
    else :
        echo 'theme_no_widgets()';

    endif;
    ?>
</div>