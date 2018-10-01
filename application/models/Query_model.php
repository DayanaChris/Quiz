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

	public function delete_lesson($id){
		$this->db->delete('lesson', array('id' => $id));
		$this->db->delete('lesson_image', array('lesson_id' => $id));
		$this->db->delete('lesson_example', array('lesson_id' => $id));
		$this->db->delete('lesson_manager', array('lesson_image_id' => $id),array('lesson_example_id' => $id) );

	}

	public function quiz_cat(){
		$query = $this->db->select('*, quiz.id as quizID')
				->from('quiz')
				->join('category', 'quiz.category_id = category.id')
				->join('level', 'quiz.level_id = level.id')
				->get();
		return $query;
	}




	public function questioner($id, $catId){
		$qury = $this->db->select('*,template_num,background, quiz.id as quizID')
										 ->from('level')
										 ->join('quiz', 'level.id = quiz.level_id')
										 ->where('level.id', $id)
										 ->where('quiz.category_id', $catId)
										 ->order_by('rand()')
										 ->limit(1)
										 ->get();

	return $qury;



	}
	public function get_answer($id){
		$query = $this->db->select()
									 		 ->from('quiz_image')
											 ->join('images', 'quiz_image.img_id = images.id')
											 ->where('quiz_image.quiz_id', $id)
											 ->order_by('rand()')
											 ->get();
			return $query;
	}

	public function get_template(){
		$query = $this->db->select('template_num')
											 ->from('quiz')
											 ->get();
											 // $query = 0 + $query;
											 // $query = (int)$query;
			return $query;
	}



}
