<?php include('includes/header-top.php');?>
<style>
    iframe{
    height: 700px;
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
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="mydiv">
                                    <iframe id="frame" src="http://59.144.10.120/Coresight/PB/#/PBDisplays/396"  width="100%" height="300">
                                    </iframe>
                                </div>
                                <button id="button">Load</button>
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
    <script>
        $(document).ready(function(){
        $("#button").click(function () { 
           $url= "http://59.144.10.120/Coresight/PB/#/PBDisplays/396";
           alert($url);
          
           $("#frame").attr("src", $url);
        });
        });
    </script>
</body>
</html>