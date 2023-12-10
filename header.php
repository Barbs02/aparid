<!DOCTYPE html>
<html lang="en" class="mt-0">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- CSS propio -->
        <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'style.css' ); ?>">
        <?php wp_head(); ?>
</head>
<body>
        <!-- Barra de navegacion  -->
        <?php $custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), '' ); ?>
<nav class="navbar navbar-expand-md navbar-light bg-color-beige p-2 fixed-top">
    <div class="container-fluid d-flex align-items-center">
        <a href="inicio logo-r">
            <div class="logo">
                <?php echo $custom_logo ?>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => 'navbar-nav ms-auto mb-2 mb-md-0 font-kulimpark font-size-10',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>

    </div>
</nav>
<div class="pt-5"></div>
