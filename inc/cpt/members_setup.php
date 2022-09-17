<?php

function falch_members_init()
{
    $labels = array(
        'name'                  => _x('Member', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Members', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Team Members', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Member', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Member', 'textdomain'),
        'new_item'              => __('New Member', 'textdomain'),
        'edit_item'             => __('Edit Member', 'textdomain'),
        'view_item'             => __('View Member', 'textdomain'),
        'all_items'             => __('All Members', 'textdomain'),
        'search_items'          => __('Search Members', 'textdomain'),
        'parent_item_colon'     => __('Parent Members:', 'textdomain'),
        'not_found'             => __('No Members found.', 'textdomain'),
        'not_found_in_trash'    => __('No Members found in Trash.', 'textdomain'),
        'featured_image'        => _x('Member Personal Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set Personal image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove Personal image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as Personal image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Member archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into Member', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this Member', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter Members list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Members list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Members list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'menu_icon'          => 'dashicons-groups',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('sulg' => '/', 'with_front' => false),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'thumbnail', 'editor', 'custom-fields',  'revisions', 'author'),
    );


    register_post_type('member', $args);
    flush_rewrite_rules();
}

add_action('init', 'falch_members_init');


// recomended by wordpress codex
add_action('after_switch_theme', 'falch_member_rewrite_flush');
function falch_member_rewrite_flush()
{
    falch_members_init();
    flush_rewrite_rules();
}


//pretty sulgs
function remove_base_slug($post_link, $post, $leavename)
{
    if ('member' != $post->post_type || 'publish' != $post->post_status) {
        return $post_link;
    }
    $post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);
    return $post_link;
}

add_filter('post_type_link', 'remove_base_slug', 10, 3);


//in case of a 404 error
function check_parse_request($query)
{

    if (!$query->is_main_query() || 2 != count($query->query) || !isset($query->query['page'])) {
        return;
    }

    if (!empty($query->query['name'])) {
        $query->set('post_type', array('post', 'member', 'page'));
    }
}
add_action('pre_get_posts', 'check_parse_request');
