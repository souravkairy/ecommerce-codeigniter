<main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider hero-overly2  slider-height2 d-flex align-items-center slider-bg2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="fadeInUp" data-delay=".4s" >Cart List</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Cart List</a></li> 
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
        <!--================Cart Area =================-->
        <section class="cart_area section-padding40">
            <div class="container">
                <div class="cart_inner">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="45%">Product</th>
                                    <th width="10%">Price</th>
                                    <th width="10%">Quantity</th>
                                    <th width="10%">Update</th>
                                    <th width="10%">Total</th>
                                    <th width="5%">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $contents = $this->cart->contents();

                                 foreach ($contents as $row) {
                                    # code...
                                 ?>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="<?php echo base_url().$row['options']['image'] ?>" alt="" />
                                            </div>
                                            <div class="media-body">
                                                <p><?php echo $row['name'] ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5><?php echo '৳'. $row['price'] ?></h5>
                                    </td>
                                    <form action="<?php echo base_url('update_cart') ?>" method="post" accept-charset="utf-8">
                                      
                                    <td>
                                        <div class="product_count">
                                            <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                            <input name="qty" class="input-number" type="text" value="<?php echo $row['qty'] ?>" min="0" max="10">

                                            
                                            <span class="input-number-increment"> <i class="ti-plus"></i></span>

                                            <input type="hidden" name="rowid" value="<?php echo $row['rowid']?>";>
                                        </div>

                                         
                                    </td>
                                     <td>
                                        <button style="cursor: pointer;" type="submit" class="btn-warning">
                                            <img src="<?php echo base_url()?>frontend_asset/img/icon/captcha.png" alt="">
                                        </button>
                                        
                                    </td>
                                    </form>
                                    <td>
                                        <h5><?php echo '৳'. $row['subtotal'] ?></h5>
                                    </td>

                                    <td>
                                     <a href="<?php echo base_url();?>Delete-To-Cart/<?php echo $row['rowid']?>" title="">
                                            <img src="<?php echo base_url()?>frontend_asset/img/icon/remove (1).png" alt="">
                                           
                                            </a>
                                </td>
                                    
                                </tr>
                            <?php } ?>
                        
                            <!--     <tr class="bottom_button">
                                    <td>
                                        <a class="btn" href="#">Update Cart</a>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="cupon_text float-right">
                                            <a class="btn" href="#">Close Coupon</a>
                                        </div>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <h5>Subtotal</h5>
                                    </td>
                                    <td>
                                        <h5><?php echo '৳'. $this->cart->total() ?></h5>
                                    </td>
                                </tr>
                                <tr class="shipping_area">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                       <!--  <h5>Shipping</h5> -->
                                    </td>
                                    <td>
                                        <div class="shipping_box">
                                           <!--  <ul class="list">
                                                <li>
                                                    Flat Rate: $5.00
                                                    <input type="radio" aria-label="Radio button for following text input">
                                                </li>
                                                <li>
                                                    Free Shipping
                                                    <input type="radio" aria-label="Radio button for following text input">
                                                </li>
                                                <li>
                                                    Flat Rate: $10.00
                                                    <input type="radio" aria-label="Radio button for following text input">
                                                </li>
                                                <li class="active">
                                                    Local Delivery: $2.00
                                                    <input type="radio" aria-label="Radio button for following text input">
                                                </li>
                                            </ul> -->
                                            <h6>
                                                Calculate Shipping
                                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                                            </h6>
                                            <select class="shipping_select">
                                                <option value="1">Bangladesh</option>
                                             <!--    <option value="2">India</option>
                                                <option value="4">Pakistan</option> -->
                                            </select>
                                            <select class="shipping_select section_bg">
                                                <option value="1">Dhaka</option>
                                                <option value="2">Sylhet</option>
                                                <option value="4">CTG</option>
                                            </select>
                                            <input class="post_code" type="text" placeholder="Postcode/Zipcode" />
                                            <!-- <a class="btn" href="#">Update Details</a> -->
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="checkout_btn_inner float-right">
                            <a class="btn" href="<?php echo base_url('All-Products') ?>">Continue Shopping</a>
                            <a class="btn checkout_btn" href="<?php echo base_url('Checkout')?>">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Cart Area =================-->
        <!--? Services Area Start -->
        
        <!--? Services Area End -->
    </main>