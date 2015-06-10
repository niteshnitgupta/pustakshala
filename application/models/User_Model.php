<?php
class User_Model extends CI_Model {

	public $id;
	public $name;
	public $email_id;
	public $phone;
	public $password;

	public function __construct()
	{
		parent::__construct();
	}

	public function add_new_user()
	{
		$this->name    	= $this->input->get_post('name');
		$this->email_id = $this->input->get_post('email_id');
		$this->phone	= $this->input->get_post('phone');
		$this->password = $this->input->get_post('password');
		$this->db->insert('user', $this);
		$id = $this->db->insert_id();
		$this->load->model('User_Account_Model');
		$this->User_Account_Model->add_new_account($id, 0);
	}

	public function get_user_with_id()
	{
		$this->id = $this->input->get_post('id');
		$this->db->where('id', $this->id);
		$query = $this->db->get('user');
		return $query->result();
	}

	public function get_user_with_email_pwd()
	{
		$this->email_id = $this->input->get_post('email_id');
		$this->password = $this->input->get_post('password');
		$this->db->where('email_id', $this->email_id);
		$this->db->where('password', $this->password);
		$query = $this->db->get('user');
		return $query->result();
	}
}
?>