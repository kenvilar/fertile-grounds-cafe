<?php
/* Banner */
?>

<section id="Banner" class="<?php echo ( ! is_home() && ! is_front_page() ) ? 'Banner-Light' : ''; ?>"
         data-image="<?php
         if ( is_single() ) {
	         echo get_field( 'banner_image' ) ? the_field( 'banner_image' ) : get_template_directory_uri() . '/assets/images/banner/home.jpg';
         } else {
	         echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/banner/home.jpg';
         }
         ?>"
         style="background-image: url(<?php
         if ( is_single() ) {
	         echo get_field( 'banner_image' ) ? the_field( 'banner_image' ) : get_template_directory_uri() . '/assets/images/banner/home.jpg';
         } else {
	         echo has_post_thumbnail() ? the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/banner/home.jpg';
         }
         ?>);">
	<div class="intro-content">

		<div class="container">
			<div class="row">
				
				<?php if ( is_front_page() ) : ?>
					<div class="col-lg-8 col-xs-12 nopadding">
						<h1 class="animated fadeInUp home-banner-title">
							<?php
							if ( get_field( 'main_page_title' ) ) {
								the_field( 'main_page_title' );
							}
							?>
						</h1>
					</div>
				<?php elseif ( is_home() ) : ?>
					<!-- For Blog Page -->
					<div class="col-lg-6 col-xs-12 nopadding">
						<h1 class="animated fadeInUp banner-title-light">
							<?php
							/* Force get the main title of an events or blog page */
							echo get_the_title( get_option( 'page_for_posts', true ) );
							?>
						</h1>
					</div>
				<?php elseif ( is_single() || is_page() ) : ?>
					<div class="col-lg-6 col-xs-12 nopadding">
						<h1 class="animated fadeInUp banner-title-light">
							<?php
							if ( get_field( 'main_page_title' ) ) {
								the_field( 'main_page_title' );
							} else {
								echo the_title();
							}
							?>
						</h1>
					</div>
				<?php elseif ( is_archive() ) : ?>
					<div class="col-lg-6 col-xs-12 nopadding">
						<h1 class="animated fadeInUp banner-title-light">
							<?php
							the_archive_title();
							?>
						</h1>
					</div>
				<?php else : ?>
					<div class="col-lg-4 col-xs-12 nopadding">
						<h1 class="animated fadeInUp banner-title-light">
							<?php
							if ( get_field( 'main_page_title' ) ) {
								the_field( 'main_page_title' );
							}
							?>
						</h1>
					</div>
				<?php endif; ?>

			</div>
		</div>
		
		<?php if ( is_front_page() ) : ?>
			<div class="col-lg-8 col-xs-12 nopadding hidden-xs" style="padding-left: 0;">
				<hr>
			</div>
		<?php else : ?>
			<div class="col-lg-5 col-xs-12 nopadding hidden-xs" style="padding-left: 0;">
				<?php
				echo is_404() ? '' : '<hr>';
				?>
			</div>
		<?php endif; ?>
		
		<?php if ( is_front_page() ) : ?>
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
