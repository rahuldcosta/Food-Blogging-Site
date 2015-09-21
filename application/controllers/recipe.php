<?php

class Recipe extends CI_Controller {
function __construct(){
        parent::__construct();
        
         $this->load->helper("url");
         $this->load->model('recipes');
       
        
}

 public function addrecipe()
        {
     
      $config = array(
            'upload_path'   => './uploads/imgfiles/',
            'allowed_types' => 'gif|jpg|png',
            'max_size'      => '100',
            'max_width'     => '1024',
            'max_height'    => '768',
            'encrypt_name'  => true,
        );

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            
            echo "Failure".$error['error'];
           // $this->load->view('upload_form', $error);
        } else {
            $upload_data = $this->upload->data();
            

          //  $this->load->database();
          //  $this->mongo_db->insert('upload', $data_ary);
     
     
     
     
     
            $name=$this->input->post('rname');
         //   echo "Hello World";
           // echo $name;
        $veg=false;
           if($this->input->post('vegoption')=="yes")
           {
               $veg=true;
           }else
               $veg=false;
            
            
            $data = array(
                'recipe_id' => md5("recipe".time()),
  'author' => "rahuldc99@gmail.com",              
'rname' => $this->input->post('rname'),
                'ingredents' => $this->input->post('ingredients'),
                'steps' => $this->input->post('steps'),
'vegselected' => $veg,
'recipetype' => $this->input->post('foodtype'),
'regiontype' => $this->input->post('regiontype'),
                
'dishImgURL' => $upload_data['file_name'],
                'VidLinkURL' => $this->input->post('VidLinnk'),
                    'views' => 0,
                    'rating' => array(), 
                    'comments' => array(),
                'date'=> date("d-m-Y",time()),
);
           
            
          $this->recipes->form_insert($data); 
          
          echo "Inserted with image uploading... :p";
          
          
          
        }
        
           }
           
   public function viewrecipe()
   {
       
      
        $this->load->view('master');
            $this->load->view('more');
             $this->load->view('footer');
   }
           
 }



