<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop | eCommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>frontend_asset/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/lightslider.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/price_rangs.css">
    <link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/animated-headline.css">
	<link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url()?>frontend_asset/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url()?>frontend_asset/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->

    <main class="login-bg">
        <!-- login Area Start -->
        <div class="login-form-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="login-form">
                            <div class="login-heading">
                                <span>Sign Up</span>
                                <p>Enter your details to get access</p>
                            </div>
                            <!-- Single Input Fields -->
                        <form action="<?php echo base_url('save_customer_info')?>" method="post" accept-charset="utf-8">
                            <div class="input-box">
                                     <div class="single-input-fields">
                                    <label>First Name</label>
                                    <input type="text" placeholder="First Name" name="first_name">
                                </div>
                                <div class="single-input-fields">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last Name" name="last_name">
                                </div>
                                  <div class="single-input-fields">
                                    <label>Mobile Number</label>
                                    <input type="text" placeholder="Mobile Number" name="mobile_num">
                                </div>
                                <div class="single-input-fields">
                                    <label>Username or Email Address</label>
                                    <input type="text" placeholder="Username / Email address" name="email">
                                </div>
                           
                                <div class="single-input-fields">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter Password" name="password">
                                </div>
                                <div class="single-input-fields login-check">
                                    <input type="checkbox" id="fruit1" name="keep-log">
                                    <label for="fruit1">Keep me logged in</label>
                                <a href="#" class="f-right">Forgot Password?</a>
                                </div>
                            </div>
                               <div class="login-footer">
                                <p>Don’t have an account? <a href="register.html">Sign In</a>  here</p>
                                <button class="submit-btn3" type="submit" >Sign Up</button>
                            </div>
                                </form>
                            <!-- form Footer -->
                         
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login Area End -->
    </main>

    <!-- JS here -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?php echo base_url()?>frontend_asset/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/bootstrap.min.js"></script>

    <!-- Slick-slider , Owl-Carousel ,slick-nav -->
    <script src="<?php echo base_url()?>frontend_asset/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/slick.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/jquery.slicknav.min.js"></script>

    <!-- One Page, Animated-HeadLin, Date Picker , price, light-slider -->
    <script src="<?php echo base_url()?>frontend_asset/js/wow.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/animated.headline.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/gijgo.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/lightslider.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/price_rangs.js"></script>
    
    <!-- Nice-select, sticky,Progress -->
    <script src="<?php echo base_url()?>frontend_asset/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/jquery.sticky.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="<?php echo base_url()?>frontend_asset/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/waypoints.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="<?php echo base_url()?>frontend_asset/js/contact.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/jquery.form.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/mail-script.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="<?php echo base_url()?>frontend_asset/js/plugins.js"></script>
    <script src="<?php echo base_url()?>frontend_asset/js/main.js"></script>
    
    
    </body>
</html>