<?php get_header(); ?>

<main class="front-page-content flex-center flex-col">
    <div class="coming-soon">
        <div class="coming-soon-logo">
            <?php echo file_get_contents(get_template_directory() . '/static/logo.svg'); ?>
        </div>
        <h1 class="coming-soon-title">
            <?php esc_html_e('Coming Soon!', 'falch-text'); ?>
        </h1>
    </div>

    <div class="about-falch flex-center">
        <div class="background pos-abs"></div>

        <?php $about_link = (is_rtl()) ? 'درباره-فالش' : 'about-falch'; ?>
        <a href="<?php echo $about_link ?>">
            <p><?php esc_html_e('About Falch', 'falch-text'); ?></p>
        </a>
    </div>
    <div class="falch-films flex-center">
        <div class="background pos-abs"></div>
        <a href="https://films.falcharts.com">
            <p><?php esc_html_e('Falch Films', 'falch-text'); ?></p>
        </a>
    </div>
</main>

<?php get_footer(); ?>