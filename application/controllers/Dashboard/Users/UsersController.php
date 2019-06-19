<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index()
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
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$data['username'] 		= $_POST['username'];
			$data['first_name'] 	= $_POST['first_name'];
			$data['last_name'] 		= $_POST['last_name'];
			$data['email'] 			= $_POST['email'];
			$data['password'] 		= $_POST['password'];
			$data['create_date'] 	= date('Y-m-i');
		}
		$users = $this->User_model->save($data);


	}
	public function edit()
	{
		if (isset($_GET['id'])) 
		{
			$user = $this->User_model->get($_GET['id']);
			$this->load->view('Dashboard/Users/Create',get_defined_vars());
		}
	}
	public function Update()
	{
		$data = [];
		if ($_GET['id'] != NULL) {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') 
			{
				$data['username'] 		= $_POST['username'];
				$data['first_name'] 	= $_POST['first_name'];
				$data['last_name'] 		= $_POST['last_name'];
				$data['email'] 			= $_POST['email'];
				$data['password'] 		= $_POST['password'];
				$data['create_date'] 	= date('Y-m-i');
			}
			$users = $this->User_model->save($data,$_GET['id']);
		}

	}
	public function Delete()
	{
		if ($this->User_model->remove($_GET['id'])) {
			echo "'Deleted";
		}
		else{
			echo 'you cant delete this element';
		}
	}
}
