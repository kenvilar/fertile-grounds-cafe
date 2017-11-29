<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fertile_Grounds_Cafe
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="<?php
	if ( get_field( 'favicon', 'option' ) ) {
		the_field( 'favicon', 'option' );
	} else {
		echo get_template_directory_uri() . '/assets/images/logos/favicon.png';
	}
	?>" sizes="any" type="image/png">
	
	<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#navbar">
<div class="wrapper">

	<div class="preloader">
		<div class="pl-line pl-line-1"></div>
		<div class="pl-line pl-line-2"></div>
		<div class="pl-line pl-line-3"></div>
		<div class="pl-line pl-line-4"></div>
	</div>
	
	<?php require 'layouts/navigation-menu.php'; ?>
	
	<?php require 'layouts/banner.php'; ?>
