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
		$data = [];
		if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		{
			$data['item_name'] 			= $_POST['item_name'];
			$data['quantity'] 			= $_POST['quantity'];
			$data['price'] 				= $_POST['price'];
			$data['created_at'] 		= date('Y-m-d h-i-s');
			$data['updated_at'] 		= date('Y-m-d h-i-s');
		}
		$items = $this->Item_model->save($data);
		return redirect('dashboard/items', 'refresh');
	}
	public function Edit()
	{
		$title = "Edit Items";
		if (isset($_GET['id'])) 
		{
			$item = $this->Item_model->get($_GET['id']);
			$this->load->view('Dashboard/Items/Edit',get_defined_vars());
		}
	}
	public function Update()
	{
		$data = [];
		if ($_GET['id'] != NULL) {
			$user = $this->Item_model->get($_GET['id']);
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST') 
			{
				$data['item_name'] 			= $_POST['item_name'];
				$data['quantity'] 			= $_POST['quantity'];
				$data['price'] 				= $_POST['price'];
				$data['created_at'] 		= date('Y-m-d h-i-s');
				$data['updated_at'] 		= date('Y-m-d h-i-s');
			}
			$users = $this->Item_model->save($data,$_GET['id']);
		}
	}
	public function Delete()
	{
		$this->Item_model->remove($_GET['id']);
		return redirect('dashboard/items', 'refresh');
	}
}