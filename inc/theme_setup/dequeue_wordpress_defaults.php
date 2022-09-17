<?php
if (!defined('ABSPATH')) {
    exit;
}

function remove_wordpress_defaults()
{
    
    wp_deregister_script( 'wp-embed' );
    

    // wp_deregister_style('wc-blocks-style');
    // wp_deregister_style('wc-blocks-vendors-style');
}

add_action('wp_enqueue_scripts', 'remove_wordpress_defaults');