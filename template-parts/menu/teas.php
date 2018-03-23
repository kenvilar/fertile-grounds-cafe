<?php

?>

<div class="col-xs-12 col-md-4 nopadding">
	<div data-image=""
	     style="height: 475px;
			     background-image: url(<?php echo get_template_directory_uri() . '/assets/images/menu/new-teas.jpg'; ?>)">
	</div>
	<br>
	<div data-image=""
	     style="height: 300px;
			     background-image: url(<?php echo get_template_directory_uri() . '/assets/images/banner/venue.jpg'; ?>)">
	</div>
</div>
<div class="col-xs-12 col-md-8 panel-body">
	<span class="h2 text-brown text-bold text-uppercase">Teas and Tisane</span>
	<div class="clear"></div>
	<h3 class="text-brown text-uppercase"><strong>Serendipitea: Organic Teas and Tisane</strong></h3>
	<span class="text-black h6 text-medium-italic">
		<strong>Sm: $1.25, Med: $1.75, Lrg: $2.50</strong> <br>
		Served Hot or Iced
	</span>
	<table class="table table-responsive">
		<thead>

		<tr>
			<th></th>
			<th></th>
		</tr>

		</thead>
		<tbody>
		
		<?php
		$args = array(
			'post_type'      => array( 'teasandtisane' ),
			'post_status'    => array( 'publish' ),
			'posts_per_page' => - 1,
			'order'          => 'DESC',
		);
		
		$teasQuery = new WP_Query( $args );
		
		if ( $teasQuery->have_posts() ) {
			?>

			<!--Menu Item-->
			<tr>
				<?php
				$i = 1;
				while ( $teasQuery->have_posts() ) {
					$teasQuery->the_post();
					?>
					
					<?php if ( $i % 2 === 0 ) : ?>
					
						<td>
							<span class="table-title"><?php the_title( '<strong>', '</strong>' ); ?></span>
							<div class="clearfix"></div>
							<?php echo get_the_content(); ?>
						</td>
						</tr>
						<!--Menu Item-->
					
					<?php $i = 1; ?>
					
					<?php else : ?>
					
						<td>
							<span class="table-title"><?php the_title( '<strong>', '</strong>' ); ?></span>
							<div class="clearfix"></div>
							<?php echo wpautop( get_the_content(), false ); ?>
						</td>
					
					<?php $i++; endif; ?>
					
					<?php
				}
				?>
			
			<?php
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
