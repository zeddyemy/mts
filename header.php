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

    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/services.css">
    <link rel="stylesheet" href="./assets/css/goal.css">
    <link rel="stylesheet" href="./assets/css/blog.css">
    <link rel="stylesheet" href="./assets/css/about.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/library/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="./assets/library/tiny-slider-master/dist/tiny-slider.css?ver=6.0.2">
    <link rel="stylesheet" href="./assets/library/aos/aos.css">
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