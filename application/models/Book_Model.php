<?php
class Book_Model extends CI_Model {

	public $title;
	public $isbn;
	public $price;
	public $status_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_books()
	{
		$query = $this->db->get('book');
		return $query->result();
	}

	public function insert_entry()
	{
		$this->title    	= $this->input->get_post('title');
		$this->isbn  		= $this->input->get_post('isbn');
		$this->price    	= $this->input->get_post('price');
		$this->status_id    = $this->input->get_post('status');
		$this->db->insert('book', $this);
	}

	public function update_entry()
	{
		$this->title    	= $this->input->get_post('title');
		$this->isbn  		= $this->input->get_post('isbn');
		$this->price    	= $this->input->get_post('price');
		$this->status_id    = $this->input->get_post('status');
		$this->db->update('book', $this, array('id' => $this->input->get_post('id')));
	}

}
?>