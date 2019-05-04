<?php include('includes/header-top.php');?>
<style>
#plantloadfactor,#plantAvailabilityfactor{
  height: 600px;
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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Plant Load Factor (PLF)</h4>
                            </div>
                            <div class="card-body">
                                <div id="plantloadfactor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title center">
                                <h4>Plant Availability Factor (PAF)</h4>
                            </div>
                            <div class="card-body">
                                <div id="plantAvailabilityfactor"></div>
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
<script src="<?php echo base_url();?>piadmin/js/dataloader.min.js"></script>

<!-- Chart code -->
<script>
var chart1 = AmCharts.makeChart("plantloadfactor", {
    "type": "serial",
    "theme": "light",
    "dataLoader": {
        "url": "<?php echo base_url();?>piGraph/getPlotData"
    },
    "valueAxes": [{
        "id": "ValueAxis-1",
        "position": "bottom",
        "axisAlpha": 1,
        "titleFontSize": 14,
        "fontSize": 11,
        "title": "PLF in (%)"
    }],
    "gridAboveGraphs": true,
    "startDuration": 1,
    "graphs": [{
        "balloonText": "[[category]]: <br><b>[[value]]</b>",
        "fillAlphas": 1,
        "lineAlpha": 0.1,
        "type": "column",
        "valueField": "value",
        // "colorField": "color",
    }],
    "plotAreaFillAlphas": 0.1,
    "depth3D": 10,
    "angle": 30,
    "allLabels": [],
    "balloon": {
        "drop": true,
        "cornerRadius": 5,
        "adjustBorderColor": false,
        "color": "#ffffff",
        "fixedPosition": true,
        "fontSize": 10
    },
    "chartCursor": {
        "pan": true,
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "cursorAlpha": 0.05,
        "valueLineAlpha": 0.2,
        "fullWidth": true,
        "valueBalloonsEnabled": true,
        "categoryBalloonEnabled": false

    },

    "categoryField": "Name",
    "categoryAxis": {
        "gridPosition": "start",
        "position": "left",
        "labelRotation": 90,
        "fontSize": 11
    },
});
setInterval("setDataSet1('<?php echo base_url();?>piGraph/getPlotData')", 20000);

function setDataSet1(dataset_url) {
    AmCharts.loadFile(dataset_url, {}, function(data) {
        chart1.dataProvider = AmCharts.parseJSON(data);
        chart1.validateData();
        chart2.dataProvider = AmCharts.parseJSON(data);
        chart2.validateData();
    });

}

var chart2 = AmCharts.makeChart("plantAvailabilityfactor", {
    "type": "pie",
    "theme": "light",
    "dataLoader": {
        "url": "<?php echo base_url();?>piGraph/getPlotData"
    },
    "balloon": {
        "drop": true,
        //"cornerRadius": 5,
        "adjustBorderColor": false,
        "color": "#ffffff",
        "fixedPosition": true,
        "fontSize": 10
    },
    "legend": {
        "useGraphSettings": false,
        "position": "bottom",
        "bulletType": "round",
        "equalWidths": false,
        "valueWidth": 50,
        //"color": "#FFFFFF"
    },
    "valueField": "value",
    "titleField": "Name",
    //"colorField": "color",
    "adjustBorderColor": false,
    "labelsEnabled": true,
    "innerRadius": "20%",
    "outlineColor": "",
    "startDuration": 1,
    "labelRadius": 10,
    pullOutRadius: 70,
    "depth3D": 10,
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b></span>",
    "angle": 20,
    "export": {
        "enabled": true
    }
});
</script>
</body>
</html>