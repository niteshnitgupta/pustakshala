<?php
class User_Address_Model extends CI_Model {
	public $user_id;
	public $address;
	public $landmark;
	public $city;
	public $state;
	public $pincode;
	public $phone;
	public $latitude;
	public $longitude;

	public function __construct()
	{
		parent::__construct();
	}

	public function add_new_address()
	{
		$this->user_id  	= $this->input->get_post('user_id');
		$this->address 		= $this->input->get_post('address');
		$this->landmark 	= $this->input->get_post('landmark');
		$this->city			= $this->input->get_post('city');
		$this->state 		= $this->input->get_post('state');
		$this->pincode 		= $this->input->get_post('pincode');
		$this->phone 		= $this->input->get_post('phone');
		$this->latitude 	= $this->input->get_post('latitude');
		$this->longitude 	= $this->input->get_post('longitude');
		$this->db->insert('user_address', $this);
	}

	public function get_all_address_with_user_id()
	{
		$this->user_id = $this->input->get_post('user_id');
		$this->db->where('user_id', $this->user_id);
		$query = $this->db->get('user_address');
		return $query->result();
	}

	public function get_address_with_id()
	{
		$id = $this->input->get_post('id');
		$this->db->where('id', $id);
		$query = $this->db->get('user_address');
		return $query->result();
	}

	public function update_address_with_id()
	{
		$this->user_id  	= $this->input->get_post('user_id');
		$this->address 		= $this->input->get_post('address');
		$this->landmark 	= $this->input->get_post('landmark');
		$this->city			= $this->input->get_post('city');
		$this->state 		= $this->input->get_post('state');
		$this->pincode 		= $this->input->get_post('pincode');
		$this->phone 		= $this->input->get_post('phone');
		$this->latitude 	= $this->input->get_post('latitude');
		$this->longitude	= $this->input->get_post('longitude');
		$id					= $this->input->get_post('id');
		$this->db->where('id', $id);
		$query = $this->db->update('user_address', $this);
	}

	public function delete_address_with_id()
	{
		$id	= $this->input->get_post('id');
		$this->db->where('id', $id);
		$this->db->delete('user_address');
	}
}
?>