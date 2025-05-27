<?php
function italian_recipes_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main-menu' => __('Main Menu', 'italian-recipes')
    ]);
}
add_action('after_setup_theme', 'italian_recipes_setup');

function italian_recipes_enqueue_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'italian_recipes_enqueue_scripts');
