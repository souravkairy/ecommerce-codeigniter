
<?php 
$name = $this->session->userdata('user_name')
?>

 <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="<?php echo base_url()?>backend_asset/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $name ?></h5>
          <li class="mt">
            <a class="active" href="<?php echo base_url('admin_dashboard') ?>">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-bars"></i>
              <span>Product Category</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url('Category') ?>">Category</a></li>
              <li><a href="<?php echo base_url('Sub_category') ?>">Sub-Category</a></li>
              <li><a href="<?php echo base_url('Brand') ?>">Brand</a></li>
             
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-briefcase"></i>
              <span>Products</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url('Add_product_form') ?>">Add Products</a></li>
              <li><a href="<?php echo base_url('Products') ?>">All Products</a></li>
              <li><a href="<?php echo base_url('P_product') ?>">Popular Product</a></li>
              <li><a href="<?php echo base_url('L_product') ?>">Like Product</a></li>
              <li><a href="<?php echo base_url('T_product') ?>">Top Products</a></li>
        
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-money"></i>
              <span>Product Invoice</span>
              </a>
            <ul class="sub">
              <li><a href="<?php echo base_url('Pending_order') ?>">Pending Order</a></li>
              <li><a href="<?php echo base_url('complete_order') ?>">Complete Order</a></li>
              <li><a href="<?php echo base_url('Total_order') ?>">Total Order</a></li>
              <li><a href="#">Invoice</a></li>
              
            </ul>
          </li>
              <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Setting</span>
              </a>
            <ul class="sub">
              <li><a href="#">Main Slider Setting</a></li>
              <li><a href="<?php echo base_url('Banner-Set') ?>">All Banner Setting</a></li>
              <li><a href="<?php echo base_url('') ?>">Logo Setting</a></li>
              <li><a href="<?php echo base_url('') ?>">Social Logo Setting</a></li>
       <!--        <li><a href="<?php echo base_url('') ?>">Like Product</a></li>
              <li><a href="<?php echo base_url('T_product') ?>">Top Products</a></li> -->
        
            </ul>
          </li>
      
     
          <li>
            <a href="<?php echo base_url('mail')?>">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <!-- <span class="label label-theme pull-right mail-info">2</span> -->
              </a>
          </li>
     
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
     
      
        </ul>
        <!-- sidebar menu end-->
      </div>