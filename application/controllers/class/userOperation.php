<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class UserOperation extends MY_Controller
{
	
	function __construct()
	{
			parent::__construct();
	}
	
	function getUser($UserTel)
	{
		$this->load->model('DB');
		return $this->DB->select('user',$UserTel);
	}	
}

