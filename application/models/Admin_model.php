<?php 
class Admin_model extends MY_Model
{
	protected $_table_name 			= 'users';
	protected $_primary_key 		= 'id';
	protected $_primary_filter 		= 'intval';
	protected $_rules 				= [];
	protected $_timestamps 			= FALSE;

	public function validate()
	{
		$auth['email'] 		= $this->input->post('email');
		$auth['password'] 	= md5($this->input->post('password'));

		return $this->db->get_where('users',$auth)->row();
	}
}