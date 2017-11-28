<?php

// Check if Fertile Grounds Cafe is running in localhost
function fertilegroundscafe_is_localhost() {
	$server_name = strtolower( $_SERVER['SERVER_NAME'] );
	
	return in_array( $server_name, array( 'localhost', '127.0.0.1', 'fertilegrounds.dev' ) );
}

// Fix for theme template file caching.
// Flush the theme file cache each time the admin screens are loaded which uses the file list.
function fix_template_caching( WP_Screen $current_screen ) {
	if ( ! in_array( $current_screen->base, array( 'post', 'edit', 'theme-editor' ), true ) ) {
		return;
	}
	$theme = wp_get_theme();
	if ( ! $theme ) {
		return;
	}
	$cache_hash    = md5( $theme->get_theme_root() . '/' . $theme->get_stylesheet() );
	$label         = sanitize_key( 'files_' . $cache_hash . '-' . $theme->get( 'Version' ) );
	$transient_key = substr( $label, 0, 29 ) . md5( $label );
	delete_transient( $transient_key );
}

add_action( 'current_screen', 'fix_template_caching' );

// ACF Pro autop
add_action( 'acf/init', 'acf_wysiwyg_remove_wpautop', 15 );
function acf_wysiwyg_remove_wpautop() {
	remove_filter( 'acf_the_content', 'wpautop' );
}

// ACF Options Page
if ( function_exists( 'acf_add_options_page' ) ) {
	
	acf_add_options_page( array(
		'page_title' => 'Theme General Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false,
	) );
	
	acf_add_options_sub_page( array(
		'page_title'  => 'Theme Header Settings',
		'menu_title'  => 'Header',
		'parent_slug' => 'theme-general-settings',
	) );
	
	acf_add_options_sub_page( array(
		'page_title'  => 'Theme Footer Settings',
		'menu_title'  => 'Footer',
		'parent_slug' => 'theme-general-settings',
	) );
	
}
