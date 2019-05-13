<?php include('includes/header-top.php');?>
<style>
    .card-body {
    padding: 0;
    margin: 5px;
}
thead tr{
        background-color: #2083e4;
}
#dateTime, #time{
        height: 40px;
}
.table td:nth-child(2)
{
    text-align: left;padding-left:20px;
}
</style>
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
            <div class="lobibox-notify-wrapper top right"></div>
            <div class="container-fluid">
                    
                <!-- Start Page Content -->
                <div class="row"> 
                        <div class="col-lg-3 newcard">
                           <div class="datetimeDiv">
                              <h4 class="datediv">Select Date-Time: </h4>
                           </div>
                        </div>
                        <div class="col-lg-2 newcard">
                           <div class="datetimeDiv">
                                <input type="text" class="dateTime form-control" autocomplete="off" data-date-format='yy-mm-dd'  id="dateTime"  placeholder="Date Time">
                           </div>
                        </div>                       
                        <div class="col-lg-2 newcard">
                           <div class="datetimeDiv">
                                <input type="time" name="time" id="time" autocomplete="off"  step="2" readonly="" class="time form-control">                              
                           </div>
                        </div>
                        <div class="col-lg-5 newcard" style="padding-left: 50px;text-align: left;">
                           <div class="datetimeDiv">
                               <button id="editTime" class="btn btn-primary"><i class="fa fa-edit"></i> </button>    
                               <button id="saveTime" class="btn btn-success"><i class="fa fa-save"></i> </button>                                      
                           </div>
                        </div>
                    <div class="col-lg-12">
                        <div class="card mydata">
                            <div class="card-body">                                      
                                    <button style="float:right;margin-bottom: 5px;" class="btn btn-primary" id="sendToPi" disabled=""><i class="fa fa-database"></i> Send Data to PI <i class="fa fa-send"></i></button>
                                    <button style="float:right;margin-bottom: 5px;margin-right: 20px;" class="btn btn-info" id="refresh"><i class="fa fa-refresh"></i> Refresh</button>
                                    <table id="Unit1" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                                   <th style="width: 10% !important;cursor: pointer;" onclick="sort_table('tbodyUnit1');">Sr.No.</th>
                                            <th style="width: 45% !important; text-align: left;padding-left:20px;">Unit 1 Parameters</th>
                                            <!--<th style="width: 20% !important;">Name</th>-->
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 15% !important;">Value</th>
                                            <th style="width: 20% !important;">Status</th>
                                           </tr>
                                        </thead>
                                        <tbody id="tbodyUnit1">
                                        </tbody>
                                    </table>
                            </div>
                                 <div class="card-body">   
                                    <table id="Unit2" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                           <th style="width: 10% !important;cursor: pointer;" onclick="sort_table('tbodyUnit2');">Sr.No.</th>
                                            <th style="width: 45% !important; text-align: left;padding-left:20px;">Unit 2 Parameters</th>
                                            <!--<th style="width: 20% !important;">Name</th>-->
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 15% !important;">Value</th>
                                            <th style="width: 20% !important;">Status</th>
                                           </tr>
                                        </thead>
                                        <tbody id="tbodyUnit2">
                                        </tbody>
                                    </table>
                                 </div>
                                 <div class="card-body">   
                                    <table id="Unit3" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                            <th style="width: 10% !important;cursor: pointer;" onclick="sort_table('tbodyUnit3');">Sr.No.</th>
                                            <th style="width: 45% !important; text-align: left;padding-left:20px;">Unit 3 Parameters</th>
                                            <!--<th style="width: 20% !important;">Name</th>-->
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 15% !important;">Value</th>
                                            <th style="width: 20% !important;">Status</th>
                                           </tr>
                                        </thead>
                                        <tbody id="tbodyUnit3">
                                        </tbody>
                                    </table>
                                 </div>
                                 <div class="card-body">   
                                    <table id="Unit4" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                           <th style="width: 10% !important;cursor: pointer;" onclick="sort_table('tbodyUnit4');">Sr.No.</th>
                                            <th style="width: 45% !important; text-align: left;padding-left:20px;">Unit 4 Parameters</th>
                                            <!--<th style="width: 20% !important;">Name</th>-->
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 15% !important;">Value</th>
                                            <th style="width: 20% !important;">Status</th>
                                           </tr>
                                        </thead>
                                        <tbody id="tbodyUnit4">
                                        </tbody>
                                    </table>
                                 </div>
                                 <div class="card-body">   
                                     <table id="other" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                            <th style="width: 10% !important;cursor: pointer;" onclick="sort_table('tbodyother');">Sr.No.</th>
                                            <th style="width: 45% !important; text-align: left;padding-left:20px;">Station Parameters</th>
                                            <!--<th style="width: 20% !important;">Name</th>-->
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 15% !important;">Value</th>
                                            <th style="width: 20% !important;">Status</th>
                                           </tr>
                                        </thead>
                                        <tbody id="tbodyother">
                                        </tbody>
                                    </table>
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
 <script src="<?php echo base_url();?>piadmin/js/manual_cppfiveFourtyDGR.js" type="text/javascript"></script>   
     <!-- Styles -->
</body>
</html>