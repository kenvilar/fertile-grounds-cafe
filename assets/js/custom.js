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
			/*animateOut      : 'fadeOutDown',*/
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
		$( '#coffee-tabs a' ).on( 'click', function( e ) {
			$( this ).tab( 'show' );
			var scrollmenutab = $( 'body' ).scrollTop() || $( 'html' ).scrollTop();
			window.location.hash = this.hash;
			$( 'html, body' ).scrollTop( scrollmenutab );
		} );

		// On Load
		$( window ).on( 'load', function() {
			// Preloader
			$( '.preloader' ).fadeOut( 1500 );
		} );

		//Scroll to specific div
		$( ".menu-tab" ).on( "click", function() { //This is located at Coffee Menu links menu dropdown
			$( 'html, body' ).animate( {
				scrollTop : $( '#menu-nav-tabs-content' ).offset().top
			}, 0 );
			location.reload( true );
		} );
		$( ".light-fare" ).on( "click", function() { //This is located at light fare menu dropdown
			$( 'html, body' ).animate( {
				scrollTop : $( '#light-fare' ).offset().top
			}, 1000 );
		} );
		//End Scroll to specific div

		// Navigation Menu (add active class)
		var url = window.location.pathname,
			urlRegExp = new RegExp( url.replace( /\/$/, '' ) + "$" );
		$( '#navbar li a' ).each( function() {
			if ( urlRegExp.test( this.href.replace( /\/$/, '' ) ) ) {
				$( this ).parent().addClass( 'active' );
			}
		} );

	} );

})( jQuery );
