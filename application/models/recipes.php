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
function form_insert($data){
// Inserting in Table(students) of Database(college)
    $this->mongo_db->insert('recipes', $data);

}

function  viewall($pageno,$limit,$chara)
{
    if($chara=="all")
    {
       $regex = new MongoRegex("//"); 
    }else
        
    $regex = new MongoRegex("/^$chara/im");
    
    
    $resulted= $this->mongo_db
          ->select(array('recipe_id','rname','author'))
           ->where(array('rname'=>$regex))
            ->offset($pageno*$limit)
          ->limit($limit)
          ->get('recipes');
    
    $counter= $this->mongo_db
          ->select(array('recipe_id','rname','author'))
            ->where(array('rname'=>$regex))
             ->count('recipes');
    $result= array(
        
        "results"=> $resulted,
        "max"=>$counter,
         "limit"=>$limit,
            "pgno"=>$pageno
        
    );
    
    return $result;
}
        

function view_fltered($pageno,$whereparameters,$limit){
    
    
  
    $resulted= $this->mongo_db
          ->select(array('recipe_id','rname','author'))
            ->where($whereparameters)
            ->offset($pageno*2)
          ->limit($limit)
          ->get('recipes');
    
    $counter= $this->mongo_db
          ->select(array('recipe_id','rname','author'))
            ->where($whereparameters)
             ->count('recipes');
    
    $result= array(
        
        "results"=> $resulted,
        "max"=>$counter,
            "limit"=>$limit,
            "pgno"=>$pageno
        
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
        






function form_get($data){
    
$this->mongo_db->where(array('recipe_id'=> $data))->inc(array('views' => 1))->update('recipes');
    
  $result= $this->mongo_db
          ->select(array())
          ->where(array('recipe_id'=> $data))
          ->get('recipes');
   
   
   return $result;
}

function addnewcomment($r_id,$uid,$uname,$comment){
    $this->mongo_db->where(array('recipe_id'=>$r_id))->push('comments', array('uid'=>$uid,'uname'=>$uname,'comment'=>$comment))->update('recipes');
}

function getavgrating($ops)
{
   $res=$this->mongo_db->aggregate('recipes', $ops);
  //if(isset($res['result'][0]['avgstars']))
   return $res['result'][0]['avgstars'];
//   else
//       return 0;
  
}


function addnewrating($r_id,$uid,$score)
{
  $this->mongo_db->where(array('recipe_id'=>$r_id))->push('rating', array('uid'=>$uid,'stars'=>$score))->update('recipes');
  
}

function getthebestrecipe($recipetype)
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



}