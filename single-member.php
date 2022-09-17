<?php

get_header();

global $post;

echo '<main>';

require_once('template/partials/member-hero.php');
require_once('template/partials/member-contact.php');
if (have_rows('films')) {
    require_once('template/partials/member-films.php');
}
// require_once('template/partials/member-whatido.php');
// require_once('template/partials/member-skills.php');
// require_once('template/partials/member-experience.php');
echo '</main>';
get_footer();
