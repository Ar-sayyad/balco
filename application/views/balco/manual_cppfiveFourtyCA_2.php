<?php include('includes/header-top.php');?>
<style>
   .card-body {
    padding: 0;
    margin: 5px;
    border: 1px solid #6c757d85;
}
thead tr{
        background-color: #2083e4;
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
                                    <table id="tableData" class="display nowrap table table-striped  table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                           <tr>
                                            <th style="width: 10% !important;">Sr.No.</th>
                                            <th style="width: 50% !important;">Parameters</th>
                                            <th style="width: 10% !important;">UOM</th>
                                            <th style="width: 10% !important;">Value</th>
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
                      
                   
                    function editValue(id){                      
                          
                          $(".showedit"+id).removeClass('show');
                          $(".showedit"+id).addClass('hide');
                          
                          $(".undo"+id).removeClass('hide');
                          $(".undo"+id).addClass('show');   
                   }
                   function undo(id){                          
                          
                          $(".showedit"+id).removeClass('hide');
                          $(".showedit"+id).addClass('show');
                          
                          $(".undo"+id).removeClass('show');
                          $(".undo"+id).addClass('hide');            
                   }
                  var sr=1;    
          $.each(cpp540coalAnalysis, function (key) {
           var batch = {
        "database": {
            "Method": "GET",
            "Resource": baseServiceUrl + "attributes?path=" + cpp540coalAnalysis[key].tag_path + "|"+cpp540coalAnalysis[key].parameter
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
           $('#tableData tbody').append("<tr><td>"+sr+"</td><td>"+cpp540coalAnalysis[key].title+"</td><td><span class='show showuom"+sr+"'>"+uom+"</span><input type='text' id='uom"+sr+"' value='"+uom+"' class='form-control input-manual hide hideuom"+sr+"'></td><td><input type='text' id='value"+sr+"' value='"+attrValue+"' class='form-control input-manual WebId hideValue"+sr+"'></td><td style='padding-left: 3%;'><div class='show showedit"+sr+"'><button class='btn btn-primary btn-manual card' onclick='editValue("+sr+")';><i class='fa fa-edit'></i></button></div><div class='hide undo"+sr+"'><button class='btn btn-info btn-manual card' onclick='undo("+sr+")';><i class='fa fa-undo'></i></button><button class='btn btn-success btn-manual card' onclick='saveValue("+sr+",this.value)'; value='"+WebId+"'><i class='fa fa-save'></i></button></div></td></tr>")
            sr++;
    });
           
    });
    
      
                     /****Each Save Button START***/
    function saveValue(Id, WebId) {
                   var date =    $("#dateTime").val();
                   var time =    $("#time").val();
                    var dateTime = (date + ' ' + time);
                    var uom = $("#uom"+Id).val();
                    var dataValues = $("#value"+Id).val();
                    var url = baseServiceUrl + 'streams/' + WebId + '/recorded?WebId=' + WebId + '&bufferOption=DoNotBuffer&updateOption=Replace';
                    var data = [{
                        "Timestamp": dateTime,
                        "UnitsAbbreviation": uom,
                        "Good": true,
                        "Questionable": false,
                        "Value": dataValues
                    }];
                    var postData = JSON.stringify(data);
                    var postAjaxEF = processJsonContent(url, 'POST', postData, null, null);
                    $.when(postAjaxEF).fail(function() {
                        errormsg("Cannot Post The Data.");
                    });
                    $.when(postAjaxEF).done(function() {
                        var response = (JSON.stringify(postAjaxEF.responseText));
                        if (response == '""') {
                            successmsg("Data Updated successfully.");
                            undo(Id);
                            $(".showValue"+Id).text(dataValues);
                        } else {
                            var failure = postAjaxEF.responseJSON.Items;
                            $.each(failure, function(key) {
                                warningmsg("Status: " + failure[key].Substatus + " <br> Message: " + failure[key].Message);
                            })
                        }
                    });
    }
     /****Each Save Button END***/
    </script> 
     <!-- Styles -->
</body>
</html>