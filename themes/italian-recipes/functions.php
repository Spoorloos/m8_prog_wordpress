<?php

function italian_recipes_enqueue_styles()
{
    $stylesheet_dir = get_stylesheet_directory_uri();
    wp_enqueue_style('italian-recipes-generated', $stylesheet_dir . '/generated/style.css');
}

add_action('wp_enqueue_scripts', 'italian_recipes_enqueue_styles');
add_theme_support('post-thumbnails');