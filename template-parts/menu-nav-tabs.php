<?php
/* Menu Page Template - Nav Tabs */

/*
 * Please move the active class in the nav tab if you want to customize what content should display first.
 * Only one active keyword should be put in.
 * */
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center-block text-center nopadding">
				<ul class="nav nav-pills nav-justified" role="tablist" id="coffee-tabs">
					<li><a href="#menu1" data-toggle="tab" aria-expanded="true">
							Coffee and Espresso</a>
					</li>
					<li class=""><a href="#menu2" data-toggle="tab" aria-expanded="false">
							Specialty Drinks</a>
					</li>
					<li class=""><a href="#menu3" data-toggle="tab" aria-expanded="false">
							Teas and Tisane</a>
					</li>
					<li class="active"><a href="#menu4" data-toggle="tab" aria-expanded="false">
							Smoothies</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container-fluid nopadding">
		<div class="tab-content">

			<!--Tab Content-->
			<div class="tab-pane" id="menu1">
				<div class="col-xs-12 col-md-4 nopadding">
					<div data-image=""
					     style="height: 475px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/menu/fertile-grounds-cafe.jpg'; ?>)">
					</div>
				</div>
				<div class="col-xs-12 col-md-6 panel-body">
					<span class="h2 text-brown text-bold text-uppercase">Coffee and Espresso</span>
					<div class="clear"></div>
					<span class="text-black h6 text-medium-italic">Made with frozen fruit, yogurt / milk, and or fruit juice.</span>
					<table class="table table-responsive">
						<thead>

						<tr>
							<th></th>
							<th class="text-brown">Sm</th>
							<th class="text-brown">Lrg</th>
						</tr>

						</thead>
						<tbody>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Caribbean Coolada</strong></span>
								<div class="clearfix"></div>
								Organic vanilla greek yogurt, strawberry, pineapple, banana, mangos
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Peachy Breakfast</strong></span>
								<div class="clearfix"></div>
								Organic vanilla greek yogurt, apple juice, banana, peaches, blackberry
							</td>
							<td><strong>4.25</strong></td>
							<td><strong>6.50</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Yoga Blend</strong> <i>(Dairy Free)</i></span>
								<div class="clearfix"></div>
								Strawberries, mangos, guava nectar, banana
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Berry Blast</strong> <i>(Dairy Free)</i></span>
								<div class="clearfix"></div>
								Cranberry juice, strawberries, blueberries, raspberries, blackberries
							</td>
							<td><strong>4.25</strong></td>
							<td><strong>6.50</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Chocolate Craver</strong></span>
								<div class="clearfix"></div>
								Organic peanut butter, banana, almonds, Ghirardelli chocolate, vanilla soy
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						</tbody>
					</table>
				</div>
			</div>

			<!--Tab Content-->
			<div class="tab-pane" id="menu2">
				<div class="col-xs-12 col-md-4 nopadding">
					<div data-image=""
					     style="height: 475px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/menu/menu1.png'; ?>)">
					</div>
				</div>
				<div class="col-xs-12 col-md-6 panel-body">
					<span class="h2 text-brown text-bold text-uppercase">Specialty Drinks</span>
					<div class="clear"></div>
					<span class="text-black h6 text-medium-italic">Made with frozen fruit, yogurt / milk, and or fruit juice.</span>
					<table class="table table-responsive">
						<thead>

						<tr>
							<th></th>
							<th class="text-brown">Sm</th>
							<th class="text-brown">Lrg</th>
						</tr>

						</thead>
						<tbody>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Caribbean Coolada</strong></span>
								<div class="clearfix"></div>
								Organic vanilla greek yogurt, strawberry, pineapple, banana, mangos
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Peachy Breakfast</strong></span>
								<div class="clearfix"></div>
								Organic vanilla greek yogurt, apple juice, banana, peaches, blackberry
							</td>
							<td><strong>4.25</strong></td>
							<td><strong>6.50</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Yoga Blend</strong> <i>(Dairy Free)</i></span>
								<div class="clearfix"></div>
								Strawberries, mangos, guava nectar, banana
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Berry Blast</strong> <i>(Dairy Free)</i></span>
								<div class="clearfix"></div>
								Cranberry juice, strawberries, blueberries, raspberries, blackberries
							</td>
							<td><strong>4.25</strong></td>
							<td><strong>6.50</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Chocolate Craver</strong></span>
								<div class="clearfix"></div>
								Organic peanut butter, banana, almonds, Ghirardelli chocolate, vanilla soy
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						</tbody>
					</table>
				</div>
			</div>

			<!--Tab Content-->
			<div class="tab-pane" id="menu3">
				<div class="col-xs-12 col-md-4 nopadding">
					<div data-image=""
					     style="height: 475px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/menu/new-teas.jpg'; ?>)">
					</div>
				</div>
				<div class="col-xs-12 col-md-6 panel-body">
					<span class="h2 text-brown text-bold text-uppercase">Teas and Tisane</span>
					<div class="clear"></div>
					<span class="text-black h6 text-medium-italic">Made with frozen fruit, yogurt / milk, and or fruit juice.</span>
					<table class="table table-responsive">
						<thead>

						<tr>
							<th></th>
							<th class="text-brown">Sm</th>
							<th class="text-brown">Lrg</th>
						</tr>

						</thead>
						<tbody>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Caribbean Coolada</strong></span>
								<div class="clearfix"></div>
								Organic vanilla greek yogurt, strawberry, pineapple, banana, mangos
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Peachy Breakfast</strong></span>
								<div class="clearfix"></div>
								Organic vanilla greek yogurt, apple juice, banana, peaches, blackberry
							</td>
							<td><strong>4.25</strong></td>
							<td><strong>6.50</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Yoga Blend</strong> <i>(Dairy Free)</i></span>
								<div class="clearfix"></div>
								Strawberries, mangos, guava nectar, banana
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Berry Blast</strong> <i>(Dairy Free)</i></span>
								<div class="clearfix"></div>
								Cranberry juice, strawberries, blueberries, raspberries, blackberries
							</td>
							<td><strong>4.25</strong></td>
							<td><strong>6.50</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Chocolate Craver</strong></span>
								<div class="clearfix"></div>
								Organic peanut butter, banana, almonds, Ghirardelli chocolate, vanilla soy
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						</tbody>
					</table>
				</div>
			</div>

			<!--Tab Content-->
			<div class="tab-pane active" id="menu4">
				<div class="col-xs-12 col-md-4 nopadding">
					<div data-image=""
					     style="height: 475px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/menu/smoothies.png'; ?>)">
					</div>
				</div>
				<div class="col-xs-12 col-md-6 panel-body">
					<span class="h2 text-brown text-bold text-uppercase">Smoothies</span>
					<div class="clear"></div>
					<span class="text-black h6 text-medium-italic">Made with frozen fruit, yogurt / milk, and or fruit juice.</span>
					<table class="table table-responsive">
						<thead>

						<tr>
							<th></th>
							<th class="text-brown">Sm</th>
							<th class="text-brown">Lrg</th>
						</tr>

						</thead>
						<tbody>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Caribbean Coolada</strong></span>
								<div class="clearfix"></div>
								Organic vanilla greek yogurt, strawberry, pineapple, banana, mangos
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Peachy Breakfast</strong></span>
								<div class="clearfix"></div>
								Organic vanilla greek yogurt, apple juice, banana, peaches, blackberry
							</td>
							<td><strong>4.25</strong></td>
							<td><strong>6.50</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Yoga Blend</strong> <i>(Dairy Free)</i></span>
								<div class="clearfix"></div>
								Strawberries, mangos, guava nectar, banana
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Berry Blast</strong> <i>(Dairy Free)</i></span>
								<div class="clearfix"></div>
								Cranberry juice, strawberries, blueberries, raspberries, blackberries
							</td>
							<td><strong>4.25</strong></td>
							<td><strong>6.50</strong></td>
						</tr>

						<!--Menu Item-->
						<tr>
							<td>
								<span class="table-title"><strong>Chocolate Craver</strong></span>
								<div class="clearfix"></div>
								Organic peanut butter, banana, almonds, Ghirardelli chocolate, vanilla soy
							</td>
							<td><strong>3.50</strong></td>
							<td><strong>5.75</strong></td>
						</tr>

						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</section>
