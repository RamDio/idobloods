<?php
class User_model extends CI_Model{
 
  function register($formArray){
   $this->db->insert('useraccounts',$formArray); //insert into useraccounts
  }
 
}