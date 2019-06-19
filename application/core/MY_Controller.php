<?php 
class MY_Controller extends CI_Controller
{

	/*
		*to make this controller registered in spl_autoload_register function 
		i should go to config and $config['subclass_prefix'] = 'MY_';;

	*/
	public $data = [];

	function __construct()
	{
		//this parent refer to CI_Controller.
		parent::__construct();
		 $this->load->helper('url');
		 $this->load->library('form_validation');

		$this->data['errors'] = array();

		$this->data['site_name'] = config_item('site_name');
	}
}