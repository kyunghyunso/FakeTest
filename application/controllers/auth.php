<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login($realname ='')
	{
        if ($realname !='') {
        $this->_reset_cookie('realname', $realname);
        }
        $this->_reset_cookie('username');
        $this->load->view('head');
        $this->load->view('login');
        $this->load->view('footer');
    }
    
    public function logout() 
	{   
        $this->_reset_cookie('username');
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
            $this->_reset_cookie('username', $username);
            
            redirect('testing/listing_question');
        }
    }
    
    public function _reset_cookie($name, $value='')
    {
        $cookie = array(  //TODO:  domain 바꾸고 환경에 넣기
            'name' => $name,
            'value' => $value,
            'expire' => $value==''?'':'0'
            //'domain' => 'localhost'
        );

        $this->input->set_cookie($cookie);
    }
}