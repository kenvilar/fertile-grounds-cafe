<?php
/* Banner */
?>

<section id="Banner" data-image="<?php echo get_template_directory_uri() . '/assets/images/banner/home.png'; ?>"
         style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/banner/home.png'; ?>);">
	<div class="intro-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 col-sm-8 col-xs-12 nopadding">
					<?php if ( is_home() || is_front_page() ) : ?>
						<h1 class="animated fadeInUp home-banner-title">
							<?php
							if ( get_field( 'main_page_title' ) ) {
								the_field( 'main_page_title' );
							}
							?>
						</h1>
					<?php else : ?>
						<h1 class="animated fadeInUp banner-title-light">
							<?php
							if ( get_field( 'main_page_title' ) ) {
								the_field( 'main_page_title' );
							}
							?>
						</h1>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 nopadding" style="padding-left: 0;">
			<hr>
		</div>
		<?php if ( is_home() || is_front_page() ) : ?>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 nopadding">
						<h4>Coffee House <span class="text-brown">•</span> Wellness Shop <span
									class="text-brown">•</span>
							Events <span class="text-brown">•</span> Rental Space
						</h4>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
