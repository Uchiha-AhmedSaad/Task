<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UsersController extends Admin_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function Index()
	{
		$title = "Users";
		$users = $this->User_model->get();

		$this->load->view('Dashboard/Users/Index',get_defined_vars());
	}
	public function Create()
	{
		$title = "Create User";
		$this->load->view('Dashboard/Users/Create',get_defined_vars());
	}
	public function Store()
	{
		$data = [];
		if ($this->input->method() == 'POST') 
		{								
			$data['username'] 		= 	$this->input->post('username');
			$data['first_name'] 	=  	$this->input->post('first_name');
			$data['last_name'] 		=  	$this->input->post('last_name');
			$data['email'] 			=  	$this->input->post('email');
			$data['password'] 		= 	md5( $this->input->post('password'));
			$data['create_date'] 	= 	date('Y-m-d h-i-s');
		}
		$users = $this->User_model->save($data);
		return redirect('dashboard/users', 'refresh');

	}
	public function Edit()
	{
		$title = "Edit User";
		if (isset($_GET['id'])) 
		{
			$user = $this->User_model->get($_GET['id']);
			$this->load->view('Dashboard/Users/Edit',get_defined_vars());
		}
	}
	public function Update()
	{
		$data = [];
		if ($_GET['id'] != NULL) {
			$user = $this->User_model->get($_GET['id']);
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST') 
			{								
				$data['username'] 		= $this->input->post('username');
				$data['first_name'] 	= $this->input->post('first_name');
				$data['last_name'] 		= $this->input->post('last_name');
				$data['email'] 			= $this->input->post('email');
				$data['create_date'] 	= date('Y-m-i');
			}
			if (!empty($_REQUEST['password'])) 
			{
				$data['password'] 		= md5($_POST['password']);
			}
			$users = $this->User_model->save($data,$_GET['id']);
		}
		return redirect('dashboard/users', 'refresh');
	}
	public function Delete()
	{
		$this->User_model->remove($_GET['id']);
		return redirect('dashboard/users', 'refresh');
	}
}
