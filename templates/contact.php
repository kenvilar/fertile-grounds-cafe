<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>

	<section style="padding-top: 80px;padding-bottom: 90px;">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-md-6 nopadding">
					<div class="map-and-address-wrapper">
						<!--map area-->
						<div class="map"
						     data-image="<?php echo get_template_directory_uri() . '/assets/images/contact/map.png'; ?>"
						     style="height: 615px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/contact/map.png'; ?>)">
							<?php
							if ( get_field( 'map_url' ) ) {
								?>
								<iframe src="<?php the_field( 'map_url' ); ?>" width="100%" height="100%"
								        frameborder="0" style="border:0" allowfullscreen></iframe>
								<?php
							}
							?>
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
												<?php
												if ( get_field( 'address' ) ) {
													the_field( 'address' );
												}
												?>
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
														<a class="link-no-hover"
														   href="tel:<?php if ( get_field( 'phone' ) ) {
															   the_field( 'phone' );
														   } ?>">
															<?php if ( get_field( 'phone' ) ) {
																the_field( 'phone' );
															} ?>
														</a>
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
														   href="mailto:<?php if ( get_field( 'email' ) ) {
															   the_field( 'email' );
														   } ?>">
															<?php if ( get_field( 'email' ) ) {
																the_field( 'email' );
															} ?>
														</a>
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
						
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();
								the_content();
							endwhile;
							wp_reset_postdata();
						endif;
						?>
						<div class="contact-form-box">
							<?php
							if ( get_field( 'contact_form_shortcode' ) ) {
								echo do_shortcode( get_field( 'contact_form_shortcode' ) );
							} else {
								echo '<span style="color:red;">Please put your contact form shortcode</span>';
							}
							?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

<?php
get_footer();
