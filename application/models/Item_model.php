<?php 
class Item_model extends MY_Model
{
	protected $_table_name 			= 'Items';
	protected $_primary_key 		= 'id';
	protected $_primary_filter 		= 'intval';
	protected $_rules 				= [];
	protected $_timestamps 			= FALSE;
}