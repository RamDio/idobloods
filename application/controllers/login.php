<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }
 
  function index(){
    $this->load->view('login_view');
  }
 
  function auth(){
    $name    = $this->input->post('username',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->login_model->validate($name,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['user_name'];
        $sesdata = array(
            'username'  => $name,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        redirect('page');
        // // access login for admin
        // if($level === '1'){
        //     redirect('page');
 
        // // access login for staff
        // }elseif($level === '2'){
        //     redirect('page/staff');
 
        // // access login for author
        // }else{
        //     redirect('page/author');
        // }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
}