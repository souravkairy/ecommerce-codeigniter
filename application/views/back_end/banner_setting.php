  <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Banner Setting</h3>
        <div class="row mt">
          <div class="col-lg-7">
          <!--    <div style="color: green ;">
    <?php
        $message = $this->session->message;
        if (isset($message)) {
            echo $message;
            $this->session->unset_userdata('message');
        }
        else{
            $unmessage = $this->session->unseccessfullmessage;
            echo $unmessage;
             // $this->session->unset_userdata('message');
        }


     ?>
 </div> --> 
          
            <div class="form-panel" style="padding: 18px;">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Banner One</h4>
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="<?php echo base_url('Save-Banner')?>" enctype="multipart/form-data">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Hedding</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="banner_heading" type="text" />
                    </div>
                  </div>

   
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Descriptions:</label>
                    <div class="col-lg-10">
                      <textarea class="form-control " name="banner_desc"></textarea>                    
                    </div>
                  </div>
               <div class="form-group last">
                  <label class="control-label col-md-3">Main Image</label>
                  <div class="col-lg-4 col-sm-3">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                    
                        <input type="file" class="btn btn-theme04" name="banner_image" />
                       
                       <!--  <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a> -->
                      </div>
                    </div>
               
                  </div>
                </div>
                      <div class="form-group ">
              
                    <label for="agree" class="control-label col-lg-2 col-sm-3">Status</label>
                    <div class="col-lg-4 col-sm-3">
                      <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="status" />
                    </div>
                  </div>
                  
            
              

                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
           <div class="col-lg-5">
             <div class="form-panel" style="padding: 18px;">
              <?php foreach ($banner_one as $row) {
                # code...
               ?>
              <img style="height: 150px; width: 150px;" src="<?php echo $row->banner_image ?>" alt="">
<?php } ?>
<h3><?php echo $row->banner_heading ?></h3>
<p><?php echo $row->banner_desc ?></p>

             </div>


           </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
