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
                  <h1 data-animation="fadeInUp" data-delay=".4s" >Product details</h1>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Product details</a></li> 
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
    <!--? Single Product Area Start-->
    <div class="product_image_area section-padding40">
      <div class="container">
        <div class="row s_product_inner">
          <div class="col-lg-5">
            <div class="product_slider_img">
              <div id="vertical">
                <div data-thumb="<?php echo base_url()?>frontend_asset/img/gallery/product-details1.png">
                  <img src="<?php echo base_url().$product_details->image1 ?>" / class="w-100">
                </div>
          <!--       <div data-thumb="<?php echo base_url()?>frontend_asset/img/gallery/product-details2.png">
                  <img src="<?php echo base_url()?>frontend_asset/img/gallery/product-details2.png"/ class="w-100">
                </div>
                <div data-thumb="<?php echo base_url()?>frontend_asset/img/gallery/product-details3.png">
                  <img src="<?php echo base_url()?>frontend_asset/img/gallery/product-details3.png" / class="w-100">
                </div>
                <div data-thumb="<?php echo base_url()?>frontend_asset/img/gallery/product-details4.png">
                  <img src="<?php echo base_url()?>frontend_asset/img/gallery/product-details4.png" / class="w-100">
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="s_product_text">
              <h3><?php echo $product_details->p_name ?></h3>
              <h2><?php echo '৳'. $product_details->s_price ?></h2>
              <ul class="list">
                <li>
                  <a class="active" href="#">
                    <span>Category</span> : <?php echo $product_details->category_name ?></a>
                  </li>
                  <li>
                    <a href="#"> <span>Availibility</span> : In Stock</a>
                  </li>
                </ul>
                <p>
                  <?php echo $product_details->p_desc ?>
                </p>
                <div class="card_area">

                  <form action="<?php echo base_url('add_to_cart')?>" method="post">
                      <div class="product_count d-inline-block">
                      <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                      <input type="hidden" name="p_id" value="<?php echo $product_details->p_id ?>">
                      <input class="input-number" type="number" value="1" min="0" max="10" name="o_qty">
                      <span class="number-increment"> <i class="ti-plus"></i></span>
                    </div>
                    <div class="add_to_cart">
                      <button type="submit" class="btn">add to cart</button>

                     <!--  <a href="#" class="btn" type="submit"></a> -->
                      <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
                    </div>
                  </form>
                  
                  <div class="social_icon">
                    <a href="#" class="fb"><i class="ti-facebook"></i></a>
                    <a href="#" class="tw"><i class="ti-twitter-alt"></i></a>
                    <a href="#" class="li"><i class="ti-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Single Product Area End-->
      <!--? Product Description Area Start-->
      <section class="product_description_area">
        <div class="container">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
              aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
              aria-selected="false">Specification</a>
            </li>
        <!--     <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
              aria-selected="false">Comments</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
              aria-selected="false">Reviews</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
              <p>
              <?php echo $product_details->p_desc ?>
              </p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <h5>Brand</h5>
                      </td>
                      <td>
                        <h5><?php echo $product_details->brand_name ?></h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Size</h5>
                      </td>
                      <td>
                        <h5><?php echo $product_details->size ?></h5>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <h5>Promo Code</h5>
                      </td>
                      <td>
                        <h5><?php echo $product_details->promo_code  ?></h5>
                      </td>
                    </tr>
            
                  </tbody>
                </table>
              </div>
            </div>
          <!--   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="row">
                <div class="col-lg-6">
                  <div class="comment_list">
                    <div class="review_item">
                      <div class="media">
                        <div class="d-flex">
                          <img src="<?php echo base_url()?>frontend_asset/img/gallery/review-1.png" alt="" />
                        </div>
                        <div class="media-body">
                          <h4>Blake Ruiz</h4>
                          <h5>12th Feb, 2017 at 05:56 pm</h5>
                          <a class="reply_btn" href="#">Reply</a>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo
                      </p>
                    </div>
                    <div class="review_item reply">
                      <div class="media">
                        <div class="d-flex">
                          <img src="<?php echo base_url()?>frontend_asset/img/gallery/review-2.png" alt="" />
                        </div>
                        <div class="media-body">
                          <h4>Blake Ruiz</h4>
                          <h5>12th Feb, 2017 at 05:56 pm</h5>
                          <a class="reply_btn" href="#">Reply</a>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo
                      </p>
                    </div>
                    <div class="review_item">
                      <div class="media">
                        <div class="d-flex">
                          <img src="<?php echo base_url()?>frontend_asset/img/gallery/review-3.png" alt="" />
                        </div>
                        <div class="media-body">
                          <h4>Blake Ruiz</h4>
                          <h5>12th Feb, 2017 at 05:56 pm</h5>
                          <a class="reply_btn" href="#">Reply</a>
                        </div>
                      </div>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="review_box">
                    <h4>Post a comment</h4>
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" name="message" id="message" rows="1"
                        placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-right">
                      <button type="submit" value="submit" class="btn">
                        Submit Now
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div> -->
          <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="row total_rate">
                  <div class="col-6">
                    <div class="box_total">
                      <h5>Overall</h5>
                      <h4>4.0</h4>
                      <h6>(03 Reviews)</h6>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="rating_list">
                      <h3>Based on 3 Reviews</h3>
                      <ul class="list">
                        <li>
                          <a href="#">5 Star
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i> 01</a>
                          </li>
                          <li>
                            <a href="#">4 Star
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i> 01</a>
                            </li>
                            <li>
                              <a href="#">3 Star
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> 01</a>
                              </li>
                              <li>
                                <a href="#">2 Star
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i> 01</a>
                                </li>
                                <li>
                                  <a href="#">1 Star
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i> 01</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="review_list">
                            <div class="review_item">
                              <div class="media">
                                <div class="d-flex">
                                  <img src="<?php echo base_url()?>frontend_asset/img/gallery/review-1.png" alt="" />
                                </div>
                                <div class="media-body">
                                  <h4>Blake Ruiz</h4>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                              </div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo
                              </p>
                            </div>
                            <div class="review_item">
                              <div class="media">
                                <div class="d-flex">
                                  <img src="<?php echo base_url()?>frontend_asset/img/gallery/review-2.png" alt="" />
                                </div>
                                <div class="media-body">
                                  <h4>Blake Ruiz</h4>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                              </div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo
                              </p>
                            </div>
                            <div class="review_item">
                              <div class="media">
                                <div class="d-flex">
                                  <img src="<?php echo base_url()?>frontend_asset/img/gallery/review-3.png" alt="" />
                                </div>
                                <div class="media-body">
                                  <h4>Blake Ruiz</h4>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                              </div>
                              <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="review_box">
                            <h4>Add a Review</h4>
                            <p>Your Rating:</p>
                            <ul class="list">
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <i class="fa fa-star"></i>
                                </a>
                              </li>
                            </ul>
                            <p>Outstanding</p>
                            <form class="row contact_form" action="<?php echo base_url('product_review') ?>" method="post" novalidate="novalidate">
                                <div class="col-md-12">
                                  <div class="form-group">
                            
                                    <input type="hidden" name="products_id" value="<?php echo $product_details->p_id ?>">
                                    <input type="hidden" name="customer_id" value="<?php echo $customer_id ?>">
                                  </div>
                                </div>
                            
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <textarea style="height: auto;" class="form-control" name="comment" rows="9" placeholder="Review"></textarea>
                                  </div>
                                </div>
                                <div class="col-md-12 text-right">
                                  <button type="submit" value="submit" class="btn">
                                    Submit Now
                                  </button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
       
            </main>