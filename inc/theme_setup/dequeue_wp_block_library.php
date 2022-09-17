<?php
if (!defined('ABSPATH')) {
    exit;
}

function remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');

    wp_deregister_style('wc-blocks-style');
    wp_deregister_style('wc-blocks-vendors-style');
}

add_action('wp_enqueue_scripts', 'remove_wp_block_library_css');
