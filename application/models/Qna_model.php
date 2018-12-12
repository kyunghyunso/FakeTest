<?php
class Qna_model extends CI_Model {
 
    function __construct()
    {       
        parent::__construct();
    }
 
    function getAllQuestions(){
        $question = $this->db->query("SELECT * FROM QnA")->result_object();
        return json_encode($question, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
    }   

}