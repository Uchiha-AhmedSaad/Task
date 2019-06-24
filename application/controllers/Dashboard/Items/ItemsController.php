<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 
 */
class ItemsController extends Admin_Controller
{
	function __construct()
	{
		$this->model_name = 'Item_model';
		parent::__construct();

		if (strpos(current_url(),'store') == TRUE) 
		{
			$this->form_validation->set_rules('item_name','Item Name','required|is_unique[Items.item_name]|min_length[5]|max_length[100]');
		}
		elseif (strpos(current_url(),'update') == TRUE) {
			$this->form_validation->set_rules('item_name','Item Name','required|min_length[5]|max_length[100]');
		}

		$this->form_validation->set_rules('quantity','Quantity','required|integer|is_natural');
		$this->form_validation->set_rules('price','Price','required');
		//current_url()
	}
	public function Index()
	{
		$this->Indexes("Items","items","Item_model");
	}
	public function Create()
	{
		$this->Creates("Create Items","items");
	}
	public function save($id = Null)
	{
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
			if (is_null($id)) 
			{
				$items = $this->Item_model->save($data);						
			}
			else
			{
				$item = $this->Item_model->save($data,$id);
			}
			$this->session->set_flashdata('status',['success','Item '
				.(is_null($id)) ? 'Created' : 'Updated'.' successfully']);
				return redirect('dashboard/items', 'refresh');
		}
		else
		{
			(is_null($id)) ? $this->load->view('Dashboard/items/Create') :
			$items = $this->Item_model->get($id); 
			$this->load->view('Dashboard/items/Edit',compact('items'));
		}
	}
	public function Edit(int $id)
	{
		$this->Edits($id,"Edit Items","items","Item_model");
	}

	public function Delete(int $id)
	{
		$this->Deletes($id,'items','Item_model','items');
	}
}