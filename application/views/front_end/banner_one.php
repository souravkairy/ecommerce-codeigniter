 <!--Right Contents  -->
        <!--     <div class="tailor-offers"></div>

            <div class="tailor-details">
                <h2>Best Furniture<br> manufacturer</h2> 
                <p>Suspendisse varius enim in eros elementum 
                    tristique. Duis cursus, mi quis viverra ornare, eros 
                dolor interdum nulla.</p>
                <p class="pera-bottom">Suspendisse varius enim in eros elementum 
                    tristique. Duis cursus, mi quis viverra ornare, eros 
                dolor interdum nulla.</p>
                <a href="#" class="btn">Discover More</a>
            </div> -->
  <?php foreach ($banner_one_data as $row) {
                    # code...
                 ?>
                  <div class="tailor-offers">
                      <img style="width: 100%;height: 570px;" src="<?php echo $row->banner_image; ?>" alt="">
                  </div>
            <!-- left Contents -->
            <div class="tailor-details">
              
                <h2><?php echo $row->banner_heading; ?></h2> 
                <p><?php echo $row->banner_desc; ?></p>
               
                <a href="#" class="btn">Discover More</a>
           
            </div>
                 <?php } ; ?>