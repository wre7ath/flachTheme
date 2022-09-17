<?php


?>

<section class="member-films container">

    <h2><?php esc_html_e('Filmography', 'falch-text'); ?> </h2>

    <div class="member-films-wrapper flex-row">
        <?php while (have_rows('films')) : the_row();
        ?>
            <div class="member-film-card">
                <div class="member-film-card-header">
                    <?php wreath_get_picture_tag(get_sub_field('film_cover'), 'pos-abs', get_sub_field('film_name'), 'large', 'large'); ?>
                    <a href="<?php echo get_sub_field('film_url') ?>" class="flex-center" target="_blank" referrerpolicy=" no-referrer">
                        <i class="svg-icon">
                            <?php echo file_get_contents(get_template_directory() . '/static/icons/link-21.svg'); ?>
                        </i>
                    </a>
                    <?php
                    $flach_film_link = get_sub_field('film_falch_url');
                    if ($flach_film_link !== '') { ?>
                        <a class="falch-link flex-center" href="<?php echo $flach_film_link ?>" target="_blank">
                            <i class="svg-icon">
                                <?php echo file_get_contents(get_template_directory() . '/static/icons/video-circle.svg'); ?>
                            </i>
                        </a>
                    <?php } ?>
                </div>
                <div class="member-film-card-body">
                    <h3><?php echo get_sub_field('film_name') ?></h3>
                    <p class="role"><?php echo get_sub_field('film_role') ?></p>
                    <p class="description">
                        <?php echo get_sub_field('film_description') ?>
                    </p>
                </div>
            </div>
        <?php endwhile; ?>

    </div>

</section>