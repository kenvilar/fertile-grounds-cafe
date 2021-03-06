<?php
/* Front-page */
get_header();
?>

	<section id="home-about">
		<div class="container">
			<div class="row">
				<div class="nopadding col-lg-6">
					<img class="img-responsive"
					     src="<?php echo get_field( 'about_image' ) ? get_field( 'about_image' ) : get_template_directory_uri() . '/assets/images/home/mug.png'; ?>"
					     alt="home-about-image">
				</div>
				<div class="col-lg-6">
					<br>
					<h2 class="text-brown text-uppercase">About</h2>
					<div class="h6">
						<?php
						if ( get_field( 'about_content' ) ) {
							the_field( 'about_content' );
						}
						?>
						<a href="/about" class="btn btn-version1">Learn more &nbsp;<i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="home-venue">
		<div class="container-fluid">
			<div class="col-lg-6 col-md-6 ken-col-md-12 col-sm-12 equal-height"
			     style="background: #937a6b;padding-top: 50px;">
				<div class="col-lg-offset-3 col-lg-9 col-md-offset-1 col-md-11 nopadding">
					<h2 class="text-uppercase text-white">Venue</h2>
					<div class="h6 text-white text-justify" style="width: 97%;">
						<?php
						if ( get_field( 'venue_content' ) ) {
							the_field( 'venue_content' );
						}
						?>

						<br>

						<a href="/venue" class="btn btn-version2">Check Rental Fees &nbsp;<i
									class="fa fa-angle-right"></i></a>

						<br><br>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 ken-col-md-12 col-sm-12 equal-height home-gallery-item-wrapper">
				<?php if ( get_field( 'gallery_items' ) ) : ?>
					
					<?php if ( get_field( 'gallery_items' )[0]['url'] ) : ?>
						<div class="col-xs-12 pad-y-5 hidden-lg"></div>
						<div class="col-xs-12">
							<div role="link" tabindex="0" href="<?php echo get_field( 'gallery_items' )[0]['url']; ?>"
							     data-toggle="lightbox" data-gallery="home-gallery" class="home-gallery-item"
							     style="height: 35vh;background-image: url(<?php echo get_field( 'gallery_items' )[0]['url']; ?>)"></div>
						</div>
					<?php endif; ?>
					
					<?php if ( get_field( 'gallery_items' )[1]['url'] ) : ?>
						<div class="col-xs-12 pad-y-5 hidden-xs hidden-sm"></div>
						<div class="col-xs-12 <?php echo count( get_field( 'gallery_items' ) ) === 2 ? 'col-sm-12 col-md-12' : 'col-sm-6 col-md-6'; ?>">
							<div role="link" tabindex="0" href="<?php echo get_field( 'gallery_items' )[1]['url']; ?>"
							     data-toggle="lightbox" data-gallery="home-gallery" class="home-gallery-item"
							     style="height: 35vh;background-image: url(<?php echo get_field( 'gallery_items' )[1]['url']; ?>)"></div>
						</div>
					<?php endif; ?>
					
					<?php if ( get_field( 'gallery_items' )[2]['url'] ) : ?>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div role="link" tabindex="0" href="<?php echo get_field( 'gallery_items' )[2]['url']; ?>"
							     data-toggle="lightbox" data-gallery="home-gallery" class="home-gallery-item"
							     style="height: 35vh;background-image: url(<?php echo get_field( 'gallery_items' )[2]['url']; ?>)"></div>
						</div>
					<?php endif; ?>
					
					<?php if ( get_field( 'gallery_items' )[3]['url'] ) : ?>
						<div class="col-xs-12 pad-y-5 hidden-xs hidden-sm"></div>
						<div class="col-xs-12 <?php echo count( get_field( 'gallery_items' ) ) === 4 ? 'col-sm-12 col-md-12' : 'col-sm-6 col-md-6'; ?>">
							<div role="link" tabindex="0" href="<?php echo get_field( 'gallery_items' )[3]['url']; ?>"
							     data-toggle="lightbox" data-gallery="home-gallery" class="home-gallery-item"
							     style="height: 35vh;background-image: url(<?php echo get_field( 'gallery_items' )[3]['url']; ?>)"></div>
						</div>
					<?php endif; ?>
					
					<?php if ( get_field( 'gallery_items' )[4]['url'] ) : ?>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div role="link" tabindex="0" href="<?php echo get_field( 'gallery_items' )[4]['url']; ?>"
							     data-toggle="lightbox" data-gallery="home-gallery" class="home-gallery-item"
							     style="height: 35vh;background-image: url(<?php echo get_field( 'gallery_items' )[4]['url']; ?>)"></div>
						</div>
					<?php endif; ?>
				
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php
get_footer();
