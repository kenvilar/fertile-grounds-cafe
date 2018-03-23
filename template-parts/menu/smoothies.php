<?php

?>

<div class="col-xs-12 col-md-4 nopadding">
	<div data-image=""
	     style="height: 475px;background-image: url(<?php echo get_template_directory_uri() . '/assets/images/menu/smoothies.png'; ?>)">
	</div>
</div>
<div class="col-xs-12 col-md-6 panel-body">
	<span class="h2 text-brown text-bold text-uppercase">
		<?php if ( get_field( 'smoothies_main_title' ) ) : ?>
			<?php the_field( 'smoothies_main_title' ) ?>
		<?php else : ?>
			Smoothies
		<?php endif; ?>
	</span>
	<div class="clear"></div>
	<span class="text-black h6 text-medium-italic">
		<?php if ( get_field( 'smoothies_subtitle' ) ) : ?>
			<?php the_field( 'smoothies_subtitle' ); ?>
		<?php else : ?>
			Made with frozen fruit, yogurt / milk, and or fruit juice.
		<?php endif; ?>
	</span>
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
		
		$smoothieQuery = new WP_Query( $args );
		
		if ( $smoothieQuery->have_posts() ) {
			while ( $smoothieQuery->have_posts() ) {
				$smoothieQuery->the_post();
				?>

				<!--Menu Item-->
				<tr>
					<td>
						<span class="table-title">
							<?php the_title( '<strong>', '</strong>' ); ?> <?php echo get_post_meta( $post->ID, 'smoothie-subtitle', true ); ?>
						</span>
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

		</tbody>
	</table>
</div>
