<?php
get_header(); ?>

<section class="container">
    <h2><?php the_title(); ?></h2>
    <div class="content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>
