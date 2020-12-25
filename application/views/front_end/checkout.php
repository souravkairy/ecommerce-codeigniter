
<?php 
 $customer_id = $this->session->userdata('customer_id')

?>

  <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider hero-overly2  slider-height2 d-flex align-items-center slider-bg2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="fadeInUp" data-delay=".4s" >Checkout</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">checkout</a></li> 
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!--? Checkout Area Start-->
        <section class="checkout_area section-padding40">
            <div class="container">

                <?php if ($this->session->userdata('customer_id')) {
                    
                  ?> 


                <?php } else { ?>
                <div class="returning_customer">
                    <div class="check_title">
                        <h2>
                            New Customer?
                            
                            <a href="<?php echo base_url('Sign-Up') ?>">Click here to Sign Up</a>
                        </h2>
                    </div>
                    <p>
                        If you have shopped with us before, please enter your details in the
                        boxes below. If you are a new customer, please proceed to the
                        Billing & Shipping section.
                    </p>
                    <form class="row contact_form" action="<?php echo base_url('customer_login') ?>" method="post" novalidate="novalidate">
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" id="name" name="email" value="" placeholder="Username or Email" />
                          
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password" />
                            
                        </div>
                        <div class="col-md-12 form-group d-flex flex-wrap">

                            <button type="submit" class="btn">Log In</button>
                           
                           
                            
                        </div>
                        
                    </form>
                </div>

            <?php } ?>

            
                <div class="cupon_area">
                    <div class="check_title">
                        <h2> Have a coupon?
                            <a href="#">Click here to FIND your code</a>
                        </h2>
                    </div>
                    <input type="text" placeholder="Enter coupon code" />
                    <a class="btn" href="#">Apply Coupon</a>
                </div>
                <div class="billing_details">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3>Billing Details</h3>
                            <form class="row contact_form" action="<?php echo base_url('place-order')?>" method="post" >
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" id="first" name="c_first_name" placeholder="First Name" required/>
                                    <input type="hidden" name="customer_id" value="<?php echo $customer_id ?>">
                                   
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" id="last"  name="c_last_name"placeholder="Last Name" required/>
                                   
                                </div>
                               
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" id="number" name="c_phone_num"  placeholder="Phone Number" required/>
                                   
                                </div>
                                <div class="col-md-6 form-group p_star">
                                    <input type="text" class="form-control" id="email" name="c_email" placeholder="Email Address" required/>
                                   
                                </div>
                           
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="add1" name="address1" placeholder="Address 1" required/>
                                    
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="add2" name="address2" placeholder="Address 2" />
                                    
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="city" name="town" placeholder="City/ Town" required/>
                                   
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" id="zip" name="post_code" placeholder="Post Code"  required/>
                                   
                                </div>
                             
                                <div class="col-md-12 form-group">
                                 <!--    <div class="creat_account">
                                        <h3>Shipping Details</h3>
                                        <div class="checkout-cap">
                                            <input type="checkbox" id="f-option3" name="selector" />
                                            <label for="f-option3">Ship to a different address?</label>
                                        </div>
                                    </div> -->
                                    <textarea class="form-control" name="other_note" id="message" rows="1" placeholder="Order Notes" ></textarea>
                                </div>
                                <button type="submit" class="btn w-100">Place Order</button>
                               
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="order_box">
                                <h2>Your Order</h2>

                                
                                <ul class="list">
                                    <li>
                                        <a href="#">Product<span>Total</span>
                                        </a>
                                    </li>
                                    <?php
                                $contents = $this->cart->contents();

                                 foreach ($contents as $row) {
                                    # code...
                                 ?>
                                    <li>
                                        <a href="#"><?php echo $row['name'] ?>
                                            <span class="middle">x <?php echo $row['qty'] ?></span>
                                            <span class="last"><?php echo '৳'. $row['price'] ?></span>
                                        </a>
                                    </li>
                                    <?php } ?>
                                   
                                </ul>
                            

                                <ul class="list list_2">
                                    <li>
                                        <a href="#">Subtotal <span><?php echo '৳'. $this->cart->total() ?></span></a>
                                    </li>
                                    <li>
                                        <a href="#">Shipping
                                            <span>Flat rate: ৳ 50.00</span>
                                        </a>
                                    </li>
                                    <li>
                                        <?php $total = $this->cart->total();
                                                $tt = $total + 50 ;
                                         ?>
                                        <a href="#">Total<span><?php echo '৳'.  $tt  ?></span>
                                        </a>
                                    </li>
                                </ul>
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Checkout Area -->

        <!--? Services Area Start -->
        
        <!--? Services Area End -->
    </main>