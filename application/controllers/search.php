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
          
            $this->loadmaster();
            $this->load->view('searchSite');
             $this->load->view('footer');
        
        }
        
         public function loadmaster()
    {
         $popularlist=$this->recipes->loadmasterpage();
        
       // print_r($popularlist);
        $this->load->view('master',array(
            
            'popularlist'=>$popularlist,
            
        ));
    }
        
 
        
         public function indexedSearch()
        {
            //Home page titles
             $setofrecipes=$this->recipes->viewall(0,3,"all");
             
           //  echo $this->recipes->get_count("recipes");
         //   print_r($setofrecipes);
//             echo $setofrecipes;
            $this->loadmaster();
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipes,'alpa'=>"all",'type'=>"vall"));
            $this->load->view('footer');
        }
        
        public function getnextpage()
        {
            //print_r($this->wpara);
            $pno=$this->input->get('pgno')-1;
            $alp=$this->input->get('alpha');
            $dtype=$this->input->get('dtype');
            $setofrecipes=array();
            $this->loadmaster();
             if($dtype=="vall")
                
            {   $setofrecipes=$this->recipes->viewall($pno,3,$alp);
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipes  ,'alpa'=>$alp,'type'=>"vall"));
                // print_r($setofrecipes);
            }
            
            else if($dtype=="vfil")
            {
                echo "asa";
               // print_r($wpara);
               $setofrecipes=$this->recipes->view_fltered($pno,$this->session->userdata('wpara'),3); 
              //  print_r($setofrecipes);
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipes,'alpa'=>$alp,'type'=>"vfil"));    
            }
             echo $this->recipes->get_count("recipes");
          //  print_r($setofrecipes);
            // echo $setofrecipes;
            
            
           // $this->load->view('footer');
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
            
            if($recipetype=="")
            {
               // echo "Not set";
                unset($wpara['recipetype']);
               
            }
            
            if($regiontype=="")
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
            
            
          
            
           
            
           $setofrecipe=$this->recipes->view_fltered(0,$wpara,3);
            $this->session->set_userdata('wpara', $wpara);
        // print_r($setofrecipe);
             $this->loadmaster();
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipe,'alpa'=>$alp,'type'=>"vfil"));
            $this->load->view('footer');
            
            
        }


        public function switchtoalphabetic()
        {
           
            //chr=this.post
            $setofrecipes=$this->recipes->viewall(0,3,$this->input->get('alpha'));
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
     

