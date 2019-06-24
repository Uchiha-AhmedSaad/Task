<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UsersController extends Admin_Controller {
	function __construct()
	{
		$this->model_name = 'User_model';
		parent::__construct();
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('first_name', 'First Name', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required|min_length[4]|max_length[50]');
		if (strpos(current_url(),'store') == TRUE) 
		{
	        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
	        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
	        $this->form_validation->set_rules('password_confirm', 'Password Confirm', 'required|min_length[8]|matches[password]');
		}
	}
	public function Index()
	{
		$this->Indexes("Users","users","User_model");
	}
	public function Create()
	{
		$this->Creates("Create User","users");
	}
	public function save($id = NULL)
	{
		if ($this->input->server("REQUEST_METHOD") == 'POST') 
		{
			$data['username'] 		= 	$this->input->post('username');
			$data['first_name'] 	=  	$this->input->post('first_name');
			$data['last_name'] 		=  	$this->input->post('last_name');
			$data['create_date'] 	= 	date('Y-m-d h-i-s');
			if (strpos(current_url(),'store') == TRUE) 
			{
				$data['password'] 	= 	md5($this->input->post('password'));
				$data['email'] 		=  	$this->input->post('email');				
			}
			else
			{
				$users = $this->User_model->get($id);
				if ($this->input->post('email') != $users->email) 
				{
					$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
					$data['email'] 		=  	$this->input->post('email');
				}
				else{$data['email'] 		=  	$users->email;}

				if (!empty($this->input->post('password')) OR 
					!empty($this->input->post('password_confirm'))) 
				{
			        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
			        $this->form_validation->set_rules('password_confirm', 'Password Confirm', 'required|min_length[8]|matches[password]');
			        $data['password'] 		=  md5($this->input->post('password'));
				}
			}
		}
        if ($this->form_validation->run() == TRUE)
        {
			if (strpos(current_url(),'store')) 
			{
				$users = $this->User_model->save($data);
			}
			else
			{
				$users = $this->User_model->save($data,$id);
			}
	        $this->session->set_flashdata('status',
	        	['success','Users'.(is_null($id))? 'Created' : 'Updated'.' successfully']);
			return redirect('dashboard/users', 'refresh');	           
        }
        else
        {
        	if (is_null($id)) {
        		return $this->load->view('Dashboard/users/Create');
        	}
        	else{
	        	$this->load->view('Dashboard/users/Edit',compact('users'));
        	}
        }
	}
	public function Edit(int $id)
	{
		$this->Edits($id,"Edit User","users","User_model");
	}
	public function Delete(int $id)
	{
		$this->Deletes($id,'user','User_model','users');
	}
}
