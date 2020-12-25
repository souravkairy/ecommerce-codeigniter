 <section class="wrapper">

        <h3 style="float: left;"><i class="fa fa-angle-right"></i> Sub Category table</h3>
        <button style="float: right;  margin-top: 15px;" class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Add Sub category</button>
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel" style="padding: 20px;">
              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" id="myTable">
                  <thead>
                    <tr>
                     
                      <th width="5%">No</th>
                      <th>Sub Category Name</th>
                      <th>Category Name</th>
                      <th width="20%">Action</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;

                     foreach ($all_sub_category as $row) {
                      # code...
                    ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $row->sub_cat_name; ?></td>
                      <td><?php echo $row->category_name; ?></td>
                      
                      <td>
                        <a href="" title="" class="btn btn-success"><i class="fa fa-thumbs-up"></i></a>
                        <a href="" title="" class="btn btn-warning"><i class="fa fa-thumbs-down"></i></a>
                        <a href="" title="" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        
                        <a href="" title="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                      </td>
           
                    </tr>
                  <?php $i++;  } ?>
           
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
      
        <!-- /row -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sub Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post" action="<?php echo base_url('add_sub_category')?>">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub Category Name:</label>
            <input type="text" class="form-control" id="recipient-name" name="sub_category_name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Category Name</label>
            <select class="form-control" name="category_id" >
              <option value="">Select Category</option>

              <?php foreach ($all_category as $row) {
                # code...
              ?>
              <option value="<?php echo $row->category_id ?>"><?php echo $row->category_name ?></option>
              
              
              <?php } ?>
            </select>
            


           
          </div>
          <div class="modal-footer">
        <button type="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
      </section>

