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
               <div class="col-12">
                  <div class="card mydata">
                     <div class="card-body">
                        <div class="table-responsive">
                           <table id="example23" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                              <thead>
                                 <tr style="background-color: #2177cd;">
                                    <th rowspan="2">KPI's - Plant Performance</th>
                                    <th colspan="2">CPP 1140 MW</th>
                                    <th colspan="2">CPP 540 MW</th>
                                    <th colspan="2">CPP 600 MW</th>
                                    <th colspan="2">IPP 600 MW</th>
                                    <th colspan="2">TPP 1200 MW</th>
                                    <th colspan="2">TPP 1740 MW</th>
                                 </tr>
                                 <tr style="background-color: #2177cd;">
                                    <th>BP</th>
                                    <th>ACT</th>
                                    <th>BP</th>
                                    <th>ACT</th>
                                    <th>BP</th>
                                    <th>ACT</th>
                                    <th>BP</th>
                                    <th>ACT</th>
                                    <th>BP</th>
                                    <th>ACT</th>
                                    <th>BP</th>
                                    <th>ACT</th>
                                 </tr>
                              </thead>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
   <script src="<?php echo base_url();?>piadmin/js/PlantHead.js" type="text/javascript"></script>
   <!-- Chart code -->
</body>
</html>