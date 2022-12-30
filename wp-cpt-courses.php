<?php
/**
Plugin Name: Courses CPT
**/

//// Create courses CPT
function courses_post_type() {
    register_post_type( 'courses',
        array(
            'labels' => array(
                'name' => __( 'Courses' ),
                'singular_name' => __( 'Course' )
            ),
            'public' => true,
            'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite'   => array( 'slug' => 'my-courses' ),
            'menu_position' => 5,
        'menu_icon' => 'dashicons-awards',
        // 'taxonomies' => array('course type', 'post_tag') // this is IMPORTANT
        )
    );
}
add_action( 'init', 'courses_post_type' );

//// Add course type taxonomy
function create_courses_taxonomy() {
    register_taxonomy('course type','courses',array(
        'hierarchical' => false,
        'labels' => array(
            'name' => _x( 'Course types', 'taxonomy general name' ),
            'singular_name' => _x( 'Course type', 'taxonomy singular name' ),
            'menu_name' => __( 'Course types' ),
            'all_items' => __( 'All Course types' ),
            'edit_item' => __( 'Edit Course type' ), 
            'update_item' => __( 'Update Course type' ),
            'add_new_item' => __( 'Add Course type' ),
            'new_item_name' => __( 'New Course type' ),
        ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    ));
    register_taxonomy('prices','courses',array(
        'hierarchical' => false,
        'labels' => array(
            'name' => _x( 'Prices', 'taxonomy general name' ),
            'singular_name' => _x( 'Price', 'taxonomy singular name' ),
            'menu_name' => __( 'Prices' ),
            'all_items' => __( 'All Prices' ),
            'edit_item' => __( 'Edit Price' ), 
            'update_item' => __( 'Update Price' ),
            'add_new_item' => __( 'Add Price' ),
            'new_item_name' => __( 'New Price' ),
        ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => false,
    ));
    register_taxonomy('links','courses',array(
        'hierarchical' => false,
        'labels' => array(
            'name' => _x( 'Links', 'taxonomy general name' ),
            'singular_name' => _x( 'Link', 'taxonomy singular name' ),
            'menu_name' => __( 'Links' ),
            'all_items' => __( 'All Links' ),
            'edit_item' => __( 'Edit Link' ), 
            'update_item' => __( 'Update Link' ),
            'add_new_item' => __( 'Add Link' ),
            'new_item_name' => __( 'New Link' ),
        ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => false,
    ));
    register_taxonomy('subscriptions','courses',array(
        'hierarchical' => false,
        'labels' => array(
            'name' => _x( 'Subscriptions', 'taxonomy general name' ),
            'singular_name' => _x( 'Subscription', 'taxonomy singular name' ),
            'menu_name' => __( 'Subscriptions' ),
            'all_items' => __( 'All Subscriptions' ),
            'edit_item' => __( 'Edit Subscription' ), 
            'update_item' => __( 'Update Subscription' ),
            'add_new_item' => __( 'Add Subscription' ),
            'new_item_name' => __( 'New Subscription' ),
        ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => false,
    ));
}
add_action( 'init', 'create_courses_taxonomy', 0 );

