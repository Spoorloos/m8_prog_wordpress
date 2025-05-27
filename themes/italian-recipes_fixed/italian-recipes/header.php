<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <h1><a href="<?php echo home_url(); ?>">Italian Recipes</a></h1>
            <nav>
                <?php wp_nav_menu(['theme_location' => 'main-menu']); ?>
            </nav>
            <div class="search-bar">
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>
    <main class="site-main">
