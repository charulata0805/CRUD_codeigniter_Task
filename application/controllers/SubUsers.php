<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubUsers extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('sub_users_model');
	}

	public function index(){
		//$data['subusers'] = $this->sub_users_model->getAllSubUsers();
		$this->load->view('user_list.php', $data);
	}

	public function addnew(){
		$data['users'] = $this->sub_users_model->getAllUsers();

		$this->load->view('subaddform.php',$data);
	}

	public function insert(){
		$subuser['category_id'] = $this->input->post('category_id');
		$subuser['sub_category'] = $this->input->post('sub_category');
		
		
		
		$query = $this->sub_users_model->insertsubuser($subuser);
           
		if($query){

			header('location:'.base_url().$this->index());
		}

	}

/* public function edit($id){
		$data['user'] = $this->users_model->getUser($id);
		$this->load->view('editform', $data);
	}

	public function update($id){
		$user['username'] = $this->input->post('username');
		$user['password'] = $this->input->post('password');
		$user['fname'] = $this->input->post('fname');

		$query = $this->users_model->updateuser($user, $id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}

	public function delete($id){
		$query = $this->users_model->deleteuser($id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}*/

}


?>