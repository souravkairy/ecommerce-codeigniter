

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>ZYL ZYL Furniture Admin Panel</title>

  <!-- Favicons -->
  <link href="<?php echo base_url()?>backend_asset/img/favicon.png" rel="icon">
  <link href="<?php echo base_url()?>backend_asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>backend_asset/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo base_url()?>backend_asset/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>backend_asset/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>backend_asset/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>backend_asset/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url()?>backend_asset/css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <script src="<?php echo base_url()?>backend_asset/lib/chart-master/Chart.js"></script>


  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="<?php echo base_url('admin_dashboard') ?>" class="logo"><b><span>ZYL</span>Furniture</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
        <!--   <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li> -->
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme"> <?php echo sizeof($all_mail) ?>  </span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have <!-- <?php echo sizeof($all_mail) ?> --> new messages</p>
              </li>
              <?php foreach ($all_mail as $row) {
                
              ?>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="<?php echo base_url()?>backend_asset/img/user.png"></span>
                  <span class="subject">
                  <span class="from"><?php echo $row->c_name?></span>
                  <span class="time"><?php echo $row->time?></span>
                  </span>
                  <span class="message">
                 <?php echo $row->m_sub?>
                  </span>
                  </a>
              </li>
            <?php } ?>
        
              <li>
                <a href="<?php echo base_url('mail')?>">See all Orders</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
       <!--    <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning"><?php echo sizeof($pending_order) ?></span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have <?php echo sizeof($pending_order) ?> new Orders</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                 Some Orders Are Pending.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
     
              <li>
                <a href="<?php echo base_url('Pending_order') ?>">See all Orders</a>
              </li>
            </ul>
          </li> -->
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="<?php echo base_url('logout')?>">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
     <?php echo $sidebar ?>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <?php echo $dashboard ?>
    </section>
    <!--main content end-->
    <!--footer start-->
    <!--<footer class="site-footer">-->
    <!--  <div class="text-center">-->
    <!--    <p>-->
    <!--      &copy;  All rights reserved By <strong style="color: black"> ZYL Furniture</strong>-->
    <!--    </p>-->
    <!--    <div class="credits">-->
     
    <!--      Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a> Developed by <a style="color: black" href="https://souravkairy.me" target="_blank"><strong>Sourav Kairy</strong></a>-->
    <!--    </div>-->
    <!--    <a href="index.html#" class="go-top">-->
    <!--      <i class="fa fa-angle-up"></i>-->
    <!--      </a>-->
    <!--  </div>-->
    <!--</footer>-->
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url()?>backend_asset/lib/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url()?>backend_asset/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?php echo base_url()?>backend_asset/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?php echo base_url()?>backend_asset/lib/jquery.scrollTo.min.js"></script>
  <script src="<?php echo base_url()?>backend_asset/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>backend_asset/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="<?php echo base_url()?>backend_asset/lib/common-scripts.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>backend_asset/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>backend_asset/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="<?php echo base_url()?>backend_asset/lib/sparkline-chart.js"></script>
  <script src="<?php echo base_url()?>backend_asset/lib/zabuto_calendar.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="<?php echo base_url()?>backend_asset/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
 <!--   <script src="<?php echo base_url()?>backend_asset/lib/advanced-form-components.js"></script> -->

  <script type="text/javascript">



    $(document).ready( function () {
    $('#myTable').DataTable();
} );
    
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
