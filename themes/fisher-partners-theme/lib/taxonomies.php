<?php

/*
 *
 * Taxonomies
 *
 */

// Same as with Custom Types, you only need the arguments and register_taxonomy function here. They are hooked into WordPress in functions.php.

// Custom taxonomy labels and arguments
$projectCategoryLabels = array(
    'name'                       => _x('Project Categories', 'taxonomy general name', 'textdomain'),
    'singular_name'              => _x('Project Category', 'taxonomy singular name', 'textdomain'),
    'search_items'               => __('Search Project Categories', 'textdomain'),
    'popular_items'              => __('Popular Project Categories', 'textdomain'),
    'all_items'                  => __('All Project Categories', 'textdomain'),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __('Edit Project Category', 'textdomain'),
    'update_item'                => __('Update Project Category', 'textdomain'),
    'add_new_item'               => __('Add New Project Category', 'textdomain'),
    'new_item_name'              => __('New Project Category Name', 'textdomain'),
    'separate_items_with_commas' => __('Separate Deliverables with commas', 'textdomain'),
    'add_or_remove_items'        => __('Add or remove Deliverables', 'textdomain'),
    'choose_from_most_used'      => __('Choose from the most used Deliverables', 'textdomain'),
    'not_found'                  => __('No Deliverables found.', 'textdomain'),
    'menu_name'                  => __('Project Categories', 'textdomain'),
);

$projectCategoryArgs = array(
    'hierarchical'          => false,
    'labels'                => $projectCategoryLabels,
    'public'                => true,
    // 'meta_box_cb'           => false,
    'show_ui'               => true,
    'show_admin_column'     => true,
    // 'show_in_rest'          => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array('slug' => 'project-category'),
);

register_taxonomy('project-category', 'project', $projectCategoryArgs);


// Custom taxonomy labels and arguments
$personCategoryLabels = array(
    'name'                       => _x('People Categories', 'taxonomy general name', 'textdomain'),
    'singular_name'              => _x('People Category', 'taxonomy singular name', 'textdomain'),
    'search_items'               => __('Search People Categories', 'textdomain'),
    'popular_items'              => __('Popular People Categories', 'textdomain'),
    'all_items'                  => __('All People Categories', 'textdomain'),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __('Edit People Category', 'textdomain'),
    'update_item'                => __('Update People Category', 'textdomain'),
    'add_new_item'               => __('Add New People Category', 'textdomain'),
    'new_item_name'              => __('New People Category Name', 'textdomain'),
    'separate_items_with_commas' => __('Separate Deliverables with commas', 'textdomain'),
    'add_or_remove_items'        => __('Add or remove Deliverables', 'textdomain'),
    'choose_from_most_used'      => __('Choose from the most used Deliverables', 'textdomain'),
    'not_found'                  => __('No Deliverables found.', 'textdomain'),
    'menu_name'                  => __('People Categories', 'textdomain'),
);

$personCategoryArgs = array(
    'hierarchical'          => false,
    'labels'                => $personCategoryLabels,
    'public'                => false,
    'meta_box_cb'           => false,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array('slug' => 'person-category'),
);

register_taxonomy('person-category', 'person', $personCategoryArgs);
