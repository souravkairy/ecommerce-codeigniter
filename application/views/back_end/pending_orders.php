

 <section class="wrapper">

        <h3 style="float: left;"><i class="fa fa-angle-right"></i>Pending Order List</h3>
        <!-- <a style="float: right;  margin-top: 15px;" href="<?php echo base_url('Add_product_form') ?>" class="btn btn-primary">Add Products</a> -->
        
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel" style="padding: 20px;">
              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed" id="myTable">
                  <thead>
                    <tr>
                     
                      <th width="3%">No</th>
                      <th>Order ID</th>
                      <th>Customer ID</th>
                      <th>Payment Status</th>
                      <th>Total Ammount</th>
                      <th>D & T</th>
                      <th>Details</th>
                      <th>Invoice</th>
                      
                 
                      <th width="20%">Action</th>
                   
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;  

                     foreach ($pending_order as $row) {
                      
                    ?>
                    <tr>
                      <td><?php echo $i ?></td>
                      <td><?php echo $row->order_id ; ?></td>
                      <td><?php echo $row->customer_id; ?></td>

                      <td><?php echo $row->payment_id ?></td>
                      <td><?php echo $row->order_total ?></td>
                      <td><?php echo $row->order_date_time ?></td>
                      <td style="text-align: center;"> <a href="<?php echo base_url()?>s_o_details/<?php echo $row->customer_id ?>" title="" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
                      <td> <a href="<?php echo base_url()?>order_details/<?php echo $row->order_id ?>" title="" class="btn btn-success"><i class="fa fa-print"></i>Invoice</a></td>
                      
                      <td>
                        <a href="" title="" class="btn btn-success"><i class="fa fa-thumbs-up"></i>pending</a>
                    
                        
                        <a href="" title="" class="btn btn-danger"><i class="fa fa-trash-o"></i>Cancel</a>
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
    
      </section>

