<?php

class Search extends CI_Controller {
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
         $this->load->model('recipes');
       
        
}

 public function index()
        {
          
            $this->load->view('master');
            $this->load->view('searchSite');
             $this->load->view('footer');
        
        }
        
 
        
         public function indexedSearch()
        {
            //Home page titles
             $setofrecipes=$this->recipes->get_all_recipes(1);
             
             print_r($setofrecipes);
//             echo $setofrecipes;
//            $this->load->view('master');
//            $this->load->view('indexedSearch');
//            $this->load->view('footer');
        }
        
       
         public function findrecipe()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('indexedSearch');
            $this->load->view('footer');
        }
        
        
        
        
 }
     

