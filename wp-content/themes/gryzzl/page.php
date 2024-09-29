<?php get_header(); ?>

<main class="single-page">
    <?php

    while (have_posts()) {
        the_post(); ?>
        <h2><?php the_title() ?></a></h2>
        <?php the_content(); ?>

    <?php }
    ?>
</main>

<?php get_footer(); ?>