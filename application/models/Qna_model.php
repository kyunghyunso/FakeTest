<?php
class Qna_model extends CI_Model {
 
    function __construct()
    {       
        parent::__construct();
    }
 
    function getAllQuestions(){
        return $this->db->query("SELECT * FROM QnA")->result_object();
    }   

    function getQuestion($Questions, $order){
        return $Questions[$order];
    }

}