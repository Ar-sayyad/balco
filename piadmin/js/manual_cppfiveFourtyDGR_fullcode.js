   $("#sendToPi").click(function(){
                    $.each($(".WebId"), function(){ 
                        var Value = $(this).val();
                        var Id = $(this).attr("data-Id");
                        var WebId = $(this).attr("data-WebId");
                        //console.log(Id+" - "+Value+" - "+WebId);
                        $(".status"+Id).html("<img style='width:30px;height:30px;' src='"+baseurl+"/piadmin/images/loady.gif'>");
                        saveValue(Id, WebId,Value);
                        });
            });
             $("#editTime").click(function(){
            $("#time").removeAttr("readonly")
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
                        $('input[type="time"][name="time"]').attr({'value': '05:00:00' });
                      });
                   
                  var sr=1;    
          $.each(cpp540DGR, function (key) {
           var batch = {
        "database": {
            "Method": "GET",
            "Resource": baseServiceUrl + "attributes?path=" + cpp540DGR[key].tag_path + "|"+cpp540DGR[key].parameter
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
          $('#'+cpp540DGR[key].unitname+' tbody').append("<tr><td style='text-align:left;padding-left:20px;'>"+cpp540DGR[key].title+"</td><td>"+uom+"</td><td><input type='text' id='value"+sr+"' data-id='"+sr+"' data-WebId='"+WebId+"' value='"+attrValue+"' class='form-control input-manual WebId'></td><td><div class='status"+sr+"'></div></td></tr>")
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