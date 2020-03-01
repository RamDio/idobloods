<?php
class User extends CI_Controller{

    function manage(){
    	$this->load->model('User_model');
    	$users=$this->User_model->all();
    	$data=array();
    	$data['users']=$users;
        $this->load->view('manage_donors',$data);
    	
    }

    function registration(){
    	$this->load->model('User_model');
        $this->form_validation->set_rules('lastname','Lastname','required');
    	$this->form_validation->set_rules('firstname','Firstname','required');
    	$this->form_validation->set_rules('address','Address','required');
    	$this->form_validation->set_rules('bloodtype','Bloodtype','required');

        if($this->form_validation->run()==false){
        	$this->load->view('register');
        }else{
        	$formArray=array();
        	$formArray['lastname']=$this->input->post('lastname');
        	$formArray['firstname']=$this->input->post('firstname');
        	$formArray['address']=$this->input->post('address');
        	$formArray['bloodtype']=$this->input->post('bloodtype');
        	$formArray['created_at']=date('Y-m-d');

        	$this->User_model->register($formArray);
        	$this->session->set_flashdata('success','Record Added successfully');
        	redirect(base_url().'index.php/user/manage');
        }

    }

    function countuser(){
        $this->load->model('User_model');
        $data['query']=$this->User_model->get_user();

        $this->load->view('bloodgroup',$data);

    }


}




?>