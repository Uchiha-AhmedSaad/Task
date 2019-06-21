<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class ItemsController extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Item_model');
	}
	public function Index()
	{
		/*
			* this is the model of Items .
		*/
		$title = "Items";
		$items = $this->Item_model->get();
		$this->load->view('Dashboard/Items/Index',get_defined_vars());
	}
	public function Create()
	{
		$title = "Create Items";
		$this->load->view('Dashboard/Items/Create',get_defined_vars());
	}
	public function Store()
	{
		$title = "Store Items";
		$this->form_validation->set_rules('item_name','Item Name','required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('quantity','Quantity','required|integer|is_natural');
		$this->form_validation->set_rules('price','Price','required');
		if ($this->form_validation->run() == TRUE) 
		{
			if ($this->input->server("REQUEST_METHOD") == 'POST') 
			{
				$data['item_name'] 			= $this->input->post('item_name');
				$data['quantity'] 			= $this->input->post('quantity');
				$data['price'] 				= $this->input->post('price');
				$data['created_at'] 		= date('Y-m-d h-i-s');
				$data['updated_at'] 		= date('Y-m-d h-i-s');
			}
			$items = $this->Item_model->save($data);
			return redirect('dashboard/items', 'refresh');
		}
		else{
			$this->load->view('Dashboard/Items/Create');
		}

	}
	public function Edit(int $id)
	{
		$title = "Edit Items";
		$item = $this->Item_model->get($id);
		$this->load->view('Dashboard/Items/Edit',get_defined_vars());
	}
	public function Update(int $id)
	{
		$title = "Update Items";
		$item = $this->Item_model->get($id);

		$this->form_validation->set_rules('item_name', 'Item Name', 'required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'required|integer|is_natural');
		$this->form_validation->set_rules('price', 'Price', 'required');

		if ($this->form_validation->run() == TRUE) 
		{
			if ($this->input->server('REQUEST_METHOD') == 'POST') 
			{
				$data['item_name'] 			= $this->input->post('item_name');
				$data['quantity'] 			= $this->input->post('quantity');
				$data['price'] 				= $this->input->post('price');
				$data['updated_at'] 		= date('Y-m-d h-i-s');
			}
			$item = $this->Item_model->save($data,$id);
			return redirect('dashboard/items', 'refresh');			
		}
		else
		{
			$this->load->view('Dashboard/Items/Edit',compact('item'));
		}
	}
	public function Delete(int $id)
	{
		$this->Item_model->remove($id);
		return redirect('dashboard/items', 'refresh');
	}
}