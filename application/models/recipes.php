<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Recipes extends CI_Model{
    
    
function __construct() {
    $this->load->library('mongo_db');
parent::__construct();
}
function addnewrecipe($data){
// Inserting in Table(students) of Database(college)
    $this->mongo_db->insert('recipes', $data);

}

function  viewall($chara)
{
    if($chara=="all")
    {
       $regex = new MongoRegex("//"); 
    }else
        
    $regex = new MongoRegex("/^$chara/im");
    
    
    $resulted= $this->mongo_db
          ->select(array('recipe_id','rname','author'))
           ->where(array('rname'=>$regex))
           
          ->get('recipes');
    
   
    $result= array(
        
        "results"=> $resulted,
        
        
    );
    
    return $result;
}
        

function view_fltered($whereparameters){
    
   // $whereparameters=array('recipetype'=>'Meal');
  
    $resulted= $this->mongo_db
          ->select(array('recipe_id','rname','author'))
            ->where($whereparameters)
            
          ->get('recipes');
    
    $result= array(
        
        "results"=> $resulted,
        
    );
    
    return $result;
}


function  get_count($collection){
    $regex = new MongoRegex("/^g/"); 

    $result= $this->mongo_db
            ->where(array('rname'=>$regex))
            ->count($collection);
    return $result;
}
        

function checkifpresentincookbook($email,$r_id)
{
    $result= $this->mongo_db
            ->where(array('email'=>$email,'cookbook.r_id'=>$r_id))
            ->count('users');
    
    return $result;
    
}




function getrecipedetails($data){
    
$this->mongo_db->where(array('recipe_id'=> $data))->inc(array('views' => 1))->update('recipes');
    
  $result= $this->mongo_db
          ->select(array())
          ->where(array('recipe_id'=> $data))
          ->get('recipes');
   
   
   return $result;
}

function  updaterecipes($data,$rid)
{
    //print_r($data);
    $this->mongo_db
            ->where(array('recipe_id'=> $rid))
            ->set(array('rname'=>$data['rname'],'ingredents'=>$data['ingredents'],'vegselected'=>$data['vegselected'],
                'recipetype'=>$data['recipetype'],
                'steps'=>$data['steps'],
                'regiontype'=>$data['regiontype'],
                'dishImgURL'=>$data['dishImgURL'],
                'VidLinkURL'=>$data['VidLinkURL'],))
            ->update('recipes');
}
        function addnewcomment($r_id,$uid,$uname,$comment){
    $this->mongo_db->where(array('recipe_id'=>$r_id))->push('comments', array('uid'=>$uid,'uname'=>$uname,'comment'=>$comment))->update('recipes');

    $email=$this->mongo_db
            ->select(array('author'))
            ->where(array('recipe_id'=>$r_id))
            ->get('recipes');
           
    

     $this->mongo_db
            ->where(array('email'=>$email[0]['author']))
            ->inc(array('noticount' => 1))
             ->update('users');
    
}

function getavgrating($ops,$rid)
{
   
  // $res=$this->mongo_db->aggregate('recipes', $ops);
  //if(isset($res['result'][0]['avgstars']))
   
   // $this->mongo_db->where(array('recipe_id'=> $rid))->inc(array('avgrating' => $res['result'][0]['avgstars']))->update('recipes');
  
    $rating=$this->mongo_db
            ->select(array('avgrating'))
            ->where(array('recipe_id'=>$rid))
             ->get('recipes');
    // print_r($rating);
    
    return $rating[0]['avgrating'];
//   else
//       return 0;
  
}


function addnewrating($r_id,$uid,$score)
{
  $this->mongo_db->where(array('recipe_id'=>$r_id))->push('rating', array('uid'=>$uid,'stars'=>$score))->update('recipes');
  
   $ops = array(
    array(
        '$match' => array(
            "recipe_id" => $r_id
        
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
   
   $res=$this->mongo_db->aggregate('recipes', $ops);  //round($res['result'][0]['avgstars'],2)
   
  $this->mongo_db->where(array('recipe_id'=> $r_id))->set('avgrating',round($res['result'][0]['avgstars'],2))->update('recipes');
  
  
}

function getthebestrecipe($recipetype)   //'avgrating' => $res['result'][0]['avgstars']
{
    $ops = array(
    array(
        '$match' => array(
            "recipetype" => $recipetype
        
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
   $res=$this->mongo_db->aggregate('recipes', $ops);
   if(isset($res['result'][0]['_id']))
    return $res['result'][0]['_id'];
   else return "";
  
}


function loadpopularlist()
{
    $res=$this->mongo_db
            ->select(array('recipe_id','rname'))
            ->order_by(array('avgrating' => -1))
            ->limit(3)
          ->get('recipes');
    return $res;
}
function loadmostviewslist()
{
    $res=$this->mongo_db
            ->select(array('recipe_id','rname'))
            ->order_by(array('views' => -1))
            ->limit(3)
          ->get('recipes');
    return $res;
}




function getusersrecipes($email)
{
    $res=$this->mongo_db
            ->select(array('recipe_id','rname'))
            ->where(array('author'=>"rahuldc99@gmail.com"))
          ->get('recipes');
 // print_r($res);
    return $res;
}
        


function loadrecentlyaddedlist()
{
    $res=$this->mongo_db
            ->select(array('recipe_id','rname'))
            ->order_by(array('date' => -1))
            ->limit(10)
          ->get('recipes');
    return $res;
}


}