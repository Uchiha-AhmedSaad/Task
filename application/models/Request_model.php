<?php 
class Request_model extends MY_Model
{
	protected $_table_name 			= 'Requests';
	protected $_primary_key 		= 'id';
	protected $_primary_filter 		= 'intval';
	protected $_rules 				= [];
	protected $_timestamps 			= FALSE;
}