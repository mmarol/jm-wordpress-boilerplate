<?php

/*
 *
 * Custom Post Types
 *
 */

// Note that you only need the arguments and register_post_type function here. They are hooked into WordPress in functions.php.

// Custom Post Type labels and arguments
$cptLabels = array(
    'name'                  => _x('Custom Post Types', 'Custom Post Type General Name', 'text_domain'),
    'singular_name'         => _x('Custom Post Type', 'Custom Post Type Singular Name', 'text_domain'),
    'menu_name'             => __('Custom Post Types', 'text_domain'),
    'name_admin_bar'        => __('Custom Post Type', 'text_domain'),
    'archives'              => __('Item Archives', 'text_domain'),
    'attributes'            => __('Item Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Item:', 'text_domain'),
    'all_items'             => __('All Items', 'text_domain'),
    'add_new_item'          => __('Add New Item', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Item', 'text_domain'),
    'edit_item'             => __('Edit Item', 'text_domain'),
    'update_item'           => __('Update Item', 'text_domain'),
    'view_item'             => __('View Item', 'text_domain'),
    'view_items'            => __('View Items', 'text_domain'),
    'search_items'          => __('Search Item', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Items list', 'text_domain'),
    'items_list_navigation' => __('Items list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
);

$cptArgs = array(
    'label'                 => __('Custom Post Type', 'text_domain'),
    'description'           => __('Custom Post Type Description', 'text_domain'),
    'labels'                => $cptLabels,
    'supports'              => array('title', 'editor', 'thumbnail'),
    'taxonomies'            => array('category', 'post_tag'),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'rewrite' => array('slug' => 'example-page', 'with_front' => false),
    'menu_icon' => 'dashicons-tickets-alt',
);

register_post_type('custom-post-type', $cptArgs);
