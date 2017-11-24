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
						<h3 class="widgettitle">About</h3>
						<div class="textwidget">
							<p>Boutique East Ave cafe + wellness shop featuring espresso drinks, teas, lite fare,
								essential oils, books, candles and more in a sophisticated atmosphere.</p>
							<address>
								2244 East Avenue <br>
								Rochester, New York <br>
								<span class="text-brown">Call</span> <a class="link-no-hover"
								                                        href="tel:+1 585-244-1280">+1 585-244-1280</a>
							</address>
							<ul class="footer-social">
								<li><a href="https://www.facebook.com/fertilegroundscaferochester/"><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div id="text-2" class="widget widget_text">
						<h3 class="widgettitle">Gallery</h3>
						<div class="textwidget">
							<?php
							if ( function_exists( 'envira_gallery' ) ) {
								envira_gallery( 'footer-widget-gallery', 'slug', array( 'limit' => 9, 'column' => 3 ) );
							}
							?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 nopadding opening-hours">
					<div id="text-2" class="widget widget_text">
						<h3 class="widgettitle">Opening Hours</h3>
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
					<h6>© Copyright 2017. All rights reserved.</h6>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
