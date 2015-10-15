<?php

class Recipe extends CI_Controller {
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
    
    
          
    
 public function addrecipe()
        {
     
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
                    'avgrating'=> 0,
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
        $recipearray= $this->recipes->form_get($this->input->get('r_id')); 
      
        $uname="Rohan Da silva";
       // print_r($recipearray);
        
        $ops = array(
    array(
        '$match' => array(
            "recipe_id" => $this->input->get('r_id')
        
        )
    ),
    array('$unwind' => '$rating'),
    array(
        '$group' => array(
            "_id" => '$recipe_id',
            "avgstars" => array('$avg' => '$rating.stars'),
        ),
    ),
);
       
        $avg=$this->recipes->getavgrating($ops, $this->input->get('r_id'));
        
        
        
        $this->loadmaster();
            $this->load->view('r_details',
                    array(
                'uname'=>$uname,
                'rname'=>$recipearray[0]['rname'],
                'rsteps'=>$recipearray[0]['steps'],
                'rurl'=>$recipearray[0]['dishImgURL'],
                 'author'=>$recipearray[0]['author'],
                'ingredents'=>$recipearray[0]['ingredents'],
                        'avgrate'=>$avg,
                'vegselected'=>$recipearray[0]['vegselected'],
                        'recipetype'=>$recipearray[0]['recipetype'],
                'regiontype'=>$recipearray[0]['regiontype'],
                'VidLinkURL'=>$recipearray[0]['VidLinkURL'],
                 'dateadded'=>$recipearray[0]['date'],      
                 'comments' =>array_reverse($recipearray[0]['comments']),      
                 'views' =>$recipearray[0]['views'],        
                        
                        
                'r_id'=>$recipearray[0]['recipe_id'],
                
            )
                    );
             $this->load->view('footer');
   }
     
   
   
   public function  addcomment()
   {
       $uid="ron@gmail.com";
       $uname="Rohan Da silva";
   
               $this->recipes->addnewcomment($this->input->post('r_id'),$uid,$uname,$this->input->post('comment'));
       
                $data = array(
        'stat' => TRUE,
               
                );
            
            echo json_encode($data);
   }
   
    public function  sendrating()
   {
       $uid="ron@gmail.com";
     
   
               $this->recipes->addnewrating($this->input->post('r_id'),$uid,(int)$this->input->post('score'));
       
                $data = array(
        'stat' => TRUE,
               
                );
            
            echo json_encode($data);
   }
   
   
   
   
 }



