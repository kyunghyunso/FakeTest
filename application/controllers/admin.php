<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function addQnA()
	{
        $this->load->view('head');
        $this->load->view('admin/addQnA');
        $this->load->view('footer');
	}
}