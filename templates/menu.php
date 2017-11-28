<?php
/**
 * Template Name: Menu
 */

get_header(); ?>

	<section style="padding-top: 70px;">
		<div class="container-fluid nopadding relative-md">
			<div class="col-md-6 col-xs-12 nopadding hidden-sm hidden-xs"
			     data-image="<?php echo get_template_directory_uri() . '/assets/images/menu/cafemenu1.png'; ?>"
			     style="height: 950px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/menu/cafemenu1.png'; ?>)">
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
								<?php echo get_sub_field( 'menu_title' ); ?> <br>
								<?php echo get_sub_field( 'menu_description' ); ?>
							</div>
							<?php
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="gradient-bg-image"
	         data-image="<?php echo get_template_directory_uri() . '/assets/images/menu/new-teas.jpg'; ?>"
	         style="background-image: linear-gradient(rgba(17, 17, 17, 0.9), rgba(17, 17, 17, 0.9)), url(<?php echo get_template_directory_uri() . '/assets/images/menu/new-teas.jpg'; ?>)">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-offset-3 col-md-6 nopadding">
					<div class="gradient-bg-image-box">
						<?php
						if ( have_rows( 'sections_background_image' ) ) {
							?>
							<h2 class="text-white text-uppercase text-bold text-center">
								<?php echo get_field( 'sections_background_image' )[0]['title']; ?>
							</h2>
							<div class="gradient-bg-image-box-border"></div>
							<h5 class="text-white text-center"><?php echo get_field( 'sections_background_image' )[0]['description']; ?></h5>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="background-white cafe-menu-wrapper nopadding">
						<div class="cafe-menu-item text-black">
							<strong>Peppermint</strong>
						</div>
						<div class="cafe-menu-item text-black">
							<strong>Lemongrass</strong>
						</div>
						<div class="cafe-menu-item text-black">
							<strong>Ginger</strong>
						</div>
						<div class="cafe-menu-item text-black">
							<strong>Chamomile</strong>
						</div>
						<div class="cafe-menu-item text-black">
							<strong>Remember Rosemary</strong>
							Chinese green tea, lemon myrtle, orange peel, rosemary
						</div>
						<div class="cafe-menu-item text-black">
							<strong>Passion and Envy</strong>
							Blue mallow flowers, Chinese green tea, mango flavor, marigold petals, papaya flavor,
							pineapple flavor
						</div>
						<div class="cafe-menu-item text-black">
							<strong>Secret Garden Tisane</strong>
							Chamomile, lavender, peppermint, rooibos, rose petals
						</div>
						<div class="cafe-menu-item text-black">
							<strong>Red Velvet *contains traces of sugar & dairy</strong>
							Apple, cacao beans, chocolate bits, hibiscus, raspberry, rooibos, rose hips, vanilla, white
							chocolate bits
						</div>
						<div class="cafe-menu-item text-black">
							<strong>Once Upon A Tea *contains traces of sugar & dairy</strong>
							Apple, cacao beans, chocolate bits, peppermint, rooibos, vanilla,
							white chocolate bits
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<img class="img-responsive center-block"
					     src="<?php echo get_template_directory_uri() . '/assets/images/menu/menu1.png'; ?>"
					     alt="image">
				</div>
			</div>
		</div>
	</section>

	<section class="gradient-bg-image"
	         data-image="<?php echo get_template_directory_uri() . '/assets/images/menu/fertile-grounds-cafe.jpg'; ?>"
	         style="background-image: linear-gradient(rgba(17, 17, 17, 0.9), rgba(17, 17, 17, 0.9)), url(<?php echo get_template_directory_uri() . '/assets/images/menu/fertile-grounds-cafe.jpg'; ?>)">
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
