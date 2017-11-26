<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fertile_Grounds_Cafe
 */

get_header(); ?>

<?php
if ( have_posts() ) :
	
	if ( is_home() && ! is_front_page() ) : ?>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					</div>
				</div>
			</div>
		</section>
	
	<?php endif;
	
	/* Start the Loop */
	while ( have_posts() ) : the_post();
		
		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content', get_post_format() );
	
	endwhile;
	
	?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php
				
				the_posts_navigation();
				
				?>
			</div>
		</div>
	</div>

<?php else :
	
	get_template_part( 'template-parts/content', 'none' );

endif; ?>

<?php
get_sidebar();
get_footer();
