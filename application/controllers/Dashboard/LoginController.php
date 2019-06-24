<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class LoginController extends Public_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}
	public function Login()
	{
		$title = "LogIn";
		if (!$this->session->userdata('_token')) 
		{
			$this->load->view('Dashboard/Login',get_defined_vars());
		}
		else{
			redirect('dashboard');
		}
	}
	public function varify()
	{
        if ($this->form_validation->run() == TRUE)
        {
			$check_validate = $this->admin_model->validate();
			if ($check_validate) 
			{
				$this->session->set_userdata('_token',uniqid());
				echo "email and password is correct";
				redirect('dashboard');
			}
			else
			{
				$data = "This login failed probably by email or password";
				$this->load->view('Dashboard/Login',compact('data'));
			}
		}
		else
		{
			redirect('login');
		}

	}
	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}