
   


      <section class="wrapper">
        <div class="col-lg-12 mt">
          <div class="row content-panel">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="invoice-body">
                <div class="pull-left">
                  <h1>ZYL Furniture</h1>
                  <address>
                <strong>Anamika 17/A</strong><br>
                TB GATE , SHAHI EDGHA<br>
                SYLHET-3100<br>
                BANGLADESH<br>
                <abbr title="Phone">P:</abbr> +88 01797 338420
              </address>
                </div>
                <!-- /pull-left -->
                <div class="pull-right">
                  <h2>invoice</h2>
                </div>
                <!-- /pull-right -->
                <div class="clearfix"></div>
                <br>
                <br>
                <br>
                <div class="row">
                  <div class="col-md-8">
                    <h4>JOYTI CHAKRABORTY</h4>
                    <address>
                  <strong>CHIF BUSINESS ANALYST</strong><br>
                     joyti.c@zylfurniture.com<br>
               
                <abbr title="Phone">P:</abbr> +88 01641 214560
                </address>
                  </div>
                     <?php
                    $i = 1;


                     foreach ($order_details as $row) {
                      # code...
                     ?>
                  <!-- /col-md-9 -->
                  <div class="col-md-4">
                    <br>
                    <div>
                      <div class="pull-left"> INVOICE NO : </div>
                      <div class="pull-right"> 000283 </div>
                      <div class="clearfix"></div>
                    </div>
                    <div>
                      <!-- /col-md-3 -->
                      <div class="pull-left"> INVOICE DATE : </div>
                      <div class="pull-right">   <?php echo $row->order_date_time?> </div>
                      <div class="clearfix"></div>
                    </div>
                    <!-- /row -->
                    <br>
                <!--     <div class="well well-small green">
                      <div class="pull-left"> Total Due : </div>
                      <div class="pull-right"> 8,000 USD </div>
                      <div class="clearfix"></div>
                    </div> -->
                  </div>
                  <!-- /invoice-body -->
                </div>
                <!-- /col-lg-10 -->
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width:60px" class="text-center">QTY</th>
                      <th class="text-left">DESCRIPTION</th>
                      <th style="width:140px" class="text-right">UNIT PRICE</th>
                      <th style="width:140px" class="text-right">QTY</th>
                      <th style="width:90px" class="text-right">TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>


                 
                    <tr>
                      <td class="text-center"><?php echo $i ?></td>
                      <td><?php echo $row->product_name ?></td>
                      <td class="text-right"><?php echo $row->product_price ?></td>
                      <td class="text-right"><?php echo $row->product_sales_qty ?></td>
                      <td class="text-right"><?php echo $row->product_price * $row->product_sales_qty?></td>
                    </tr>
                 <?php $i++;
               }
                 ?>
                        
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
              </div>
              <!--/col-lg-12 mt -->
      </section>
 