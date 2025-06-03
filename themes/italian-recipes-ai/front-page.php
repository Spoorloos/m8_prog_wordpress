<?php get_header(); ?>
<section class="popular-recipes container">
    <h2>Popular Recipes</h2>
    <div class="recipe-grid">
        <?php
        $popular = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 6,
            'orderby' => 'comment_count'
        ]);
        while ($popular->have_posts()) : $popular->the_post();
            get_template_part('template-parts/content', 'recipe');
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</section>
<?php get_footer(); ?>
