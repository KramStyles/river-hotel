<?php $title = "Home Page";
require_once "header.php";
$features = '';

foreach ($home_features as $index => $home_feature) {
    $index++;
    $features .= "<!-- Icon Box -->
				<div class='col-lg-4 icon_box_col'>
					<div class='icon_box d-flex flex-column align-items-center justify-content-start text-center'>
						<div class='icon_box_icon'><img src='assets/images/icon_$index.svg' class='svg' alt='https://www.flaticon.com/authors/monkik'></div>
						<div class='icon_box_title'><h2>$home_feature[0]</h2></div>
						<div class='icon_box_text'>
							<p>$home_feature[1]</p>
						</div>
					</div>
				</div>";
}


?>
<!-- Features -->

<div class="features">
    <div class="container">
        <div class="row">
            <?= $features ?>
        </div>
    </div>
</div>

<!-- Gallery -->

<div class="gallery">
    <div class="gallery_slider_container">
        <div class="owl-carousel owl-theme gallery_slider">

            <!-- Slide -->
            <div class="gallery_item">
                <div class="background_image" style="background-image:url(assets/images/gallery_1.jpg)"></div>
                <a class="colorbox" href="images/gallery_1.jpg"></a>
            </div>

            <!-- Slide -->
            <div class="gallery_item">
                <div class="background_image" style="background-image:url(assets/images/gallery_2.jpg)"></div>
                <a class="colorbox" href="images/gallery_2.jpg"></a>
            </div>

            <!-- Slide -->
            <div class="gallery_item">
                <div class="background_image" style="background-image:url(assets/images/gallery_3.jpg)"></div>
                <a class="colorbox" href="images/gallery_3.jpg"></a>
            </div>

            <!-- Slide -->
            <div class="gallery_item">
                <div class="background_image" style="background-image:url(assets/images/gallery_4.jpg)"></div>
                <a class="colorbox" href="images/gallery_4.jpg"></a>
            </div>

        </div>
    </div>
</div>

<!-- About -->

<div class="about">
    <div class="container">
        <div class="row">

            <!-- About Content -->
            <div class="col-lg-6">
                <div class="about_content">
                    <div class="about_title"><h2>The River / 10 years of excellence</h2></div>
                    <div class="about_text">
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Suspendisse nec faucibus velit.</p>
                    </div>
                </div>
            </div>

            <!-- About Images -->
            <div class="col-lg-6">
                <div class="about_images d-flex flex-row align-items-center justify-content-between flex-wrap">
                    <img src="assets/images/about_1.png" alt="">
                    <img src="assets/images/about_2.png" alt="">
                    <img src="assets/images/about_3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->

<div class="testimonials">
    <div class="parallax_background parallax-window" data-parallax="scroll"
         data-image-src="assets/images/testimonials.jpg" data-speed="0.8"></div>
    <div class="testimonials_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="testimonials_slider_container">

                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme test_slider">

                        <!-- Slide -->
                        <div class="test_slider_item text-center">
                            <div class="rating rating_5 d-flex flex-row align-items-start justify-content-center">
                                <i></i><i></i><i></i><i></i><i></i></div>
                            <div class="testimonial_title"><a href="#">Perfect Stay</a></div>
                            <div class="testimonial_text">
                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus
                                    blandit. Etiam nec odio vestibulum est mattis effic.</p>
                            </div>
                            <div class="testimonial_image"><img src="assets/images/user_1.jpg" alt=""></div>
                            <div class="testimonial_author"><a href="#">Samantha Smith</a>, Greece</div>
                        </div>

                        <!-- Slide -->
                        <div class="test_slider_item text-center">
                            <div class="rating rating_5 d-flex flex-row align-items-start justify-content-center">
                                <i></i><i></i><i></i><i></i><i></i></div>
                            <div class="testimonial_title"><a href="#">Nice place</a></div>
                            <div class="testimonial_text">
                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus
                                    blandit. Etiam nec odio vestibulum est mattis effic.</p>
                            </div>
                            <div class="testimonial_image"><img src="assets/images/user_2.jpg" alt=""></div>
                            <div class="testimonial_author"><a href="#">Michael Doe</a>, Italy</div>
                        </div>

                        <!-- Slide -->
                        <div class="test_slider_item text-center">
                            <div class="rating rating_5 d-flex flex-row align-items-start justify-content-center">
                                <i></i><i></i><i></i><i></i><i></i></div>
                            <div class="testimonial_title"><a href="#">We loved it</a></div>
                            <div class="testimonial_text">
                                <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus
                                    blandit. Etiam nec odio vestibulum est mattis effic.</p>
                            </div>
                            <div class="testimonial_image"><img src="assets/images/user_3.jpg" alt=""></div>
                            <div class="testimonial_author"><a href="#">Luis Garcia</a>, Spain</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Booking -->

<div class="booking">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="booking_title text-center"><h2>Book a room</h2></div>
                <div class="booking_text text-center">
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                        Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit.
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                        Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit.</p>
                </div>

                <!-- Booking Slider -->
                <div class="booking_slider_container">
                    <div class="owl-carousel owl-theme booking_slider">

                        <!-- Slide -->
                        <div class="booking_item">
                            <div class="background_image"
                                 style="background-image:url(assets/images/booking_1.jpg)"></div>
                            <div class="booking_overlay trans_200"></div>
                            <div class="booking_price">$120/Night</div>
                            <div class="booking_link"><a href="booking.html">Family Room</a></div>
                        </div>

                        <!-- Slide -->
                        <div class="booking_item">
                            <div class="background_image"
                                 style="background-image:url(assets/images/booking_2.jpg)"></div>
                            <div class="booking_overlay trans_200"></div>
                            <div class="booking_price">$120/Night</div>
                            <div class="booking_link"><a href="booking.html">Deluxe Room</a></div>
                        </div>

                        <!-- Slide -->
                        <div class="booking_item">
                            <div class="background_image"
                                 style="background-image:url(assets/images/booking_3.jpg)"></div>
                            <div class="booking_overlay trans_200"></div>
                            <div class="booking_price">$120/Night</div>
                            <div class="booking_link"><a href="booking.html">Single Room</a></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog -->

<div class="blog">

    <!-- Blog Slider -->
    <div class="blog_slider_container">
        <div class="owl-carousel owl-theme blog_slider">

            <!-- Slide -->
            <div class="blog_slide">
                <div class="background_image" style="background-image:url(assets/images/index_blog_1.jpg)"></div>
                <div class="blog_content">
                    <div class="blog_date"><a href="#">Oct 20, 2018</a></div>
                    <div class="blog_title"><a href="#">How to book your stay</a></div>
                </div>
            </div>

            <!-- Slide -->
            <div class="blog_slide">
                <div class="background_image" style="background-image:url(assets/images/index_blog_2.jpg)"></div>
                <div class="blog_content">
                    <div class="blog_date"><a href="#">Oct 20, 2018</a></div>
                    <div class="blog_title"><a href="#">10 restaurants in town</a></div>
                </div>
            </div>

            <!-- Slide -->
            <div class="blog_slide">
                <div class="background_image" style="background-image:url(assets/images/index_blog_3.jpg)"></div>
                <div class="blog_content">
                    <div class="blog_date"><a href="#">Oct 20, 2018</a></div>
                    <div class="blog_title"><a href="#">A perfect wedding</a></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Footer -->

<?php include_once "footer.php" ?>