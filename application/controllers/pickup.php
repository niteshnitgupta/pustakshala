<?php
class pickup extends CI_Controller {
	public function index() {
		$this->load->model('User_Address_Model');

		if($this->session->has_userdata("id")) {
			$id = $this->session->userdata("id");
		} else {
			$id = -1;
		}
		$data["address"] = $this->User_Address_Model->get_all_address_with_user_id($id);
		$this->load->view('pickup.php', $data);
	}
}
?>