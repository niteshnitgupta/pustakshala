<?php
class Status_Model extends CI_Model {

	public $id;
	public $status;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_status()
	{
		$query = $this->db->get('status');
		return $query->result();
	}

	public function get_status_id()
	{
		$status = $this->input->get_post('status');
		$this->db->where('status', $status);
		$query = $this->db->get('status');
		return $query->result();
	}
}
?>