<?php
class User_model extends CI_Model{
 
  function register($formArray){
   $this->db->insert('useraccounts',$formArray); //insert into useraccounts
  }

  function all(){
  	return $users = $this->db->get('useraccounts')->result_array();
  }

  function get_user()
  {
  	$this->db->select('bloodtype');
  	$this->db->from('useraccounts');
  	$this->db->where('bloodtype','O');
  	$query = $this->db->get();
  	return $query->num_rows();
  	// $query = $this->db->count_all('useraccounts');
  	// $query->num_rows();
  	// return $this->db->count_all('useraccounts');
  	
  }
  //  function get_A()
  // {
  // 	$this->db->select('bloodtype');
  // 	$this->db->from('useraccounts');
  // 	$this->db->where('bloodtype','A');
  // 	$query = $this->db->get();
  // 	return $query->num_rows();
  // 	// $query = $this->db->count_all('useraccounts');
  // 	// $query->num_rows();
  // 	// return $this->db->count_all('useraccounts');
  	
  // }
 
}