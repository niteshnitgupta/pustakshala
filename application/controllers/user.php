<?php
class User extends CI_Controller {

	public function register() {
		$this->load->model('User_Model');
		$id = $this->User_Model->add_new_user();
		if ($id != "") {
			$this->session->set_userdata(array('id' => $result[0]->id));
			$this->session->set_userdata(array('username' => $this->input->get_post('name')));
		}
	}

	public function login() {
		$this->load->model('User_Model');
		$result = $this->User_Model->get_user_with_email_pwd();
		if (count($result)>0) {
			$this->session->set_userdata(array('id' => $result[0]->id));
			$this->session->set_userdata(array('username' => $result[0]->name));
			echo $result[0]->id;
		} else {
			echo "";
		}
	}

	public function add_address() {
		$this->load->model('User_Address_Model');
		$id = $this->User_Address_Model->add_new_address();
		if ($id != "") {
			echo "SUCCESS";
		} else {
			echo "";
		}
	}
}
?>