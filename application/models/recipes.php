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
}