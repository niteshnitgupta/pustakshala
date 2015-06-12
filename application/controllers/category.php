<?php
class category extends CI_Controller {

	public function Philosophy() {
		$data['category']="Philosophy";
		$this->load->view('books.php', $data);
	}

	public function Drama() {
		$data['category']="Drama";
		$this->load->view('books.php', $data);
	}

	public function Romance() {
		$data['category']="Romance";
		$this->load->view('books.php', $data);
	}

	public function Satire() {
		$data['category']="Satire";
		$this->load->view('books.php', $data);
	}

	public function Tragedy() {
		$data['category']="Tragedy";
		$this->load->view('books.php', $data);
	}

	public function Comedy() {
		$data['category']="Comedy";
		$this->load->view('books.php', $data);
	}

	public function Tragicomedy() {
		$data['category']="Tragicomedy";
		$this->load->view('books.php', $data);
	}

	public function Fiction() {
		$data['category']="Fiction";
		$this->load->view('books.php', $data);
	}

	public function NonFiction() {
		$data['category']="NonFiction";
		$this->load->view('books.php', $data);
	}

	public function Travel() {
		$data['category']="Travel";
		$this->load->view('books.php', $data);
	}

	public function Science() {
		$data['category']="Science";
		$this->load->view('books.php', $data);
	}

	public function Education() {
		$data['category']="Education";
		$this->load->view('books.php', $data);
	}

	public function TestInsert()
	{
		$this->load->model('Transaction_Book_Model');

		$data['query'] = $this->Transaction_Book_Model->get_all_books_with_transaction_id(1);

		var_dump($data);
	}
}
?>