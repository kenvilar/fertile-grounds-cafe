<?php

// Register Custom Post Type Specialty Drink
// Post Type Key: specialtydrink
function fertilegrounds_specialtydrink_cpt() {
	
	$labels = array(
		'name'                  => __( 'Specialty Drinks', 'Post Type General Name', 'fertilegroundscafe' ),
		'singular_name'         => __( 'Specialty Drink', 'Post Type Singular Name', 'fertilegroundscafe' ),
		'menu_name'             => __( 'Specialty Drinks', 'fertilegroundscafe' ),
		'name_admin_bar'        => __( 'Specialty Drink', 'fertilegroundscafe' ),
		'archives'              => __( 'Specialty Drink Archives', 'fertilegroundscafe' ),
		'attributes'            => __( 'Specialty Drink Attributes', 'fertilegroundscafe' ),
		'parent_item_colon'     => __( 'Parent Specialty Drink:', 'fertilegroundscafe' ),
		'all_items'             => __( 'All Specialty Drinks', 'fertilegroundscafe' ),
		'add_new_item'          => __( 'Add New Specialty Drink', 'fertilegroundscafe' ),
		'add_new'               => __( 'Add New', 'fertilegroundscafe' ),
		'new_item'              => __( 'New Specialty Drink', 'fertilegroundscafe' ),
		'edit_item'             => __( 'Edit Specialty Drink', 'fertilegroundscafe' ),
		'update_item'           => __( 'Update Specialty Drink', 'fertilegroundscafe' ),
		'view_item'             => __( 'View Specialty Drink', 'fertilegroundscafe' ),
		'view_items'            => __( 'View Specialty Drinks', 'fertilegroundscafe' ),
		'search_items'          => __( 'Search Specialty Drink', 'fertilegroundscafe' ),
		'not_found'             => __( 'Not found', 'fertilegroundscafe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fertilegroundscafe' ),
		'featured_image'        => __( 'Featured Image', 'fertilegroundscafe' ),
		'set_featured_image'    => __( 'Set featured image', 'fertilegroundscafe' ),
		'remove_featured_image' => __( 'Remove featured image', 'fertilegroundscafe' ),
		'use_featured_image'    => __( 'Use as featured image', 'fertilegroundscafe' ),
		'insert_into_item'      => __( 'Insert into Specialty Drink', 'fertilegroundscafe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Specialty Drink', 'fertilegroundscafe' ),
		'items_list'            => __( 'Specialty Drinks list', 'fertilegroundscafe' ),
		'items_list_navigation' => __( 'Specialty Drinks list navigation', 'fertilegroundscafe' ),
		'filter_items_list'     => __( 'Filter Specialty Drinks list', 'fertilegroundscafe' ),
	);
	$args   = array(
		'label'               => __( 'Specialty Drink', 'fertilegroundscafe' ),
		'description'         => __( '', 'fertilegroundscafe' ),
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-heart',
		'supports'            => array( 'title', 'revisions', 'page-attributes', 'post-formats', ),
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
	register_post_type( 'specialtydrink', $args );
	
}

add_action( 'init', 'fertilegrounds_specialtydrink_cpt', 0 );
