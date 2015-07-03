<?php
class Checkout extends CI_Controller {
	public function index() {
		$this->load->model('Book_Model');
		$this->load->model('User_Address_Model');
		$this->load->model('Book_Category_Model');

		if($this->session->has_userdata("id")) {
			$id = $this->session->userdata("id");
		} else {
			$id = -1;
		}

		$data["address"] = $this->User_Address_Model->get_all_address_with_user_id($id);
		$result = $this->Book_Model->get_book_with_id();
		if(isset($result[0])) {
			$data["book"] = $result[0];
		}
		$result = $this->Book_Category_Model->get_categories_with_bookid();

		$cat = array();
		foreach ($result as $r) {
			$cat[] = $r->category_id;
		}

		$data["categories"] = $cat;
		$this->load->view('checkout.php', $data);
	}
}
?>