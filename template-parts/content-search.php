<?php
/**
 * Template part for displaying results in search pages
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fertile_Grounds_Cafe
 */

?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						
						<?php if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php fertilegroundscafe_posted_on(); ?>
							</div>
						<?php endif; ?>
					</header>

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div>
				</article>

			</div>
		</div>
	</div>
</section>
