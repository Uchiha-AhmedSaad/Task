<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {

	public function index()
	{
		$title = "Create User";

		$this->load->view('Dashboard/Users/Create',get_defined_vars());
	}
}
