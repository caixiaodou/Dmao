<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caixiaodou extends MY_Controller
{
	 public function __construct()
        {
                parent::__construct();
                //$this->load->helper('url');
        }	
	
	function index()
	{
		if(isset($_GET['page']))
		{
			$page=$_GET['page'];
			$this->ci_smarty->display($page);	
		}
		else
		{
			$this->ci_smarty->display('index.html');	
		}
	}
}
