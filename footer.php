<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fertile_Grounds_Cafe
 */

?>

</div><!-- #wrapper -->

<footer class="parallax-footer">
	<div class="footer-widgets">
		<div class="container">
			<div class="row">

				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 nopadding">
					<div id="text-1" class="widget widget_text">
						<h3 class="widgettitle">
							<?php
							if ( get_field( 'first_widget_title', 'option' ) ) {
								the_field( 'first_widget_title', 'option' );
							}
							?>
						</h3>
						<div class="textwidget">
							<?php
							if ( get_field( 'first_widget_content', 'option' ) ) {
								the_field( 'first_widget_content', 'option' );
							}
							?>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div id="text-2" class="widget widget_text">
						<h3 class="widgettitle">
							<?php
							if ( get_field( 'second_widget_title', 'option' ) ) {
								the_field( 'second_widget_title', 'option' );
							}
							?>
						</h3>
						<div class="textwidget">
							<?php
							if ( function_exists( 'envira_gallery' ) ) {
								envira_gallery( get_field( 'second_widget_gallery', 'option' ), 'slug', array(
									'limit'  => 9,
									'column' => 3,
								) );
							}
							?>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding opening-hours">
					<div id="text-2" class="widget widget_text">
						<h3 class="widgettitle">
							<?php
							if ( get_field( 'third_widget_title', 'option' ) ) {
								the_field( 'third_widget_title', 'option' );
							}
							?>
						</h3>
						<div class="textwidget">
							<div class="col-lg-6 nopadding">
								<ul>
									<?php
									if ( have_rows( 'opening_hours', 'option' ) ) :
										$i = 0;
										while ( $i !== 4 && have_rows( 'opening_hours', 'option' ) ) : the_row();
											?>
											<li>
												<?php the_sub_field( 'day', 'option' ) ?> <br>
												<span class="text-brown"><?php the_sub_field( 'time', 'option' ) ?></span>
											</li>
											<?php
											$i++;
										endwhile;
									endif;
									?>
								</ul>
							</div>
							<div class="col-lg-6 nopadding">
								<ul>
									<?php
									if ( have_rows( 'opening_hours', 'option' ) ) :
										$i = 0;
										while ( $i !== 4 && have_rows( 'opening_hours', 'option' ) ) : the_row();
											?>
											<li>
												<?php the_sub_field( 'day', 'option' ) ?> <br>
												<span class="text-brown"><?php the_sub_field( 'time', 'option' ) ?></span>
											</li>
											<?php
											$i++;
										endwhile;
									endif;
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
					<h6>
						<?php
						if ( get_field( 'copyright', 'option' ) ) {
							the_field( 'copyright', 'option' );
						}
						?>
					</h6>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
