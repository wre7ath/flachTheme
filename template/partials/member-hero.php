<?php
$title = $post->post_title;
$personal_image_id = get_post_thumbnail_id();
$email = get_field('email');

?>

<section class="member-hero container flex-center flex-row">

    <div class="member-hero-about flex-col">
        <h1><?php echo $title ?></h1>

        <div><?php the_content(); ?></div>
    </div>
    <div class="member-hero-image">
        <div class="image-wrapper flex-center">
            <?php wreath_get_picture_tag($personal_image_id, 'test', 'sadasd', 'full', 'large') ?>
        </div>

    </div>



</section>