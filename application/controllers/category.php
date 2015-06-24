<?php
class category extends CI_Controller {

	public function Philosophy() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(1);
		$data['category']="Philosophy";
		$this->load->view('books.php', $data);
	}

	public function Drama() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(2);
		$data['category']="Drama";
		$this->load->view('books_1.php', $data);
	}

	public function Romance() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(3);
		$data['category']="Romance";
		$this->load->view('books.php', $data);
	}

	public function Satire() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(4);
		$data['category']="Satire";
		$this->load->view('books.php', $data);
	}

	public function Tragedy() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(5);
		$data['category']="Tragedy";
		$this->load->view('books.php', $data);
	}

	public function Comedy() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(6);
		$data['category']="Comedy";
		$this->load->view('books.php', $data);
	}

	public function Tragicomedy() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(7);
		$data['category']="Tragicomedy";
		$this->load->view('books.php', $data);
	}

	public function Fiction() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(8);
		$data['category']="Fiction";
		$this->load->view('books.php', $data);
	}

	public function NonFiction() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(9);
		$data['category']="NonFiction";
		$this->load->view('books.php', $data);
	}

	public function Travel() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(10);
		$data['category']="Travel";
		$this->load->view('books.php', $data);
	}

	public function Science() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(11);
		$data['category']="Science";
		$this->load->view('books.php', $data);
	}

	public function Education() {
		$this->load->model('Book_Model');
		$data['books']=$this->Book_Model->get_books_in_category(12);
		$data['category']="Education";
		$this->load->view('books.php', $data);
	}

// 	public function TestInsert()
// 	{
// 		$this->load->model('Transaction_Book_Model');

// 		$data['query'] = $this->Transaction_Book_Model->get_all_books_with_transaction_id(1);

// 		var_dump($data);
// 	}
}
?>