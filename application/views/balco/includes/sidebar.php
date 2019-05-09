 <?php if($this->session->userdata('admin_login') == 1)
           { ?>
<div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Dashboard</li>
                <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home </a></li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="fa fa-arrows"></i>
                        <span class="hide-menu">KPIS
                            <span class="label label-rouded label-primary pull-right">4</span>                                        
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url();?>kpis/overallPlant"><i class="fa fa-bar-chart"></i> Overall Plant </a></li>
                         <li><a href="<?php echo base_url();?>kpis/plantHead"><i class="fa fa-table"></i> Plant Head</a></li> 
                        <li><a href="<?php echo base_url();?>kpis/cop"><i class="fa fa-bar-chart"></i> COP </a></li>
                        <li><a href="<?php echo base_url();?>kpis/copBreakup"><i class="fa fa-bar-chart"></i> COP Breakup </a></li>
                        <!--<li><a href="#"><i class="fa fa-file-text"></i> Misc. </a></li>-->
                    </ul>
                </li>                        
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="fa fa-arrows" aria-hidden="true"></i>
                        <span class="hide-menu">Performance
                            <span class="label label-rouded label-primary pull-right">3</span>                                        
                        </span>
                    </a>                            
                    <ul aria-expanded="false" class="collapse">
                       <li><a href="<?php echo base_url();?>performance/overallPlant"> <i class="fa fa-arrow-circle-right"></i> Overall Plant</a></li>
                       <li>
                           <a class="has-arrow" href="#" aria-expanded="false">
                                <i class="fa fa-plus-circle"></i>
                                <span class="hide-menu">540 MW
                                    <span class="label label-rouded label-info pull-right">7</span>                                        
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="<?php echo base_url();?>performance/unitOnefft"><i class="fa fa-desktop"></i> Unit #1</a></li>
                                 <li><a href="<?php echo base_url();?>performance/unitTwofft"><i class="fa fa-desktop"></i> Unit #2</a></li>
                                 <li><a href="<?php echo base_url();?>performance/unitThreefft"><i class="fa fa-desktop"></i> Unit #3</a></li>
                                 <li><a href="<?php echo base_url();?>performance/unitFourfft"><i class="fa fa-desktop"></i> Unit #4</a></li>
                                 <li><a href="<?php echo base_url();?>performance/bopDcsfft"><i class="fa fa-window-maximize"></i> BOP</a></li>
                                 <li><a href="<?php echo base_url();?>performance/boilerfft"><i class="fa fa-free-code-camp"></i> Boiler</a></li>
                                <li><a href="<?php echo base_url();?>performance/turbinefft"><i class="fa fa-superpowers"></i> Turbine</a></li>
                             </ul>
                           </li>



                       <li>
                           <a class="has-arrow" href="#" aria-expanded="false">
                                <i class="fa fa-plus-circle"></i>
                                <span class="hide-menu">1200 MW
                                    <span class="label label-rouded label-info pull-right">7</span>                                        
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a href="<?php echo base_url();?>performance/unitOnetwh"><i class="fa fa-desktop"></i> Unit #1</a></li>
                                 <li><a href="<?php echo base_url();?>performance/unitTwotwh"><i class="fa fa-desktop"></i> Unit #2</a></li>
                                 <li><a href="<?php echo base_url();?>performance/unitThreetwh"><i class="fa fa-desktop"></i> Unit #3</a></li>
                                 <li><a href="<?php echo base_url();?>performance/unitFourtwh"><i class="fa fa-desktop"></i> Unit #4</a></li>
                                 <li><a href="<?php echo base_url();?>performance/bopDcstwh"><i class="fa fa-window-maximize"></i> BOP</a></li>
                                <li><a href="<?php echo base_url();?>performance/boilertwh"><i class="fa fa-free-code-camp"></i> Boiler</a></li>
                                 <li><a href="<?php echo base_url();?>performance/turbinetwh"><i class="fa fa-superpowers"></i> Turbine</a></li>
                             </ul>
                       </li>
                    </ul>

                </li>    
                <li class="nav-label">Plant Screens</li>
                        <li>
                                <a href="<?php echo base_url();?>screens/overallPlant"> <i class="fa fa-arrow-circle-right"></i> Overall Plant</a>
                        </li>
                        <li>
                           <a class="has-arrow" href="#" aria-expanded="false">
                                <i class="fa fa-arrows"></i>
                                <span class="hide-menu">540 MW
                                    <span class="label label-rouded label-primary pull-right">4</span>                                        
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a class="has-arrow" href="<?php echo base_url();?>screens/onefft" aria-expanded="false">
                                         <i class="fa fa-plus-circle"></i>
                                         <span class="hide-menu">Unit #1
                                             <span class="label label-rouded label-primary pull-right">7</span>                                        
                                         </span>
                                     </a>
                                    <ul aria-expanded="false" class="collapse">
                                         <li><a href="<?php echo base_url();?>screens/onefftBoiler"><i class="fa fa-television"></i> Boiler</a></li>
                                         <li><a href="<?php echo base_url();?>screens/onefftTurbine"><i class="fa fa-television"></i> Turbine</a></li>
                                         <li><a href="<?php echo base_url();?>screens/onefftCondenser"><i class="fa fa-television"></i> Condenser</a></li>
                                         <li><a href="<?php echo base_url();?>screens/onefftAirpreHeater"><i class="fa fa-television"></i> Air Preheaters</a></li>                                         
                                         <li><a href="<?php echo base_url();?>screens/onefftHeater"><i class="fa fa-television"></i> HP Heaters</a></li>                                         
                                         <li><a href="<?php echo base_url();?>screens/onefftLPHeater"><i class="fa fa-television"></i> LP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/onefftPerformance"><i class="fa fa-television"></i> BFP's</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="<?php echo base_url();?>screens/twofft" aria-expanded="false">
                                         <i class="fa fa-plus-circle"></i>
                                         <span class="hide-menu">Unit #2
                                             <span class="label label-rouded label-primary pull-right">7</span>                                        
                                         </span>
                                     </a>
                                    <ul aria-expanded="false" class="collapse">
                                         <li><a href="<?php echo base_url();?>screens/twofftBoiler"><i class="fa fa-television"></i> Boiler</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twofftTurbine"><i class="fa fa-television"></i> Turbine</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twofftCondenser"><i class="fa fa-television"></i> Condenser</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twofftAirpreHeater"><i class="fa fa-television"></i> Air Preheaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twofftHeater"><i class="fa fa-television"></i> HP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twofftLPHeater"><i class="fa fa-television"></i> LP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twofftPerformance"><i class="fa fa-television"></i> BFP's</a></li>
                                    </ul>
                                </li>
                                 <li>
                                    <a class="has-arrow" href="<?php echo base_url();?>screens/threefft" aria-expanded="false">
                                         <i class="fa fa-plus-circle"></i>
                                         <span class="hide-menu">Unit #3
                                             <span class="label label-rouded label-primary pull-right">7</span>                                        
                                         </span>
                                     </a>
                                    <ul aria-expanded="false" class="collapse">
                                         <li><a href="<?php echo base_url();?>screens/threefftBoiler"><i class="fa fa-television"></i> Boiler</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threefftTurbine"><i class="fa fa-television"></i> Turbine</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threefftCondenser"><i class="fa fa-television"></i> Condenser</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threefftAirpreHeater"><i class="fa fa-television"></i> Air Preheaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threefftHeater"><i class="fa fa-television"></i> HP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threefftLPHeater"><i class="fa fa-television"></i> LP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threefftPerformance"><i class="fa fa-television"></i> BFP's</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="<?php echo base_url();?>screens/fourfft" aria-expanded="false">
                                         <i class="fa fa-plus-circle"></i>
                                         <span class="hide-menu">Unit #4
                                             <span class="label label-rouded label-primary pull-right">7</span>                                        
                                         </span>
                                     </a>
                                    <ul aria-expanded="false" class="collapse">
                                         <li><a href="<?php echo base_url();?>screens/fourfftBoiler"><i class="fa fa-television"></i> Boiler</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourfftTurbine"><i class="fa fa-television"></i> Turbine</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourfftCondenser"><i class="fa fa-television"></i> Condenser</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourfftAirpreHeater"><i class="fa fa-television"></i> Air Preheaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourfftHeater"><i class="fa fa-television"></i> HP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourfftLPHeater"><i class="fa fa-television"></i> LP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourfftPerformance"><i class="fa fa-television"></i> BFP's</a></li>
                                    </ul>
                                </li>

                             </ul>
                       </li>
                        <li>
                           <a class="has-arrow" href="#" aria-expanded="false">
                                <i class="fa fa-arrows"></i>
                                <span class="hide-menu">1200 MW
                                    <span class="label label-rouded label-primary pull-right">4</span>                                        
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                 <li>
                                    <a class="has-arrow" href="<?php echo base_url();?>screens/onetwh" aria-expanded="false">
                                         <i class="fa fa-plus-circle"></i>
                                         <span class="hide-menu">Unit #1
                                             <span class="label label-rouded label-primary pull-right">7</span>                                        
                                         </span>
                                     </a>
                                    <ul aria-expanded="false" class="collapse">
                                         <li><a href="<?php echo base_url();?>screens/onetwhBoiler"><i class="fa fa-television"></i> Boiler</a></li>
                                         <li><a href="<?php echo base_url();?>screens/onetwhTurbine"><i class="fa fa-television"></i> Turbine</a></li>
                                         <li><a href="<?php echo base_url();?>screens/onetwhCondenser"><i class="fa fa-television"></i> Condenser</a></li>
                                         <li><a href="<?php echo base_url();?>screens/onetwhAirpreHeater"><i class="fa fa-television"></i> Air Preheaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/onetwhHeater"><i class="fa fa-television"></i> HP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/onetwhLPHeater"><i class="fa fa-television"></i> LP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/onetwhPerformance"><i class="fa fa-television"></i> BFP's</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="<?php echo base_url();?>screens/twotwh" aria-expanded="false">
                                         <i class="fa fa-plus-circle"></i>
                                         <span class="hide-menu">Unit #2
                                             <span class="label label-rouded label-primary pull-right">7</span>                                        
                                         </span>
                                     </a>
                                    <ul aria-expanded="false" class="collapse">
                                         <li><a href="<?php echo base_url();?>screens/twotwhBoiler"><i class="fa fa-television"></i> Boiler</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twotwhTurbine"><i class="fa fa-television"></i> Turbine</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twotwhCondenser"><i class="fa fa-television"></i> Condenser</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twotwhAirpreHeater"><i class="fa fa-television"></i> Air Preheaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twotwhHeater"><i class="fa fa-television"></i> HP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twotwhLPHeater"><i class="fa fa-television"></i> LP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/twotwhPerformance"><i class="fa fa-television"></i> BFP's</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="<?php echo base_url();?>screens/threetwh" aria-expanded="false">
                                         <i class="fa fa-plus-circle"></i>
                                         <span class="hide-menu">Unit #3
                                             <span class="label label-rouded label-primary pull-right">7</span>                                        
                                         </span>
                                     </a>
                                    <ul aria-expanded="false" class="collapse">
                                         <li><a href="<?php echo base_url();?>screens/threetwhBoiler"><i class="fa fa-television"></i> Boiler</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threetwhTurbine"><i class="fa fa-television"></i> Turbine</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threetwhCondenser"><i class="fa fa-television"></i> Condenser</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threetwhAirpreHeater"><i class="fa fa-television"></i> Air Preheaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threetwhHeater"><i class="fa fa-television"></i> HP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threetwhLPHeater"><i class="fa fa-television"></i> LP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/threetwhPerformance"><i class="fa fa-television"></i> BFP's</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="<?php echo base_url();?>screens/fourtwh" aria-expanded="false">
                                         <i class="fa fa-plus-circle"></i>
                                         <span class="hide-menu">Unit #4
                                             <span class="label label-rouded label-primary pull-right">7</span>                                        
                                         </span>
                                     </a>
                                    <ul aria-expanded="false" class="collapse">
                                         <li><a href="<?php echo base_url();?>screens/fourtwhBoiler"><i class="fa fa-television"></i> Boiler</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourtwhTurbine"><i class="fa fa-television"></i> Turbine</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourtwhCondenser"><i class="fa fa-television"></i> Condenser</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourtwhAirpreHeater"><i class="fa fa-television"></i> Air Preheaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourtwhHeater"><i class="fa fa-television"></i> HP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourtwhLPHeater"><i class="fa fa-television"></i> LP Heaters</a></li>
                                         <li><a href="<?php echo base_url();?>screens/fourtwhPerformance"><i class="fa fa-television"></i> BFP's</a></li>
                                    </ul>
                                </li>

                             </ul>
                       </li>  
                <li class="nav-label">Reports</li>
					<li><a href="<?php echo base_url();?>reports/daily"> <i class="fa fa-file-pdf-o"></i> Daily Perf Reports</a></li>
					<li><a href="<?php echo base_url();?>reports/realtimePerf"> <i class="fa fa-file-pdf-o"></i> Real-Time Perf Reports</a></li>
					<li><a href="<?php echo base_url();?>reports/DailyGeneration"> <i class="fa fa-file-pdf-o"></i> Daily Generation Reports</a></li> 
                                                  
                <li class="nav-label">Manual Entry</li>
                <li>
                           <a class="has-arrow" href="#" aria-expanded="false">
                                <i class="fa fa-arrows"></i>
                                <span class="hide-menu">CPP 540
                                    <span class="label label-rouded label-primary pull-right">2</span>                                        
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?php echo base_url();?>manual/cppfiveFourtyCA"><i class="ti-agenda"></i> Coal Analysis</a></li>
                                        <li><a href="<?php echo base_url();?>manual/cppfiveFourtyDGR"><i class="ti-agenda"></i> DGR Manual Entry</a></li> 
                            </ul>
                </li>
                 <li>
                           <a class="has-arrow" href="#" aria-expanded="false">
                                <i class="fa fa-arrows"></i>
                                <span class="hide-menu">PP 1200
                                    <span class="label label-rouded label-primary pull-right">3</span>                                        
                                </span>
                            </a>
                            <ul aria-expanded="false" class="collapse">
                                        <li><a href="<?php echo base_url();?>manual/pptwelveHCA"><i class="ti-agenda"></i> Coal Analysis</a></li>
                                        <li><a href="<?php echo base_url();?>manual/ippsixHDGR"><i class="ti-agenda"></i> IPP600 DGR</a></li>
                                        <li><a href="<?php echo base_url();?>manual/cppsixHDGR"><i class="ti-agenda"></i> CPP600 DGR</a></li>
                            </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
 </div>
<?php }
        elseif ($this->session->userdata('dataadmin_login') == 1)
            { include('dataadmin_sidebar.php');}