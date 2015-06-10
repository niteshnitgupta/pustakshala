<?php
class Category_Model extends CI_Model {

	public $id;
	public $category;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_categories()
	{
		$query = $this->db->get('category');
		return $query->result();
	}

	public function get_category_id()
	{
		$category = $this->input->get_post('category');
		$this->db->where('category', $category);
		$query = $this->db->get('category');
		return $query->result();
	}
}
?>