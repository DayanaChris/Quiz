<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Query_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function delete_question($id){
		$this->db->delete('quiz', array('id' => $id));
		$this->db->delete('quiz_answer', array('quiz_id' => $id));
		$this->db->delete('quiz_image', array('quiz_id' => $id));
	}

	public function quiz_cat(){
		$query = $this->db->select('*, quiz.id as quizID')
				->from('quiz')
				->join('category', 'quiz.category_id = category.id')
				->join('level', 'quiz.level_id = level.id')
				->get();
		return $query;
	}
}
