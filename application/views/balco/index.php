<?php include('includes/header-top.php');?>
<body class="fix-header fix-sidebar">
   <?php include('includes/preloader.php');?>
   <!-- Main wrapper  -->
   <div id="main-wrapper">
      <?php include('includes/header.php');?>
      <!-- End header header -->
      <!-- Left Sidebar  -->
      <div class="left-sidebar">
         <!-- Sidebar scroll-->
         <?php include('includes/sidebar.php');?>
         <!-- End Sidebar scroll-->
      </div>
      <!-- End Left Sidebar  -->
      <!-- Page wrapper  -->
      <div class="page-wrapper">
         <!-- Bread crumb -->
         <?php include('includes/titlebar.php');?>
         <!-- End Bread crumb -->
         <!-- Container fluid  -->
         <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
               <div class="col-md-3">
                  <div class="card bg-primary p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                           <p class="m-b-0">Coal Cost (Rs/kWh)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-bluevila p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> XX,XXX</h2>
                           <p class="m-b-0">Coal Cost (Rs/kWh)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-danger p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> XX,XXX</h2>
                           <p class="m-b-0">Import Grid Cost (Rs/kWh)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-success p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XX,XXX</h2>
                           <p class="m-b-0">Total Cost (Rs/kWh)</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div class="card bg-info p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="ti-server f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="ti-server"></i> XXX</h2>
                           <p class="m-b-0">Coal Stock (MT)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-warning p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                           <p class="m-b-0">Power Smelter Cost (Rs/Ton)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-dark  p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                           <p class="m-b-0">Electricity Duty (Rs/kWh)</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card bg-brown p-20">
                     <div class="media widget-ten">
                        <div class="media-left meida media-middle">
                           <span><i class="fa fa-inr f-s-40"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                           <h2 class="color-white"><i class="fa fa-inr"></i> X,XX,XXX</h2>
                           <p class="m-b-0">EBIDTA</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        <?php include('includes/dashboardDiv.php');?>
            <!-- End PAge Content -->
         </div>
         <!-- End Container fluid  -->
         <!-- footer -->
         <?php include('includes/footer.php');?>
         <!-- End footer -->
      </div>
      <!-- End Page wrapper  -->
   </div>
   <!-- End Wrapper -->
   <!-- All Jquery -->
   <?php include('includes/footer-min.php');?>
   <!-- Styles -->
   <!-- Chart code -->   
   <script src="<?php echo base_url();?>piadmin/js/dashboard.js" type="text/javascript"></script>
   <!-- Chart code -->
</body>
</html>