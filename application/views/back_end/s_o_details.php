




     <section class="wrapper">
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="invoice-body">
                <div class="pull-left">
                  <h1>Order Details</h1>
                
                </div>
  
                <!-- /col-lg-10 -->
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width:60px" class="text-center">No</th>
                      <th class="text-left">Product name</th>
                      <th style="width:140px" class="text-right">UNIT PRICE</th>
                      <th style="width:60px" class="text-center">QTY</th>
                      <th style="width:90px" class="text-right">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($s_o_details as $row) {
                      # code...
                     ?>
                    <tr>
                      <td class="text-center">1</td>
                      <td><?php echo $row->product_name ?></td> 
                      <td class="text-right"><?php echo $row->product_price?></td>
                      <td class="text-right"><?php echo $row->product_sales_qty?></td> 

                      <td class="text-right"><?php echo $row->product_price * $row->product_sales_qty?></td>
                    </tr>
                  <?php } ?>
                      <tr>
                      <td colspan="2" rowspan="4">
                        <h4>Terms and Conditions</h4>
                        <p>Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.</p>
                      </td>
                      <td>Shipping : 50</td>
                        <td class="text-right"><strong>Subtotal</strong></td>
                        <td class="text-right"><?php echo $row->order_total ?></td>  
                    </tr>
             
                    <tr>
                       <td></td>

                      <td class="text-right no-border"><strong>4 % VAT Included in Total</strong></td>
                      <td class="text-right"><?php echo $vat= ($row->order_total * 4) / 100 ?></td>
                    </tr>
                    <tr>
                       <td></td>

                      <td class="text-right no-border">
                        <div class="well well-small green"><strong>Total</strong></div>
                      </td>
                      <td class="text-right"><strong><?php echo $row->order_total +$vat ?></strong></td>
                    </tr>
                  
                    
                    
                  </tbody>
                </table>
                <br>
                <br>

                              <!-- /pull-left -->
                <div class="pull-right">
                  <h2>Shipping Information</h2>
                </div>
             
                <br>
            
                <div class="row">
                  <div class="col-md-7">
                    <h4><?php echo $row->c_first_name?> <?php echo $row->c_last_name?></h4> 
                    <address>
                  <strong><?php echo $row->c_phone_num?></strong><br> 
                  <?php echo $row->c_email?><br>
                  <?php echo $row->address1?><br>
                  <abbr title="Phone">P:</abbr> <?php echo $row->c_phone_num?><br>
                  <?php echo $row->town?><br>
                  <?php echo $row->post_code?><br>
                  <?php echo $row->payment_id?><br>
                  <?php echo $row->address1?><br>
                  <?php echo $row->order_date_time?><br>
               
                </address>
                  </div>
                  <!-- /col-md-9 -->
                  <div class="col-md-5">
                    <br>
                    <div>
                      <div class="pull-left"> INVOICE NO : </div>
                      <div class="pull-right"> 000283 </div>
                      <div class="clearfix"></div>
                    </div>
                    <div>
                      <!-- /col-md-3 -->
                      <div class="pull-left"> INVOICE DATE : </div>
                      <div class="pull-right"> <?php echo $row->order_date_time?></div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- /row -->
                    <br>
                    <div class="well well-small green">
                      <div class="pull-left"> Total Due : </div>
                      <div class="pull-right"><?php echo $row->order_total +$vat ?></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                  <!-- /invoice-body -->
                </div>
              </div>
              <!--/col-lg-12 mt -->
      </section>