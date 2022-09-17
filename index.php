<?php

get_header();
?>

<section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h3>

            <?php the_content(); ?>
            

        <?php endwhile; ?>

    <?php else : ?>

        <p>No posts found. :(</p>

    <?php endif; ?>

    
</section>

<?php get_footer();
