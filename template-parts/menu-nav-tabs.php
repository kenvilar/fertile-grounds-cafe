<?php
/* Menu Page Template - Nav Tabs */

/*
 * Please move the active class in the nav tab if you want to customize what content should display first.
 * Only one active keyword should be put in.
 * */
?>

<div class="container mobile-short-height" style="padding-top: 160px;display: table;position: relative;">
	<div class="row">
		<div style="position: relative">
			<div style="position: absolute;"></div>
		</div>
		<div style="clear: both;"></div>
	</div>
</div>

<section id="menu-nav-tabs-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 center-block text-center nopadding">
				<ul class="nav nav-pills nav-justified" role="tablist" id="coffee-tabs">
					<li class=""><a href="#coffee" data-toggle="tab" aria-expanded="true">
							Coffee and Espresso</a>
					</li>
					<li class=""><a href="#drinks" data-toggle="tab" aria-expanded="false">
							Specialty Drinks</a>
					</li>
					<li class=""><a href="#teas" data-toggle="tab" aria-expanded="false">
							Teas and Tisane</a>
					</li>
					<li class="active"><a href="#smoothies" data-toggle="tab" aria-expanded="false">
							Smoothies</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="menu-nav-tabs-content" class="container-fluid nopadding">
		<div class="tab-content">

			<!--Tab Content-->
			<div class="tab-pane" id="coffee">
				<?php require get_template_directory() . '/template-parts/menu/coffee.php'; ?>
			</div>

			<!--Tab Content-->
			<div class="tab-pane" id="drinks">
				<?php require get_template_directory() . '/template-parts/menu/drinks.php'; ?>
			</div>

			<!--Tab Content-->
			<div class="tab-pane" id="teas">
				<?php require get_template_directory() . '/template-parts/menu/teas.php'; ?>
			</div>

			<!--Tab Content-->
			<div class="tab-pane active" id="smoothies">
				<?php require get_template_directory() . '/template-parts/menu/smoothies.php'; ?>
			</div>

		</div>
	</div>
</section>
