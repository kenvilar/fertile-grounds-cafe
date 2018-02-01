<?php
/* Front-page */
get_header();
?>

    <section id="home-about">
        <div class="container">
            <div class="row">
                <div class="nopadding col-lg-6">
                    <img class="img-responsive"
                         src="<?php echo get_field('about_image') ? the_field('about_image') : get_template_directory_uri() . '/assets/images/home/mug.png'; ?>"
                         alt="home-about-image">
                </div>
                <div class="col-lg-6">
                    <br>
                    <h2 class="text-brown text-uppercase">About</h2>
                    <div class="h6">
                        <?php
                        if (get_field('about_content')) {
                            the_field('about_content');
                        }
                        ?>
                        <a href="/about" class="btn btn-version1">Learn more &nbsp;<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-venue">
        <div class="container-fluid">
            <div class="col-lg-6 col-md-6 ken-col-md-12 col-sm-12 equal-height"
                 style="background: #937a6b;padding-top: 50px;">
                <div class="col-lg-offset-3 col-lg-9 col-md-offset-1 col-md-11 nopadding">
                    <h2 class="text-uppercase text-white">Venue</h2>
                    <div class="h6 text-white" style="width: 97%;">
                        <?php
                        if (get_field('venue_content')) {
                            the_field('venue_content');
                        }
                        ?>

                        <br>

                        <a href="/venue" class="btn btn-version2">Check Rental Fees &nbsp;<i
                                    class="fa fa-angle-right"></i></a>

                        <br><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 ken-col-md-12 col-sm-12 equal-height home-gallery-item-wrapper">
                <?php
                /*if ( function_exists( 'envira_gallery' ) ) {
                    envira_gallery( 'home-gallery', 'slug', array( 'limit' => 8 ) );
                }*/
                ?>
                <div class="col-xs-12 pad-y-5 hidden-lg"></div>
                <div class="col-xs-12">
                    <div class="home-gallery-item"
                         style="height: 30vh;background-image: url(http://fertilegrounds.dev/wp-content/uploads/2017/11/about.png)"></div>
                </div>
                <div class="col-xs-12 pad-y-5 hidden-xs hidden-sm"></div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="home-gallery-item"
                         style="height: 30vh;background-image: url(http://fertilegrounds.dev/wp-content/uploads/2017/11/venue2.png)"></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="home-gallery-item"
                         style="height: 30vh;background-image: url(http://fertilegrounds.dev/wp-content/uploads/2017/11/venue3.png)"></div>
                </div>
                <div class="col-xs-12 pad-y-5 hidden-xs hidden-sm"></div>
                <div class="col-xs-12 col-sm-6 col-md-6 equal-height">
                    <div class="home-gallery-item"
                         style="height: 30vh;background-image: url(http://fertilegrounds.dev/wp-content/uploads/2017/11/venue4.png)"></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 equal-height">
                    <div class="home-gallery-item"
                         style="height: 30vh;background-image: url(http://fertilegrounds.dev/wp-content/uploads/2017/11/venue4.png)"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="home-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center text-uppercase text-brown">What Our Customers Say</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 nopadding">
                    <div id="testimonial-carousel" class="owl-carousel owl-theme">
                        <?php
                        $args = array('post_type' => 'testimonial');
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-offset-1 col-xs-10">
                                <div class="item">
                                    <blockquote>
                                        <h6><?php the_content(); ?></h6>

                                        <strong><span class="h6"><?php the_title(); ?></span></strong>
                                    </blockquote>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
