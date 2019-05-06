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
                                        <h4 class="datediv">Select Date: </h4>
                           </div>
                        </div>
                        <div class="col-lg-3 newcard">
                           <div class="datetimeDiv">
                                   <input type="text" class="dateTime form-control" autocomplete="off" data-date-format='yy-mm-dd'  id="dateTime"  placeholder="Date Time">
                                
                           </div>
                        </div>
                        <div class="col-lg-3 newcard">
                           <div class="datetimeDiv">
                                      <h4 class="datediv">Select Time: </h4>
                              
                           </div>
                        </div>
                        <div class="col-lg-3 newcard">
                           <div class="datetimeDiv">
                                <input type="time" name="time" id="time" autocomplete="off"  step="2" style="" class="time form-control">
                              
                           </div>
                        </div>
                    <div class="col-lg-12">
                        <div class="card mydata">
                            <div class="card-body"> 
                                     <button style="float:right;margin-bottom: 5px;" class="btn btn-primary" id="sendToPi"><i class="fa fa-database"></i> Send Data to PI <i class="fa fa-send"></i></button>
                                    
                                    <table id="ipp600unit1" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                            <!--<th style="width: 10% !important;">Sr.No.</th>-->
                                            <th style="width: 35% !important;">IPP600 Unit1 Parameters</th>
                                            <th style="width: 20% !important;">Name</th>
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 15% !important;">Value</th>
                                            <th style="width: 20% !important;">Status</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                            </div>
                                 <div class="card-body">   
                                    <table id="ipp600unit2" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                           <!--<th style="width: 10% !important;">Sr.No.</th>-->
                                            <th style="width: 35% !important;">IPP600 Unit2 Parameters</th>
                                            <th style="width: 20% !important;">Name</th>
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 15% !important;">Value</th>
                                            <th style="width: 20% !important;">Status</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                 </div>   
                                <div class="card-body">   
                                    <table id="ipp600other" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                           <!--<th style="width: 10% !important;">Sr.No.</th>-->
                                            <th style="width: 35% !important;">Oil & Other Parameters</th>
                                            <th style="width: 20% !important;">Name</th>
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 15% !important;">Value</th>
                                            <th style="width: 20% !important;">Status</th>
                                           </tr>
                                        </thead>
                                        <tbody>
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
  <script>       
            $("#sendToPi").click(function(){
                    $.each($(".WebId"), function(){ 
                        var Value = $(this).val();
                        var Id = $(this).attr("data-Id");
                        var WebId = $(this).attr("data-WebId");
                        //console.log(Id+" - "+Value+" - "+WebId);
                        $(".status"+Id).html("<img style='width:30px;height:30px;' src='<?php echo base_url();?>piadmin/images/loady.gif'>");
                        saveValue(Id, WebId,Value);
                        });
            });
            
               var now = new Date();       
                 $(function() {                   
                    var month = (now.getMonth() + 1);
                    var day = now.getDate();
                    if (month < 10)
                        month = "0" + month;
                    if (day < 10)
                        day = "0" + day;
                    var today =  month+ '/' + day + '/' + now.getFullYear();
                    $("#dateTime").val(today);
                    $("#dateTime").datepicker({dateFormat: 'mm/dd/yy',maxDate : '0'});
                });
                
                $(function(){  
                     var h = now.getHours(),
                          m = now.getMinutes(),
                          s = now.getSeconds();
                        if(h < 10) h = '0' + h; 
                        if(m < 10) m = '0' + m; 
                        if(s < 10) s = '0' + s;
                        $('input[type="time"][name="time"]').attr({'value': h + ':' + m + ':' + s });
                      });
                   
                  var sr=1;    
          $.each(ipp600DGR, function (key) {
           var batch = {
        "database": {
            "Method": "GET",
            "Resource": baseServiceUrl + "attributes?path=" + ipp600DGR[key].tag_path + "|"+ipp600DGR[key].parameter
        },       
        "values": {
            "Method": "GET",
            "RequestTemplate": {
                "Resource": baseServiceUrl + "streams/{0}/value"
            },
            "ParentIds": [
                "database"
            ],
            "Parameters": [
                "$.database.Content.WebId"
            ]
        }
    };
	var batchStr = JSON.stringify(batch, null, 2);
	var batchResult = processJsonContent(baseServiceUrl + "batch", 'POST', batchStr);
	$.when(batchResult).fail(function () {
		warningmsg("Cannot Launch Batch!!!")
	});
        
	$.when(batchResult).done(function () {       
                                        var valuesID=0;
                                        var WebId = batchResult.responseJSON.database.Content.WebId;
                                        var uom = batchResult.responseJSON.database.Content.DefaultUnitsNameAbbreviation;			
				let attrValue = "-";				
					if (batchResult.responseJSON.values.Content.Items !== undefined && (batchResult.responseJSON.values.Content.Status === undefined || batchResult.responseJSON.values.Content.Status < 400) && batchResult.responseJSON.values.Content.Items[valuesID].Status === 200) {
						var attrV = (batchResult.responseJSON.values.Content.Items[0].Content.Value);
						if (attrV !== "" && !isNaN(attrV)) {
							attrValue = (Math.round((attrV) * 100) / 100);
						}
					}  
          $('#'+ipp600DGR[key].unitname+' tbody').append("<tr><td>"+ipp600DGR[key].title+"</td><td>"+ipp600DGR[key].parameter+"</td><td>"+uom+"</td><td><input type='text' id='value"+sr+"' data-id='"+sr+"' data-WebId='"+WebId+"' value='"+attrValue+"' class='form-control input-manual WebId'></td><td><div class='status"+sr+"'></div></td></tr>")
            sr++;
    });
           
    });
    
      
                    /****Each Save Button START***/
    function saveValue(Id, WebId,Value) {
                   var date =    $("#dateTime").val();
                   var time =    $("#time").val();
                    var dateTime = (date + ' ' + time);
                    var url = baseServiceUrl + 'streams/' + WebId + '/value?WebId=' + WebId + '&updateOption=Replace';
                    var data = {
                        "Timestamp": dateTime,
                        "Good": true,
                        "Questionable": false,
                        "Value": Value
                    };
                    var postData = JSON.stringify(data);
                    var postAjaxEF = processJsonContent(url, 'POST', postData, null, null);
                    $.when(postAjaxEF).fail(function() {
                        //errormsg("Cannot Post The Data.");
                        $(".status"+Id).html("<span style='color:red;font-weight:500;font-size: 18px;'><i class='fa fa-times-circle'></i> Failed.</span>");
                    });
                    $.when(postAjaxEF).done(function() {
                        var response = (JSON.stringify(postAjaxEF.responseText));
                        if (response == '""') {
                            //successmsg("Data Updated successfully.");
                            $(".status"+Id).html("<span style='color:green;font-weight:500;font-size: 18px;'><i class='fa fa-check-circle'></i> Success.</span>");
                        } else {
                            var failure = postAjaxEF.responseJSON.Items;
                            $.each(failure, function(key) {
                               // warningmsg("Status: " + failure[key].Substatus + " <br> Message: " + failure[key].Message);
                                 $(".status"+Id).html("<span style='color:red;font-weight:500;font-size: 18px;'><i class='fa fa-times-circle'></i> Failed.</span>");
                            })
                        }
                    });
    }
     /****Each Save Button END***/
    </script> 
     <!-- Styles -->
</body>
</html>