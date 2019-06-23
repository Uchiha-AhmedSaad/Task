<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('Upload_File'))
{ 
	function Upload_File($field_name,$dir = NULL)
	{
		if ($_FILES[$field_name]["name"]) 
		{
	            $config['upload_path']          = APPPATH.'../Upload/'.$dir;
	            $config['allowed_types']        = 'gif|jpg|png';
	            $config['max_size']             = 10000;
	            $config['max_width']            = 1024;
	            $config['max_height']           = 768;
	            $config['file_name']			= date('YmdHms').rand(1,999999);

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);
	            if ($this->upload->do_upload($field_name)) 
	            {
	            	if (is_null($dir)) 
	            	{
	            		return 'Upload/'.$config['file_name'];
	            	}
	            	else{
	            		return 'Upload/'.$dir.'/'.$config["file_name"];
	            	}
	            	
	            }
		}

	}
}