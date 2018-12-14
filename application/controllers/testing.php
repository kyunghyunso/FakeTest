<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

        function __construct()
        {       
            parent::__construct();
            $this->load->database();  // db로드를 모델로 옮기면 안되나?
            $this->load->model('qna_model');
        }

        public function listing_question()  //num 받기
        {
        $data['questions'] =  $this->qna_model->getAllQuestions();
        $this->load->view('client/question_session', $data);
        }

        public function question($order)
        {
            if ($order>=3) redirect('testing/result');
            $data['order'] = $order;
            $this->load->view('head');            
            $this->load->view('answer', $data);
            $this->load->view('footer');
        }

        public function result()
        {
        $this->load->view('head');
        $username = trim($_COOKIE['username']);
        $realname = empty($_COOKIE['realname'])? "unknown": trim(urldecode($_COOKIE['realname']));
        
        if ($realname == $username){        
            $this->load->view('result_same');
        }else if($realname =="unknown"){
            $this->load->view('result_unknown');
        }else if($realname != $username){
            $this->load->view('result_diff');
        }

        $this->load->view('share');
        $this->load->view('footer');
        }

        

}