<?php

// Register Custom Post Type
function wunderdogs_team()
{
    $labels = array(
        'name' => _x('Team', 'Post Type General Name', 'wunderdogs'),
        'singular_name' => _x('Team', 'Post Type Singular Name', 'wunderdogs'),
        'menu_name' => __('Team', 'wunderdogs'),
        'name_admin_bar' => __('Team', 'wunderdogs'),
        'archives' => __('Team Archives', 'wunderdogs'),
        'attributes' => __('Team Attributes', 'wunderdogs'),
        'parent_item_colon' => __('Parent Team:', 'wunderdogs'),
        'all_items' => __('Team Members', 'wunderdogs'),
        'add_new_item' => __('Add New', 'wunderdogs'),
        'add_new' => __('Add New', 'wunderdogs'),
        'new_item' => __('New Team', 'wunderdogs'),
        'edit_item' => __('Edit Team', 'wunderdogs'),
        'update_item' => __('Update Team', 'wunderdogs'),
        'view_item' => __('View Team', 'wunderdogs'),
        'view_items' => __('View Team', 'wunderdogs'),
        'search_items' => __('Search Team', 'wunderdogs'),
        'not_found' => __('Team not found', 'wunderdogs'),
        'not_found_in_trash' => __('Team not found in Trash', 'wunderdogs'),
        'featured_image' => __('Featured Image', 'wunderdogs'),
        'set_featured_image' => __('Set featured image', 'wunderdogs'),
        'remove_featured_image' => __('Remove featured image', 'wunderdogs'),
        'use_featured_image' => __('Use as featured image', 'wunderdogs'),
        'insert_into_item' => __('Insert into Team', 'wunderdogs'),
        'uploaded_to_this_item' => __('Uploaded to this Team', 'wunderdogs'),
        'items_list' => __('Team list', 'wunderdogs'),
        'items_list_navigation' => __('Team list navigation', 'wunderdogs'),
        'filter_items_list' => __('Filter Team list', 'wunderdogs'),
    );
    $rewrite = array(
        'slug' => 'team',
        'with_front' => true,
        'pages' => true,
        'feeds' => true,
    );
    $args = array(
        'label' => __('Team', 'wunderdogs'),
        'description' => __('Wunderdogs Team', 'wunderdogs'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 6,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'rewrite' => $rewrite,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-universal-access',
    );
    register_post_type('team', $args);
}
add_action('init', 'wunderdogs_team');

// Departments
function team_departments()
{
    $labels = array(
        'name'                       => _x('Departments', 'Taxonomy General Name', 'wunderdogs'),
        'singular_name'              => _x('Department', 'Taxonomy Singular Name', 'wunderdogs'),
        'menu_name'                  => __('Departments', 'wunderdogs'),
        'all_items'                  => __('All Departments', 'wunderdogs'),
        'parent_item'                => __('Parent Department', 'wunderdogs'),
        'parent_item_colon'          => __('Parent Department:', 'wunderdogs'),
        'new_item_name'              => __('New Department Name', 'wunderdogs'),
        'add_new_item'               => __('Add New Department', 'wunderdogs'),
        'edit_item'                  => __('Edit Department', 'wunderdogs'),
        'update_item'                => __('Update Department', 'wunderdogs'),
        'view_item'                  => __('View Department', 'wunderdogs'),
        'separate_items_with_commas' => __('Separate Departments with commas', 'wunderdogs'),
        'add_or_remove_items'        => __('Add or remove Departments', 'wunderdogs'),
        'choose_from_most_used'      => __('Choose from the most used', 'wunderdogs'),
        'popular_items'              => __('Popular Departments', 'wunderdogs'),
        'search_items'               => __('Search Departments', 'wunderdogs'),
        'not_found'                  => __('Department not Found', 'wunderdogs'),
        'no_terms'                   => __('No Departments', 'wunderdogs'),
        'items_list'                 => __('Departments list', 'wunderdogs'),
        'items_list_navigation'      => __('Departments list navigation', 'wunderdogs'),
    );
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'team-department' ),
    );
    register_taxonomy('team-department', array( 'team' ), $args);
}
add_action('init', 'team_departments');
