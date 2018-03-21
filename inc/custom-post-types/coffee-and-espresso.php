<?php

// Register Custom Post Type Coffee and Espresso
// Post Type Key: coffeeandespresso
function fertilegrounds_coffeeandespresso_cpt() {
	
	$labels = array(
		'name'                  => __( 'Coffee and Espresso', 'Post Type General Name', 'fertilegroundscafe' ),
		'singular_name'         => __( 'Coffee and Espresso', 'Post Type Singular Name', 'fertilegroundscafe' ),
		'menu_name'             => __( 'Coffee and Espresso', 'fertilegroundscafe' ),
		'name_admin_bar'        => __( 'Coffee and Espresso', 'fertilegroundscafe' ),
		'archives'              => __( 'Coffee and Espresso Archives', 'fertilegroundscafe' ),
		'attributes'            => __( 'Coffee and Espresso Attributes', 'fertilegroundscafe' ),
		'parent_item_colon'     => __( 'Parent Coffee and Espresso:', 'fertilegroundscafe' ),
		'all_items'             => __( 'All Coffee and Espresso', 'fertilegroundscafe' ),
		'add_new_item'          => __( 'Add New Coffee and Espresso', 'fertilegroundscafe' ),
		'add_new'               => __( 'Add New', 'fertilegroundscafe' ),
		'new_item'              => __( 'New Coffee and Espresso', 'fertilegroundscafe' ),
		'edit_item'             => __( 'Edit Coffee and Espresso', 'fertilegroundscafe' ),
		'update_item'           => __( 'Update Coffee and Espresso', 'fertilegroundscafe' ),
		'view_item'             => __( 'View Coffee and Espresso', 'fertilegroundscafe' ),
		'view_items'            => __( 'View Coffee and Espresso', 'fertilegroundscafe' ),
		'search_items'          => __( 'Search Coffee and Espresso', 'fertilegroundscafe' ),
		'not_found'             => __( 'Not found', 'fertilegroundscafe' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fertilegroundscafe' ),
		'featured_image'        => __( 'Featured Image', 'fertilegroundscafe' ),
		'set_featured_image'    => __( 'Set featured image', 'fertilegroundscafe' ),
		'remove_featured_image' => __( 'Remove featured image', 'fertilegroundscafe' ),
		'use_featured_image'    => __( 'Use as featured image', 'fertilegroundscafe' ),
		'insert_into_item'      => __( 'Insert into Coffee and Espresso', 'fertilegroundscafe' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Coffee and Espresso', 'fertilegroundscafe' ),
		'items_list'            => __( 'Coffee and Espresso list', 'fertilegroundscafe' ),
		'items_list_navigation' => __( 'Coffee and Espresso list navigation', 'fertilegroundscafe' ),
		'filter_items_list'     => __( 'Filter Coffee and Espresso list', 'fertilegroundscafe' ),
	);
	$args   = array(
		'label'               => __( 'Coffee and Espresso', 'fertilegroundscafe' ),
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
	register_post_type( 'coffeeandespresso', $args );
	
}

add_action( 'init', 'fertilegrounds_coffeeandespresso_cpt', 0 );
