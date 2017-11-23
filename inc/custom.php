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
