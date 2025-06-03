<?php

function italian_recipes_enqueue_styles()
{
    $stylesheet = get_stylesheet_directory_uri() . '/generated/style.css';
    wp_enqueue_style('italian-recipes-generated', $stylesheet);
}

add_action('wp_enqueue_scripts', 'italian_recipes_enqueue_styles');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');