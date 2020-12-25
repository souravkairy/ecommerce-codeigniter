<div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                        <h2>Top Pick</h2>
                        <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</P>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($all_t_product as $row) {
                    # code...
                 ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="popular-img">
                            <img src="<?php echo $row->image1?>" alt="">
                        </div>
                        <div class="popular-caption">
                            <h2><a href="<?php echo base_url()?>product-details/<?php echo  $row->p_id ?>"><?php echo $row->p_name?></a></h2>
                            <h3><a href="product_details.html"><?php echo $row->brand_name?></a></h3>
                            <span><?php echo '৳'. $row->s_price?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
               
            </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn">
                 <a href="product.html" class="border-btn">Discover More</a>
             </div>
         </div>
     </div>