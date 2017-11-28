<?php
/**
 * Template Name: Menu
 */

get_header(); ?>

	<section style="padding-top: 70px;">
		<div class="container-fluid nopadding relative-md">
			<div class="col-md-6 col-xs-12 nopadding hidden-sm hidden-xs"
			     data-image="<?php
			     echo get_field( 'cafe_menu_image' ) ? the_field( 'cafe_menu_image' ) : get_template_directory_uri() . '/assets/images/menu/cafemenu1.png';;
			     ?>"
			     style="height: 950px;background-image: url(<?php
			     echo get_field( 'cafe_menu_image' ) ? the_field( 'cafe_menu_image' ) : get_template_directory_uri() . '/assets/images/menu/cafemenu1.png';;
			     ?>)">
			</div>
			<div class="col-md-7 col-xs-12 nopadding absolute-md" style="right: 0;">
				<div style="margin-bottom: 50px;"></div>
				<div class="cafe-menu-wrapper">
					<h2 class="text-uppercase text-white text-bold">
						Cafe Menu
					</h2>
					<br>
					<?php
					if ( have_rows( 'cafe_menu_list' ) ) {
						while ( have_rows( 'cafe_menu_list' ) ) {
							the_row(); ?>
							<div class="cafe-menu-item text-white">
								<?php the_sub_field( 'menu_title' ); ?> <br>
								<?php the_sub_field( 'menu_description' ); ?>
							</div>
							<?php
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>

<?php
if ( have_rows( 'sections_background_image' ) ) { ?>
	<section class="gradient-bg-image"
	         data-image="<?php
	         echo get_field( 'sections_background_image' )[0]['image'] ? get_field( 'sections_background_image' )[0]['image'] : get_template_directory_uri() . '/assets/images/menu/new-teas.jpg';
	         ?>"
	         style="background-image: linear-gradient(rgba(17, 17, 17, 0.9), rgba(17, 17, 17, 0.9)), url(<?php
	         echo get_field( 'sections_background_image' )[0]['image'] ? get_field( 'sections_background_image' )[0]['image'] : get_template_directory_uri() . '/assets/images/menu/new-teas.jpg';
	         ?>)">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-offset-3 col-md-6 nopadding">
					<div class="gradient-bg-image-box">
						<h2 class="text-white text-uppercase text-bold text-center">
							<?php echo get_field( 'sections_background_image' )[0]['title']; ?>
						</h2>
						<div class="gradient-bg-image-box-border"></div>
						<h5 class="text-white text-center"><?php echo get_field( 'sections_background_image' )[0]['description']; ?></h5>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="background-white cafe-menu-wrapper nopadding">
						<?php
						if ( have_rows( 'list_of_teas' ) ) {
							while ( have_rows( 'list_of_teas' ) ) {
								the_row(); ?>
								<div class="cafe-menu-item text-black">
									<?php the_sub_field( 'title' ); ?> <br>
									<?php the_sub_field( 'description' ); ?>
								</div>
								<?php
							}
						}
						?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<img class="img-responsive center-block"
					     src="<?php
					     echo get_field( 'tea_image' ) ? the_field( 'tea_image' ) : get_template_directory_uri() . '/assets/images/menu/menu1.png';
					     ?>"
					     alt="image">
				</div>
			</div>
		</div>
	</section>

	<section class="gradient-bg-image"
	         data-image="<?php
	         echo get_field( 'sections_background_image' )[1]['image'] ? get_field( 'sections_background_image' )[1]['image'] : get_template_directory_uri() . '/assets/images/menu/fertile-grounds-cafe.jpg';
	         ?>"
	         style="background-image: linear-gradient(rgba(17, 17, 17, 0.9), rgba(17, 17, 17, 0.9)), url(<?php
	         echo get_field( 'sections_background_image' )[1]['image'] ? get_field( 'sections_background_image' )[1]['image'] : get_template_directory_uri() . '/assets/images/menu/fertile-grounds-cafe.jpg';
	         ?>)">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-offset-3 col-md-6 nopadding">
					<div class="gradient-bg-image-box">
						<?php
						if ( have_rows( 'sections_background_image' ) ) {
							?>
							<h2 class="text-white text-uppercase text-bold text-center">
								<?php echo get_field( 'sections_background_image' )[1]['title']; ?>
							</h2>
							<div class="gradient-bg-image-box-border"></div>
							<h5 class="text-white text-center"><?php echo get_field( 'sections_background_image' )[1]['description']; ?></h5>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php require get_template_directory() . '/template-parts/menu-nav-tabs.php'; ?>

<?php
get_footer();
