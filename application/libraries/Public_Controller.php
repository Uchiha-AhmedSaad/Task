<?php 

class Public_Controller extends MY_Controller
{

	/*
		*to make this controller registered in spl_autoload_register function 
		i should go to config and $config['subclass_prefix'] = 'MY_';;

	*/


	function __construct()
	{
		//this parent refer to CI_Controller.
		parent::__construct();
	}
}