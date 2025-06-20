<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <title><?php bloginfo('title') ?></title>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="flex items-center justify-between gap-4 px-4 py-2 text-white bg-gray-700">
        <p class="text-xl font-bold">
            <a href="/">Italian Recipes</a>
        </p>
        <?php
            wp_nav_menu([
                'theme_location' => 'primary-menu',
                'container' => 'nav',
                'menu_class' => 'header-nav',
            ]);
        ?>
    </header>