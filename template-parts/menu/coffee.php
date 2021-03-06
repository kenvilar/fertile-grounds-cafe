<?php

?>


<div class="col-xs-12 col-md-4 nopadding">
	<div data-image=""
	     style="height: 475px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/menu/fertile-grounds-cafe.jpg'; ?>)">
	</div>
</div>
<div class="col-xs-12 col-md-6 panel-body">
	<span class="h2 text-brown text-bold text-uppercase">
		<?php if ( get_field( 'coffee_and_espresso_main_title' ) ) : ?>
			<?php the_field( 'coffee_and_espresso_main_title' ); ?>
		<?php else : ?>
			Coffee and Espresso
		<?php endif; ?>
	</span>
	<div class="clear"></div>
	<span class="text-black h6 text-medium-italic">
		<?php if ( get_field( 'coffee_and_espresso_subtitle' ) ) : ?>
			<?php the_field( 'coffee_and_espresso_subtitle' ); ?>
		<?php else : ?>
			Served Hot or Iced
		<?php endif; ?>
	</span>
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
			'post_type'      => array( 'coffeeandespresso' ),
			'post_status'    => array( 'publish' ),
			'posts_per_page' => - 1,
			'order'          => 'DESC',
		);
		
		$coffeeQuery = new WP_Query( $args );
		
		if ( $coffeeQuery->have_posts() ) {
			while ( $coffeeQuery->have_posts() ) {
				$coffeeQuery->the_post();
				?>
				
				<!--Menu Item-->
				<tr>
					<td>
						<span class="table-title"><?php the_title( '<strong>', '</strong>' ); ?></span>
						<div class="clearfix"></div>
					</td>
					<td><strong><?php echo get_post_meta( $post->ID, 'coffee-small', true ); ?></strong></td>
					<td><strong><?php echo get_post_meta( $post->ID, 'coffee-medium', true ); ?></strong></td>
					<td><strong><?php echo get_post_meta( $post->ID, 'coffee-large', true ); ?></strong></td>
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
		
		</tbody>
	</table>
</div>
