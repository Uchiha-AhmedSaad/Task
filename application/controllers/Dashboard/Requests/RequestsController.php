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
		$title = "Store Request";

		if ($_REQUEST['items']) {
			$filter = array_filter($_REQUEST['items'], function($pure){
				return !is_null($pure['quantities']) && 
					   !empty($pure['quantities'])   && 
					   !is_null($pure['items'])      &&
					   !empty($pure['items']);

			},ARRAY_FILTER_USE_BOTH);
			
			$items = [];
			$quantities = [];
			$data_quantity = [];
			$x = 0;
			foreach ($filter as  $value) {
				$item = $this->Item_model->get_by(['item_name', $value['items']],TRUE);
				if ($item->quantity > 0) {
					$decrease = $item->quantity - $value['quantities'];

					if ($decrease >= 0) 
					{
						$data_quantity['quantity'] = $decrease;
						$this->Item_model->save($data_quantity,$item->id);
					}
				}
				$items[$x] = $value['items'];
				$quantities[$x] = $value['quantities'];
				$x++;
			}

			//$combain = array_combine($items, $quantities);

			$items = serialize($items);
			$quantities = serialize($quantities);
		}
		$data = [];
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$data['customer_name'] 	= $_POST['customer_name'];
			$data['items'] 			= $items;
			$data['quantities'] 	= $quantities;
		}
		$users = $this->Request_model->save($data);
		return redirect('dashboard/requests', 'refresh');
	}
	public function Delete()
	{
		$id_request 	= $_GET['id'];

		$get_request 				= $this->Request_model->get_by(array('id',$id_request),TRUE);
		$unserialize_items 			= unserialize($get_request->items);
		$unserialize_quantities 	= unserialize($get_request->quantities);
		$combain 					= array_combine($unserialize_items, $unserialize_quantities);
		foreach ($combain as $key => $value) {
			
			$get_item 		= $this->Item_model->get_by(['item_name', $key],TRUE);
			if ($get_item->id) {
				$data_quantity['quantity'] = $get_item->quantity + $value;
				$this->Item_model->save($data_quantity,$get_item->id);
			}
		}
		$this->Request_model->remove($_GET['id']);
		return redirect('dashboard/requests', 'refresh');
	}
}