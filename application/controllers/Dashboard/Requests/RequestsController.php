<?php 
defined('BASEPATH') OR exit('No direct script access allowed');



class RequestsController extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Request_model');
		$this->load->model('Item_model');
	}
	public function Index()
	{
		$title = "Requests";
		$requests = $this->Request_model->get();
		$this->load->view('Dashboard/Requests/Index',get_defined_vars());
	}
	public function Create()
	{
		$title = "Create Request";
		$items = $this->Item_model->get();
		$this->load->view('Dashboard/Requests/Create',get_defined_vars());

	}
	public function Store()
	{

		$this->form_validation->set_rules('customer_name', 'Customer Name', 'required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('items[]', 'Items', 'required');

		//the title of the page
		$title = "Store Request";
		//check if items not null or empty by array_filter with both
        if ($this->form_validation->run() == TRUE)
        {
			if ($this->input->post('items')) 
			{
				$filter = array_filter($this->input->post('items'), function($pure){
					return !is_null($pure['quantities']) && 
						   !empty($pure['quantities'])   && 
						   !is_null($pure['items'])      &&
						   !empty($pure['items']);
				});

				$items = [];   $quantities = [];    $x = 0;
				foreach ($filter as  $value) 
				{
					$item = $this->Item_model->get_by(['item_name', $value['items']],TRUE);
					if ($item->quantity >= $value['quantities']) 
					{
						$decrease['quantity'] = $item->quantity - $value['quantities'];
						$this->Item_model->save($decrease,$item->id);
					}
					$items[$x] 		= $value['items'];
					$quantities[$x] = $value['quantities'];
					$x++;
				}
				$items 		= serialize($items);    $quantities = serialize($quantities);
			}
			if ($this->input->server("REQUEST_METHOD") == 'POST') 
			{
				$data['customer_name'] 	= $this->input->post('customer_name');
				$data['items'] 			= $items;
				$data['quantities'] 	= $quantities;
			}
			$users = $this->Request_model->save($data);
		}
		else{
			$items = $this->Item_model->get();
			return $this->load->view('Dashboard/Requests/Create',compact('items'));
		}
		return redirect('dashboard/requests', 'refresh');
	}
	public function Delete(int $id)
	{
		$get_request 				= $this->Request_model->get_by(array('id',$id),TRUE);
		$unserialize_items 			= unserialize($get_request->items);
		$unserialize_quantities 	= unserialize($get_request->quantities);
		$combain 					= array_combine($unserialize_items, $unserialize_quantities);
		foreach ($combain as $key => $value) 
		{
			$get_item 		= $this->Item_model->get_by(['item_name',$key],TRUE);
			if ($get_item->id) 
			{
				$data_quantity['quantity'] = $get_item->quantity + $value;
				$this->Item_model->save($data_quantity,$get_item->id);
			}
		}
		$this->Request_model->remove($id);
		return redirect('dashboard/requests', 'refresh');
	}
}