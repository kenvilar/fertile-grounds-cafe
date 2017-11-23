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
							<form action="">
								<div class="form-row">
									<div class="form-group required">
										<label for="your-name" class="control-label h6">Your name</label>
										<input id="your-name" name="your-name" class="form-control your-name" size="4"
										       type="text">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group required">
										<label for="your-email" class="control-label">Your email</label>
										<input id="your-email" name="your-email" class="form-control your-email"
										       size="20" type="email">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group required">
										<label for="my-message" class="control-label">Message</label>
										<textarea id="my-message" name="my-message" class="form-control your-message"
										          cols="30" rows="7"></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group">
										<button class="h4 background-black btn btn-contact" type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

<?php
get_footer();