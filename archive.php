<?php
/**
 * The template for displaying archive pages
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fertile_Grounds_Cafe
 */

get_header(); ?>

<?php
if ( have_posts() ) : ?>

	<section class="bulaga">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header>
				</div>
			</div>
		</div>
	</section>
	
	<?php
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
