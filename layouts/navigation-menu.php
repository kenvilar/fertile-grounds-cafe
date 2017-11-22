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
