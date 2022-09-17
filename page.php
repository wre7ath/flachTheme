<?php

get_header();


if (get_the_ID() == url_to_postid('in-development')) {
    require_once('template/in-development.php');
} else if (get_the_ID() == url_to_postid('the-hand')) {
    require_once('template/the-hand.php');
} else if (get_the_ID() == url_to_postid('about-falch') || get_the_ID() == url_to_postid('درباره-فالش')) {
    require_once('template/about-falch.php');
} else {

    while (have_posts()) :
        // get_template_part('template/partials/title', 'page');

        the_post();

        echo '<main class="page-content section-arrow-top">';
        the_content();
        echo '</main>';


    endwhile;
}
get_footer();
