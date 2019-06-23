<?php 

class Admin_Controller extends MY_Controller
{

	/*
		*to make this controller registered in spl_autoload_register function 
		i should go to config and $config['subclass_prefix'] = 'MY_';;

	*/
	protected $model_name = "";
	function __construct()
	{

		//this parent refer to CI_Controller.
		parent::__construct();

		$this->load->model($this->model_name);

		if (!$this->session->userdata('_token')) 
		{
			redirect('login');
		}
	}
	public function Indexes($title,$module,$model_name)
	{
		$title = $title;
		$$module = $this->$model_name->get();
		$this->load->view('Dashboard/'.$module.'/Index',get_defined_vars());
	}
	public function Creates($title,$module,$model_name = Null,$model_var = null)
	{
		$title = $title;
		if (!is_null($model_name)) {
			$$model_var = $this->$model_name->get();
		}
		$this->load->view('Dashboard/'.$module.'/Create',get_defined_vars());
	}
	public function Edits($id,$title,$module,$model_name)
	{
		$title = $title;
		$$module = $this->$model_name->get($id);
		$this->load->view('Dashboard/'.$module.'/Edit',get_defined_vars());
	}
	public function Deletes($id,$module,$model,$redirect)
	{
		$this->$model->remove($id);
		$this->session->set_flashdata('status',['success',$module.'Deleted successfully']);
		return redirect('dashboard/'.$redirect, 'refresh');
	}
}