<?php get_header(); ?>

<main class="p-8 flex flex-col gap-8">
    <?php the_post(); ?>

    <article class="flex flex-col gap-2">
        <h1 class="text-4xl font-bold"><?php the_title() ?></h1>
        <div>
            <address class="inline"><?php the_author() ?></address>
            <date class="inline text-gray-500"><?php the_date() ?></date>
        </div>
        <div class="max-w-3xl">
            <?php the_content() ?>
        </div>
    </article>

    <?php
        the_post_navigation([
            'next_text' => '<span class="font-bold">' . __( 'Next recipe', 'Text_Domain' ) . '</span>',
            'prev_text' => '<span class="font-bold">' . __( 'Previous recipe', 'Text_Domain' ) . '</span>',
        ]);
    ?>
</main>

<?php get_footer(); ?>