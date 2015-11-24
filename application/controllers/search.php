<?php

class Search extends CI_Controller {
    
    
    
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
         $this->load->model('recipes');
       $this->load->library('session');
        
}

 public function index()
        {
          //Updating look of Search
            $this->loadmaster();
            $this->load->view('searchSite');
             $this->load->view('footer');
        
        }
        
  public function loadmaster()
    {
        $popularlist=$this->recipes->loadpopularlist();
        $mostviewedlist=$this->recipes->loadmostviewslist();
        $recentlyaddedlist=$this->recipes->loadrecentlyaddedlist();
        
       // print_r($popularlist);
        $this->load->view('master',array(
            
            'popularlist'=>$popularlist,
             'mostviewlist'=>$mostviewedlist,
            'recentlyaddedlist'=>$recentlyaddedlist,
            
        ));
    }
        
 
        
         public function indexedSearch()
        {
            //Home page titles
             $setofrecipes=$this->recipes->viewall("all");
             
           //  echo $this->recipes->get_count("recipes");
         //   print_r($setofrecipes);
//             echo $setofrecipes;
            $this->loadmaster();
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipes,'alpa'=>"all",'type'=>"vall"));
            $this->load->view('footer');
        }
        
        
        
       
        


        
        public function filsearch()
        {
            $alp="all";
            
            $wpara= array(
                'rname'=>$this->input->post('dishName'),
                'recipetype'=>$this->input->post('cat'),
                 'regiontype'=>$this->input->post('cusine'),
                 'author'=>$this->input->post('chefName'),
                 'date'=>$this->input->post('ddate'),
                );
            
            $rname=$this->input->post('dishName');
            $recipetype=$this->input->post('cat');
            $regiontype=$this->input->post('cusine');
            $author=$this->input->post('chefName');
            $date=$this->input->post('ddate');
            
            

         
            if($rname=="")
            {
               // echo "Not set";
                 unset($wpara['rname']);
              
            }
            
            if($recipetype=="Any")
            {
               // echo "Not set";
                unset($wpara['recipetype']);
               
            }
            
            if($regiontype=="Any")
            {
               // echo "Not set";
                 unset($wpara['regiontype']);
               
            }
            
            if($author=="")
            {
               // echo "Not set";
                 unset($wpara['author']);
               
            }
            
             if($date=="")
            {
               // echo "Not set";
                 unset($wpara['date']);
                
            }
            
            
          
            
           
            
           $setofrecipe=$this->recipes->view_fltered($wpara);
           
         //  print_r($setofrecipe);
            $this->session->set_userdata('wpara', $wpara);
        // print_r($setofrecipe);
             $this->loadmaster();
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipe,'alpa'=>$alp,'type'=>"vfil"));
            $this->load->view('footer');
            
            
        }


        public function switchtoalphabetic()
        {
           
            //chr=this.post
            $setofrecipes=$this->recipes->viewall($this->input->get('alpha'));
            
           // print_r($setofrecipes);
        //   echo sizeof($setofrecipes['results']);
             $this->loadmaster();
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipes,'type'=>"vall",'alpa'=>$this->input->get('alpha')));
            $this->load->view('footer');
        }
        
       
         public function findrecipe()
        {
            //Home page titles
            $this->loadmaster();
            $this->load->view('indexedSearch');
            $this->load->view('footer');
        }
        
        
        
        
 }
     

