<?php
/* Navigation Menu */
?>

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
				<a class="navbar-brand" href="/">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/logos/logo.png'; ?>"
					     alt="Fertile Grounds Cafe">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/logos/logo.png'; ?>"
					     alt="Fertile Grounds Cafe">
				</a>
			</div>
			<?php
			wp_nav_menu( array(
				'menu'            => 'primary-menu',
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'menu_class'      => 'nav navbar-nav navbar-right',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'item_spacing'    => 'preserve',
				'depth'           => 0,
				'walker'          => new Fertilegrounds_Walker_Nav_Menu(),
				'theme_location'  => 'primary-menu',
			) );
			?>
		</div>
	</nav>
</header>
