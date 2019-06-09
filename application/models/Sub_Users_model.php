<?php
	class Sub_Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllUsers(){
			$this->db->select('username');
			$query = $this->db->get('users');
			return $query->result(); 
			
		}

		public function insertsubuser($subuser){
			//$query = $this->db->get('sub_users');
			return $this->db->insert('sub_users', $subuser);
		}

		/*public function getUser($id){
			$query = $this->db->get_where('users',array('id'=>$id));
			return $query->row_array();
		}

		public function updateuser($user, $id){
			$this->db->where('users.id', $id);
			return $this->db->update('users', $user);
		}

		public function deleteuser($id){
			$this->db->where('users.id', $id);
			return $this->db->delete('users');
		}
		*/

	}
?>