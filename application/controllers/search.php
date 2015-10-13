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
             $setofrecipes=$this->recipes->viewall(0,3,"all");
             
           //  echo $this->recipes->get_count("recipes");
         //   print_r($setofrecipes);
//             echo $setofrecipes;
            $this->load->view('master');
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipes,'alpa'=>"all"));
            $this->load->view('footer');
        }
        
        public function getnextpage()
        {
            $pno=$this->input->get('pgno')-1;
            $alp=$this->input->get('alpha');
            
             $setofrecipes=$this->recipes->viewall($pno,3,$alp);
             
           //  echo $this->recipes->get_count("recipes");
         ///    print_r($setofrecipes);
//             echo $setofrecipes;
            $this->load->view('master');
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipes  ,'alpa'=>$alp));
            $this->load->view('footer');
        }


        
        public function filsearch()
        {
            
            
            $wpara= array(
                'rname'=>$this->input->post('dishName'),
                'recipetype'=>$this->input->post('cat'),
                 'regiontype'=>$this->input->post('cusine'),
                 'author'=>$this->input->post('chefName'),
                 'date'=>$this->input->post('ddate'),
                );
            
           $setofrecipe=$this->recipes->view_fltered(0,$wpara,3);
            
             $this->load->view('master');
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipe));
            $this->load->view('footer');
            
            
        }


        public function switchtoalphabetic()
        {
           
            //chr=this.post
            $setofrecipes=$this->recipes->viewall(0,3,$this->input->get('alpha'));
             $this->load->view('master');
            $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipes,'alpa'=>$this->input->get('alpha')));
            $this->load->view('footer');
        }
        
       
         public function findrecipe()
        {
            //Home page titles
            $this->load->view('master');
            $this->load->view('indexedSearch');
            $this->load->view('footer');
        }
        
        
        
        
 }
     

