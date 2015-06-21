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

	public function get_all_books()
	{
		$query = $this->db->get('book');
		return $query->result();
	}

	public function get_book_with_id()
	{
		$id = $this->input->get_post('id');
		$this->db->where('id', $id);
		$query = $this->db->get('book');
		return $query->result();
	}

	public function get_books_in_category($id)
	{
		$this->db->from('book');
		$this->db->join('book_category', 'book_category.book_id = book.id');
		$this->db->where('category_id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function add_book()
	{
		$this->title    	= $this->input->get_post('title');
		$this->isbn  		= $this->input->get_post('isbn');
		$this->price    	= $this->input->get_post('price');
		$this->status_id    = $this->input->get_post('status');
		$category = (array) $this->input->get_post('category');
		$this->db->insert('book', $this);
		$bookid = $this->db->insert_id();
		$this->load->model('Book_Category_Model');
		foreach ($category as $categoryid) {
			$this->Book_Category_Model->add_book_category($bookid, $categoryid);
		}
		//$this->db->insert('book', $this);
	}

	public function update_book()
	{
		$this->title    	= $this->input->get_post('title');
		$this->isbn  		= $this->input->get_post('isbn');
		$this->price    	= $this->input->get_post('price');
		$this->status_id    = $this->input->get_post('status');
		$this->db->update('book', $this, array('id' => $this->input->get_post('id')));
	}
}
?>