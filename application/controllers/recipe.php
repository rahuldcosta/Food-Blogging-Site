<?php

class Recipe extends CI_Controller {
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
         $this->load->model('recipes');
       
        
}

 public function addrecipe()
        {
            $name=$this->input->post('rname');
         //   echo "Hello World";
            echo $name;
        $veg=false;
           if($this->input->post('vegoption')=="yes")
           {
               $veg=true;
           }else
               $veg=false;
            
            
            $data = array(
'rname' => $this->input->post('rname'),
                'ingredents' => $this->input->post('ingredients'),
                'steps' => $this->input->post('steps'),
'vegselected' => $veg,
'recipetype' => $this->input->post('foodtype'),
'regiontype' => $this->input->post('regiontype'),
                
'dishImgURL' => $this->input->post('dishImg'),
                'VidLinkURL' => $this->input->post('VidLinnk')
);
           
            
          $this->recipes->form_insert($data); 
          
          echo "Inserted";
        }
 }



