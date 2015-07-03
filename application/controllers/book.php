<?php
class Book extends CI_Controller {

	public function TestInsert()
	{
		$this->load->model('Transaction_Book_Model');

		$data['query'] = $this->Transaction_Book_Model->get_all_books_with_transaction_id(1);

		var_dump($data);
	}

	public function request_pick_up()
	{
		$this->load->model('Book_Model');
		$bookid = $this->Book_Model->add_book();

		$this->load->model('Transaction_Model');
		$transactionid = $this->Transaction_Model->add_new_transaction(1);

		$this->load->model('Transaction_Book_Model');
		echo $this->Transaction_Book_Model->add_transaction_book($transactionid, $bookid);
	}

	public function request_drop()
	{
		//Check n update book's status

		$this->load->model('Book_Model');
		$status = $this->Book_Model->update_status($this->input->get_post('book'), 2);
		if ($status == 0) {
			echo "Sorry the book was already taken by someone else. Please request for another book.";
			return;
		}
		$this->load->model('Transaction_Model');
		$transactionid = $this->Transaction_Model->add_new_transaction(2);

		$this->load->model('Transaction_Book_Model');
		$this->Transaction_Book_Model->add_transaction_book($transactionid, $this->input->get_post('book'));
		echo "success";
	}
}
?>