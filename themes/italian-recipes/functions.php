<?php

add_theme_support('post-thumbnails');

function italian_recipes_enqueue_styles()
{
    wp_enqueue_style('output', get_template_directory_uri() . '/generated/style.css');
}

add_action('wp_enqueue_scripts', 'italian_recipes_enqueue_styles');

function italian_recipes_register_menus()
{
    register_nav_menus([
        'primary-menu' => __('Primary Menu'),
    ]);
}

add_action('after_setup_theme', 'italian_recipes_register_menus');