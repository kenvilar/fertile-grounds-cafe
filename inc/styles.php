<?php

/**
 * Enqueue styles.
 */
function fertilegroundscafe_styles() {
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/bower_components/bootstrap/dist/css/bootstrap.min.css',
		array(),
		FERTILEGROUNDSCAFE_VERSION );
	
	wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri() . '/assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css',
		array(),
		FERTILEGROUNDSCAFE_VERSION );

    wp_enqueue_style( 'bootstrap-lightboxcss', get_template_directory_uri() . '/assets/bower_components/ekko-lightbox/dist/ekko-lightbox.css',
        array(),
	    FERTILEGROUNDSCAFE_VERSION );
	
	if ( fertilegroundscafe_is_localhost() ) {
		wp_enqueue_style( 'main-style-expanded', get_template_directory_uri() . '/assets/css/style.css',
			array(),
			FERTILEGROUNDSCAFE_VERSION,
			'all' );
	} else {
		wp_enqueue_style( 'main-style-compressed', get_template_directory_uri() . '/assets/css/style.min.css',
			array(),
			FERTILEGROUNDSCAFE_VERSION,
			'all' );
	}
}

add_action( 'wp_enqueue_scripts', 'fertilegroundscafe_styles' );
