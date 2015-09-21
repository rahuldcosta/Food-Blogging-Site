<?php

class FoodieHome extends CI_Controller {
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
          $this->load->model('recipes');
       
        
    }
    public function notifications()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('userprofilelayout');
            $this->load->view('notifications');
            $this->load->view('footer');
            
        }
        
            public function myRecipes()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('userprofilelayout');
            $this->load->view('myRecipes');
            $this->load->view('footer');
            
        }
        
	  public function CookBook()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('userprofilelayout');
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
        
         public function changepassword()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('userprofilelayout');
            $this->load->view('changepassword');
            $this->load->view('footer');
        }
	public function index()
        {
           
            
            $desertarray= $this->recipes->form_get('5826460f04b8f1f1156c86f531caf205'); 
           // print_r($desertarray);
            
        
            //Home page titles
            $this->load->view('master');
            $this->load->view('FoodiePublicHome',array(
                
                'dname'=>$desertarray[0]['rname'],
                'dsteps'=>$desertarray[0]['steps'],
                'durl'=>$desertarray[0]['dishImgURL'],
                'recipeid'=>$desertarray[0]['recipe_id'],
                
            ));
            $this->load->view('footer');
        }
        	public function helpPage()
        {
            //Home page titles
            $this->load->view('master');
             $this->load->view('userprofilelayout');
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
        
           public function chinese()
        {
            $this->load->view('master');
            $this->load->view('chinese');
            $this->load->view('footer');
        }
            public function Thai()
        {
            $this->load->view('master');
            $this->load->view('Thai');
            $this->load->view('footer');
        }
            public function continental()
        {
            $this->load->view('master');
            $this->load->view('continental');
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
        
         public function interest()
        {
             $this->load->view('master');
             $this->load->view('userprofilelayout');
             $this->load->view('interest');
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

