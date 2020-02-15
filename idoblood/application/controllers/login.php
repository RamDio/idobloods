<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $data['title']='Login Page';
		$this->load->view('login',$data);
    }

    public function validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('login_model');
            if($this->load->can_login($username,$password))
            {
                $session_data=array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                
                redirect(base_url().'login/enter');
                
            }
            else 
            {
                $this->session->set_flashdata('error','Invalid Username and Password');
                
                redirect(base_url().'login/index');
                
            }
        }
        else
        {
            $this->index();
        }
    }

    public function enter()
    {
        if($this->session->userdata('username') !='')
        {
            echo '<h2> Welcome-'.$this->session->userdata('username').'</h2>';
            echo '<a href="'.base_url().'/logout">Log out</a>';
        }
        else
        {
            
            redirect(base_url().'login/enter');
            
        }
}

public function logout()
{
    $this->session->unset_userdata('username');
    
    redirect(base_url().'login/index');
    
}
    

} 
