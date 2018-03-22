<?php

// Register Custom Post Type Smoothie
// Post Type Key: smoothie
function fertilegrounds_smoothie_cpt() {
	
	$labels = array(
		'name'                  => __( 'Smoothies', 'Post Type General Name', 'fertilegroundscafe' ),
		'singular_name'         => __( 'Smoothie', 'Post Type Singular Name', 'fertilegroundscafe' ),
		'menu_name'             => __( 'Smoothies', 'fertilegroundscafe' ),
		'name_admin_bar'        => __( 'Smoothie', 'fertilegroundscafe' ),
		'archives'              => __( 'Smoothie Archives', 'fertilegroundscafe' ),
		'attributes'            => __( 'Smoothie Attributes', 'fertilegroundscafe' ),
		'parent_item_colon'     => __( 'Parent Smoothie:', 'fertilegroundscafe' ),
		'all_items'             => __( 'All Smoothies', 'fertilegroundscafe' ),
		'add_new_item'          => __( 'Add New Smoothie', 'fertilegroundscafe' ),
		'add_new'               => __( 'Add New', 'fertilegroundscafe' ),
		'new_item'              => __( 'New Smoothie', 'fertilegroundscafe' ),
		'edit_item'             => __( 'Edit Smoothie', 'fertilegroundscafe' ),
		'update_item'           => __( 'Update Smoothie', 'fertilegroundscafe' ),
		'view_item'             => __( 'View Smoothie', 'fertilegroundscafe' ),
		'view_items'            => __( 'View Smoothies', 'fertilegroundscafe' ),
		'search_items'          => __( 'Search Smoothie', 'fertilegroundscafe' ),
		'not_found'             => __( 'Not found', 'fertilegroundscafe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fertilegroundscafe' ),
		'featured_image'        => __( 'Featured Image', 'fertilegroundscafe' ),
		'set_featured_image'    => __( 'Set featured image', 'fertilegroundscafe' ),
		'remove_featured_image' => __( 'Remove featured image', 'fertilegroundscafe' ),
		'use_featured_image'    => __( 'Use as featured image', 'fertilegroundscafe' ),
		'insert_into_item'      => __( 'Insert into Smoothie', 'fertilegroundscafe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Smoothie', 'fertilegroundscafe' ),
		'items_list'            => __( 'Smoothies list', 'fertilegroundscafe' ),
		'items_list_navigation' => __( 'Smoothies list navigation', 'fertilegroundscafe' ),
		'filter_items_list'     => __( 'Filter Smoothies list', 'fertilegroundscafe' ),
	);
	$args   = array(
		'label'               => __( 'Smoothie', 'fertilegroundscafe' ),
		'description'         => __( '', 'fertilegroundscafe' ),
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-heart',
		'supports'            => array( 'title', 'editor', 'revisions', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => false,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'show_in_rest'        => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'smoothie', $args );
	
}

add_action( 'init', 'fertilegrounds_smoothie_cpt', 0 );
