<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mylib {

        protected $CI;

        public function __construct()
        {
                $this->CI =& get_instance();
        }

        public function _reset_cookie($name, $value='')
        {
        $cookie = array(  //TODO:  domain 바꾸고 환경에 넣기
                'name' => $name,
                'value' => $value,
                'expire' => $value==''?'':'0'
                //'domain' => 'localhost'
        );

        $this->CI->input->set_cookie($cookie);
        }
}