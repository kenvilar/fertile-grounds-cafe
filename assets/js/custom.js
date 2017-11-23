(function( $ ) {

	$( 'document' ).ready( function() {

		//Equal Columns height
		$( '.equal-height' ).matchHeight();

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

	} );

})( jQuery );
