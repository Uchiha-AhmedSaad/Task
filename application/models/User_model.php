<?php 

class User_model extends MY_Model
{
	protected $_table_name 			= 'users';
	protected $_primary_key 		= 'id';
	protected $_primary_filter 		= 'intval';
	protected $_rules 				= [];
	protected $_timestamps 			= FALSE;
}