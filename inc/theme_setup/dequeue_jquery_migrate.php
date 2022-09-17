<?php

if (!defined('ABSPATH')) {
    exit;
}


function dequeue_jquery_migrate($scripts)
{
    if (!is_admin()) {
        $scripts->registered['jquery']->deps = array_diff(
            $scripts->registered['jquery']->deps,
            ['jquery-migrate']
        );
    }
}
add_action('wp_default_scripts', 'dequeue_jquery_migrate');
