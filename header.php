<?php
    require_once "resources/global.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?> | The River </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The River template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/OwlCarousel2-2.3.4/animate.css">
    <link href="assets/plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <?php
    if ($title == "Home Page") {
        echo '<link rel="stylesheet" type="text/css" href="assets/styles/main_styles.css">
                    <link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">';
    } else {
        echo "<link rel='stylesheet' type='text/css' href='assets/styles/${title}" . ".css'>
<link rel='stylesheet' type='text/css' href='assets/styles/${title}" . "_responsive.css'>";


    }
    ?>
</head>

<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo"><a href="#">The River</a></div>
            <div class="ml-auto d-flex flex-row align-items-center justify-content-start">
                <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about">About us</a></li>
                        <li><a href="#">Rooms</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="book_button"><a href="booking.html">Book Online</a></div>
                <div class="header_phone d-flex flex-row align-items-center justify-content-center">
                    <img src="assets/images/phone.png" alt="">
                    <span>0183-12345678</span>
                </div>

                <!-- Hamburger Menu -->
                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
        <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="menu_content">
            <nav class="menu_nav text-right">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="menu_extra">
            <div class="menu_book text-right"><a href="#">Book online</a></div>
            <div class="menu_phone d-flex flex-row align-items-center justify-content-center">
                <img src="assets/images/phone-2.png" alt="">
                <span>0183-12345678</span>
            </div>
        </div>
    </div>

    <?php
    if ($title == "Home Page") {
        echo '<!-- Home -->

    <div class="home">
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slide -->
                <div class="slide">
                    <div class="background_image" style="background-image:url(assets/images/index_1.jpg)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_title">A Luxury Stay</div>
                                        <div class="booking_form_container">
                                            <form action="#" class="booking_form">
                                                <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                                    <div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
                                                        <div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
                                                        <div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
                                                        <div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
                                                        <div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
                                                    </div>
                                                    <div><button class="booking_button trans_200">Book Now</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div class="background_image" style="background-image:url(assets/images/blog.jpg)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_title">Feel at Home!</div>
                                        <div class="booking_form_container">
                                            <form action="#" class="booking_form">
                                                <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                                    <div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
                                                        <div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
                                                        <div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
                                                        <div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
                                                        <div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
                                                    </div>
                                                    <div><button class="booking_button trans_200">Book Now</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="slide">
                    <div class="background_image" style="background-image:url(assets/images/about.jpg)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_title">Your Paradise Awaits!</div>
                                        <div class="booking_form_container">
                                            <form action="#" class="booking_form">
                                                <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                                    <div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
                                                        <div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
                                                        <div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
                                                        <div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
                                                        <div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
                                                    </div>
                                                    <div><button class="booking_button trans_200">Book Now</button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Dots -->
            <div class="home_slider_dots_container">
                <div class="home_slider_dots">
                    <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
                        <li class="home_slider_custom_dot active">01.</li>
                        <li class="home_slider_custom_dot">02.</li>
                        <li class="home_slider_custom_dot">03.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>';
    } else {
        echo '
	<div class="home">
		<div class="background_image" style="background-image:url(assets/images/about.jpg)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">About us</div>
							<div class="booking_form_container">
								<form action="#" class="booking_form" id="booking_form">
									<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
										<div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
											<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
											<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
											<div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
										</div>
										<div><button class="booking_button trans_200">Book Now</button></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>';
    }
    ?>


