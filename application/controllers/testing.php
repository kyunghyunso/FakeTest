<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

        function __construct()
        {       
            parent::__construct();
            $this->load->database();  // db로드를 모델로 옮기면 안되나?
            $this->load->model('qna_model');
        }

        public function answer()  //num 받기
        {
        $this->load->view('head');        
        $Questions = $this->qna_model->getAllQuestions();
        $ThisQuestion = $this->qna_model->getQuestion($Questions, 1);
        $this->load->view('answer', $ThisQuestion);
        $this->load->view('footer');
        }

        public function result()
        {
        $this->load->view('head');
        $this->load->view('result');
        $this->load->view('footer');
        }

        public function nextquestion()
        {
        $this->load->view('building');
        }

}