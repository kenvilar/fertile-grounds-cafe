<?php

// Register Custom Post Type Coffee and Espresso
// Post Type Key: coffeeandespresso
function create_coffeeandespresso_cpt() {
	
	$labels = array(
		'name'                  => __( 'Coffee and Espresso', 'Post Type General Name', 'textdomain' ),
		'singular_name'         => __( 'Coffee and Espresso', 'Post Type Singular Name', 'textdomain' ),
		'menu_name'             => __( 'Coffee and Espresso', 'textdomain' ),
		'name_admin_bar'        => __( 'Coffee and Espresso', 'textdomain' ),
		'archives'              => __( 'Coffee and Espresso Archives', 'textdomain' ),
		'attributes'            => __( 'Coffee and Espresso Attributes', 'textdomain' ),
		'parent_item_colon'     => __( 'Parent Coffee and Espresso:', 'textdomain' ),
		'all_items'             => __( 'All Coffee and Espresso', 'textdomain' ),
		'add_new_item'          => __( 'Add New Coffee and Espresso', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'new_item'              => __( 'New Coffee and Espresso', 'textdomain' ),
		'edit_item'             => __( 'Edit Coffee and Espresso', 'textdomain' ),
		'update_item'           => __( 'Update Coffee and Espresso', 'textdomain' ),
		'view_item'             => __( 'View Coffee and Espresso', 'textdomain' ),
		'view_items'            => __( 'View Coffee and Espresso', 'textdomain' ),
		'search_items'          => __( 'Search Coffee and Espresso', 'textdomain' ),
		'not_found'             => __( 'Not found', 'textdomain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
		'featured_image'        => __( 'Featured Image', 'textdomain' ),
		'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item'      => __( 'Insert into Coffee and Espresso', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Coffee and Espresso', 'textdomain' ),
		'items_list'            => __( 'Coffee and Espresso list', 'textdomain' ),
		'items_list_navigation' => __( 'Coffee and Espresso list navigation', 'textdomain' ),
		'filter_items_list'     => __( 'Filter Coffee and Espresso list', 'textdomain' ),
	);
	$args   = array(
		'label'               => __( 'Coffee and Espresso', 'textdomain' ),
		'description'         => __( '', 'textdomain' ),
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
		'has_archive'         => true,
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'show_in_rest'        => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'coffeeandespresso', $args );
	
}

add_action( 'init', 'create_coffeeandespresso_cpt', 0 );
