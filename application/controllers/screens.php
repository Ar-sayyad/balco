<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class screens extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('balco_model');
        $this->balco_model->is_logged_in(); 
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');        
         
    }
    
        public function index(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> Overall Plant";
                $data['titlebar'] = "Plant Screen >> Overall Plant";
                $data['icons'] = "bubble_chart";
                $data['path'] = "https://bldb:4440/PIVision/#/";
                $this->load->view('balco/Screen',$data);		
           }
        
        public function overallPlant(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> Overall Plant";
                $data['titlebar'] = "Plant Screen >> Overall Plant";
                $data['icons'] = "bubble_chart";
                $data['path'] = "https://bldb:4440/PIVision/#/";
                $this->load->view('balco/Screen',$data);	
        }
        
         /******540MW Unit #1***********/
        
        public function onefftBoiler(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Boiler";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Boiler";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/25/540MW_U1_Boiler_Overview";
                $this->load->view('balco/Screen',$data);          
        }
        
         public function onefftTurbine(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Turbine";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Turbine";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/26/540MW_U1_SteamTurbine_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function onefftCondenser(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Condenser";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Condenser";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/29/540MW_U1_Condenser_Overview";
                $this->load->view('balco/Screen',$data);           
        }
        
        public function onefftAirpreHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Air PreHeater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > Air PreHeater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/27/540MW_U1_APHs_Overview";
                $this->load->view('balco/Screen',$data);        
        }
        
        public function onefftHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> HP Heater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > HP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/30/540MW_U1_HPHeaters_Overview";
                $this->load->view('balco/Screen',$data);        
        }
        
        public function onefftLPHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> LP Heater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > LP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/31/540MW_U1_LPHeaters_Overview";
                $this->load->view('balco/Screen',$data);        
        }
        
         public function onefftPerformance(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> BFPs";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #1 > BFPs";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/33/540MW_U1_BFPs_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        /******540MW Unit #2***********/
        
          public function twofftBoiler(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Boiler";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > Boiler";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/78/540MW_U2_Boiler_Overview";
                $this->load->view('balco/Screen',$data);             
        }
        
         public function twofftTurbine(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Turbine";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > Turbine";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/75/540MW_U2_SteamTurbine_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function twofftCondenser(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Condenser";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > Condenser";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/80/540MW_U2_Condenser_Overview";
                $this->load->view('balco/Screen',$data);         
        }
        
         public function twofftAirpreHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Air PreHeater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > Air PreHeater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/79/540MW_U2_APHs_Overview";
                $this->load->view('balco/Screen',$data);        
        }
        
        public function twofftHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> HP Heater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > HP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/76/540MW_U2_HPHeaters_Overview";
                $this->load->view('balco/Screen',$data);           
        }
        
        public function twofftLPHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> LP Heater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > LP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/93/540MW_U2_LPHeaters_Overview";
                $this->load->view('balco/Screen',$data);           
        }
        
         public function twofftPerformance(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> BFPs";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #2 > BFPs";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/51/540MW_U2_BFPs_Overview";
                $this->load->view('balco/Screen',$data);           
        }
       
        /******540MW Unit #3***********/
        
          public function threefftBoiler(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Boiler";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > Boiler";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/83/540MW_U3_Boiler_Overview";
                $this->load->view('balco/Screen',$data);         
        }
        
         public function threefftTurbine(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Turbine";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > Turbine";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/86/540MW_U3_SteamTurbine_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function threefftCondenser(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Condenser";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > Condenser";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/85/540MW_U3_Condenser_Overview";
                $this->load->view('balco/Screen',$data);        
        }
        
        public function threefftAirpreHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Air PreHeater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > Air PreHeater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/82/540MW_U3_APHs_Overview";
                $this->load->view('balco/Screen',$data);       
        }
         public function threefftHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> HP Heater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > HP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/84/540MW_U3_HPHeaters_Overview";
                $this->load->view('balco/Screen',$data);       
        }
         public function threefftLPHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> LP Heater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > LP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/81/540MW_U3_LPHeaters_Overview";
                $this->load->view('balco/Screen',$data);       
        }
        
         public function threefftPerformance(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> BFPs";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #3 > BFPs";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/55/540MW_U3_BFPs_Overview";
                $this->load->view('balco/Screen',$data);     
        }
        
         /******540MW Unit #4***********/
        
          public function fourfftBoiler(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Boiler";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > Boiler";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/90/540MW_U4_Boiler_Overview";
                $this->load->view('balco/Screen',$data);        
        }
        
         public function fourfftTurbine(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Turbine";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > Turbine";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/87/540MW_U4_SteamTurbine_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function fourfftCondenser(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Condenser";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > Condenser";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/88/540MW_U4_Condenser_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function fourfftAirpreHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Air preHeater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > Air preHeater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/91/540MW_U4_APHs_Overview";
                $this->load->view('balco/Screen',$data);         
        }
        
        public function fourfftHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> HP Heater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > HP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/89/540MW_U4_HPHeaters_Overview";
                $this->load->view('balco/Screen',$data);         
        }
        
        public function fourfftLPHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> LP Heater";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > LP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/92/540MW_U4_LPHeaters_Overview";
                $this->load->view('balco/Screen',$data);         
        }
        
         public function fourfftPerformance(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> BFPs";
                $data['titlebar'] = "Plant Screen >> 540 MW > Unit #4 > BFPs";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/59/540MW_U4_BFPs_Overview";
                $this->load->view('balco/Screen',$data);            
        }
      
        
        /********1200 MW START***********/
        
        
         /******1200MW Unit #1***********/
        
        public function onetwhBoiler(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Boiler";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #1 > Boiler";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/34/1200MW_U1_Boiler_Overview";
                $this->load->view('balco/Screen',$data);         
        }
        
         public function onetwhTurbine(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Turbine";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #1 > Turbine";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/17/1200MW_U1_SteamTurbine_Overview";
                $this->load->view('balco/Screen',$data);           
        }
        
        public function onetwhCondenser(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Condenser";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #1 > Condenser";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/28/1200MW_U1_Condenser_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function onetwhAirpreHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> Air preHeater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #1 > Air preHeater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/20/1200MW_U1_APHs_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function onetwhHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> HP Heater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #1 > HP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/60/1200MW_U1_HPHeaters_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function onetwhLPHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> LP Heater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #1 > LP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/22/1200MW_U1_LPHeaters_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
         public function onetwhPerformance(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1 <i class='fa fa-angle-right'></i> BFPs";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #1 > BFPs";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/32/1200MW_U1_BFPs_Overview";
                $this->load->view('balco/Screen',$data);           
        }
        
        /******1200MW Unit #2***********/
        
          public function twotwhBoiler(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Boiler";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > Boiler";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/72/1200MW_U2_Boiler_Overview";
                $this->load->view('balco/Screen',$data);          
        }
        
         public function twotwhTurbine(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Turbine";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > Turbine";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/69/1200MW_U2_SteamTurbine_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function twotwhCondenser(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Condenser";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > Condenser";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/36/1200MW_U2_Condenser_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function twotwhAirpreHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> Air preHeater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > Air preHeater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/66/1200MW_U2_APHs_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
         public function twotwhHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> HP Heater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > HP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/21/1200MW_U2_HPHeaters_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function twotwhLPHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> LP Heater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > LP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/63/1200MW_U2_LPHeaters_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
         public function twotwhPerformance(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2 <i class='fa fa-angle-right'></i> BFPs";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #2 > BFPs";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/38/1200MW_U2_BFPs_Overview";
                $this->load->view('balco/Screen',$data);           
        }
       
        /******1200MW Unit #3***********/
        
          public function threetwhBoiler(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Boiler";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > Boiler";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/73/1200MW_U3_Boiler_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
         public function threetwhTurbine(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Turbine";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > Turbine";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/70/1200MW_U3_SteamTurbine_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function threetwhCondenser(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Condenser";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > Condenser";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/37/1200MW_U3_Condenser_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function threetwhAirpreHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> Air preHeater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > Air preHeater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/67/1200MW_U3_APHs_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function threetwhHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> HP Heater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > HP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/61/1200MW_U3_HPHeaters_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
         public function threetwhLPHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> LP Heater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > LP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/64/1200MW_U3_LPHeaters_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
         public function threetwhPerformance(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3 <i class='fa fa-angle-right'></i> BFPs";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #3 > BFPs";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/40/1200MW_U3_BFPs_Overview";
                $this->load->view('balco/Screen',$data);           
        }
        
         /******1200MW Unit #4***********/
        
          public function fourtwhBoiler(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Boiler";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > Boiler";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/74/1200MW_U4_Boiler_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
         public function fourtwhTurbine(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Turbine";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > Turbine";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/71/1200MW_U4_SteamTurbine_Overview";
                $this->load->view('balco/Screen',$data);        
        }
        
        public function fourtwhCondenser(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Condenser";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > Condenser";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/42/1200MW_U4_Condenser_Overview";
                $this->load->view('balco/Screen',$data);            
        }
        
        public function fourtwhAirpreHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> Air preHeater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > Air preHeater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/68/1200MW_U4_APHs_Overview";
                $this->load->view('balco/Screen',$data);           
        }
        
        public function fourtwhHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> HP Heater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > HP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/62/1200MW_U4_HPHeaters_Overview";
                $this->load->view('balco/Screen',$data);           
        }
        
        public function fourtwhLPHeater(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> LP Heater";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > LP Heater";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/65/1200MW_U4_LPHeaters_Overview";
                $this->load->view('balco/Screen',$data);           
        }
        
         public function fourtwhPerformance(){
                $data['title'] = "Plant Screen <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4 <i class='fa fa-angle-right'></i> BFPs";
                $data['titlebar'] = "Plant Screen >> 1200 MW > Unit #4 > BFPs";
                $data['icons'] = "bubble_chart";            
                $data['path'] = "https://bldb:4440/PIVision/#/Displays/41/1200MW_U4_BFPs_Overview";
                $this->load->view('balco/Screen',$data);           
        }
}
