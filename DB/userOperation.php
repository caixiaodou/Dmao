<?php

require_once('DB.php');

class UserOperation 
{
	
	function __construct()
	{
			
	}
	
	function addUser($Info)
	{
		$user_db=new DB();
		$user_db->addUser($Info);
		
		return true;
	}
	
	function modifyUser()
	{
		
	}
	
	function getUser($UserTel)
	{
		$user_db=new DB();
		$result=$user_db->getUser($UserTel);	
		
		return $result;
	}
	
	function getOrder()
	{
		
	}
	
	function cancleOrder()
	{
		
	}
}

?>
