<?php
class book extends CI_Controller {

	public function TestInsert()
	{
		$this->load->model('Transaction_Type_Model');

		$data['query'] = $this->Transaction_Type_Model->get_all_transactions_with_user_address_id();

		var_dump($data);
	}
}
?>