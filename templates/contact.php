<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>

	<section>
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-md-6 nopadding">
					<div class="map-and-address-wrapper">
						<!--map area-->
						<div class="map"
						     data-image="<?php echo get_template_directory_uri() . '/assets/images/contact/map.png'; ?>"
						     style="height: 615px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/contact/map.png'; ?>)">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2911.244095302665!2d-77.54700468510575!3d43.14140329339266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d6ca8e9b975b89%3A0x4a3512a561ffcf50!2s2244+East+Ave%2C+Rochester%2C+NY+14610%2C+USA!5e0!3m2!1sen!2sph!4v1511547762410"
							        width="100%" height="100%" frameborder="0" style="border:0"
							        allowfullscreen></iframe>
						</div>
						<!--black background-->
						<div class="address background-black text-white">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 nopadding">
										<!--1st column-->
										<div class="col-xs-12 col-sm-1 nopadding center-block text-center">
											<i class="fa fa-map-marker fa-center"></i>
										</div>
										<div class="col-xs-12 col-sm-4 nopadding">
											<span class="h6">
												2244 East Avenue <br>
												Rochester, New York
											</span>
										</div>

										<!--2nd column-->
										<div class="col-xs-12 col-sm-7">
											<div class="row">
												<div class="col-xs-12 col-sm-1 center-block text-center">
													<i class="fa fa-phone"></i>
												</div>
												<div class="col-xs-12 col-sm-10">
													<span class="h6">
														<a class="link-no-hover" href="tel:+1 585-244-1280">+1 585-244-1280</a>
													</span>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-1 center-block text-center">
													<i class="fa fa-envelope"></i>
												</div>
												<div class="col-xs-12 col-sm-10">
													<span class="h6">
														<a class="link-no-hover"
														   href="mailto:info@fertilegroundscafe.com">info@fertilegroundscafe.com</a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-6">
					<div class="contact-form-wrapper">
						<h2 class="text-uppercase text-brown no-margin">Let's Talk</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pretium quam ornare
							hendrerit tristique. Duis quis felis ac neque accumsan volutpat. Curabitur gravida tempus
							lacinia. Donec vel massa elit. Proin ac felis erat. Donec quis turpis sit amet lacus posuere
							mattis in at risus. Pellentesque at malesuada tortor.</p>
						<div class="contact-form-box">
							<?php echo do_shortcode( '[contact-form-7 id="103" title="Contact Form"]' ); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

<?php
get_footer();
