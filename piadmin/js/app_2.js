var baseServiceUrl="https://192.168.1.28:1706/piwebapi/";
var user="Asif";
var pass="ECG@123";
var afServerName="ECG-DEV-SERVER";
var afDatabaseName="BALCOPOWER";
var enableBasicAuth=!0;
var processJsonContent=function(url, type, data) {
    return $.ajax( {
        url:encodeURI(url), headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
        , type:type, data:data, contentType:"application/json; charset=UTF-8", crossDomain:!0, xhrFields: {
            withCredentials: !0
        }
        , beforeSend:function(xhr) {
            if(enableBasicAuth) {
                xhr.setRequestHeader("Authorization", makeBasicAuth(user, pass))
            }
        }
    }
    )
}

;
var makeBasicAuth=function(user, password) {
    var tok=user+':'+password;
    var hash=window.btoa(tok);
    return"Basic "+hash
}

var kpisOverallPlant=[ {
    "afname":"PLF",
    "div":"plantloadfactor",
    "title":"PLF in (%)",
    "theme":"light",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"PAF",
    "div":"plantAvailabilityfactor",
    "title":"PAF in (%)",
    "theme":"light",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"Trips",
    "div":"trips",
    "title":"No of Trips",
    "theme":"none",
    "path":"path={0}|Trips",
    "graph":[ {
        "balloonText": "Trips<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "Trips", "type": "column", "color": "skyblue", "valueField": "Trips", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"TubeLeaks",
    "div":"tubeleaks",
    "title":"No of Tube Leaks",
    "theme":"light",
    "path":"path={0}|Tube_Leaks",
    "graph":[ {
        "balloonText": "Tube<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "Tube Leaks", "type": "column", "color": "skyblue", "valueField": "TubeLeaks", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"GrossGenration",
    "div":"grossgeneration",
    "title":"Gross Generation in MU",
    "theme":"none",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"NetGeneration",
    "div":"netgeneration",
    "title":"Net Generation in MU",
    "theme":"none",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"AuxConsumption",
    "div":"auxconsumption",
    "title":"Aux Consumption in (%)",
    "theme":"light",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"GrossHeatRate",
    "div":"grossheatrate",
    "title":"Heatrate in kcal/kwh",
    "theme":"light",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"GCV",
    "div":"gascalorificValue",
    "title":"GCV in kcal/kg",
    "theme":"light",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"SCC@3600",
    "div":"scc360",
    "title":"SCC in gm/kwh",
    "theme":"light",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

];
var performanceUnits=[ {
    "afname":"ULF",
    "div":"unitloadfactor",
    "title":"Unit Load Factor (ULF)",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|ULF&path={0}|Losses",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

,
{
    "afname":"UAF",
    "div":"unitAvailabilityfactor",
    "title":"Unit Availability Factor (UAF)",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|UAF&path={0}|Losses",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

,
{
    "afname":"GrossGenerationMU",
    "div":"grossgeneration",
    "title":"Gross Generation in MU",
    "theme":"light",
    "type":"serial",
    "path":"path={0}|BP&path={0}|ACT",
    "balloonText": "Gross:<br>[[value]]"
}

,
{
    "afname":"NetGenerationMU",
    "div":"netgeneration",
    "title":"Net Generation in MU",
    "theme":"none",
    "type":"serial",
    "path":"path={0}|BP&path={0}|ACT",
    "balloonText": "Net:<br>[[value]]"
}

,
{
    "afname":"AuxConsumptionMU",
    "div":"auxconsumption",
    "title":"Aux Consumption in MU",
    "theme":"none",
    "type":"serial",
    "path":"path={0}|BP&path={0}|ACT",
    "balloonText": "Aux:<br>[[value]]"
}

,
{
    "afname":"BoilerEFF_IO",
    "div":"boilereffio",
    "title":"Boiler EFF(IO Method)",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|IO&path={0}|Losses",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

,
{
    "afname":"BoilerEFF_HL",
    "div":"boilereffhl",
    "title":"Boiler EFF(HL Method)",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|HL&path={0}|Losses",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

,
{
    "afname":"Heatrate",
    "div":"heatrate",
    "title":"Heatrate in kcal/kWh",
    "theme":"none",
    "type":"serial",
    "path":"path={0}|BP&path={0}|ACT",
    "balloonText": "HeatRate:<br>[[value]]"
}

,
{
    "afname":"SCC",
    "div":"scc",
    "title":"SCC in gm/kWh",
    "theme":"none",
    "type":"serial",
    "path":"path={0}|BP&path={0}|ACT",
    "balloonText": "SCC:<br>[[value]]"
}

,
{
    "afname":"CoalConsumptionMT",
    "div":"coalconsumption",
    "title":"Coal Consumption in MT",
    "theme":"none",
    "type":"serial",
    "path":"path={0}|BP&path={0}|ACT",
    "balloonText": "Coal:<br>[[value]]"
}

,
{
    "afname":"UnitOverallEFF",
    "div":"unitoverall",
    "title":"Unit Overall EFF",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|Overall_EFF&path={0}|Losses",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

,
{
    "afname":"TurbineEfficiency",
    "div":"turbine",
    "title":"Turbine Efficiency",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|Turbine&path={0}|Losses",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

];
var boilerPerformance=[ {
    "afname":"BoilerEfficiency1",
    "div":"boilerOneEfficiency",
    "title":"Boiler #1 Efficiency",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

,
{
    "afname":"BoilerEfficiency2",
    "div":"boilerTwoEfficiency",
    "title":"Boiler #2 Efficiency",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

,
{
    "afname":"BoilerEfficiency3",
    "div":"boilerThreeEfficiency",
    "title":"Boiler #3 Efficiency",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

,
{
    "afname":"BoilerEfficiency4",
    "div":"boilerFourEfficiency",
    "title":"Boiler #4 Efficiency",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|Efficiency&path={0}|L1&path={0}|L2&path={0}|L3",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

];
var allBoilerEfficiency=[ {
    "afname":"AllBoilerEfficiency",
    "div":"boilerEfficiency",
    "title":"Boiler Efficiency",
    "theme":"light",
    "type":"serial",
    "path":"path={0}|HL&path={0}|IO",
    "graph":[ {
        "balloonText": "HL<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "HL", "type": "column", "color": "skyblue", "valueField": "hl", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "IO<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "IO", "type": "column", "color": "orange", "valueField": "io", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"Performance",
    "div":"plantwiseFFTPerformance",
    "title":"Unit wise Performance",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|Value",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

];
var turbinePerformance=[ {
    "afname":"Performance",
    "div":"plantwiseFFTPerformance",
    "title":"Unit wise Performance",
    "theme":"light",
    "type":"pie",
    "path":"path={0}|Value",
    "balloonText": "[[title]]<br><span style='font-size:10px'><b>[[value]]</b><br> ([[percents]]%)</span>"
}

,
{
    "afname":"SteamTurbineEffciency",
    "div":"boilerOneEfficiency",
    "title":"Efficiency (%)",
    "theme":"light",
    "type":"serial",
    "path":"path={0}|value",
    "color": "#007bff", "balloonText": "Efficiency:<br>[[value]]"
}

,
{
    "afname":"CondenserEffectiveness",
    "div":"boilerTwoEfficiency",
    "title":"Effectiveness (%)",
    "theme":"light",
    "type":"serial",
    "path":"path={0}|value",
    "color": "#dc3545", "balloonText": "Effect.:<br>[[value]]"
}

,
{
    "afname":"SteamTurbineHPCylinderEfficiency",
    "div":"boilerEfficiency",
    "title":"Efficiency (%)",
    "theme":"light",
    "type":"serial",
    "path":"path={0}|value",
    "color": "#ffc107", "balloonText": "Efficiency.:<br>[[value]]"
}

,
{
    "afname":"SteamTurbineIPCylinderEfficiency",
    "div":"boilerThreeEfficiency",
    "title":"Efficiency (%)",
    "theme":"light",
    "type":"serial",
    "path":"path={0}|value",
    "color": "#6610f2", "balloonText": "Efficiency.:<br>[[value]]"
}

,
{
    "afname":"SteamTurbineLPCylinderEfficiency",
    "div":"boilerFourEfficiency",
    "title":"Efficiency (%)",
    "theme":"light",
    "type":"serial",
    "path":"path={0}|value",
    "color": "#0b1551", "balloonText": "Efficiency.:<br>[[value]]"
}

];
var elementPerformance=[ {
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
var plantPerformance=[ {
    "afname":"PlantGeneration",
    "div":"PlantGeneration",
    "title":"Overall Plant Generation",
    "theme":"light",
    "type":"gauge",
    "path":"path={0}|color&path={0}|StartValue&path={0}|endValue"
}

,
{
    "afname":"AuxGeneration",
    "div":"AuxConsumption",
    "title":"Overall Aux Generation",
    "theme":"light",
    "type":"gauge",
    "path":"path={0}|color&path={0}|StartValue&path={0}|endValue"
}

,
{
    "afname":"PlantGrossEfficiency",
    "div":"PlantGrossEfficiency",
    "title":"Overall Plant Gross Efficiency",
    "theme":"light",
    "type":"gauge",
    "path":"path={0}|color&path={0}|StartValue&path={0}|endValue"
}

,
{
    "afname":"PlantGrossHeatRate",
    "div":"PlantGrossHeatRate",
    "title":"Overall Plant Gross Heatrate",
    "theme":"light",
    "type":"gauge",
    "path":"path={0}|color&path={0}|StartValue&path={0}|endValue"
}

];
var dashboardKpis=[ {
    "afname":"PLF",
    "div":"plf",
    "title":"PLF in (%)",
    "theme":"light",
    "path":"path={0}|value&path={0}|color",
}

,
{
    "afname":"PAF",
    "div":"paf",
    "title":"PAF in (%)",
    "theme":"light",
    "path":"path={0}|value&path={0}|color",
}

,
{
    "afname":"GrossGeneration",
    "div":"grossgeneration",
    "title":"Gross Generation",
    "theme":"none",
    "path":"path={0}|value&path={0}|color",
}

,
{
    "afname":"AuxConsumption",
    "div":"auxconsumption",
    "title":"Aux Consumption",
    "theme":"light",
    "path":"path={0}|value&path={0}|color",
}

,
{
    "afname":"NetGeneration",
    "div":"netgeneration",
    "title":"Net Generation",
    "theme":"none",
    "path":"path={0}|value&path={0}|color",
}

,
{
    "afname":"SCC@360",
    "div":"scc360",
    "title":"SCC",
    "theme":"light",
    "path":"path={0}|value&path={0}|color",
}

,
{
    "afname":"HeatRate",
    "div":"heatrate",
    "title":"Heat Rate",
    "theme":"light",
    "path":"path={0}|value&path={0}|color",
}

,
{
    "afname":"SOC",
    "div":"soc",
    "title":"SOC",
    "theme":"light",
    "path":"path={0}|value&path={0}|color",
}

,
{
    "afname":"OilConsumption",
    "div":"oilconsumption",
    "title":"Oil Consumption",
    "theme":"light",
    "path":"path={0}|value&path={0}|color",
}

,
{
    "afname":"GCV",
    "div":"gcv",
    "title":"GCV",
    "theme":"light",
    "path":"path={0}|value&path={0}|color",
}

];
var mtdytd=[ {
    "afname":"MTD",
    "theme":"light",
    "type":"serial",
    "path":"path={0}|BP&path={0}|ACT&path={0}|Actual",
    "balloonText": "<b>[[value]]</b>"
}

,
{
    "afname":"YTD",
    "theme":"light",
    "type":"serial",
    "path":"path={0}|BP&path={0}|ACT&path={0}|Actual",
    "balloonText": "<b>[[value]]</b>"
}

];
var monthlyReceipt=[ {
    "afname":"CoalReceipt",
    "div":"monthlyCoalReceipt",
    "title":"Monthly Coal Receipt(MT)",
    "theme":"light",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"DeliveredCost",
    "div":"monthlyDeliveredCost",
    "title":"Monthly Delivered Cost(Rs/MT)",
    "theme":"light",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

,
{
    "afname":"GrossGeneration",
    "div":"monthlyGrossgeneration",
    "title":"Gross Generation in MU",
    "theme":"none",
    "path":"path={0}|ACT&path={0}|BP",
    "graph":[ {
        "balloonText": "BP<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-1", "lineAlpha": 0.2, "title": "BP", "type": "column", "color": "skyblue", "valueField": "bp", "fixedColumnWidth": 14
    }
    ,
    {
        "balloonText": "ACT<br>[[value]]", "fillAlphas": 0.8, "id": "AmGraph-2", "lineAlpha": 0.2, "title": "ACT", "type": "column", "color": "orange", "valueField": "act", "fixedColumnWidth": 14
    }
    ]
}

]