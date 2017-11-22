<?php
/* Front-page */
get_header();
?>

	<section id="home-about">
		<div class="container">
			<div class="row">
				<div class="nopadding col-lg-6">
					<img class="img-responsive"
					     src="<?php echo get_template_directory_uri() . '/assets/images/home/mug.png'; ?>"
					     alt="home-image">
				</div>
				<div class="col-lg-6">
					<br>
					<h2 class="text-brown text-uppercase">About</h2>
					<div class="h6">
						Fertile Grounds Cafe is located in one of Rochester's treasured East Avenue mansions. We serve
						high-quality espresso drinks, loose leaf teas and real fruit smoothies, as well as a
						health-conscious selection of light fare.

						<br><br>

						Completely remodeled, our coffee shop boasts multiple gathering spaces, including gardens,
						patios, decks and cozy fireplaces, perfect for small groups or solitude. Inside, you will find
						an eclectic collection of wellness-centered goods, including essential oils, self-help books,
						journals... even premium bedding.

						<br><br>

						<a href="" class="btn btn-version1">Learn more &nbsp;<i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="home-venue">
		<div class="container-fluid">
			<div class="col-lg-6 col-md-6 col-sm-12" style="background: #937a6b;padding-top: 50px;">
				<div class="col-lg-offset-3 col-lg-9 col-md-offset-1 col-md-11 nopadding">
					<h2 class="text-uppercase text-white">Venue</h2>
					<div class="h6 text-white" style="width: 97%;">
						Looking for a special place to host a shower, meeting, workshop or party?

						<br><br>

						Fertile Grounds Cafe offers a variety of different seasonal venue spaces. In the warmer
						months, multiple decks, a patio, and a large park/garden space are available. In the cooler
						months, we have a café, a fireplace lounge area and a large yoga studio space. Come tour our
						amazing facility and its grounds, and choose the space that’s right for you!

						<br><br>

						Small groups of 10-20 people are a perfect fit for our intimate space, but we can accommodate
						up to 40.

						<br><br>

						We offer cafe service of tea, coffee, and light fare, or you are welcome to bring in your own
						caterer. Or, if you prefer, describe to us what you’re looking for, and we will be happy to
						work with a caterer on your behalf.

						<br><br>

						<a href="" class="btn btn-version2">Check Rental Fees &nbsp;<i
									class="fa fa-angle-right"></i></a>

						<br><br><br><br>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12">
				<?php
				if ( function_exists( 'envira_gallery' ) ) {
					envira_gallery( 'home-gallery', 'slug', array( 'limit' => 8 ) );
				}
				?>
			</div>
		</div>
	</section>

	<section id="home-testimonial">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center text-uppercase text-brown">What our Customer says</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 nopadding">
					<div id="testimonial-carousel" class="owl-carousel owl-theme">
						<div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
							<div class="item">
								<blockquote>
									<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus neque velit,
										convallis at est sed, condimentum blandit nisl. Vivamus felis neque, semper et
										elit eget, congue consectetur felis. Aenean quis quam nec eros convallis
										lacinia. In hac habitasse platea dictumst. Integer sollicitudin dignissim purus,
										at tristique orci egestas nec. Proin malesuada vehicula sagittis.</h6>

									<strong><span class="h6">John Doe</span></strong>
								</blockquote>
							</div>
						</div>
						<div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
							<div class="item">
								<blockquote>
									<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus neque velit,
										convallis at est sed, condimentum blandit nisl. Vivamus felis neque, semper et
										elit eget, congue consectetur felis. Aenean quis quam nec eros convallis
										lacinia. In hac habitasse platea dictumst. Integer sollicitudin dignissim purus,
										at tristique orci egestas nec. Proin malesuada vehicula sagittis.</h6>

									<strong><span class="h6">John Doe</span></strong>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
