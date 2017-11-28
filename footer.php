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
									<li>
										Monday <br>
										<span class="text-brown">7:00am - 8:00pm</span>
									</li>
									<li>
										Tuesday <br>
										<span class="text-brown">7:00am - 6:00pm</span>
									</li>
									<li>
										Wednesday <br>
										<span class="text-brown">7:00am - 8:00pm</span>
									</li>
									<li>
										Thursday <br>
										<span class="text-brown">7:00am - 8:00pm</span>
									</li>
								</ul>
							</div>
							<div class="col-lg-6 nopadding">
								<ul>
									<li>
										Friday <br>
										<span class="text-brown">7:00am - 4:00pm</span>
									</li>
									<li>
										Saturday <br>
										<span class="text-brown">9:00am - 12:30pm</span>
									</li>
									<li>
										Sunday <br>
										<span class="text-brown">10:00am - 2:00pm</span>
									</li>
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
