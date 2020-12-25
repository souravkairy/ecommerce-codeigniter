 
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
                    <img src="<?php echo base_url()?>frontend_asset/img/logo/Untitled design.png" alt="">
                </div>
            </div>
        </div>
    </div>
 <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row menu-wrapper align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>frontend_asset/img/logo/Z.png" alt=""></a>
                            </div>
                            <!-- Logo-2 -->
                            <div class="logo2">
                                <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>frontend_asset/img/logo/Untitled design.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?php echo base_url()?>">Home</a></li> 
                                        <li><a href="<?php echo base_url('All-Products')?>">Product</a></li>
                                       
                                        <li><a href="#">Shop</a>
                                            <ul class="submenu">
                                                <!-- <li><a href="login.html">Login</a></li> -->
                                                <li><a href="<?php echo base_url('show-cart')?>">Cart</a></li>
                                     <!--            <li><a href="<?php echo base_url('Categories')?>">Categories</a></li> -->
                                                <li><a href="<?php echo base_url('Checkout')?>">Checkout</a></li>
                                     <!--            <li><a href="<?php echo base_url('Pro')?>">Product Details</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url('blog')?>">Blog</a>
                                           <!--  <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul> -->
                                        </li>
                                         <li><a href="<?php echo base_url('About') ?>">About</a></li>
                                        <li><a href="<?php echo base_url('Contact')?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>   
                        </div>
                        <div class="header-right1 d-flex align-items-center">
                           
                            <div class="search">
                                <ul class="d-flex align-items-center">
                                    <li>
                                       
                                        <form action="#" class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="ti-search"></i>
                                            </div>
                                        </form>
                                    </li>
                                  <!--   <li>

                                        <?php $customer_id = $this->session->userdata('customer_id');
                                        if ($customer_id) {

                                         ?>
                                        <a href="login.html" class="account-btn" target="_blank"><?php echo $this->session->userdata('first_name') ?></a>

                                        <?php } else{ ?>
                                            <a href="login.html" class="account-btn" target="_blank">My Account</a>
                                        <?php } ?>
                                    </li> -->
                               
                                </ul>
                            </div>
                              <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                               <?php $customer_id = $this->session->userdata('customer_id');
                                        if ($customer_id) {

                                         ?>               
                                        <li><a href="#"><?php echo $this->session->userdata('first_name') ?></a>
                                            <ul class="submenu">
                                                <!-- <li><a href="login.html">Login</a></li> -->
                                                <li><a href="<?php echo base_url('customer_logout')?>">Logout</a></li>
                                     <!--            <li><a href="<?php echo base_url('Categories')?>">Categories</a></li> -->
                                               
                                            </ul>
                                        </li>
                                          <?php } else{ ?>
                                               <li><a href="#">My Account</a>
                                            <ul class="submenu">
                                                <!-- <li><a href="login.html">Login</a></li> -->
                                                <li><a href="<?php echo base_url('Checkout')?>">Log In</a></li>
                                     <!--            <li><a href="<?php echo base_url('Categories')?>">Categories</a></li> -->
                                               
                                            </ul>
                                        </li>
                                          <?php } ?>
                                     
                                    </ul>
                                </nav>
                            </div>
                            <div class="search">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <div class="card-stor">
                                            <a href="<?php echo base_url('show-cart')?>" title="">
                                            <img src="<?php echo base_url()?>frontend_asset/img/icon/card.svg" alt="">
                                            <span><?php echo $this->cart->total_items(); ?></span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>