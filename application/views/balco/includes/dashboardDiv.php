  <div class="row">
        <div class="col-lg-12">
           <div class="card" style="padding: 10px;min-height: 650px;">
              <div class="table-responsive">
                 <table id="example3" class="table table-striped  table-bordered" cellspacing="0" width="100%">
                    <thead>
                       <tr>
                          <th>
                             SR.
                          </th>
                          <th>
                             KPI
                          </th>
                          <th>
                             Actual (MTD)
                          </th>
                          <th style="width:20%">
                             ACT Vs BP<br>(MTD)
                          </th>
                          <th style="width:45%;text-align: center;">
                             Monthly Achievements
                          </th>
                          <th>
                             Actual (YTD)
                          </th>
                          <th style="width:20%">
                             ACT Vs BP<br>(YTD)
                          </th>
                       </tr>
                    </thead>
                    <tr>
                       <td>1</td>
                       <td>Plant Load Factor (%)</td>
                       <td>
                          <div id="plfMTDActual"></div>
                       </td>
                       <td>
                          <div id="plfMTD"></div>
                       </td>
                       <td>
                          <div id="plfMonth"></div>
                       </td>
                       <td>
                          <div id="plfYTDActual"></div>
                       </td>
                       <td>
                          <div id="plfYTD"></div>
                       </td>
                    </tr>
                    <tr>
                       <td>2</td>
                       <td>Plant Availability Factor (%)</td>
                       <td>
                          <div id="pafMTDActual"></div>
                       </td>
                       <td>
                          <div id="pafMTD"></div>
                       </td>
                       <td>
                          <div id="pafMonth"></div>
                       </td>
                       <td>
                          <div id="pafYTDActual"></div>     
                       </td>
                       <td>
                          <div id="pafYTD"></div>
                       </td>
                    </tr>
                    <tr>
                       <td>3</td>
                       <td>Gross Generation</td>
                       <td><div id="grossgenerationMTDActual"></div></td>
                       <td>
                          <div id="grossgenerationMTD"></div>
                       </td>
                       <td>
                          <div id="grossgenerationMonth"></div>
                       </td>
                       <td>
                          <div id="grossgenerationYTDActual"></div>
                       </td>
                       <td>
                          <div id="grossgenerationYTD"></div>
                       </td>
                    </tr>
                    <tr>
                       <td>4</td>
                       <td>Aux Consumption</td>
                       <td>
                           <div id="auxconsumptionMTDActual"></div>    
                       </td>
                       <td>
                          <div id="auxconsumptionMTD"></div>
                       </td>
                       <td>
                          <div id="auxconsumptionMonth"></div>
                       </td>
                       <td>
                           <div id="auxconsumptionYTDActual"></div>
                       </td>
                       <td>
                          <div id="auxconsumptionYTD"></div>
                       </td>
                    </tr>
                    <tr>
                       <td>5</td>
                       <td>Net Generation</td>
                       <td><div id="netgenerationMTDActual"></div></td>
                       <td>
                          <div id="netgenerationMTD"></div>
                       </td>
                       <td>
                          <div id="netgenerationMonth"></div>
                       </td>
                       <td><div id="netgenerationYTDActual"></div></td>
                       <td>
                          <div id="netgenerationYTD"></div>
                       </td>
                    </tr>
                    <tr>
                       <td>6</td>
                       <td>SCC @360</td>
                       <td><div id="scc360MTDActual"></div></td>
                       <td>
                          <div id="scc360MTD"></div>
                       </td>
                       <td>
                          <div id="scc360Month"></div>
                       </td>
                       <td><div id="scc360YTDActual"></div></td>
                       <td>
                          <div id="scc360YTD"></div>
                       </td>
                    </tr>
                    <tr>
                       <td>7</td>
                       <td>Heat Rate</td>
                       <td><div id="heatrateMTDActual"></div></td>
                       <td>
                          <div id="heatrateMTD"></div>
                       </td>
                       <td>
                          <div id="heatrateMonth"></div>
                       </td>
                       <td><div id="heatrateYTDActual"></div></td>
                       <td>
                          <div id="heatrateYTD"></div>
                       </td>
                    </tr>
                    <tr>
                       <td>8</td>
                       <td>SOC</td>
                       <td><div id="socMTDActual"></div></td>
                       <td>
                          <div id="socMTD"></div>
                       </td>
                       <td>
                          <div id="socMonth"></div>
                       </td>
                       <td><div id="socYTDActual"></div></td>
                       <td>
                          <div id="socYTD"></div>
                       </td>
                    </tr>
                    <tr>
                       <td>9</td>
                       <td>Oil Consumption</td>
                       <td><div id="oilconsumptionMTDActual"></div></td>
                       <td>
                          <div id="oilconsumptionMTD"></div>
                       </td>
                       <td>
                          <div id="oilconsumptionMonth"></div>
                       </td>
                       <td><div id="oilconsumptionYTDActual"></div></td>
                       <td>
                          <div id="oilconsumptionYTD"></div>
                       </td>
                    </tr>
                    <tr>
                       <td>10</td>
                       <td>GCV</td>
                       <td><div id="gcvMTDActual"></div></td>
                       <td>
                          <div id="gcvMTD"></div>
                       </td>
                       <td>
                          <div id="gcvMonth"></div>
                       </td>
                       <td><div id="gcvYTDActual"></div></td>
                       <td>
                          <div id="gcvYTD"></div>
                       </td>
                    </tr>
                    </tbody>
                 </table>
              </div>
           </div>
        </div>
        </div>
<div class="row">
<div class="col-lg-4">
   <div class="card">
      <div class="card-title center">
         <h4>Monthly Coal Receipt(MT)</h4>
      </div>
      <div class="card-body">
         <div id="monthlyCoalReceipt"></div>
      </div>
   </div>
</div>
<div class="col-lg-4">
   <div class="card">
      <div class="card-title center">
         <h4>Monthly Delivered Cost(Rs/MT)</h4>
      </div>
      <div class="card-body">
         <div id="monthlyDeliveredCost"></div>
      </div>
   </div>
</div>
<div class="col-lg-4">
   <div class="card">
      <div class="card-title center">
         <h4>Gross Generation in MU</h4>
      </div>
      <div class="card-body">
         <div id="monthlyGrossgeneration"></div>
      </div>
   </div>
</div>
</div>