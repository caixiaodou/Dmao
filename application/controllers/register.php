<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('class/manager.php');
require_once('class/user.php');

class Register extends MY_Controller
{
	function addUser()
	{
		$Info=new User();
		
		$Info->UserTel=$_POST['UserTel'];
		$Info->UserPassword=sha1($_POST['UserPassword']);
		$Info->UserName=$_POST['UserName'];
		$Info->Sex='保密';
		$Info->Email=$_POST['Email'];
		
		
		$Try=new Manager();
		$Try->addUser($Info);
	}
}
