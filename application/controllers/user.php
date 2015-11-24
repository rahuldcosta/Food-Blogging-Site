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
    
    public function adduser(){
        $uid=md5("user".time());
        $user_data =  array(
            'u_id' => $uid,
            'noticount' => 0,
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        
        $this->users->adduser($user_data);
        
        redirect("user/userPage");
    }
    
    public function userLogin(){
        $username=  $this->input->post('username');
        $password=  $this->input->post('password');
        
        $query=  $this->users->retrieve_user($username,$password);
        if(sizeof($query)==1) {
            $email=$query[0]['email'];
            $sess_array = array(
                    'email' => $email
                );
            $this->session->set_userdata($sess_array);
            redirect("user/userPage");
            
         }
         else{
             redirect("user/LoginPage");
         }
    }
    
    public function updateProfile(){
        $email=$this->session->userdata('email');
        
        $config = array(
            'upload_path'   => './uploads/imgfiles/',
            'allowed_types' => 'gif|jpg|png',
            'max_size'      => '75100',
            'max_width'     => '1366',
            'max_height'    => '768',
            'encrypt_name'  => true,
        );

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $dp=$this->input->post('dimg');
          //  echo "Failure".$error['error'];
           // $this->load->view('upload_form', $error);
        } else {
            $upload_data = $this->upload->data();
           $dp= $upload_data['file_name'];

          //  $this->load->database();
          //  $this->mongo_db->insert('upload', $data_ary);
        }
        
        $user_data = array (
            'username'=>$this->input->post('username'),
            'gender'=>$this->input->post('gender'),
            'abouturself'=>$this->input->post('abouturself'),
            'profilepic' => $dp,
        );
        
      //  print_r($user_data);
                
       $this->users->updateuserProfile($user_data,$email);
       redirect("user/userPage");
    }
    
     public function viewCookBook()
        {
        $email=$this->session->userdata('email');
        $uname=  $this->users->retrieve_username($email);
            //Home page titles
         $Broughtback=0;
         
          $cb=$this->users->viewcookbook($email);
          $this->loadmaster();
           $noticnt=$this->users->getnoticount($email);
             $this->load->view('userprofilelayout',array('ncount'=>$noticnt,
                 'uname'=>$uname,));
            $this->load->view('CookBook',array('cookbook'=>$cb));
            $this->load->view('footer');
         
        
         
        // print_r($cb);
        }
        
        
     public function addtocookbook()
    {
        //Check for loged in or not here.....
       // $uid=$this->session->userdata('email');
         $uid="rhodagaines@greeker.com";
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
        $email=$this->session->userdata('email');
        $uname=  $this->users->retrieve_username($email);
        echo $uname;
           $this->loadmaster();
           
            $noticnt=$this->users->getnoticount($email);
             $this->load->view('userprofilelayout',array('ncount'=>$noticnt,
                 'uname'=>$uname,));
             $this->load->view('userPage');
             $this->load->view('footer');
            
        }
        
            public function LoginPage()
        {
           $this->loadmaster();
             $this->load->view('LoginPage');
             $this->load->view('footer');
            
        }
    
     public function myRecipes()
        {
            //Home page titles
         //Check for suer Loggedin or Not here.....
         
         $email=$this->session->userdata('email');
         $limit=5;
         $whereparameters=array('author'=>$email);
         $this->loadmaster();
         
       //  echo $email;
         
          $listofrecipes=$this->recipes->view_fltered($whereparameters);
          $this->session->set_userdata('wpara', $whereparameters);
        $uname=  $this->users->retrieve_username($email);
        //  print_r($listofrecipes);
          
            $noticnt=$this->users->getnoticount($email);
              $this->load->view('userprofilelayout',array('ncount'=>$noticnt,
                 'uname'=>$uname,));
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
         
         $email=$this->session->userdata('email');
         
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
