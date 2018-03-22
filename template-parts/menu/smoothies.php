<?php

?>

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
		
		<?php
		$args = array(
			'post_type'      => array( 'smoothie' ),
			'post_status'    => array( 'publish' ),
			'posts_per_page' => - 1,
			'order'          => 'DESC',
		);
		
		$drinkQuery = new WP_Query( $args );
		
		if ( $drinkQuery->have_posts() ) {
			while ( $drinkQuery->have_posts() ) {
				$drinkQuery->the_post();
				?>

				<!--Menu Item-->
				<tr>
					<td>
						<span class="table-title"><?php the_title( '<strong>', '</strong>' ); ?></span>
						<div class="clearfix"></div>
						<?php echo get_the_content(); ?>
					</td>
					<td><strong><?php echo get_post_meta( $post->ID, 'smoothie-small', true ); ?></strong></td>
					<td><strong><?php echo get_post_meta( $post->ID, 'smoothie-large', true ); ?></strong></td>
				</tr>
				
				<?php
			}
		} else {
			?>
			<tr>
				<td colspan="3">No posts found.</td>
			</tr>
			
			<?php
		}
		wp_reset_postdata();
		?>

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Caribbean Coolada</strong></span>
				<div class="clearfix"></div>
				Organic vanilla greek yogurt, strawberry, pineapple, banana, mangos
			</td>
			<td><strong>3.50</strong></td>
			<td><strong>5.75</strong></td>
		</tr>-->

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Peachy Breakfast</strong></span>
				<div class="clearfix"></div>
				Organic vanilla greek yogurt, apple juice, banana, peaches, blackberry
			</td>
			<td><strong>4.25</strong></td>
			<td><strong>6.50</strong></td>
		</tr>-->

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Yoga Blend</strong> <i>(Dairy Free)</i></span>
				<div class="clearfix"></div>
				Strawberries, mangos, guava nectar, banana
			</td>
			<td><strong>3.50</strong></td>
			<td><strong>5.75</strong></td>
		</tr>-->

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Berry Blast</strong> <i>(Dairy Free)</i></span>
				<div class="clearfix"></div>
				Cranberry juice, strawberries, blueberries, raspberries, blackberries
			</td>
			<td><strong>4.25</strong></td>
			<td><strong>6.50</strong></td>
		</tr>-->

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Chocolate Craver</strong></span>
				<div class="clearfix"></div>
				Organic peanut butter, banana, almonds, Ghirardelli chocolate, almond milk
			</td>
			<td><strong>3.50</strong></td>
			<td><strong>5.75</strong></td>
		</tr>-->

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Green Power House</strong></span>
				<div class="clearfix"></div>
				Spinach, avocado, mango, pineapple, and guava nectar
			</td>
			<td><strong>3.50</strong></td>
			<td><strong>5.75</strong></td>
		</tr>-->

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Raspberry Truffle</strong></span>
				<div class="clearfix"></div>
				Chocolate, raspberries, strawberries, avocado, almond milk
			</td>
			<td><strong>3.50</strong></td>
			<td><strong>5.75</strong></td>
		</tr>-->

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Island Breeze</strong></span>
				<div class="clearfix"></div>
				Mangos, bananas, pineapple, avocado, guava nectar
			</td>
			<td><strong>3.50</strong></td>
			<td><strong>5.75</strong></td>
		</tr>-->

		</tbody>
	</table>
</div>
