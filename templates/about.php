<?php
/**
 * Template Name: About
 */

get_header(); ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-xs-12 nopadding text-justify-center">
					<div style="margin-bottom: 70px;"></div>
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
					endif;
					?>
					<div style="margin-bottom: 75px;"></div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container-fluid container-fluid-xs"
		     data-image="<?php echo get_template_directory_uri() . '/assets/images/about/fresh-roasted-coffee.png'; ?>"
		     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/about/fresh-roasted-coffee.png'; ?>)">
			<div class="col-md-6 col-xs-12 nopadding">
				<div class="col-md-offset-3 col-md-9 col-xs-12 nopadding">
				</div>
			</div>
			<div class="col-md-6 col-xs-12 nopadding background-brown">
				<div class="col-md-10 col-xs-12 content-md">
					<h2 class="text-white text-uppercase">FRESH ROASTED COFFEE</h2>
					<div class="text-white text-justify">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium quam ornare
							hendrerit tristique. Duis quis felis ac neque accumsan volutpat. Curabitur gravida tempus
							lacinia. Donec vel massa elit. Proin ac felis erat. Donec quis turpis sit amet lacus posuere
							mattis in at risus. Pellentesque at malesuada tortor.</p>

						<p>Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
							ridiculus mus. Donec ornare varius nibh, maximus suscipit eros consectetur a. Donec nibh
							enim, dictum et consectetur quis, hendrerit quis velit. Aenean in vestibulum odio. Morbi
							semper,</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div style="margin-bottom: 75px;"></div>
					<h2 class="text-uppercase text-brown text-center">Our Story</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 nopadding">
					<div data-image="<?php echo get_template_directory_uri() . '/assets/images/about/our-story.png'; ?>"
					     style="height: 300px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/about/our-story.png'; ?>)">

					</div>
				</div>
			</div>
			<div class="row text-justify">
				<div style="margin-bottom: 20px;"></div>
				<div class="col-md-6 col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium quam ornare hendrerit
						tristique. Duis quis felis ac neque accumsan volutpat. Curabitur gravida tempus lacinia. Donec
						vel massa elit. Proin ac felis erat. Donec quis turpis sit amet lacus posuere mattis in at
						risus. Pellentesque at malesuada tortor.</p>
					<p>Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec ornare varius nibh, maximus suscipit eros consectetur a. Donec nibh enim, dictum et
						consectetur quis, hendrerit quis velit. Aenean in vestibulum odio. Morbi semper,</p>
				</div>
				<div class="col-md-6 col-xs-12">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium quam ornare hendrerit
						tristique. Duis quis felis ac neque accumsan volutpat. Curabitur gravida tempus lacinia. Donec
						vel massa elit. Proin ac felis erat. Donec quis turpis sit amet lacus posuere mattis in at
						risus. Pellentesque at malesuada tortor.</p>
					<p>Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
						mus. Donec ornare varius nibh, maximus suscipit eros consectetur a. Donec nibh enim, dictum et
						consectetur quis, hendrerit quis velit. Aenean in vestibulum odio. Morbi semper,</p>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
