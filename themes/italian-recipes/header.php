<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="flex items-center justify-between gap-4 px-4 py-2 text-white bg-gray-700">
        <p class="text-xl font-bold">Italian Recipes</p>
        <nav class="flex gap-2">
            <a class="p-1 hover:bg-gray-600" href="/">Link 1</a>
            <a class="p-1 hover:bg-gray-600" href="/">Link 2</a>
            <a class="p-1 hover:bg-gray-600" href="/">Link 3</a>
        </nav>
    </header>