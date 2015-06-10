<?php
class book extends CI_Controller {

	public function TestInsert()
	{
		$this->load->model('Transaction_Book_Model');

		$data['query'] = $this->Transaction_Book_Model->get_all_books_with_transaction_id(1);

		var_dump($data);
	}
}
?>