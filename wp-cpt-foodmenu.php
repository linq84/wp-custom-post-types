<?php
/**
Plugin Name: Food Menu
**/

//// Create items CPT
function items_post_type() {
    register_post_type( 'items',
        array(
            'labels' => array(
                'name' => __( 'Items' ),
                'singular_name' => __( 'item' )
            ),
            'public' => true,
            'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite'   => array( 'slug' => 'my-items' ),
            'menu_position' => 5,
        'menu_icon' => 'dashicons-awards',
        // 'taxonomies' => array('item type', 'post_tag') // this is IMPORTANT
        )
    );
}
add_action( 'init', 'items_post_type' );

//// Add item type taxonomy
function create_items_taxonomy() {
    register_taxonomy('item type','items',array(
        'hierarchical' => false,
        'labels' => array(
            'name' => _x( 'item types', 'taxonomy general name' ),
            'singular_name' => _x( 'item type', 'taxonomy singular name' ),
            'menu_name' => __( 'item types' ),
            'all_items' => __( 'All item types' ),
            'edit_item' => __( 'Edit item type' ), 
            'update_item' => __( 'Update item type' ),
            'add_new_item' => __( 'Add item type' ),
            'new_item_name' => __( 'New item type' ),
        ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    ));
    register_taxonomy('prices','items',array(
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
    register_taxonomy('menus','items',array(
        'hierarchical' => false,
        'labels' => array(
            'name' => _x( 'Menus', 'taxonomy general name' ),
            'singular_name' => _x( 'Menu', 'taxonomy singular name' ),
            'menu_name' => __( 'Menus' ),
            'all_items' => __( 'All Menus' ),
            'edit_item' => __( 'Edit Menu' ), 
            'update_item' => __( 'Update Menu' ),
            'add_new_item' => __( 'Add Menu' ),
            'new_item_name' => __( 'New Menu' ),
        ),
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => false,
    ));
    register_taxonomy('subscriptions','items',array(
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
add_action( 'init', 'create_items_taxonomy', 0 );

