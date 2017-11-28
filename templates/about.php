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
		<div class="container-fluid nopadding"
		     data-image="<?php
		     echo get_field( 'first_section_image' ) ? the_field( 'first_section_image' ) : get_template_directory_uri() . '/assets/images/about/fresh-roasted-coffee.jpg';
		     ?>"
		     style="background-image: url(<?php
		     echo get_field( 'first_section_image' ) ? the_field( 'first_section_image' ) : get_template_directory_uri() . '/assets/images/about/fresh-roasted-coffee.jpg';
		     ?>)">
			<div class="col-md-6 col-xs-12 nopadding">
				<div class="col-md-offset-3 col-md-9 col-xs-12 nopadding">
				</div>
			</div>
			<div class="col-md-6 col-xs-12 nopadding background-brown">
				<div class="col-md-10 col-xs-12 content-md">
					<h2 class="text-white text-uppercase">
						<?php
						if ( get_field( 'first_section_title' ) ) {
							the_field( 'first_section_title' );
						}
						?>
					</h2>
					<div class="text-white text-justify">
						<?php
						if ( get_field( 'first_section_content' ) ) {
							the_field( 'first_section_content' );
						}
						?>
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
					<div data-image="<?php
					echo get_field( 'our_story_image' ) ? the_field( 'our_story_image' ) : get_template_directory_uri() . '/assets/images/about/our-story.png';
					?>"
					     style="height: 300px;background-image: url(
					     <?php
					     echo get_field( 'our_story_image' ) ? the_field( 'our_story_image' ) : get_template_directory_uri() . '/assets/images/about/our-story.png';
					     ?>)">

					</div>
				</div>
			</div>
			<div class="row text-justify">
				<div style="margin-bottom: 20px;"></div>
				<?php
				if ( get_field( 'our_story_content' ) ) {
					the_field( 'our_story_content' );
				}
				?>
			</div>
		</div>
	</section>

<?php
get_footer();
