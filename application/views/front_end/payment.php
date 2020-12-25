


<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <div class="single-slider hero-overly2  slider-height2 d-flex align-items-center slider-bg2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="fadeInUp" data-delay=".4s" >Shipping</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">checkout</a></li> 
                                        <li class="breadcrumb-item"><a href="#">Shipping</a></li>
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

            
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Shipping Details</h3>

                    <table class="table table-sm">
                      <thead>
                        <tr>
                          
                          <th scope="col">First Name</th>
                          <th scope="col"><?php echo $shipping_info->c_first_name ?></th>
                          
                        </tr>
                          <tr>
                          
                          <th scope="col">Last Name</th>
                          <th scope="col"><?php echo $shipping_info->c_last_name ?></th>
                          
                        </tr>
                          <tr>
                          
                          <th scope="col">Phone Number</th>
                          <th scope="col"><?php echo $shipping_info->c_phone_num ?></th>
                          
                        </tr>
                          <tr>
                          
                          <th scope="col">Email</th>
                          <th scope="col"><?php echo $shipping_info->c_email ?></th>
                          
                        </tr>
                          <tr>
                          
                          <th scope="col">Address 1</th>
                          <th scope="col"><?php echo $shipping_info->address1 ?></th>
                          
                        </tr>
                          <tr>
                          
                          <th scope="col">Address 2</th>
                          <th scope="col"><?php echo $shipping_info->address2 ?></th>
                          
                        </tr>
                          <tr>
                          
                          <th scope="col">Town</th>
                          <th scope="col"><?php echo $shipping_info->town ?></th>
                          
                        </tr>
                          <tr>
                          
                          <th scope="col">Post Code</th>
                          <th scope="col"><?php echo $shipping_info->post_code ?></th>
                          
                        </tr>
                          <tr>
                        
                          <th scope="col">Other Note</th>
                          <th scope="col"><?php echo $shipping_info->other_note ?></th>
                          
                        </tr>
                      </thead>

                    </table>

                   <!--  <button type="submit" class="btn w-100">Cash on delivary</button> -->

                            
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
                              <!--   <div class="payment_item">
                                    <div class="radion_btn">
                                        <input type="radio" id="f-option5" name="selector" />
                                        <label for="f-option5">Check payments</label>
                                        <div class="check"></div>
                                    </div>
                                    <p> Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode. </p>
                                </div> -->
                                <div class="payment_item active">
                                    <div class="radion_btn">
                                        <!-- <input type="radio" id="f-option6" name="selector" /> -->
                                        <label for="f-option6">Online Payment</label>
                                        <img src="<?php echo base_url()?>frontend_asset/img/gallery/card.jpg" alt="" />
                                        <div class="check"></div>
                                    </div>
                                    <p> Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode. </p>
                                </div>

                                <div class="creat_account checkout-cap">
                                    <input type="checkbox" id="f-option8" name="selector" required />
                                    <label for="f-option8">I’ve read and accept the  <a href="#">terms & conditions*</a> </label>
                                </div>
                                <a class="btn w-100" href="<?php echo base_url('stripe_payment_dashboard') ?>">Proceed to Online Payment</a>
<?php 
 $customer_id = $this->session->userdata('customer_id');
 

    // $contents = $this->cart->contents();
    //         echo "<pre>";
    //         print_r($contents);
    //         exit();
            
?>

                                <form action="<?php echo base_url('order-now') ?>" method="post"  accept-charset="utf-8">

                                    <input type="hidden" name="customer_id" value="<?php echo $customer_id ?>">
                                    <input type="hidden" name="shipping_id" value="<?php echo $shipping_info->shipping_id ?>">
                                    <input type="hidden" name="order_total" value="<?php echo $tt  ?>">

                                    <button type="submit" style="margin-top: 10px" class="btn w-100" >Cash on delivary</button>
                                     <!--   <a style="margin-top: 10px" class="btn w-100" href="<?php echo base_url('order-now') ?>">Cash on delivary</a> --> 
                                </form>
                             
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