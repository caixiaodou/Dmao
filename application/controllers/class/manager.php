<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Manager extends MY_Controller
{
		private $ManagerId;
		var $ManagerPassword;
		var $ManagerName;
		
		function __construct()
	{
			parent::__construct();
	}
	
	function addUser($Info)
	{
		$this->load->model('DB');
		
		$this->DB->insert('user',$Info);	
	}
}


