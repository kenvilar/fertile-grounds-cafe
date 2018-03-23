<?php
/**
 * Template Name: Venue
 */

get_header(); ?>

	<section style="padding-top: 80px;">
		<div class="<?php echo get_field( 'first_section_image' ) ? 'container-fluid' : 'container'; ?> nopadding">
			<?php
			if ( get_field( 'first_section_image' ) ) :
				?>
				<div class="col-md-6 col-xs-12 nopadding hidden-sm hidden-xs"
				     data-image="<?php
				     echo get_field( 'first_section_image' ) ? get_field( 'first_section_image' ) : get_template_directory_uri() . '/assets/images/venue/venue1.png';
				     ?>"
				     style="height: 859px;background-image: url(<?php
				     echo get_field( 'first_section_image' ) ? get_field( 'first_section_image' ) : get_template_directory_uri() . '/assets/images/venue/venue1.png';
				     ?>)">

				</div>
				<?php
			endif;
			?>
			<div class="<?php echo get_field( 'first_section_image' ) ? 'col-md-5' : 'col-md-12'; ?> col-xs-12">
				<?php
				if ( get_field( 'first_section_content' ) ) {
					the_field( 'first_section_content' );
				}
				?>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<?php
				if ( get_field( 'second_section_content' ) ) {
					the_field( 'second_section_content' );
				}
				?>
			</div>
		</div>
	</section>

<?php
get_footer();
