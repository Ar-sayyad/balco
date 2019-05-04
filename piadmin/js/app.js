var baseServiceUrl="https://bldb:4440/piwebapi/";
var user="cmdc";
var pass="system@01";
var afServerName="BLDB";
var afDatabaseName="BALCOPOWER\\VEDANTA\\BALCO\\WebPortal";
var enableBasicAuth=!0;
var processJsonContent = function (url, type, data) {
	return $.ajax({
		url: encodeURI(url),
		headers: {
			'X-Requested-With': 'XMLHttpRequest'
		},
		type: type,
		data: data,
		contentType: "application/json; charset=UTF-8",
		crossDomain: !0,
		xhrFields: {
			withCredentials: !0
		},
		beforeSend: function (xhr) {
			if (enableBasicAuth) {
				xhr.setRequestHeader("Authorization", makeBasicAuth(user, pass))
			}
		}
	})
};
var makeBasicAuth = function (user, password) {
	var tok = user + ':' + password;
	var hash = window.btoa(tok);
	return "Basic " + hash
}


var cpp540coalAnalysis=[
           {
                "title":"CPP540 Coal Analysis GCV",
                "UOM":"kcal/kg",
                "status":"Value written",
                "tagname":"BALCO_CPP540_CoalAnalysis_GCV.Man",
                "parameter":"CoalAnalysis_GCV.Man",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|CoalAnalysis_GCV.Man"
           },
           {
                "title":"CPP540 Coal Analysis Fixed Carbon content",
                "UOM":"%",
                "status":"Value written",
                "tagname":"BALCO_CPP540_CoalAnalysis_Fixed_Carbon.Man",
                "parameter":"CoalAnalysis_Fixed_Carbon.Man",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|CoalAnalysis_Fixed_Carbon.Man"
           },
           {
                "title":"CPP540 Coal Analysis Moisture content",
                "UOM":"%",
                "status":"Value written",
                "tagname":"BALCO_CPP540_CoalAnalysis_Moisture.Man",
                "parameter":"CoalAnalysis_Moisture.Man",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_CoalAnalysis_Moisture.Man"
           },
           {
                "title":"CPP540 Coal Analysis Volatile Matter content",
                "UOM":"%",
                "status":"Value written",
                "tagname":"BALCO_CPP540_CoalAnalysis_Volatile_Matter.Man",
                "parameter":"CoalAnalysis_Volatile_Matter.Man",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_CoalAnalysis_Volatile_Matter.Man"
           },
           {
                "title":"CPP540 Coal Analysis Ash content",
                "UOM":"%",
                "status":"Value written",
                "tagname":"BALCO_CPP540_CoalAnalysis_Ash.Man",
                "parameter":"CoalAnalysis_Ash.Man",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_CoalAnalysis_Ash.Man"
           },
           {
                "title":"CPP540 Coal Analysis Unburnt Carbon in Bottom Ash",
                "UOM":"%",
                "status":"Value written",
                "tagname":"BALCO_CPP540_CoalAnalysis_Unburnt_BotAsh.Man",
                "parameter":"CoalAnalysis_Unburnt_BotAsh.Man",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_CoalAnalysis_Unburnt_BotAsh.Man"
           },
           {
                "title":"CPP540 Coal Analysis Unburnt Carbon in Fly Ash",
                "UOM":"%",
                "status":"Value written",
                "tagname":"BALCO_CPP540_CoalAnalysis_Unburnt_FlyAsh.Man",
                "parameter":"CoalAnalysis_Unburnt_FlyAsh.Man",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_CoalAnalysis_Unburnt_FlyAsh.Man"
           }
   
];

var cpp540DGR=[
           {
                "title":"Unit1 Coal Consumption",
                "sr":1,
                "UOM":"MT",
                "unitname":"Unit1",
                "tagname":"BALCO_CPP540_U1_COAL_CONS.MAN",
                "parameter":"COAL_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%201",
                "path":"path={0}|BALCO_CPP540_U1_COAL_CONS.MAN"
           },
           {
                "title":"Unit1 LDO Consumption",
                 "sr":2,
                "UOM":"kl",
                "unitname":"Unit1",
                "tagname":"BALCO_CPP540_U1_LDO_CONS.MAN",
                "parameter":"LDO_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%201",
                "path":"path={0}|BALCO_CPP540_U1_LDO_CONS.MAN"
           },
           {
                "title":"Unit1 HFO Consumption",
                 "sr":3,
                "UOM":"kl",
                "unitname":"Unit1",
                "tagname":"BALCO_CPP540_U1_HFO_CONS.MAN",
                "parameter":"COAL_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%201",
                "path":"path={0}|BALCO_CPP540_U1_HFO_CONS.MAN"
           },
           {
                "title":"Unit1 Trippings",
                 "sr":4,
                "UOM":"-",
                "unitname":"Unit1",
                "tagname":"BALCO_CPP540_U1_TRIPS.MAN",
                "parameter":"TRIPS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%201",
                "path":"path={0}|BALCO_CPP540_U1_TRIPS.MAN"
           },
           //UNIT2
           {
                "title":"Unit2 Coal Consumption",
                 "sr":5,
                "UOM":"MT",
                "unitname":"Unit2",
                "tagname":"BALCO_CPP540_U2_COAL_CONS.MAN",
                "parameter":"COAL_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%202",
                "path":"path={0}|BALCO_CPP540_U2_COAL_CONS.MAN"
           },
           {
                "title":"Unit2 LDO Consumption",
                 "sr":6,
                "UOM":"kl",
                "unitname":"Unit2",
                "tagname":"BALCO_CPP540_U2_LDO_CONS.MAN",
                "parameter":"LDO_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%202",
                "path":"path={0}|BALCO_CPP540_U2_LDO_CONS.MAN"
           },
           {
                "title":"Unit2 HFO Consumption",
                 "sr":7,
                "UOM":"kl",
                "unitname":"Unit2",
                "tagname":"BALCO_CPP540_U2_HFO_CONS.MAN",
                "parameter":"HFO_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%202",
                "path":"path={0}|BALCO_CPP540_U2_HFO_CONS.MAN"
           },
           {
                "title":"Unit2 Trippings",
                 "sr":8,
                "UOM":"-",
                "unitname":"Unit2",
                "tagname":"BALCO_CPP540_U2_TRIPS.MAN",
                "parameter":"TRIPS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%202",
                "path":"path={0}|BALCO_CPP540_U2_TRIPS.MAN"
           },
           //unit 3
           {
                "title":"Unit3 Coal Consumption",
                 "sr":9,
                "UOM":"MT",
                 "unitname":"Unit3",
                "tagname":"BALCO_CPP540_U3_COAL_CONS.MAN",
                "parameter":"COAL_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%203",
                "path":"path={0}|BALCO_CPP540_U3_COAL_CONS.MAN"
           },
           {
                "title":"Unit3 LDO Consumption",
                 "sr":10,
                "UOM":"kl",
                "unitname":"Unit3",
                "tagname":"BALCO_CPP540_U3_LDO_CONS.MAN",
                "parameter":"LDO_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%203",
                "path":"path={0}|BALCO_CPP540_U3_LDO_CONS.MAN"
           },
           {
                "title":"Unit3 HFO Consumption",
                 "sr":11,
                "UOM":"kl",
                "unitname":"Unit3",
                "tagname":"BALCO_CPP540_U3_HFO_CONS.MAN",
                "parameter":"HFO_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%203",
                "path":"path={0}|BALCO_CPP540_U3_HFO_CONS.MAN"
           },
           {
                "title":"Unit3 Trippings",
                 "sr":12,
                "UOM":"-",
                "unitname":"Unit3",
                "tagname":"BALCO_CPP540_U3_TRIPS.MAN",
                "parameter":"TRIPS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%203",
                "path":"path={0}|BALCO_CPP540_U3_TRIPS.MAN"
           },
           //unit 4
           {
                "title":"Unit4 Coal Consumption",
                 "sr":13,
                "UOM":"MT",
                "unitname":"Unit4",
                "tagname":"BALCO_CPP540_U4_COAL_CONS.MAN",
                "parameter":"COAL_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%204",
                "path":"path={0}|BALCO_CPP540_U4_COAL_CONS.MAN"
           },
           {
                "title":"Unit4 LDO Consumption",
                 "sr":14,
                "UOM":"kl",
                "unitname":"Unit4",
                "tagname":"BALCO_CPP540_U4_LDO_CONS.MAN",
                "parameter":"LDO_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%204",
                "path":"path={0}|BALCO_CPP540_U4_LDO_CONS.MAN"
           },
           {
                "title":"Unit4 HFO Consumption",
                 "sr":15,
                "UOM":"kl",
                "unitname":"Unit4",
                "tagname":"BALCO_CPP540_U4_HFO_CONS.MAN",
                "parameter":"HFO_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%204",
                "path":"path={0}|BALCO_CPP540_U4_HFO_CONS.MAN"
           },
           {
                "title":"Unit4 Trippings",
                 "sr":16,
                "UOM":"-",
                "unitname":"other",
                "tagname":"BALCO_CPP540_U4_TRIPS.MAN",
                "parameter":"TRIPS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW\\Unit%204",
                "path":"path={0}|BALCO_CPP540_U4_TRIPS.MAN"
           },
           //oil & other parameters
           {
                "title":"CPP II Import from GIS",
                 "sr":17,
                "UOM":"MU",
                "unitname":"other",
                "tagname":"BALCO_CPP540_IMPORT_GIS.MAN",
                "parameter":"IMPORT_GIS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_IMPORT_GIS.MAN"
           },
           {
                "title":"Total CTU Import",
                 "sr":18,
                "UOM":"MU",
                "unitname":"other",
                "tagname":"BALCO_CPP540_TOT_IMPORT_CTU.MAN",
                "parameter":"TOT_IMPORT_CTU.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_TOT_IMPORT_CTU.MAN"
           },
           {
                "title":"Supply to Plant I",
                 "sr":19,
                "UOM":"MU",
                "unitname":"other",
                "tagname":"BALCO_CPP540_PLANT1_SUPPLY.MAN",
                "parameter":"PLANT1_SUPPLY.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_PLANT1_SUPPLY.MAN"
           },
           {
                "title":"Supply to Plant II",
                 "sr":20,
                "UOM":"MU",
                "unitname":"other",
                "tagname":"BALCO_CPP540_PLANT2_SUPPLY.MAN",
                "parameter":"PLANT2_SUPPLY.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_PLANT2_SUPPLY.MAN"
           },
           {
                "title":"CPP II  Export to MRSDS & GIS",
                 "sr":21,
                "UOM":"MU",
                "unitname":"other",
                "tagname":"BALCO_CPP540_EXPORT_MRSDS_GIS.MAN",
                "parameter":"EXPORT_MRSDS_GIS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_EXPORT_MRSDS_GIS.MAN"
           },
           {
                "title":"Total CTU Export",
                 "sr":22,
                "UOM":"MU",
                "unitname":"other",
                "tagname":"BALCO_CPP540_TOT_EXPORT_CTU.MAN",
                "parameter":"TOT_EXPORT_CTU.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_TOT_EXPORT_CTU.MAN"
           },
            {
                "title":"Coal Consumption",
                 "sr":23,
                "UOM":"MU",
                "unitname":"other",
                "tagname":"BALCO_CPP540_TOT_COAL_CONS.MAN",
                "parameter":"TOT_COAL_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_TOT_COAL_CONS.MAN"
           },
           {
                "title":"Total LDO Consumption",
                 "sr":24,
                "UOM":"kl",
                "unitname":"other",
                "tagname":"BALCO_CPP540_TOT_LDO_CONS.MAN",
                "parameter":"TOT_LDO_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_TOT_LDO_CONS.MAN"
           },
           {
                "title":"Total HFO Consumption",
                 "sr":25,
                "UOM":"kl",
                "unitname":"other",
                "tagname":"BALCO_CPP540_TOT_HFO_CONS.MAN",
                "parameter":"TOT_HFO_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_TOT_HFO_CONS.MAN"
           },
           {
                "title":"Raw Water Consumption",
                 "sr":26,
                "UOM":"m3",
                "unitname":"other",
                "tagname":"BALCO_CPP540_RAW_WTR_CONS.MAN",
                "parameter":"RAW_WTR_CONS.MAN",
                "tag_path":"\\\\BLDB\\BALCOPOWER\\VEDANTA\\BALCO\\CPP%20-%20540MW",
                "path":"path={0}|BALCO_CPP540_RAW_WTR_CONS.MAN"
           }
           
];




var kpisOverallPlant = [{
		"afname": "PLF",
		"div": "plantloadfactor",
		"title": "PLF in (%)",
		"theme": "light",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

	,
	{
		"afname": "PAF",
		"div": "plantAvailabilityfactor",
		"title": "PAF in (%)",
		"theme": "light",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

	,
	{
		"afname": "Trips",
		"div": "trips",
		"title": "No of Trips",
		"theme": "none",
		"path": "path={0}|Trips",
		"graph": [{
			"balloonText": "Trips<br>[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Trips",
			"type": "column",
			"color": "skyblue",
			"valueField": "Trips",
			"fixedColumnWidth": 18
		}]
	}

	,
	{
		"afname": "TubeLeaks",
		"div": "tubeleaks",
		"title": "No of Tube Leaks",
		"theme": "light",
		"path": "path={0}|Tube_Leaks",
		"graph": [{
			"balloonText": "Tube<br>[[value]]",
			"fillAlphas": 0.8,
			"id": "AmGraph-1",
			"lineAlpha": 0.2,
			"title": "Tube Leaks",
			"type": "column",
			"color": "skyblue",
			"valueField": "TubeLeaks",
			"fixedColumnWidth": 18
		}]
	}

	,
	{
		"afname": "GrossGenration",
		"div": "grossgeneration",
		"title": "Gross Generation in MU",
		"theme": "none",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

	,
	{
		"afname": "NetGeneration",
		"div": "netgeneration",
		"title": "Net Generation in MU",
		"theme": "none",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

	,
	{
		"afname": "AuxConsumption",
		"div": "auxconsumption",
		"title": "Aux Consumption in (%)",
		"theme": "light",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

	,
	{
		"afname": "GrossHeatRate",
		"div": "grossheatrate",
		"title": "Heatrate in kcal/kwh",
		"theme": "light",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

	,
	{
		"afname": "GCV",
		"div": "gascalorificValue",
		"title": "GCV in kcal/kg",
		"theme": "light",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

	,
	{
		"afname": "SCC@3600",
		"div": "scc360",
		"title": "SCC in gm/kwh",
		"theme": "light",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

];
var performanceUnits = [{
		"afname": "ULF",
		"div": "unitloadfactor",
		"title": "Unit Load Factor (ULF)",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|ULF&path={0}|Losses",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

	,
	{
		"afname": "UAF",
		"div": "unitAvailabilityfactor",
		"title": "Unit Availability Factor (UAF)",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|UAF&path={0}|Losses",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

	,
	{
		"afname": "GrossGenerationMU",
		"div": "grossgeneration",
		"title": "Gross Generation in MU",
		"theme": "light",
		"type": "serial",
		"path": "path={0}|BP&path={0}|ACT",
		"balloonText": "Gross:<br>[[value]]"
	}

	,
	{
		"afname": "NetGenerationMU",
		"div": "netgeneration",
		"title": "Net Generation in MU",
		"theme": "none",
		"type": "serial",
		"path": "path={0}|BP&path={0}|ACT",
		"balloonText": "Net:<br>[[value]]"
	}

	,
	{
		"afname": "AuxConsumptionMU",
		"div": "auxconsumption",
		"title": "Aux Consumption in MU",
		"theme": "none",
		"type": "serial",
		"path": "path={0}|BP&path={0}|ACT",
		"balloonText": "Aux:<br>[[value]]"
	}

	,
	{
		"afname": "BoilerEFF_IO",
		"div": "boilereffio",
		"title": "Boiler EFF(IO Method)",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|IO&path={0}|Losses",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

	,
	{
		"afname": "BoilerEFF_HL",
		"div": "boilereffhl",
		"title": "Boiler EFF(HL Method)",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|HL&path={0}|Losses",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

	,
	{
		"afname": "Heatrate",
		"div": "heatrate",
		"title": "Heatrate in kcal/kWh",
		"theme": "none",
		"type": "serial",
		"path": "path={0}|BP&path={0}|ACT",
		"balloonText": "HeatRate:<br>[[value]]"
	}

	,
	{
		"afname": "SCC",
		"div": "scc",
		"title": "SCC in gm/kWh",
		"theme": "none",
		"type": "serial",
		"path": "path={0}|BP&path={0}|ACT",
		"balloonText": "SCC:<br>[[value]]"
	}

	,
	{
		"afname": "CoalConsumptionMT",
		"div": "coalconsumption",
		"title": "Coal Consumption in MT",
		"theme": "none",
		"type": "serial",
		"path": "path={0}|BP&path={0}|ACT",
		"balloonText": "Coal:<br>[[value]]"
	}

	,
	{
		"afname": "UnitOverallEFF",
		"div": "unitoverall",
		"title": "Unit Overall EFF",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|Overall_EFF&path={0}|Losses",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

	,
	{
		"afname": "TurbineEfficiency",
		"div": "turbine",
		"title": "Turbine Efficiency",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|Turbine&path={0}|Losses",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

];
var boilerPerformance = [{
		"afname": "BoilerEfficiency1",
		"div": "boilerOneEfficiency",
		"title": "Boiler #1 Efficiency",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

	,
	{
		"afname": "BoilerEfficiency2",
		"div": "boilerTwoEfficiency",
		"title": "Boiler #2 Efficiency",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

	,
	{
		"afname": "BoilerEfficiency3",
		"div": "boilerThreeEfficiency",
		"title": "Boiler #3 Efficiency",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

	,
	{
		"afname": "BoilerEfficiency4",
		"div": "boilerFourEfficiency",
		"title": "Boiler #4 Efficiency",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

];
var allBoilerEfficiency = [{
		"afname": "AllBoilerEfficiency",
		"div": "boilerEfficiency",
		"title": "Boiler Efficiency",
		"theme": "light",
		"type": "serial",
		"path": "path={0}|HL&path={0}|IO",
		"graph": [{
				"balloonText": "HL<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "HL",
				"type": "column",
				"color": "skyblue",
				"valueField": "hl",
				"fixedColumnWidth": 20
			},
			{
				"balloonText": "IO<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "IO",
				"type": "column",
				"color": "orange",
				"valueField": "io",
				"fixedColumnWidth": 20
			}
		]
	}

	,
	{
		"afname": "Performance",
		"div": "plantwiseFFTPerformance",
		"title": "Unit wise Performance",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|Value",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

];
var turbinePerformance = [{
		"afname": "Performance",
		"div": "plantwiseFFTPerformance",
		"title": "Unit wise Performance",
		"theme": "light",
		"type": "pie",
		"path": "path={0}|Value",
		"balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
	}

	,
	{
		"afname": "SteamTurbineEffciency",
		"div": "boilerOneEfficiency",
		"title": "Efficiency (%)",
		"theme": "light",
		"type": "serial",
		"path": "path={0}|value",
		"color": "#007bff",
		"balloonText": "Efficiency:<br>[[value]]"
	}

	,
	{
		"afname": "CondenserEffectiveness",
		"div": "boilerTwoEfficiency",
		"title": "Effectiveness (%)",
		"theme": "light",
		"type": "serial",
		"path": "path={0}|value",
		"color": "#dc3545",
		"balloonText": "Effect.:<br>[[value]]"
	}

	,
	{
		"afname": "SteamTurbineHPCylinderEfficiency",
		"div": "boilerEfficiency",
		"title": "Efficiency (%)",
		"theme": "light",
		"type": "serial",
		"path": "path={0}|value",
		"color": "#ffc107",
		"balloonText": "Efficiency.:<br>[[value]]"
	}

	,
	{
		"afname": "SteamTurbineIPCylinderEfficiency",
		"div": "boilerThreeEfficiency",
		"title": "Efficiency (%)",
		"theme": "light",
		"type": "serial",
		"path": "path={0}|value",
		"color": "#6610f2",
		"balloonText": "Efficiency.:<br>[[value]]"
	}

	,
	{
		"afname": "SteamTurbineLPCylinderEfficiency",
		"div": "boilerFourEfficiency",
		"title": "Efficiency (%)",
		"theme": "light",
		"type": "serial",
		"path": "path={0}|value",
		"color": "#0b1551",
		"balloonText": "Efficiency.:<br>[[value]]"
	}

];
var elementPerformance = [{
		"afname": "OverallPlant",
	}

	,
	{
		"afname": "540MW",
	}

	,
	{
		"afname": "1200MW",
	}

];
var plantPerformance = [{
		"afname": "PlantGeneration",
		"div": "PlantGeneration",
		"title": "Overall Plant Generation",
		"theme": "light",
		"type": "gauge",
		"path": "path={0}|color&path={0}|StartValue&path={0}|endValue&path={0}|Realtime_MW"
	}

	,
	{
		"afname": "AuxGeneration",
		"div": "AuxConsumption",
		"title": "Overall Aux Generation",
		"theme": "light",
		"type": "gauge",
		"path": "path={0}|color&path={0}|StartValue&path={0}|endValue&path={0}|Realtime_MW"
	}

	,
	{
		"afname": "PlantGrossEfficiency",
		"div": "PlantGrossEfficiency",
		"title": "Overall Plant Gross Efficiency",
		"theme": "light",
		"type": "gauge",
		"path": "path={0}|color&path={0}|StartValue&path={0}|endValue&path={0}|Realtime_MW"
	}

	,
	{
		"afname": "PlantGrossHeatRate",
		"div": "PlantGrossHeatRate",
		"title": "Overall Plant Gross Heatrate",
		"theme": "light",
		"type": "gauge",
		"path": "path={0}|color&path={0}|StartValue&path={0}|endValue&path={0}|Realtime_MW"
	}

];
var dashboardKpis = [{
		"afname": "PLF",
		"div": "plf",
		"title": "PLF in (%)",
		"theme": "light",
		"path": "path={0}|value&path={0}|color",
	}

	,
	{
		"afname": "PAF",
		"div": "paf",
		"title": "PAF in (%)",
		"theme": "light",
		"path": "path={0}|value&path={0}|color",
	}

	,
	{
		"afname": "GrossGeneration",
		"div": "grossgeneration",
		"title": "Gross Generation",
		"theme": "none",
		"path": "path={0}|value&path={0}|color",
	}

	,
	{
		"afname": "AuxConsumption",
		"div": "auxconsumption",
		"title": "Aux Consumption",
		"theme": "light",
		"path": "path={0}|value&path={0}|color",
	}

	,
	{
		"afname": "NetGeneration",
		"div": "netgeneration",
		"title": "Net Generation",
		"theme": "none",
		"path": "path={0}|value&path={0}|color",
	}

	,
	{
		"afname": "SCC@360",
		"div": "scc360",
		"title": "SCC",
		"theme": "light",
		"path": "path={0}|value&path={0}|color",
	}

	,
	{
		"afname": "HeatRate",
		"div": "heatrate",
		"title": "Heat Rate",
		"theme": "light",
		"path": "path={0}|value&path={0}|color",
	}

	,
	{
		"afname": "SOC",
		"div": "soc",
		"title": "SOC",
		"theme": "light",
		"path": "path={0}|value&path={0}|color",
	}

	,
	{
		"afname": "OilConsumption",
		"div": "oilconsumption",
		"title": "Oil Consumption",
		"theme": "light",
		"path": "path={0}|value&path={0}|color",
	}

	,
	{
		"afname": "GCV",
		"div": "gcv",
		"title": "GCV",
		"theme": "light",
		"path": "path={0}|value&path={0}|color",
	}

];
var mtdytd = [{
		"afname": "MTD",
		"theme": "light",
		"type": "serial",
		"path": "path={0}|BP&path={0}|ACT&path={0}|Actual",
		"balloonText": "<b>[[value]]</b>"
	}

	,
	{
		"afname": "YTD",
		"theme": "light",
		"type": "serial",
		"path": "path={0}|BP&path={0}|ACT&path={0}|Actual",
		"balloonText": "<b>[[value]]</b>"
	}

];
var monthlyReceipt = [{
		"afname": "CoalReceipt",
		"div": "monthlyCoalReceipt",
		"title": "Monthly Coal Receipt(MT)",
		"theme": "light",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

	,
	{
		"afname": "DeliveredCost",
		"div": "monthlyDeliveredCost",
		"title": "Monthly Delivered Cost(Rs/MT)",
		"theme": "light",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

	,
	{
		"afname": "GrossGeneration",
		"div": "monthlyGrossgeneration",
		"title": "Gross Generation in MU",
		"theme": "none",
		"path": "path={0}|ACT&path={0}|BP",
		"graph": [{
				"balloonText": "BP<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-1",
				"lineAlpha": 0.2,
				"title": "BP",
				"type": "column",
				"color": "skyblue",
				"valueField": "bp",
				"fixedColumnWidth": 18
			},
			{
				"balloonText": "ACT<br>[[value]]",
				"fillAlphas": 0.8,
				"id": "AmGraph-2",
				"lineAlpha": 0.2,
				"title": "ACT",
				"type": "column",
				"color": "orange",
				"valueField": "act",
				"fixedColumnWidth": 18
			}
		]
	}

]