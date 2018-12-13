<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function log($realname ='')
	{
        $this->mylib->_reset_cookie('realname', $realname);
        echo(urldecode($_COOKIE['realname']));
        redirect('Auth/login');
    }

}