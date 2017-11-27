<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link    https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fertile_Grounds_Cafe
 */

get_header(); ?>

	<section class="error-404 not-found">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">

					<header class="page-header">
						<h1 class="page-title text-center text-brown"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fertilegroundscafe' ); ?></h1>
					</header>

					<div class="page-content">
						<p class="text-center"><?php esc_html_e( 'It looks like nothing was found at this location. Please check the URL again.', 'fertilegroundscafe' ); ?></p>
						
						<?php
						/*get_search_form();*/
						?>
					</div>

				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
