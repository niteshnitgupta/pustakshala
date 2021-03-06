<?php
class Transaction_Type_Model extends CI_Model {
	public $id;
	public $type;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_transaction_types()
	{
		$query = $this->db->get('transaction_type');
		return $query->result();
	}

	public function get_transaction_type_id()
	{
		$id = $this->input->get_post('id');
		$this->db->where('id', $id);
		$query = $this->db->get('transaction_type');
		return $query->result();
	}
}
?>