<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Controller {


	public function can_login($username,$password)
	{
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query=$this->db->get('idoblood');
        
        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
	}
}
