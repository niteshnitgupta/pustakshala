<?php
class Book_Category_Model extends CI_Model {

	public $book_id;
	public $category_id;

	public function __construct()
	{
		parent::__construct();
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