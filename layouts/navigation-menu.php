<?php
/* Navigation Menu */
?>

<header class="transparent" id="Header">
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
					<img src="<?php
					if ( get_field( 'image_logo', 'option' ) ) {
						the_field( 'image_logo', 'option' );
					} else {
						echo get_template_directory_uri() . '/assets/images/logos/logo.png';
					}
					?>"
					     alt="Fertile Grounds Cafe">
					<img src="<?php
					if ( get_field( 'image_logo', 'option' ) ) {
						the_field( 'image_logo', 'option' );
					} else {
						echo get_template_directory_uri() . '/assets/images/logos/logo.png';
					}
					?>"
					     alt="Fertile Grounds Cafe">
				</a>
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar"
				        aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<?php
			/*wp_nav_menu( array(
				'menu'            => 'primary-menu',
				'container'       => 'div',
				'container_id'    => 'navbar',
				'container_class' => 'collapse navbar-collapse',
				'menu_class'      => 'nav navbar-nav navbar-right',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'item_spacing'    => 'preserve',
				'depth'           => 0,
				'walker'          => new Fertilegrounds_Walker_Nav_Menu(),
				'theme_location'  => 'primary-menu',
			) );*/
			?>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class=""><a href="http://fertilegrounds.dev/about/">About</a></li>
					<li class="has-children">
						<a href="http://fertilegrounds.dev/menu/">Menu
							<span data-toggle="dropdown" class="dropdown-toggle glyphicon glyphicon-chevron-down"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class=""><a class="light-fare" href="http://fertilegrounds.dev/menu/#light-fare">Light Fare</a></li>
							<li class=""><a class="menu-tab" href="http://fertilegrounds.dev/menu/#coffee">Coffee</a></li>
							<li class=""><a class="menu-tab" href="http://fertilegrounds.dev/menu/#drinks">Drinks</a></li>
							<li class=""><a class="menu-tab" href="http://fertilegrounds.dev/menu/#teas">Teas</a></li>
							<li class=""><a class="menu-tab" href="http://fertilegrounds.dev/menu/#smoothies">Smoothies</a></li>
						</ul>
					</li>
					<li class=""><a href="http://fertilegrounds.dev/venue/">Venue</a></li>
					<li class=""><a href="/events">Events</a></li>
					<li class=""><a href="http://fertilegrounds.dev/contact-us/">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
