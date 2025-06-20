<?php get_header(); ?>

<main class="flex flex-col gap-8 p-8">
    <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                ?>
                    <a href="<?php the_permalink(); ?>">
                        <article class="flex flex-col gap-2">
                            <h1 class="text-4xl font-bold"><?php the_title() ?></h1>
                            <div class="max-w-3xl">
                                <?php the_excerpt() ?>
                            </div>
                        </article>
                    </a>
                <?php
            }
        } else {
            ?>
                <strong>No posts available</strong>
            <?php
        }
    ?>
</main>

<?php get_footer(); ?>