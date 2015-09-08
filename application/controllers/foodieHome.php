<?php

class FoodieHome extends CI_Controller {
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
       
        
    }
	
	public function index()
        {
            //Home page title
            $this->load->view('master');
            $this->load->view('FoodiePublicHome');
        }
        
        public function login()
        {
            $this->load->view('master');
            $this->load->view('Loginpage');
        }
        
         public function indian()
        {
            $this->load->view('master');
            $this->load->view('indian');
        }
        
         public function italian()
        {
            $this->load->view('master');
            $this->load->view('italian');
        }
        
}

