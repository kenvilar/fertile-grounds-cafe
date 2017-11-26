<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fertile_Grounds_Cafe
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();
	
	get_template_part( 'template-parts/content', 'page' );
	
	?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div>
		</div>
	</div>

<?php endwhile; // End of the loop.

get_sidebar();
get_footer();
