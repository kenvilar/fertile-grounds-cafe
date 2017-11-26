<?php
/**
 * The template for displaying all single posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fertile_Grounds_Cafe
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 <?php echo is_dynamic_sidebar() ? 'col-md-9' : 'col-md-12'; ?>">
				
				<?php
				while ( have_posts() ) : the_post();
					
					get_template_part( 'template-parts/content', get_post_type() );
					
					the_post_navigation();
					?>

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
				
				<?php endwhile; ?>

			</div>
			<?php
			
			get_sidebar();
			
			?>
		</div>
	</div>

<?php
get_footer();
