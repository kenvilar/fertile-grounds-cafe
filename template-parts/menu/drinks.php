<?php

?>

<div class="col-xs-12 col-md-4 nopadding">
	<div data-image=""
	     style="height: 475px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/menu/menu1.png'; ?>)">
	</div>
</div>
<div class="col-xs-12 col-md-6 panel-body">
	<span class="h2 text-brown text-bold text-uppercase">Specialty Drinks</span>
	<div class="clear"></div>
	<span class="text-black h6 text-medium-italic">Served Hot or Iced</span>
	<table class="table table-responsive">
		<thead>

		<tr>
			<th></th>
			<th class="text-brown">Sm</th>
			<th class="text-brown">Med</th>
			<th class="text-brown">Lrg</th>
		</tr>

		</thead>
		<tbody>
		
		<?php
		$args = array(
			'post_type'      => array( 'specialtydrink' ),
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
					</td>
					<td><strong><?php echo get_post_meta( $post->ID, 'specialty-drink-small', true ); ?></strong></td>
					<td><strong><?php echo get_post_meta( $post->ID, 'specialty-drink-medium', true ); ?></strong></td>
					<td><strong><?php echo get_post_meta( $post->ID, 'specialty-drink-large', true ); ?></strong></td>
				</tr>
				
				<?php
			}
		} else {
			?>
			<tr>
				<td colspan="4">No posts found.</td>
			</tr>
			
			<?php
		}
		wp_reset_postdata();
		?>

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Hot Chocolate</strong></span>
				<div class="clearfix"></div>
			</td>
			<td><strong>2.50</strong></td>
			<td><strong>3.25</strong></td>
			<td><strong>3.50</strong></td>
		</tr>-->

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Mocha Latte</strong></span>
				<div class="clearfix"></div>
			</td>
			<td><strong>2.75</strong></td>
			<td><strong>3.50</strong></td>
			<td><strong>4.00</strong></td>
		</tr>-->

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Chai Tea</strong></span>
				<div class="clearfix"></div>
			</td>
			<td><strong>2.75</strong></td>
			<td><strong>3.50</strong></td>
			<td><strong>4.00</strong></td>
		</tr>-->

		<!--Menu Item-->
		<!--<tr>
			<td>
				<span class="table-title"><strong>Chai Latte</strong></span>
				<div class="clearfix"></div>
			</td>
			<td><strong>2.75</strong></td>
			<td><strong>3.50</strong></td>
			<td><strong>4.00</strong></td>
		</tr>-->

		</tbody>
	</table>

	<div>
		<p class="text-uppercase"><strong>Flavor Shot: <span
						class="text-brown">Added to any drink: $0.50</span></strong></p>
		<p class="small-p">Flavor Options: Vanilla, Hazelnut, Amaretto, Cinnamon, Almond, Cherry, Caramel, Gingerbread,
			Pumpkin Pie, Egg
			nog, Chocolate, White Chocolate, Raspberry, Crème De Menthe</p>
		<p class="small-p">*Sugar Free Options: Vanilla, Hazelnut, Almond, Peppermint</p>
	</div>
</div>
