<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Users extends CI_Model{
    
    
function __construct() {
    $this->load->library('mongo_db');
parent::__construct();
}

 function addingtocookbook($uid,$rid,$rname)
{
    $this->mongo_db->where(array('email'=>$uid))->push('cookbook', array('r_id'=>$rid,'rname'=>$rname))->update('users');
  
}


function getnotifications($email)
{
    
    $ops = array(
    array(
        '$match' => array(
            "author" => $email,
            "comments" => array('$not'=>array('$size'=>0))
        
        )
    ),
    array(
        '$project' => array(
            "rname" => 1,
             "recipe_id" => 1,
            "date" => 1,
            
            "comments_count" => array('$size' => '$comments'),
        ),
    ),
        
        array( '$sort' => array( 'date'=> -1) )
);
    
    $res=$this->mongo_db->aggregate('recipes', $ops);
    
    
//     $result= $this->mongo_db
//          ->select(array('recipe_id','comments'))
//          ->where(array('author'=> $email))
//          ->order_by(array('data' => -1))
//          ->get('recipes');
     
     return $res['result'];
}


}