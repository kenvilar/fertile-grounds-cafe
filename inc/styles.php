<?php

/**
 * Enqueue styles.
 */
function fertilegroundscafe_styles() {
	wp_enqueue_style( 'main-style-expanded', get_template_directory_uri() . '/assets/css/style.css',
		'',
		'2017',
		'all' );
	wp_enqueue_style( 'main-style-compressed', get_template_directory_uri() . '/assets/css/style.min.css',
		'',
		'2017',
		'all' );
}

add_action( 'wp_enqueue_scripts', 'fertilegroundscafe_styles' );
