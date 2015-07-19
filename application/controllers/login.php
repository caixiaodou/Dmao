<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('class/userOperation.php');
require_once('class/user.php');

class Login extends MY_Controller
{
	 public function __construct()
        {
                parent::__construct();
        }	
	
	function checkLogin()
	{
		$Info=new User();
		
		$Info->UserTel=$_POST['UserTel'];
		$Info->UserPassword=sha1($_POST['UserPassword']);
		
		$user=new UserOperation();
		$arr=$user->getUser($Info->UserTel);
		
		if($Info->UserPassword==$arr[0]->UserPassword)
		{
			$this->load->helper('url');
			$this->ci_smarty->display('index.html');	
		}
		else
		{
			echo "The Password isn't correct!";	
		}
		
	}
}
