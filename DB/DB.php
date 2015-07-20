<?php
class DB
{
	private $db_UserName;
	private $db_Password;
	private $db_Host;
	private $db_DBName;
	
	function __construct()
	{
		$this->db_UserName='maomao';
		$this->db_Password='maomao';
		$this->db_Host='localhost';
		$this->db_DBName='caixiaodou';
	}
	
	function __destruct(){}
	
	function addUser($Info)
	{
		@ $db=new mysqli($this->db_Host,$this->db_UserName,$this->db_Password,$this->db_DBName);
		
		if(mysqli_connect_errno())
			return false;
			
		$query="insert into user(UserTel,UserPassword,UserName,Sex,Email) 
			values('$Info->UserTel','$Info->UserPassword','$Info->UserName','$Info->Sex','$Info->Email')";	
		
		$db->query("SET NAMES UTF8");	
		
		$result=$db->query($query);	
			
			echo $db->error;

			//$result->free();
			$db->close();

			return true;
	}
	
	function getUser($UserTel)
	{
		@ $db=new mysqli($this->db_Host,$this->db_UserName,$this->db_Password,$this->db_DBName);
		
		if(mysqli_connect_errno())
			return false;
			
			
			if (!isset($result)) 
			
		$query="select * from user where user.UserTel=$UserTel";
		$db->query("SET NAMES UTF8");
		
		$result=$db->query($query);
		
		if(!isset($result))
		{
			return NULL;	
		}
		
		$result_num=$result->num_rows;	
			
		$row=$result->fetch_assoc();
		
		return $row;
			
	}
	
}
?>