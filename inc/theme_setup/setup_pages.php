<?php

if (!defined('ABSPATH')) {
    exit;
};

function add_custom_pages()
{

    $pages = (is_rtl()) ?  array('درباره فالش') : array('the hand','about falch');

    foreach ($pages as $page) {
        $q_page = get_page_by_path($page);
        if (!$q_page) {
            $page_args = array(
                'post_type'    => 'page',
                'post_title'    => $page,
                'post_content'  => '',
                'post_status'   => 'publish',
                'post_author'   => 1
            );
            wp_insert_post($page_args);
        }
    }
};

add_action('after_setup_theme', 'add_custom_pages');
