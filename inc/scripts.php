<?php

/**
 * Enqueue scripts.
 */
function fertilegroundscafe_scripts() {
	wp_enqueue_script( 'fertilegroundscafe-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		'2017',
		true );
	
	wp_enqueue_script( 'fertilegroundscafe-skip-link-focus-fix',
		get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js',
		array(),
		'2017',
		true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_script( 'bootstrap-script',
		get_template_directory_uri() . '/assets/bower_components/bootstrap/dist/js/bootstrap.min.js',
		array( 'jquery' ),
		'2017',
		true );
	
	wp_enqueue_script( 'owl-carousel-script',
		get_template_directory_uri() . '/assets/bower_components/owl.carousel/dist/owl.carousel.min.js',
		array( 'jquery' ),
		'2017',
		true );
}

add_action( 'wp_enqueue_scripts', 'fertilegroundscafe_scripts' );
