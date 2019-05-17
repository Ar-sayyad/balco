<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reports extends CI_Controller {
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
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> Daily Perf Reports";
                $data['titlebar'] = "Reports >> Daily Perf Reports";
                $data['icons'] = "bubble_chart";
                $data['path'] = "https://bldb:8090/ReportServer_SSRS/Pages/ReportViewer.aspx?%2fBalco_Power_Report%2fPerformanceReport&rs:Embed=true";
                $this->load->view('balco/Report',$data); 		
          }
        
        public function daily(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> Daily Perf Reports";
                $data['titlebar'] = "Reports >> Daily Perf Reports";
                $data['icons'] = "bubble_chart";
                $data['path'] = "https://bldb:8090/ReportServer_SSRS/Pages/ReportViewer.aspx?%2fBalco_Power_Report%2fPerformanceReport&rs:Embed=true";
                $this->load->view('balco/Report',$data); 
          }
        
        /********540 MW *******/
        
         public function realtimePerf(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> Real-Time Perf Reports";
                $data['titlebar'] = "Reports >> Real-Time Perf Reports";
                $data['icons'] = "bubble_chart";
                $data['path'] = "https://bldb:8090/ReportServer_SSRS/Pages/ReportViewer.aspx?%2fBalco_Power_Report%2fPerformanceReportSnapshot&rs:Embed=true";
                $this->load->view('balco/Report',$data); 
          }     
       
         public function DailyGeneration(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> Daily Generation Reports";
                $data['titlebar'] = "Reports >> Daily Generation Reports";
                $data['icons'] = "bubble_chart";
                $data['path'] = "piadmin/images/reports/overallPlantPerformance.png";
                $this->load->view('balco/Report',$data); 
	}     
        
         public function unitthreefft(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3";
                $data['titlebar'] = "Reports >> 540 MW > Unit #3";
                $data['icons'] = "bubble_chart";
                $data['path'] = "piadmin/images/reports/overallPlantPerformance.png";
                $this->load->view('balco/Report',$data); 
	}  
        
         public function unitfourfft(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4";
                $data['titlebar'] = "Reports >> 540 MW > Unit #4";
                $data['icons'] = "bubble_chart";
                $data['path'] = "piadmin/images/reports/overallPlantPerformance.png";
                $this->load->view('balco/Report',$data); ;
	}   
        
        public function performancefft(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Performance";
                $data['titlebar'] = "Reports >> 540 MW > Performance";
                $data['icons'] = "bubble_chart";
                $data['path'] = "piadmin/images/reports/overallPlantPerformance.png";
                $this->load->view('balco/Report',$data); 
	}     
        
        /***********1200 MW************/
      
         public function unitonetwh(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1";
                $data['titlebar'] = "Reports >> 1200 MW > Unit #1";
                $data['icons'] = "bubble_chart";
                $data['path'] = "piadmin/images/reports/overallPlantPerformance.png";
                $this->load->view('balco/Report',$data); 
	}   
        
        public function unittwotwh(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2";
                $data['titlebar'] = "Reports >> 1200 MW > Unit #2";
                $data['icons'] = "bubble_chart";
                $data['path'] = "piadmin/images/reports/overallPlantPerformance.png";
                $this->load->view('balco/Report',$data); 
	}  
        
         public function unitthreetwh(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3";
                $data['titlebar'] = "Reports >> 1200 MW > Unit #3";
                $data['icons'] = "bubble_chart";
                $data['path'] = "piadmin/images/reports/overallPlantPerformance.png";
                $this->load->view('balco/Report',$data); 
	}  
        
         public function unitfourtwh(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4";
                $data['titlebar'] = "Reports >> 1200 MW > Unit #4";
                $data['icons'] = "bubble_chart";
                $data['path'] = "piadmin/images/reports/overallPlantPerformance.png";
                $this->load->view('balco/Report',$data); 
	}  
        
        public function performancetwh(){
                $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Performance";
                $data['titlebar'] = "Reports >> 1200 MW > Performance";
                $data['icons'] = "bubble_chart";
                $data['path'] = "piadmin/images/reports/overallPlantPerformance.png";
                $this->load->view('balco/Report',$data); 
	}  
}
