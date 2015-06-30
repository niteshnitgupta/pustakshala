<?php
class Transaction_Model extends CI_Model {
	public $user_id;
	public $user_address_id;
	public $transaction_type_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function add_new_transaction($transaction_type_id)
	{
		$this->user_id    			= $this->input->get_post('user_id');
		$this->user_address_id  	= $this->input->get_post('address');
		$this->transaction_type_id	= $transaction_type_id;
		$this->db->insert('transaction', $this);
		$id = $this->db->insert_id();
		return $id;
	}

	public function get_all_transactions_with_id()
	{
		$id = $this->input->get_post('id');
		$this->db->where('id', $id);
		$query = $this->db->get('transaction');
		return $query->result();
	}

	public function get_all_transactions_with_user_id()
	{
		$user_id = $this->input->get_post('user_id');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get('transaction');
		return $query->result();
	}

	public function get_all_transactions_with_user_address_id()
	{
		$user_address_id = $this->input->get_post('user_address_id');
		$this->db->where('user_address_id', $user_address_id);
		$query = $this->db->get('transaction');
		return $query->result();
	}
}
?>