<?php

// Register Custom Post Type Teas and Tisane
// Post Type Key: teasandtisane
function fertilegrounds_teasandtisane_cpt() {
	
	$labels = array(
		'name'                  => __( 'Teas and Tisane', 'Post Type General Name', 'fertilegroundscafe' ),
		'singular_name'         => __( 'Teas and Tisane', 'Post Type Singular Name', 'fertilegroundscafe' ),
		'menu_name'             => __( 'Teas and Tisane', 'fertilegroundscafe' ),
		'name_admin_bar'        => __( 'Teas and Tisane', 'fertilegroundscafe' ),
		'archives'              => __( 'Teas and Tisane Archives', 'fertilegroundscafe' ),
		'attributes'            => __( 'Teas and Tisane Attributes', 'fertilegroundscafe' ),
		'parent_item_colon'     => __( 'Parent Teas and Tisane:', 'fertilegroundscafe' ),
		'all_items'             => __( 'All Teas and Tisane', 'fertilegroundscafe' ),
		'add_new_item'          => __( 'Add New Teas and Tisane', 'fertilegroundscafe' ),
		'add_new'               => __( 'Add New', 'fertilegroundscafe' ),
		'new_item'              => __( 'New Teas and Tisane', 'fertilegroundscafe' ),
		'edit_item'             => __( 'Edit Teas and Tisane', 'fertilegroundscafe' ),
		'update_item'           => __( 'Update Teas and Tisane', 'fertilegroundscafe' ),
		'view_item'             => __( 'View Teas and Tisane', 'fertilegroundscafe' ),
		'view_items'            => __( 'View Teas and Tisane', 'fertilegroundscafe' ),
		'search_items'          => __( 'Search Teas and Tisane', 'fertilegroundscafe' ),
		'not_found'             => __( 'Not found', 'fertilegroundscafe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fertilegroundscafe' ),
		'featured_image'        => __( 'Featured Image', 'fertilegroundscafe' ),
		'set_featured_image'    => __( 'Set featured image', 'fertilegroundscafe' ),
		'remove_featured_image' => __( 'Remove featured image', 'fertilegroundscafe' ),
		'use_featured_image'    => __( 'Use as featured image', 'fertilegroundscafe' ),
		'insert_into_item'      => __( 'Insert into Teas and Tisane', 'fertilegroundscafe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Teas and Tisane', 'fertilegroundscafe' ),
		'items_list'            => __( 'Teas and Tisane list', 'fertilegroundscafe' ),
		'items_list_navigation' => __( 'Teas and Tisane list navigation', 'fertilegroundscafe' ),
		'filter_items_list'     => __( 'Filter Teas and Tisane list', 'fertilegroundscafe' ),
	);
	$args   = array(
		'label'               => __( 'Teas and Tisane', 'fertilegroundscafe' ),
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
	register_post_type( 'teasandtisane', $args );
	
}

add_action( 'init', 'fertilegrounds_teasandtisane_cpt', 0 );
