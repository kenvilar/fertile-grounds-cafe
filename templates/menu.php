<?php
/**
 * Template Name: Menu
 */

get_header(); ?>

	<section style="padding-top: 70px;">
		<div class="container-fluid container-fluid-xs">
			<div class="col-md-6 col-xs-12 nopadding hidden-sm hidden-xs"
			     data-image="<?php echo get_template_directory_uri() . '/assets/images/menu/cafemenu1.png'; ?>"
			     style="height: 950px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/menu/cafemenu1.png'; ?>)">
			</div>
			<div class="col-md-6 col-xs-12 nopadding">
				<div style="margin-bottom: 50px;"></div>
				<div class="cafe-menu-wrapper">
					<h2 class="text-uppercase text-white text-bold">
						Cafe Menu
					</h2>
					<br>
					<div class="cafe-menu-item text-white">
						<strong>Breakfast sandwich:</strong> <br>
						Scrambled egg patty "buns" with sausage or bacon and Cheddar cheese
					</div>
					<div class="cafe-menu-item text-white">
						<strong>Single serve yogurt (Chobani)</strong>
					</div>
					<div class="cafe-menu-item text-white">
						<strong>Single serve oatmeal cups</strong>
					</div>
					<div class="cafe-menu-item text-white">
						<strong>Quiche</strong>
						(Comes in a pre-made mix that we would then use convection oven to bake for the day)
					</div>
					<div class="cafe-menu-item text-white">
						<strong>Meat/Cheese Boards:</strong>
						Choose from rotated local and international cheeses as well as proscuitto, genoa salami &
						sopressata salami, and almonds
					</div>
					<div class="cafe-menu-item text-white">
						<strong>Small:</strong>
						1 cheese, 1 meat, almonds
					</div>
					<div class="cafe-menu-item text-white">
						<strong>Large:</strong>
						2 cheese, 2 meats, almonds
					</div>
					<div class="cafe-menu-item text-white">
						<strong>Olives</strong>
					</div>
					<div class="cafe-menu-item text-white">
						<strong>Hard boiled eggs</strong>
					</div>
					<div class="cafe-menu-item text-white">
						<strong>Gluten free quinoa salad (cold, pre-made)</strong>
					</div>
					<div class="cafe-menu-item text-white">
						<strong>Soups:</strong>
						Can rotate between 2-3 options, made daily
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="gradient-bg-image"
	         data-image="<?php echo get_template_directory_uri() . '/assets/images/menu/new-teas.jpg'; ?>"
	         style="background-image: linear-gradient(rgba(17, 17, 17, 0.9), rgba(17, 17, 17, 0.9)), url(<?php echo get_template_directory_uri() . '/assets/images/menu/new-teas.jpg'; ?>)">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-offset-3 col-md-6">
					<div class="gradient-bg-image-box">
						<h2 class="text-white text-uppercase text-bold text-center">
							New Teas From Serendipitea
						</h2>
						<div class="gradient-bg-image-box-border"></div>
						<h5 class="text-white text-center">Sm: $1.25, Med: $1.75, Lrg: $2.50</h5>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="padding-top: 60px;padding-bottom: 65px;">
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

<?php
get_footer();
