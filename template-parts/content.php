<?php
/**
 * Template part for displaying posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fertile_Grounds_Cafe
 */

?>

<section>
	<div class="row">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				
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
					<a class="btn btn-version1" href="<?php the_permalink() ?>">Read more </a>
					
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
