<?php
/**
 * Template Name: Events
 */

get_header(); ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 <?php echo is_dynamic_sidebar() ? 'col-md-9' : 'col-md-12'; ?>">
					
					<?php
					$paged         = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$wpb_all_query = new WP_Query(
						array(
							'post_type'      => 'post',
							'post_status'    => 'publish',
							'posts_per_page' => 10,
							'paged'          => $paged,
						) ); ?>
					
					<?php if ( $wpb_all_query->have_posts() ) : ?>
						
						<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

							<section>
								<div class="row">

									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<header class="entry-header">
											<?php
											if ( is_singular() ) : ?>
												<h1 class="entry-title">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</h1>
											<?php else : ?>
												<h1 class="entry-title">
													<a class="text-brown" href="<?php esc_url( get_permalink() ); ?>"
													   rel="bookmark">
														<?php the_title(); ?>
													</a>
												</h1>
											<?php endif;
											
											if ( 'post' === get_post_type() ) : ?>
												<div class="entry-meta">
													<?php fertilegroundscafe_posted_on(); ?>
												</div>
												<?php
											endif; ?>
										</header>

										<div class="entry-content">
											<?php
											if ( is_single() ) :
												the_content( sprintf(
													wp_kses(
														__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'fertilegroundscafe' ),
														array(
															'span' => array(
																'class' => array(),
															),
														)
													),
													get_the_title()
												) );
											else :
												echo wp_trim_words( get_the_content(), 40 );
												?>

												<div class="clear"></div>
												<a class="btn btn-version1" href="<?php the_permalink() ?>">Read
													more </a>
												
												<?php
											endif;
											
											wp_link_pages( array(
												'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fertilegroundscafe' ),
												'after'  => '</div>',
											) );
											?>
										</div>
									</article>

								</div>
							</section>
						
						<?php endwhile;
						
						if ( $paged > 1 ) { ?>

							<nav id="nav-posts">
								<div class="prev"><?php next_posts_link( '&laquo; Previous Posts' ); ?></div>
								<div class="next"><?php previous_posts_link( 'Newer Posts &raquo;' ); ?></div>
							</nav>
						
						<?php } else { ?>

							<nav id="nav-posts">
								<div class="prev"><?php next_posts_link( '&laquo; Previous Posts' ); ?></div>
							</nav>
						
						<?php }
						
						wp_reset_postdata();
					
					else : ?>

						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					
					<?php endif; ?>

				</div>
				<?php
				
				get_sidebar();
				
				?>
			</div>
		</div>
	</section>

<?php
get_footer();
