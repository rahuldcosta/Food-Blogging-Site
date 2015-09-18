<?php

class FoodieHome extends CI_Controller {
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
       
        
    }
    public function notifications()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('notifications');
            $this->load->view('footer');
            
        }
	  public function CookBook()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('CookBook');
            $this->load->view('footer');
        }
	
         public function editprofile()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('userprofilelayout');
            $this->load->view('editprofile');
            $this->load->view('footer');
        }
	public function index()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('FoodiePublicHome');
            $this->load->view('footer');
        }
        	public function helpPage()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('helpPage');
             $this->load->view('footer');
        }
        public function indexedSearch()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('indexedSearch');
            $this->load->view('footer');
        }
        
        public function login()
        {
            $this->load->view('master');
            $this->load->view('Loginpage');
            $this->load->view('footer');
        }
        
         public function indian()
        {
            $this->load->view('master');
            $this->load->view('indian');
            $this->load->view('footer');
        }
        
         public function italian()
        {
            $this->load->view('master');
            $this->load->view('italian');
             $this->load->view('footer');
        }
        
         public function more()
        {
            $this->load->view('master');
            $this->load->view('more');
             $this->load->view('footer');
        }
          public function searchSite()
        {
            $this->load->view('master');
            $this->load->view('searchSite');
             $this->load->view('footer');
        }
            public function userPage()
        {
            $this->load->view('master');
            $this->load->view('userprofilelayout');
            $this->load->view('userPage');
             $this->load->view('footer');
            
        }
        public function adminPage()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('userprofilelayout');
            $this->load->view('adminPage');
             $this->load->view('footer');
        }
        
}

