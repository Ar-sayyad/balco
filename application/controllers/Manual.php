<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manual extends CI_Controller {
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
    /********CPP 540 MW *******/
        public function index(){
                $data['title'] = "Manual Entry <i class='fa fa-angle-double-right'></i> CPP 540 Coal Analysis";
                $data['titlebar'] = "Manual Entry >> CPP 540 Coal Analysis";
                $data['icons'] = "bubble_chart";
                $data['path'] = "";
                $this->load->view('balco/manual_cppfiveFourtyCA',$data); 		
          }
        
        public function cppfiveFourtyCA(){
                $data['title'] = "Manual Entry <i class='fa fa-angle-double-right'></i> CPP 540 Coal Analysis";
                $data['titlebar'] = "Manual Entry >> CPP 540 Coal Analysis";
                $data['icons'] = "bubble_chart";
                $data['path'] = "";
                $this->load->view('balco/manual_cppfiveFourtyCA',$data); 
          }
          
         public function cppfiveFourtyDGR(){
                $data['title'] = "Manual Entry <i class='fa fa-angle-double-right'></i> CPP 540 DGR Manual Entry";
                $data['titlebar'] = "Manual Entry >> CPP DGR Manual Entry";
                $data['icons'] = "bubble_chart";
                $data['path'] = "";
                $this->load->view('balco/manual_cppfiveFourtyDGR',$data); 
          }
        
        /********CPP 540 MW *******/
          
          /********PP 1200 MW *******/
          
         public function pptwelveHCA(){
                $data['title'] = "Manual Entry <i class='fa fa-angle-double-right'></i> PP 1200 Coal Analysis";
                $data['titlebar'] = "Manual Entry >> PP 1200 Coal Analysis";
                $data['icons'] = "bubble_chart";
                $data['path'] = "";
                $this->load->view('balco/manual_pptwelveHCA',$data); 
          }     
       
         public function ippsixHDGR(){
                $data['title'] = "Manual Entry <i class='fa fa-angle-double-right'></i> IPP 600 DGR Manual Entry";
                $data['titlebar'] = "Manual Entry >> IPP 600 DGR Manual Entry";
                $data['icons'] = "bubble_chart";
                $data['path'] = "";
                $this->load->view('balco/manual_ippsixHDGR',$data); 
          }       
        
          public function cppsixHDGR(){
                $data['title'] = "Manual Entry <i class='fa fa-angle-double-right'></i> CPP 600 DGR Manual Entry";
                $data['titlebar'] = "Manual Entry >> CPP 600 DGR Manual Entry";
                $data['icons'] = "bubble_chart";
                $data['path'] = "";
                $this->load->view('balco/manual_cppsixHDGR',$data); 
          }      
        
                               
        /***********PP 1200 MW************/
      
        
}
