<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends Admin_Controller {


	public function __construct(){
		parent::__construct();
	}
	public function Index()
	{
		$this->load->view('Dashboard/app');
	}

}
