<?php

/**
 * Enqueue styles.
 */
function fertilegroundscafe_styles() {
	wp_enqueue_style( 'fertilegroundscafe-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'fertilegroundscafe_styles' );
