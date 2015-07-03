<?php
class Book_Category_Model extends CI_Model {

	public $book_id;
	public $category_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_categories_with_bookid()
	{
		$id = $this->input->get_post('book');
		$this->db->where('book_id', $id);
		$query = $this->db->get('book_category');
		return $query->result();
	}

	public function add_book_category($bookid, $categoryid)
	{
		$this->book_id    	= $bookid;
		$this->category_id  	= $categoryid;
		$this->db->insert('book_category', $this);
	}

	public function delete_book_category($bookid, $categoryid)
	{
		$this->db->where('book_id', $bookid);
		$this->db->where('category_id', $categoryid);
		$this->db->delete('book_category');
	}
}
?>