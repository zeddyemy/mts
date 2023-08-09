<?php

/**
 * The header for our theme
 *
 * @package MTS
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <title>Meridian Tech Solutions</title>
</head>

<body <?php body_class(''); ?>>
    <header id="header">
        <div class="header-c">
            <div class="logo">
                <a href="<?php echo get_bloginfo('wpurl'); ?>">
                    <h1>
                        <span>M</span>er<span>id</span>ian
                    </h1>
                </a>
            </div>
            <span class="menuBtn"> <i class='bx bx-menu'></i> </span>
            <nav class=" nav nav-links"></nav>
        </div>
    </header>