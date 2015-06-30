<?php
class Transaction_Book_Model extends CI_Model {

	public $transaction_id;
	public $book_id;

	public function __construct()
	{
		parent::__construct();
	}

	public function add_transaction_book($transaction_id, $book_id)
	{
		$this->transaction_id   = $transaction_id;
		$this->book_id  		= $book_id;
		$this->db->insert('transaction_book', $this);
		echo $this->db->insert_id();
	}

	public function get_all_books_with_transaction_id($transaction_id)
	{
		$this->db->where('transaction_id', $transaction_id);
		$query = $this->db->get('transaction_book');
		return $query->result();
	}

	public function delete_book_from_transaction($transaction_id, $book_id)
	{
		$this->db->where('book_id', $transaction_id);
		$this->db->where('transaction_id', $book_id);
		$this->db->delete('transaction_book');
	}
}
?>