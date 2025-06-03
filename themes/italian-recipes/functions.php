<?php

function italian_recipes_enqueue_styles()
{
    wp_enqueue_style('output', get_template_directory_uri() . '/generated/style.css');
}

add_action('wp_enqueue_scripts', 'italian_recipes_enqueue_styles');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');