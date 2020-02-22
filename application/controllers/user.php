<?php
class User extends CI_Controller{

    function manage(){
        $this->load->view('manage_donors');
    }

    function registration(){
        $this->load->view('register');

    }


}




?>