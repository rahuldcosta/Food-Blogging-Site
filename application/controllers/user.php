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
           $this->load->model('users');
        $this->load->library('session');
        
    }
    
     public function viewCookBook()
        {
         $email="rahuldc99@gmail.com";
            //Home page titles
          $cb=$this->users->viewcookbook($email);
          $this->loadmaster();
            $noticnt=$this->users->getnoticount($email);
             $this->load->view('userprofilelayout',array('ncount'=>$noticnt));
            $this->load->view('CookBook',array('cookbook'=>$cb));
            $this->load->view('footer');
         
        
         
        // print_r($cb);
        }
        
        
     public function addtocookbook()
    {
        //Check for loged in or not here.....
        $uid="rahuldc99@gmail.com";
        $this->users->addingtocookbook($uid,$this->input->post('r_id'),$this->input->post('rname'));
        
        $data = array(
        'stat' => TRUE,
               
                );
            
            echo json_encode($data);
        
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
    
    
    public function userPage()
        {
        $email="rahuldc99@gmail.com";
           $this->loadmaster();
           
            $noticnt=$this->users->getnoticount($email);
             $this->load->view('userprofilelayout',array('ncount'=>$noticnt));
             $this->load->view('userPage');
             $this->load->view('footer');
            
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
         
          $listofrecipes=$this->recipes->view_fltered($whereparameters);
          $this->session->set_userdata('wpara', $whereparameters);
        
        //  print_r($listofrecipes);
          
            $noticnt=$this->users->getnoticount($email);
             $this->load->view('userprofilelayout',array('ncount'=>$noticnt));
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
              if($dtype=="vfil")
            {
               
               // print_r($wpara);
               $setofrecipes=$this->recipes->view_fltered($pno,$this->session->userdata('wpara'),$this->session->userdata('dlimit')); 
              //  print_r($setofrecipes);
              $noticnt=$this->users->getnoticount($email);
             $this->load->view('userprofilelayout',array('ncount'=>$noticnt));
            $this->load->view('myRecipes',array('listofrecipes'=>$setofrecipes,'alpa'=>"all",'type'=>"vfil"));
            $this->load->view('footer');
           // $this->load->view('indexedSearch',array('reciepesset'=> $setofrecipes,'alpa'=>$alp,'type'=>"vfil"));    
            }
           //  echo $this->recipes->get_count("recipes");
          //  print_r($setofrecipes);
            // echo $setofrecipes;
            
            
           // $this->load->view('footer');
        }
    
     public function notifications()
        {
         
         $email="rahuldc99@gmail.com";
         
         $notis=  $this->users->getnotifications($email);
         
        // print_r($notis);
        // $notifications=  $this->
            //Home page titles
         
         
         
         
         $this->users->resetnoticount($email);
         
        
          $this->loadmaster();
            $this->load->view('userprofilelayout',array('ncount'=>0));
            $this->load->view('notifications',array('notis'=>$notis));
            $this->load->view('footer');
            
            
        }
    
    
    }