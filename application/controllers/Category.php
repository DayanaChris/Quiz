<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in() ){
			redirect(base_url().'login', 'refresh');
		}
		if(!$this->ion_auth->is_admin()){
			redirect(base_url().'dashboard', 'refresh');
		}
		$this->user_id = $this->session->userdata('user_id');
		$group = $this->ion_auth->get_users_groups($this->user_id)->result();
		$this->group_id = $group[0]->id;
	}

	public function index()
	{

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}
		else{

			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');



			$data = array(
				'category' => $this->db->order_by('id', 'asc')->get_where('category')
			);
			$this->load->view('admin/category',$data);


		}




	}

	public function create()
	{
		$data = array(
			'is_edit' => false
		);
		$this->load->view('admin/category-create',$data);
	}


	public function edit($id){
		$data = array(
			'is_edit' => true,
			'category_details' => $this->db->get_where('category', array('id' => $id)),
		);
		$this->load->view('admin/category-create',$data);
	}



	public function post()
	{

		if(isset($_POST['categoryadd'])){
			$attr = array(
				'category_name' => $_POST['categoryadd'],
				'created_by' => $this->user_id
			);
			$this->db->insert('category',$attr);
			redirect('category');
		}
		if(isset($_POST['categoryedit'])){
			//print_r($_POST);
			$attr = array(
				'category_name' => $_POST['categoryedit']
			);
			$this->db->update('category', $attr, array('id' => $_POST['catid']));
			redirect('category');
		}
		if(isset($_POST['delete_category'])){
			$this->db->delete('category', array('id' => $_POST['delete_category']));
		}

	}
}
