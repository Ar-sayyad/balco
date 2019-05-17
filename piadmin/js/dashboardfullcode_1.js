$.each(monthlyReceipt, function (key) {
        $('#'+monthlyReceipt[key].div).html("<img style='margin-top:25%;margin-left:40%;width:75px;height:75px;' src='piadmin/images/loading.gif'>");
	var rankingElements = [];
	var batch = {
		"database": {
			"Method": "GET",
			"Resource": baseServiceUrl + "elements?path=\\\\" + afServerName + "\\" + afDatabaseName + "\\DASHBOARD\\MonthlyReceipt\\" + monthlyReceipt[key].afname + "&selectedFields=WebId;Links.Elements"
		},
		"elements": {
			"Method": "GET",
			"Resource": "{0}?selectedFields=Items.Name;Items.Path;&searchFullHierarchy=true",
			"ParentIds": ["database"],
			"Parameters": ["$.database.Content.Links.Elements"]
		},
		"attributes": {
			"Method": "GET",
			"RequestTemplate": {
				"Resource": baseServiceUrl + "attributes/multiple?selectedFields=Items.Object.Name;Items.Object.Path;Items.Object.WebId&" + monthlyReceipt[key].path
			},
			"ParentIds": ["elements"],
			"Parameters": ["$.elements.Content.Items[*].Path"]
		},
		"values": {
			"Method": "GET",
			"RequestTemplate": {
				"Resource": baseServiceUrl + "streams/{0}/value"
			},
			"ParentIds": ["attributes"],
			"Parameters": ["$.attributes.Content.Items[*].Content.Items[*].Object.WebId"]
		}
	};
	var batchStr = JSON.stringify(batch, null, 2);
	var batchResult = processJsonContent(baseServiceUrl + "batch", 'POST', batchStr);
	$.when(batchResult).fail(function () {
		warningmsg("Cannot Launch Batch!!!")
	});
	$.when(batchResult).done(function () {
		var batchResultItems = (batchResult.responseJSON.attributes.Content.Items);
		let valuesID = 0;
		$.each(batchResultItems, function (elementID) {
			var attrItems = batchResultItems[elementID].Content.Items;
			var elementName = batchResult.responseJSON.elements.Content.Items[elementID].Name;
			var elementItems = [];
			elementItems[0] = ({
				"mw": elementName
			});
			attrItems.forEach(function (attr, attrID) {
				let attrValue = "-";
				if (attr !== undefined && attr.Object !== undefined) {
					attrName = attr.Object.Name;
					const getNestedObject = (nestedObj, pathArr) => {
						return pathArr.reduce((obj, key) => (obj && obj[key] !== undefined) ? obj[key] : undefined, nestedObj)
					}
					if (batchResult.responseJSON.values.Content.Items !== undefined && (batchResult.responseJSON.values.Content.Status === undefined || batchResult.responseJSON.values.Content.Status < 400) && batchResult.responseJSON.values.Content.Items[valuesID].Status === 200) {
						var attrV = getNestedObject(batchResult.responseJSON.values, ['Content', 'Items', valuesID, 'Content', 'Value']);
						if (attrV !== "" && !isNaN(attrV)) {
							attrValue = (Math.round((attrV) * 100) / 100);
						}
					}
				}
				elementItems[attrID + 1] = ({
					[attrName]: attrValue
				});
				valuesID++;
			});
			rankingElements[elementID] = elementItems;
		});
		var cols = [];
		$.each(rankingElements, function (key1) {
			cols.push({
				mw: rankingElements[key1][0].mw,
				bp: rankingElements[key1][2].BP,
				act: rankingElements[key1][1].ACT
			});
		});
		AmCharts.makeChart(monthlyReceipt[key].div, {
			"type": "serial",
			"theme": monthlyReceipt[key].theme,
			"categoryField": "mw",
			"startEffect": "elastic",
			"startDuration": 0,
			"categoryAxis": {
				"gridPosition": "start",
				"position": "left",
				"labelRotation": 90,
				"fontSize": 11
			},
			"graphs": monthlyReceipt[key].graph,
			"valueAxes": [{
				"id": "ValueAxis-1",
				"position": "bottom",
				"axisAlpha": 1,
				"titleFontSize": 14,
				"fontSize": 11,
				"title": ''
			}],
			"plotAreaFillAlphas": 0.1,
			"depth3D": 3,
			"angle": 10,
			"allLabels": [],
			"balloon": {
				"drop": !0,
				"cornerRadius": 5,
				"adjustBorderColor": !1,
				"color": "#ffffff",
				"fixedPosition": !0,
				"fontSize": 10
			},
			"chartCursor": {
				"pan": !0,
				"valueLineEnabled": !0,
				"valueLineBalloonEnabled": !0,
				"cursorAlpha": 0.05,
				"valueLineAlpha": 0.2,
				"fullWidth": !0,
				"valueBalloonsEnabled": !1,
				"categoryBalloonEnabled": !1
			},
			"legend": {
				"useGraphSettings": !0,
				"position": "bottom",
				"bulletType": "round",
				"equalWidths": !1,
				"valueWidth": 50
			},
			"titles": [],
			"dataProvider": cols,
			"export": {
				"enabled": !0
			}
		});
	});
});

$.each(dashboardKpis, function (key) {
        $('#'+dashboardKpis[key].div + "Month").html("<img style='margin-top:50px;width:60px;height:60px;'  src='piadmin/images/loading.gif'>");
	var rankingElements = [];
	var batch = {
		"database": {
			"Method": "GET",
			"Resource": baseServiceUrl + "elements?path=\\\\" + afServerName + "\\" + afDatabaseName + "\\DASHBOARD\\KPIS\\" + dashboardKpis[key].afname + "\\MonthlyAchievement&selectedFields=WebId;Links.Elements"
		},
		"elements": {
			"Method": "GET",
			"Resource": "{0}?selectedFields=Items.Name;Items.Path;&searchFullHierarchy=true",
			"ParentIds": ["database"],
			"Parameters": ["$.database.Content.Links.Elements"]
		},
		"attributes": {
			"Method": "GET",
			"RequestTemplate": {
				"Resource": baseServiceUrl + "attributes/multiple?selectedFields=Items.Object.Name;Items.Object.Path;Items.Object.WebId&" + dashboardKpis[key].path
			},
			"ParentIds": ["elements"],
			"Parameters": ["$.elements.Content.Items[*].Path"]
		},
		"values": {
			"Method": "GET",
			"RequestTemplate": {
				"Resource": baseServiceUrl + "streams/{0}/value"
			},
			"ParentIds": ["attributes"],
			"Parameters": ["$.attributes.Content.Items[*].Content.Items[*].Object.WebId"]
		}
	};
	var batchStr = JSON.stringify(batch, null, 2);
	var batchResult = processJsonContent(baseServiceUrl + "batch", 'POST', batchStr);
	$.when(batchResult).fail(function () {
		warningmsg("Cannot Launch Batch!!!")
	});
	$.when(batchResult).done(function () {
		var batchResultItems = (batchResult.responseJSON.attributes.Content.Items);
		let valuesID = 0;
		$.each(batchResultItems, function (elementID) {
			var attrItems = batchResultItems[elementID].Content.Items;
			var elementName = batchResult.responseJSON.elements.Content.Items[elementID].Name;
			var elementItems = [];
			elementItems[0] = ({
				"month": elementName
			});
			attrItems.forEach(function (attr, attrID) {
				if (attr !== undefined && attr.Object !== undefined) {
					attrName = attr.Object.Name;
					const getNestedObject = (nestedObj, pathArr) => {
						return pathArr.reduce((obj, key) => (obj && obj[key] !== undefined) ? obj[key] : undefined, nestedObj)
					}
					if (batchResult.responseJSON.values.Content.Items !== undefined && (batchResult.responseJSON.values.Content.Status === undefined || batchResult.responseJSON.values.Content.Status < 400) && batchResult.responseJSON.values.Content.Items[valuesID].Status === 200) {
						var attrV = getNestedObject(batchResult.responseJSON.values, ['Content', 'Items', valuesID, 'Content', 'Value']);
					}
				}
				elementItems[attrID + 1] = ({
					[attrName]: attrV
				});
				valuesID++;
			});
			rankingElements.push(elementItems);
		});
		var cols = [];
		$.each(rankingElements, function (key1) {
			cols.push({
				"month": rankingElements[key1][0].month,
				"value": (Math.round((rankingElements[key1][1].value) * 100) / 100),
				"color": rankingElements[key1][2].color
			});
		});
                                var allMonths = ['Jan','Feb','Mar', 'Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
                                cols.sort(function(a,b){
                                   return allMonths.indexOf(a.month) - allMonths.indexOf(b.month);
                               });
		AmCharts.makeChart(dashboardKpis[key].div + "Month", {
			"theme": "light",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": cols,
			"valueAxes": [{
				"position": "bottom",
			}],
			"graphs": [{
				"balloonText": "[[category]]:<b>[[value]]</b>",
				"fillColorsField": "color",
				"fillAlphas": 0.8,
				"lineAlpha": 0.2,
				"type": "column",
				"valueField": "value",
				"fixedColumnWidth": 12
			}],
			"depth3D": 2,
			"angle": 10,
			"balloon": {
				"cornerRadius": 0,
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
				"valueBalloonsEnabled": false,
				"categoryBalloonEnabled": false,
				"zoomable": true
			},
			"categoryField": "month",
			"categoryAxis": {
				"gridPosition": "start",
				"labelRotation": 90
			},
			"export": {
				"enabled": true
			}

		});
	});

	$.each(mtdytd, function (key1) {
                  $('#'+dashboardKpis[key].div + mtdytd[key1].afname).html("<img style='margin-top:50px;width:60px;height:60px;' src='piadmin/images/loading.gif'>");
		var rankingElements = [];
		var batch2 = {
			"database": {
				"Method": "GET",
				"Resource": baseServiceUrl + "elements?path=\\\\" + afServerName + "\\" + afDatabaseName + "\\DASHBOARD\\KPIS\\" + dashboardKpis[key].afname + "\\" + mtdytd[key1].afname + "&selectedFields=WebId;Name;Path;Links.Attributes"
			},
			"attributes": {
				"Method": "GET",
				"RequestTemplate": {
					"Resource": baseServiceUrl + "attributes/multiple?selectedFields=Items.Object.Name;Items.Object.Path;Items.Object.WebId&" + mtdytd[key1].path
				},
				"ParentIds": [
					"database"
				],
				"Parameters": [
					"$.database.Content.Path"
				]
			},
			"values": {
				"Method": "GET",
				"RequestTemplate": {
					"Resource": baseServiceUrl + "streams/{0}/value"
				},
				"ParentIds": [
					"attributes"
				],
				"Parameters": [
					"$.attributes.Content.Items[*].Content.Items[*].Object.WebId"
				]
			}
		};
		var batchStr2 = JSON.stringify(batch2, null, 2);
		var batchResult2 = processJsonContent(baseServiceUrl + "batch", 'POST', batchStr2);
		$.when(batchResult2).fail(function () {
			warningmsg("Cannot Launch Batch!!!")
		});
		$.when(batchResult2).done(function () {
			var batchResultItems = (batchResult2.responseJSON.attributes.Content.Items);
			let valuesID = 0;
			var color = [{
				"color": "#0D52D1"
			}, {
				"color": "#de4c4f"
			}];
			$.each(batchResultItems, function (elementID) {
				var attrItems = batchResultItems[elementID].Content.Items;
				attrItems.forEach(function (attr, attrID) {
					var elementName = batchResult2.responseJSON.attributes.Content.Items[elementID].Content.Items[attrID].Object.Name;
					let attrValue = "-";
					if (attr !== undefined && attr.Object !== undefined) {
						attrName = attr.Object.Name;
						const getNestedObject = (nestedObj, pathArr) => {
							return pathArr.reduce((obj, key) =>
								(obj && obj[key] !== undefined) ? obj[key] : undefined, nestedObj);
						};
						if (batchResult2.responseJSON.values.Content.Items !== undefined &&
							(batchResult2.responseJSON.values.Content.Status === undefined || batchResult2.responseJSON.values.Content.Status < 400) &&
							batchResult2.responseJSON.values.Content.Items[valuesID].Status === 200) {
							var attrV = getNestedObject(batchResult2.responseJSON.values, ['Content', 'Items', valuesID, 'Content', 'Value']);
							if (attrV !== "" && !isNaN(attrV)) {
								attrValue = (Math.round((attrV) * 100) / 100);
							}
						}
					}
                                                                if(attrName==='Actual'){ $("#"+dashboardKpis[key].div + mtdytd[key1].afname+"Actual").text(attrValue); }else{
					rankingElements.push({
						mw: elementName,
						color: color[attrID].color,
						val: attrValue
					});
                                                                }
					valuesID++;
				});
			});
                              
			AmCharts.makeChart(dashboardKpis[key].div + mtdytd[key1].afname, {
				"type": mtdytd[key1].type,
				"theme": mtdytd[key1].theme,
				"categoryField": "mw",
				"rotate": true,
				"startEffect": "none",
				"startDuration": 0,
				"categoryAxis": {
					"gridPosition": "start",
					"position": "left",
					"labelRotation": 0
				},
				"trendLines": [],
				"graphs": [{
					"balloonText": mtdytd[key1].balloonText,
					"fillAlphas": 0.8,
					"id": "AmGraph-1",
					"lineAlpha": 0.2,
					"type": "column",
					"fillColorsField": "color",
					"valueField": "val",
					"fixedColumnWidth": 10
				}],
				"plotAreaFillAlphas": 0.1,
				"depth3D": 2,
				"angle": 0,
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
					"valueBalloonsEnabled": false,
					"categoryBalloonEnabled": false
				},
				"titles": [],
				"dataProvider": rankingElements,
				"export": {
					"enabled": true
				}

			});

		});
	});
});