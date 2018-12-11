<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()  //num 받기
	{
        $this->load->view('head');
        $this->load->view('login');
        $this->load->view('footer');
    }

}