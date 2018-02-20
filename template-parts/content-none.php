<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fertile_Grounds_Cafe
 */

?>

<section class="no-results not-found">
	<div class="row">
		
		<?php if ( ! is_front_page() && is_home() ) : ?>
			<div class="col-xs-12">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Coming Soon!', 'fertilegroundscafe' ); ?></h1>
				</header>
			</div>
		<?php else : ?>
			<div class="col-xs-12">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'fertilegroundscafe' ); ?></h1>
				</header>
			</div>
		<?php endif; ?>

		<div class="col-xs-12">
			<div class="page-content">
				<?php
				if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<p><?php
						printf(
							wp_kses(
							/* translators: 1: link to WP admin new post page. */
								__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'fertilegroundscafe' ),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							),
							esc_url( admin_url( 'post-new.php' ) )
						);
						?></p>
				
				<?php elseif ( is_search() ) : ?>

					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms.', 'fertilegroundscafe' ); ?></p>
					<?php
				/*get_search_form();*/
				
				else : ?>

					<p>
						<?php
						/*esc_html_e(
							'It seems we can&rsquo;t find what you&rsquo;re looking for.',
							'fertilegroundscafe'
						);*/
						?>
					</p>
					<?php
					/*get_search_form();*/
				
				endif; ?>
			</div>
		</div>

	</div>
</section>
