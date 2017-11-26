<?php
/**
 * The sidebar containing the main widget area
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fertile_Grounds_Cafe
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-xs-12 col-md-3">

	<aside id="secondary" class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>

</div>
