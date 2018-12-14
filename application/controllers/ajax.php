<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function make_share_link()
	{
	echo(site_url('main/index/'.urlencode($_POST['friend_name'])));	
	}
}