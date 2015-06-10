<?php
class User_Account_Model extends CI_Model {

	public $user_id;
	public $amount;

	public function __construct()
	{
		parent::__construct();
	}

	public function add_new_account($user_id, $amount)
	{
		$this->user_id 	= $user_id;
		$this->amount	= $amount;
		$this->db->insert('user_account', $this);
	}

	public function get_account()
	{
		$this->user_id 	= $this->input->get_post('user_id');
		$this->db->where('user_id', $this->user_id);
		$query = $this->db->get('user_account');
		$result = $query->result();
		if ($result) {
			$this->amount = $result[0]->amount;
		}
		return $result;
	}

	public function update_amount()
	{
		$this->get_account();
		$this->user_id 	 = $this->input->get_post('user_id');
		$this->amount 	+= $this->input->get_post('amount');
		$this->db->where('user_id', $this->user_id);
		$query = $this->db->update('user_account', $this);
	}
}
?>