<?php

if (!defined('ABSPATH')) {
    exit;
};

function custom_theme_features()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menu('headerMenuNav', 'Header Menu');
};
add_action('after_setup_theme', 'custom_theme_features');




