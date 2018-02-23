<?php

/**
 * Enqueue scripts.
 */
function fertilegroundscafe_scripts() {
	wp_enqueue_script( 'fertilegroundscafe-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		FERTILEGROUNDSCAFE_VERSION,
		true );
	
	wp_enqueue_script( 'fertilegroundscafe-skip-link-focus-fix',
		get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js',
		array(),
		FERTILEGROUNDSCAFE_VERSION,
		true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	wp_enqueue_script( 'bootstrap',
		get_template_directory_uri() . '/assets/bower_components/bootstrap/dist/js/bootstrap.min.js',
		array( 'jquery' ),
		FERTILEGROUNDSCAFE_VERSION,
		true );
	
	wp_enqueue_script( 'owl-carousel',
		get_template_directory_uri() . '/assets/bower_components/owl.carousel/dist/owl.carousel.min.js',
		array( 'jquery' ),
		FERTILEGROUNDSCAFE_VERSION,
		true );
	
	wp_enqueue_script( 'matchheight',
		get_template_directory_uri() . '/assets/lib/jquery.matchHeight-min.js',
		array( 'jquery' ),
		FERTILEGROUNDSCAFE_VERSION, true );
	
	wp_enqueue_script( 'viewport',
		get_template_directory_uri() . '/assets/lib/jquery.viewportchecker.min.js',
		array( 'jquery' ),
		FERTILEGROUNDSCAFE_VERSION, true );

    wp_enqueue_script( 'bootstrap-lightboxjs',
        get_template_directory_uri() . '/assets/bower_components/ekko-lightbox/dist/ekko-lightbox.min.js',
        array( 'jquery' ),
	    FERTILEGROUNDSCAFE_VERSION, true );
	
	if ( fertilegroundscafe_is_localhost() ) {
		wp_enqueue_script( 'main-custom',
			get_template_directory_uri() . '/assets/js/custom.js',
			array(),
			FERTILEGROUNDSCAFE_VERSION,
			true );
	} else {
		wp_enqueue_script( 'main-min-custom',
			get_template_directory_uri() . '/assets/js/custom.min.js',
			array(),
			FERTILEGROUNDSCAFE_VERSION,
			true );
	}
}

add_action( 'wp_enqueue_scripts', 'fertilegroundscafe_scripts' );
