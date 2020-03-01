<?php
class User_model extends CI_Model{
 
  function register($formArray){
   $this->db->insert('useraccounts',$formArray); //insert into useraccounts
  }

  function all(){
  	return $users = $this->db->get('useraccounts')->result_array();
  }
 
}