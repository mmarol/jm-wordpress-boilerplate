<?php

/*
 *
 * Custom Post Types
 *
 */

// Note that you only need the arguments and register_post_type function here. They are hooked into WordPress in functions.php.

// Project labels and arguments
$projectLabels = array(
    'name'                  => _x('Projects', 'Project General Name', 'text_domain'),
    'singular_name'         => _x('Project', 'Project Singular Name', 'text_domain'),
    'menu_name'             => __('Projects', 'text_domain'),
    'name_admin_bar'        => __('Project', 'text_domain'),
    'archives'              => __('Project Archives', 'text_domain'),
    'attributes'            => __('Project Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Project:', 'text_domain'),
    'all_items'             => __('All Projects', 'text_domain'),
    'add_new_item'          => __('Add New Project', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Project', 'text_domain'),
    'edit_item'             => __('Edit Project', 'text_domain'),
    'update_item'           => __('Update Project', 'text_domain'),
    'view_item'             => __('View Project', 'text_domain'),
    'view_items'            => __('View Projects', 'text_domain'),
    'search_items'          => __('Search Project', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Projects list', 'text_domain'),
    'items_list_navigation' => __('Projects list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
);

$projectArgs = array(
    'label'                 => __('Project', 'text_domain'),
    'description'           => __('Project Description', 'text_domain'),
    'labels'                => $projectLabels,
    'show_in_rest'          => true,
    'supports'              => array('title', 'editor'),
    'taxonomies'            => array('project-category'),
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
    // 'rewrite' => array('id' => '23', 'with_front' => false), // replace ID with the appropriate page ID
    'menu_icon' => 'dashicons-portfolio',
);

register_post_type('project', $projectArgs);


// Client labels and arguments
$clientLabels = array(
    'name'                  => _x('Clients', 'Client General Name', 'text_domain'),
    'singular_name'         => _x('Client', 'Client Singular Name', 'text_domain'),
    'menu_name'             => __('Clients', 'text_domain'),
    'name_admin_bar'        => __('Client', 'text_domain'),
    'archives'              => __('Client Archives', 'text_domain'),
    'attributes'            => __('Client Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Client:', 'text_domain'),
    'all_items'             => __('All Clients', 'text_domain'),
    'add_new_item'          => __('Add New Client', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Client', 'text_domain'),
    'edit_item'             => __('Edit Client', 'text_domain'),
    'update_item'           => __('Update Client', 'text_domain'),
    'view_item'             => __('View Client', 'text_domain'),
    'view_items'            => __('View Clients', 'text_domain'),
    'search_items'          => __('Search Client', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Clients list', 'text_domain'),
    'items_list_navigation' => __('Clients list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
);

$clientArgs = array(
    'label'                 => __('Client', 'text_domain'),
    'description'           => __('Client Description', 'text_domain'),
    'labels'                => $clientLabels,
    'supports'              => array('title'),
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
    // 'rewrite' => array('id' => '23', 'with_front' => false), // replace ID with the appropriate page ID
    'menu_icon' => 'dashicons-businessman',
);

register_post_type('client', $clientArgs);


// Award labels and arguments
$awardLabels = array(
    'name'                  => _x('Awards', 'Award General Name', 'text_domain'),
    'singular_name'         => _x('Award', 'Award Singular Name', 'text_domain'),
    'menu_name'             => __('Awards', 'text_domain'),
    'name_admin_bar'        => __('Award', 'text_domain'),
    'archives'              => __('Award Archives', 'text_domain'),
    'attributes'            => __('Award Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Award:', 'text_domain'),
    'all_items'             => __('All Awards', 'text_domain'),
    'add_new_item'          => __('Add New Award', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Award', 'text_domain'),
    'edit_item'             => __('Edit Award', 'text_domain'),
    'update_item'           => __('Update Award', 'text_domain'),
    'view_item'             => __('View Award', 'text_domain'),
    'view_items'            => __('View Awards', 'text_domain'),
    'search_items'          => __('Search Award', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Awards list', 'text_domain'),
    'items_list_navigation' => __('Awards list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
);

$awardArgs = array(
    'label'                 => __('Award', 'text_domain'),
    'description'           => __('Award Description', 'text_domain'),
    'labels'                => $awardLabels,
    'supports'              => array('title'),
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
    // 'rewrite' => array('id' => '23', 'with_front' => false), // replace ID with the appropriate page ID
    'menu_icon' => 'dashicons-awards',
);

register_post_type('award', $awardArgs);


// People labels and arguments
$peopleLabels = array(
    'name'                  => _x('People', 'People General Name', 'text_domain'),
    'singular_name'         => _x('Person', 'People Singular Name', 'text_domain'),
    'menu_name'             => __('People', 'text_domain'),
    'name_admin_bar'        => __('Person', 'text_domain'),
    'archives'              => __('People Archives', 'text_domain'),
    'attributes'            => __('People Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent People:', 'text_domain'),
    'all_items'             => __('All People', 'text_domain'),
    'add_new_item'          => __('Add New Person', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Person', 'text_domain'),
    'edit_item'             => __('Edit Person', 'text_domain'),
    'update_item'           => __('Update Person', 'text_domain'),
    'view_item'             => __('View Person', 'text_domain'),
    'view_items'            => __('View People', 'text_domain'),
    'search_items'          => __('Search Person', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('People list', 'text_domain'),
    'items_list_navigation' => __('People list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
);

$peopleLabels = array(
    'label'                 => __('Person', 'text_domain'),
    'description'           => __('People Description', 'text_domain'),
    'labels'                => $peopleLabels,
    'supports'              => array('title'),
    'taxonomies'            => array('person-category'),
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
    // 'rewrite' => array('id' => '23', 'with_front' => false), // replace ID with the appropriate page ID
    'menu_icon' => 'dashicons-groups',
);

register_post_type('person', $peopleLabels);


// Delight labels and arguments
$delightLabels = array(
    'name'                  => _x('Delights', 'Delight General Name', 'text_domain'),
    'singular_name'         => _x('Delight', 'Delight Singular Name', 'text_domain'),
    'menu_name'             => __('Delights', 'text_domain'),
    'name_admin_bar'        => __('Delight', 'text_domain'),
    'archives'              => __('Delight Archives', 'text_domain'),
    'attributes'            => __('Delight Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Delight:', 'text_domain'),
    'all_items'             => __('All Delights', 'text_domain'),
    'add_new_item'          => __('Add New Delight', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Delight', 'text_domain'),
    'edit_item'             => __('Edit Delight', 'text_domain'),
    'update_item'           => __('Update Delight', 'text_domain'),
    'view_item'             => __('View Delight', 'text_domain'),
    'view_items'            => __('View Delights', 'text_domain'),
    'search_items'          => __('Search Delight', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Delights list', 'text_domain'),
    'items_list_navigation' => __('Delights list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
);

$delightArgs = array(
    'label'                 => __('Delight', 'text_domain'),
    'description'           => __('Delight Description', 'text_domain'),
    'labels'                => $delightLabels,
    'supports'              => array('title'),
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
    // 'rewrite' => array('id' => '23', 'with_front' => false), // replace ID with the appropriate page ID
    'menu_icon' => 'dashicons-star-filled',
);

register_post_type('delight', $delightArgs);


// Opportunity labels and arguments
$opportunityLabels = array(
    'name'                  => _x('Opportunities', 'Opportunity General Name', 'text_domain'),
    'singular_name'         => _x('Opportunity', 'Opportunity Singular Name', 'text_domain'),
    'menu_name'             => __('Opportunities', 'text_domain'),
    'name_admin_bar'        => __('Opportunity', 'text_domain'),
    'archives'              => __('Opportunity Archives', 'text_domain'),
    'attributes'            => __('Opportunity Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Opportunity:', 'text_domain'),
    'all_items'             => __('All Opportunities', 'text_domain'),
    'add_new_item'          => __('Add New Opportunity', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Opportunity', 'text_domain'),
    'edit_item'             => __('Edit Opportunity', 'text_domain'),
    'update_item'           => __('Update Opportunity', 'text_domain'),
    'view_item'             => __('View Opportunity', 'text_domain'),
    'view_items'            => __('View Opportunities', 'text_domain'),
    'search_items'          => __('Search Opportunity', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Opportunities list', 'text_domain'),
    'items_list_navigation' => __('Opportunities list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
);

$opportunityArgs = array(
    'label'                 => __('Opportunity', 'text_domain'),
    'description'           => __('Opportunity Description', 'text_domain'),
    'labels'                => $opportunityLabels,
    'supports'              => array('title'),
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
    // 'rewrite' => array('id' => '23', 'with_front' => false), // replace ID with the appropriate page ID
    'menu_icon' => 'dashicons-search',
);

register_post_type('opportunity', $opportunityArgs);


// Blog Post labels and arguments
$blogLabels = array(
    'name'                  => _x('Blog Posts', 'Blog Post General Name', 'text_domain'),
    'singular_name'         => _x('Blog Post', 'Blog Post Singular Name', 'text_domain'),
    'menu_name'             => __('Blog Posts', 'text_domain'),
    'name_admin_bar'        => __('Blog Post', 'text_domain'),
    'archives'              => __('Blog Post Archives', 'text_domain'),
    'attributes'            => __('Blog Post Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Blog Post:', 'text_domain'),
    'all_items'             => __('All Blog Posts', 'text_domain'),
    'add_new_item'          => __('Add New Blog Post', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Blog Post', 'text_domain'),
    'edit_item'             => __('Edit Blog Post', 'text_domain'),
    'update_item'           => __('Update Blog Post', 'text_domain'),
    'view_item'             => __('View Blog Post', 'text_domain'),
    'view_items'            => __('View Blog Posts', 'text_domain'),
    'search_items'          => __('Search Blog Post', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Blog Posts list', 'text_domain'),
    'items_list_navigation' => __('Blog Posts list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
);

$blogArgs = array(
    'label'                 => __('Blog Post', 'text_domain'),
    'description'           => __('Blog Post Description', 'text_domain'),
    'labels'                => $blogLabels,
    'show_in_rest'          => true,
    'supports'              => array('title', 'editor'),
    // 'taxonomies'            => array('custom-taxonomy'),
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
    // 'rewrite' => array('id' => '23', 'with_front' => false), // replace ID with the appropriate page ID
    'menu_icon' => 'dashicons-media-document',
);

register_post_type('blog', $blogArgs);



// Press labels and arguments
$pressLabels = array(
    'name'                  => _x('Press', 'Press General Name', 'text_domain'),
    'singular_name'         => _x('Press', 'Press Singular Name', 'text_domain'),
    'menu_name'             => __('Press', 'text_domain'),
    'name_admin_bar'        => __('Press', 'text_domain'),
    'archives'              => __('Press Archives', 'text_domain'),
    'attributes'            => __('Press Attributes', 'text_domain'),
    'parent_item_colon'     => __('Parent Press:', 'text_domain'),
    'all_items'             => __('All Press', 'text_domain'),
    'add_new_item'          => __('Add New Press', 'text_domain'),
    'add_new'               => __('Add New', 'text_domain'),
    'new_item'              => __('New Press', 'text_domain'),
    'edit_item'             => __('Edit Press', 'text_domain'),
    'update_item'           => __('Update Press', 'text_domain'),
    'view_item'             => __('View Press', 'text_domain'),
    'view_items'            => __('View Press', 'text_domain'),
    'search_items'          => __('Search Press', 'text_domain'),
    'not_found'             => __('Not found', 'text_domain'),
    'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    'featured_image'        => __('Featured Image', 'text_domain'),
    'set_featured_image'    => __('Set featured image', 'text_domain'),
    'remove_featured_image' => __('Remove featured image', 'text_domain'),
    'use_featured_image'    => __('Use as featured image', 'text_domain'),
    'insert_into_item'      => __('Insert into item', 'text_domain'),
    'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
    'items_list'            => __('Press list', 'text_domain'),
    'items_list_navigation' => __('Press list navigation', 'text_domain'),
    'filter_items_list'     => __('Filter items list', 'text_domain'),
);

$pressArgs = array(
    'label'                 => __('Press', 'text_domain'),
    'description'           => __('Press Description', 'text_domain'),
    'labels'                => $pressLabels,
    'supports'              => array('title'),
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
    // 'rewrite' => array('id' => '23', 'with_front' => false), // replace ID with the appropriate page ID
    'menu_icon' => 'dashicons-testimonial',
);

register_post_type('press', $pressArgs);
