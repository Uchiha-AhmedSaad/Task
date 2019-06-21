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
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirm', 'required|min_length[8]|matches[password]');

        if ($this->form_validation->run() == TRUE)
        {
			$data = [];
			if ($this->input->server("REQUEST_METHOD") == 'POST') 
			{		
				$data['username'] 		= 	$this->input->post('username');
				$data['first_name'] 	=  	$this->input->post('first_name');
				$data['last_name'] 		=  	$this->input->post('last_name');
				$data['email'] 			=  	$this->input->post('email');
				$data['password'] 		= 	md5($this->input->post('password'));
				$data['create_date'] 	= 	date('Y-m-d h-i-s');
			}
			$users = $this->User_model->save($data);           
        }
        else{
        	return $this->load->view('Dashboard/Users/Create');
        }
		return redirect('dashboard/users', 'refresh');
	}
	public function Edit(int $id)
	{
		$title = "Edit User";
		$user = $this->User_model->get($id);
		$this->load->view('Dashboard/Users/Edit',get_defined_vars());
	}
	public function Update(int $id)
	{
		$title = "Update";
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[5]|max_length[50]');
       
		$user = $this->User_model->get($id);
		if (!empty($this->input->post('password'))) 
		{
	        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
	        $this->form_validation->set_rules('password_confirm', 'Password Confirm', 'required|min_length[8]|matches[password]');
			$data['password'] 		= md5($this->input->post('password'));
		}
		if ($this->input->post('email') && $this->input->post('email') != $user->email) 
		{
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		}
		if ($this->form_validation->run() == TRUE) 
		{
			if ($this->input->server("REQUEST_METHOD") == 'POST') 
			{								
				$data['username'] 		= $this->input->post('username');
				$data['first_name'] 	= $this->input->post('first_name');
				$data['last_name'] 		= $this->input->post('last_name');
				$data['email'] 			= $this->input->post('email');
			}
			$users = $this->User_model->save($data,$id);
		}
		else{
			return $this->load->view('Dashboard/Users/Edit',compact('user'));
		}

		return redirect('dashboard/users', 'refresh');
	}
	public function Delete(int $id)
	{
		$this->User_model->remove($id);
		return redirect('dashboard/users', 'refresh');
	}
}
