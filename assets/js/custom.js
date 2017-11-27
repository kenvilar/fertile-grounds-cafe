(function( $ ) {

	$( 'document' ).ready( function() {

		//Equal Columns height
		$( '.equal-height' ).matchHeight();

		//Testimonial Carousel
		$( '#testimonial-carousel' ).owlCarousel( {
			margin          : 15,
			items           : 1,
			nav             : true,
			autoHeight      : true,
			dots            : false,
			navText         : [
				"<img src='../../wp-content/themes/fertilegroundscafe/assets/images/icons/arrow-left.png'>",
				"<img src='../../wp-content/themes/fertilegroundscafe/assets/images/icons/arrow-right.png'>"
			],
			loop            : true,
			responsiveClass : true,
			animateOut      : 'fadeOutLeft',
			animateIn       : 'flipInX',
			responsive      : {
				0 : {
					items : 1
				}
			}
		} );

		//Menu Page Nav Tabs
		var hashmenutab = window.location.hash;
		hashmenutab && $( 'ul.nav a[href="' + hashmenutab + '"]' ).tab( 'show' );
		$( '#coffee-tabs a' ).click( function( e ) {
			$( this ).tab( 'show' );
			var scrollmenutab = $( 'body' ).scrollTop() || $( 'html' ).scrollTop();
			window.location.hash = this.hash;
			$( 'html,body' ).scrollTop( scrollmenutab );
		} );

		// On Load
		$( window ).on( 'load', function() {
			// Preloader
			$( '.preloader' ).fadeOut( 1500 );
		} );

	} );

})( jQuery );
