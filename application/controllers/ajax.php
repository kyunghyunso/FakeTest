<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function make_share_link()
	{
        $this->load->view('ajax/make_share_link');
	}
}