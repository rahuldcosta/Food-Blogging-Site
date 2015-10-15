<?php

class FoodieHome extends CI_Controller {
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
          $this->load->model('recipes');
       
        
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


    
    public function notifications()
        {
            //Home page titles
          $this->loadmaster();
            $this->load->view('userprofilelayout');
            $this->load->view('notifications');
            $this->load->view('footer');
            
        }
        
           
        
	  public function CookBook()
        {
            //Home page titles
          $this->loadmaster();
            $this->load->view('userprofilelayout');
            $this->load->view('CookBook');
            $this->load->view('footer');
        }
	
         public function editprofile()
        {
            //Home page titles
          $this->loadmaster();
            $this->load->view('userprofilelayout');
            $this->load->view('editprofile');
            $this->load->view('footer');
        }
        
         public function changepassword()
        {
            //Home page titles
          $this->loadmaster();
            $this->load->view('userprofilelayout');
            $this->load->view('changepassword');
            $this->load->view('footer');
        }
	public function index()
        {
            
            $a_date=date("d-m-Y",time());
        $date1=date_create(date("d-m-Y",time()));
        $date2=date_create(date("Y-m-t", strtotime($a_date)));
        $diff=date_diff($date1,$date2);
           $thediffofdates=$diff->format("%a");
           
          $desertsend=array("","","","");
           $mealsend=array("","","","");
           $snacksend=array("","","","");
           
           
       if($thediffofdates <= 4)
       {
        
           $snackid=$this->recipes->getthebestrecipe("Snack");
           $dessertid=$this->recipes->getthebestrecipe("Dessert");
           $mealid=$this->recipes->getthebestrecipe("Meal");
           
       
           
         //  echo $snackid,$dessertid,$mealid;
           
         
           
           

           
            if($dessertid!="")
            {
            $desertarray= $this->recipes->form_get($dessertid);
            $desertsend[0]=$desertarray[0]['rname'];
                $desertsend[1]=$desertarray[0]['steps'];
               $desertsend[2]=$desertarray[0]['dishImgURL'];
                $desertsend[3]=$desertarray[0]['recipe_id'];
            }
            if($mealid!="")
            {
            $mealarray= $this->recipes->form_get($mealid);
            $mealsend[0]=$mealarray[0]['rname'];
                $mealsend[1]=$mealarray[0]['steps'];
               $mealsend[2]=$mealarray[0]['dishImgURL'];
                $mealsend[3]=$mealarray[0]['recipe_id'];
            }
            
             if($snackid!="")
            {
            $snackarray= $this->recipes->form_get($snackid);
            $snacksend[0]=$snackarray[0]['rname'];
                $snacksend[1]=$snackarray[0]['steps'];
               $snacksend[2]=$snackarray[0]['dishImgURL'];
                $snacksend[3]=$snackarray[0]['recipe_id'];
            }
           // print_r($desertarray);
            
        }
            //Home page titles
          //  $this->load->view('master');
            $this->loadmaster();
            
            
            $this->load->view('FoodiePublicHome',array(
                
                'dname'=>$desertsend[0],
                'dsteps'=>$desertsend[1],
                'durl'=>$desertsend[2],
                'drecipeid'=>$desertsend[3],
                
                'mname'=>$mealsend[0],
                'msteps'=>$mealsend[1],
                'murl'=>$mealsend[2],
                'mrecipeid'=>$mealsend[3],
                
                'sname'=>$snacksend[0],
                'ssteps'=>$snacksend[1],
                'surl'=>$snacksend[2],
                'srecipeid'=>$snacksend[3],
                
            ));
            
            
            
            
            
            $this->load->view('footer');
        }
        	public function helpPage()
        {
            //Home page titles
          $this->loadmaster();
             $this->load->view('userprofilelayout');
            $this->load->view('helpPage');
             $this->load->view('footer');
        }
       
        
        public function login()
        {
          $this->loadmaster();
            $this->load->view('Loginpage');
            $this->load->view('footer');
        }
        
         public function indian()
        {
          $this->loadmaster();
            $this->load->view('indian');
            $this->load->view('footer');
        }
        
           public function chinese()
        {
          $this->loadmaster();
            $this->load->view('chinese');
            $this->load->view('footer');
        }
            public function Thai()
        {
          $this->loadmaster();
            $this->load->view('Thai');
            $this->load->view('footer');
        }
            public function continental()
        {
          $this->loadmaster();
            $this->load->view('continental');
            $this->load->view('footer');
        }
        
        
         public function italian()
        {
          $this->loadmaster();
            $this->load->view('italian');
             $this->load->view('footer');
        }
        
         public function more()
        {
           
        }
        
            public function userPage()
        {
           $this->loadmaster();
             $this->load->view('userprofilelayout');
             $this->load->view('userPage');
             $this->load->view('footer');
            
        }
        
         public function interest()
        {
           $this->loadmaster();
             $this->load->view('userprofilelayout');
             $this->load->view('interest');
             $this->load->view('footer');
            
        }
        
        public function adminPage()
        {
            //Home page titles
          $this->loadmaster();
            $this->load->view('userprofilelayout');
            $this->load->view('adminPage');
             $this->load->view('footer');
        }
        
}

