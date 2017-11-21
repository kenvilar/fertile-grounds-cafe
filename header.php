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
	
	<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#navbar">
<div id="wrapper">
	<header class="transparent" id="Header">
		<nav class="navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar"
					        aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/logos/logo.png'; ?>"
						     alt="Fertile Grounds Cafe">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/logos/logo.png'; ?>"
						     alt="Fertile Grounds Cafe">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#">About</a></li>
						<li class=""><a href="#">Coffee</a></li>
						<li class=""><a href="#">Venue</a></li>
						<li class=""><a href="#">Events</a></li>
						<li class=""><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
