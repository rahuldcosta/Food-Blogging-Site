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

function retrieve_dp($email)
{
    $query=  $this->mongo_db
            ->select(array('profilepic'))
            ->where(array('email'=> $email))
            ->get('users');
     
   // print_r($query);
    return $query[0]['profilepic'];
}



function adduser($user_data){
    $this->mongo_db->insert('users',$user_data);
}
 function addingtocookbook($uid,$rid,$rname)
{
    $this->mongo_db->where(array('email'=>$uid))->push('cookbook', array('r_id'=>$rid,'r_name'=>$rname))->update('users');
  
}

function retrieve_userdetails($email)
{
    $query=  $this->mongo_db
            ->select(array('name','profilepic','gender','aboutyourself'))
            ->where(array('email'=> $email))
            ->get('users');
      // echo(print_r($query));
    //echo(sizeof($query));
    return $query[0];
}
function retrieve_user($username,$password){
    $query=  $this->mongo_db
            ->select(array('email'))
            ->where(array('email'=> $username,'password'=>$password))
            ->get('users');
      // echo(print_r($query));
    //echo(sizeof($query));
    return $query;
}

function retrieve_username($email){
    
    $name="";
    $query=  $this->mongo_db
            ->select(array('name'))
            ->where(array('email'=> $email))
            ->get('users');
      // echo(print_r($query));
    //echo(sizeof($query));
   // print_r($query);
    if($query[0]['name']=="")
    {
        $name="";
            
    }else
    $name= $query[0]['name'];
    
    
    return $name;
}

function updateuserProfile ($user_data,$email){
    //print_r($user_data);
    //echo($email);
    $this->mongo_db
        ->where(array('email'=>$email))
        ->set(array('name'=>$user_data['username'],'gender'=>$user_data['gender'],'aboutyourself'=>$user_data['abouturself'],'profilepic'=>$user_data['profilepic']))
        ->update('users');
            
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
        
        array( '$sort' => array( 'comments_count'=> -1) )
);
    
    $res=$this->mongo_db->aggregate('recipes', $ops);
    
    
//     $result= $this->mongo_db
//          ->select(array('recipe_id','comments'))
//          ->where(array('author'=> $email))
//          ->order_by(array('data' => -1))
//          ->get('recipes');
     
     return $res['result'];
}


function getnoticount($email)
{
    $rcount=$this->mongo_db
            ->select(array('noticount'))
            ->where(array('email'=>$email))
             ->get('users');
    return $rcount[0]['noticount'];
}

function resetnoticount($email)
{
   
         $this->mongo_db
            ->where(array('email'=>$email))
            ->set('noticount', 0)
             ->update('users');
    
}

function viewcookbook($email)
{
    $cookbook=$this->mongo_db
            ->select(array('cookbook'))
            ->where(array('email'=>$email))
             ->get('users');
    return $cookbook[0]['cookbook'];
}



}