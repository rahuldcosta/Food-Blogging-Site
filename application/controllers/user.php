<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends CI_Controller {
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
          $this->load->model('recipes');
        $this->load->library('session');
        
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
    
     public function myRecipes()
        {
            //Home page titles
         //Check for suer Loggedin or Not here.....
         
         $email="rahuldc99@gmail.com";
         $limit=5;
         $whereparameters=array('author'=>$email);
         $this->loadmaster();
         
       //  echo $email;
         
          $listofrecipes=$this->recipes->view_fltered(0,$whereparameters,$limit);
          $this->session->set_userdata('wpara', $whereparameters);
          $this->session->set_userdata('dlimit', $limit);
        //  print_r($listofrecipes);
          
            $this->load->view('userprofilelayout');
            $this->load->view('myRecipes',array('listofrecipes'=>$listofrecipes,'alpa'=>"all",'type'=>"vfil"));
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
               
               // print_r($wpara);
               $setofrecipes=$this->recipes->view_fltered($pno,$this->session->userdata('wpara'),$this->session->userdata('dlimit')); 
              //  print_r($setofrecipes);
                $this->load->view('userprofilelayout');
            $this->load->view('myRecipes',array('listofrecipes'=>$setofrecipes,'alpa'=>"all",'type'=>"vfil"));
            $this->load->view('footer');
           // $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipes,'alpa'=>$alp,'type'=>"vfil"));    
            }
           //  echo $this->recipes->get_count("recipes");
          //  print_r($setofrecipes);
            // echo $setofrecipes;
            
            
           // $this->load->view('footer');
        }
    
    
    
    
    }