<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class LoginController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function Login()
	{
		$title = "LogIn";
		$this->load->view('Dashboard/Login',get_defined_vars());
	}
	public function varify()
	{
		
		$check_validate = $this->admin_model->validate();
		if ($check_validate) 
		{
			$this->session->set_userdata('_token',uniqid());
			echo "email and password is correct";
			redirect('dashboard');
		}
		else{
			redirect('login');
		}
	}
	public function Logout()
	{
		$this->session->sess_destory();
	}
}