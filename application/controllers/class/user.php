<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends MY_Controller
{
	var $UserTel;
	var $UserPassword;
	var $UserName;
	var $Sex;
	var $Email;

	function __construct()
	{
			parent::__construct();
	}

}
