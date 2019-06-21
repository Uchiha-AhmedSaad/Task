<?php 


class MY_Model extends CI_Model
{
	protected $_table_name 		= '';
	protected $_primary_key 	= 'id';
	protected $_primary_filter 	= 'intval';
	protected $_rules 			= [];
	protected $_timestamps 		= FALSE;

	function __construct()
	{
		parent::__construct();
	}

	public function get($id = NULL, $singel = FALSE)
	{
		if ($id != Null) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key,$id);
			$method = 'row';
		}
		elseif ($singel == TRUE) {
			$method = 'row';
		}
		else{
			$method = 'result';
		}
		return $this->db->get($this->_table_name)->$method();
	}
	public function get_by($where,$singel = FALSE)
	{
		$this->db->where($where[0],$where[1]);
		return $this->get(NULL,$singel);
	}
	public function save($data,$id = NULL)
	{
		if (is_null($id)) {
			//create
			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id_user = $this->db->insert_id();
		} 
		else{

			$filter  = $this->_primary_filter;
			$id_user = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key,$id);
			$this->db->update($this->_table_name);

		}
		return $id_user;
	}
	public function remove($id)
	{
		$filter = $this->_primary_filter;
		$id_user = $filter($id);
		if (!$id_user) {
			return FALSE;
		}
		$this->db->where($this->_primary_key,$id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
	}

}