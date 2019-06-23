<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{

	/*
		*to make this controller registered in spl_autoload_register function 
		i should go to config and $config['subclass_prefix'] = 'MY_';;

	*/
	function __construct()
	{
		parent::__construct();
	}
}