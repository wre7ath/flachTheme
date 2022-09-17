<?php

if (!defined('ABSPATH')) {
    exit;
};

function admin_panel_style()
{
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_panel_style');
