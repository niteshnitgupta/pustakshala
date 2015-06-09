<?php
class book extends CI_Controller {

	public function TestInsert()
	{
		$this->load->model('Book_Model');

		$data['query'] = $this->Book_Model->insert_entry();

		var_dump($data);
	}
}
?>