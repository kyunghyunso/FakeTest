<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login()
	{        
        $this->mylib->_reset_cookie('username');
        $this->load->view('head');
        $this->load->view('login');
        $this->load->view('footer');
    }
    
    public function logout() 
	{   
        $this->mylib->_reset_cookie('username');
        redirect('/auth/login');
    }
    
    public function authentication() 
	{
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username','이름:', 'required');

        if($this->form_validation->run() === FALSE){
            redirect('/auth/login');  
        }  

        $username = $this->input->post('username');

        if($username=="admin"){
            redirect('admin/addQnA');
        }else{
            $this->mylib->_reset_cookie('username', $username);
            
            redirect('testing/listing_question');
        }
    }

}