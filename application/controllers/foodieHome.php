<?php

class FoodieHome extends CI_Controller {
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
       
        
    }
	
	public function index()
        {
            //Home
            $this->load->view('FoodiePublicHome');
        }
        
        public function login()
        {
            
            $this->load->view('Loginpage');
        }
        
         public function indian()
        {
            
            $this->load->view('indian');
        }
        
         public function italian()
        {
            
            $this->load->view('italian');
        }
        
}

