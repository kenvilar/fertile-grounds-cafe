<?php
/**
 * The template for displaying search results pages
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fertile_Grounds_Cafe
 */

get_header(); ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 <?php echo is_dynamic_sidebar() ? 'col-md-9' : 'col-md-12'; ?>">
					
					<?php
					if ( have_posts() ) : ?>

						<section>
							<div class="row">
								<div class="col-xs-12">
									<header class="page-header">
										<h1 class="page-title" style="color: inherit;"><?php
											/* translators: %s: search query. */
											printf( esc_html__( 'Search Results for: %s', 'fertilegroundscafe' ), '<span>' . get_search_query() . '</span>' );
											?></h1>
									</header><!-- .page-header -->
								</div>
							</div>
						</section>
						
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );
						
						endwhile;
						
						?>

						<div class="row">
							<div class="col-xs-12">
								<?php
								
								the_posts_navigation();
								
								?>
							</div>
						</div>
					
					<?php else :
						
						get_template_part( 'template-parts/content', 'none' );
					
					endif; ?>

				</div>
				<?php
				
				get_sidebar();
				
				?>
			</div>
		</div>
	</section>

<?php
get_footer();
