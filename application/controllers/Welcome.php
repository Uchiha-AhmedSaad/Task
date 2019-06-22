<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once __DIR__.'/../core/Traits/Dashboard.php';

class Welcome extends Public_Controller 
{
	use Dashboard;
	public function index()
	{
		$this->dashboard();
		$this->load->view('welcome_message');
	}
}
