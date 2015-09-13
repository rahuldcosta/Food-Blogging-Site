<?php

class FoodieHome extends CI_Controller {
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
       
        
    }
	
	public function index()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('FoodiePublicHome');
        }
        
        public function indexedSearch()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('indexedSearch');
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
        
         public function more()
        {
            $this->load->view('master');
            $this->load->view('more');
        }
          public function searchSite()
        {
            $this->load->view('master');
            $this->load->view('searchSite');
        }
            public function userPage()
        {
            $this->load->view('master');
            $this->load->view('userPage');
        }
        public function adminPage()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('adminPage');
        }
        
}

