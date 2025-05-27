<article class="recipe-card">
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <div class="thumb"><?php the_post_thumbnail('medium'); ?></div>
        <?php endif; ?>
        <h3><?php the_title(); ?></h3>
    </a>
</article>
