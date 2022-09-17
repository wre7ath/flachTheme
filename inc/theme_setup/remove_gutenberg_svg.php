<?php

if (!defined('ABSPATH')) {
    exit;
};

add_action('after_setup_theme', function () {

    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');

    remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
    remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

    remove_filter('render_block', 'wp_render_duotone_support');
    remove_filter('render_block', 'wp_restore_group_inner_container');
    remove_filter('render_block', 'wp_render_layout_support_flag');
});
