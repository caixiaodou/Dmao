<?php
class DB extends Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database('caixiaodou');
	}
	
	function insert($table,$arr)
	{
		$this->db->insert($table,$arr);
	}
	
	function update($table,$id,$arr)
	{
		switch($table)
		{
			case 'manager':
				$this->db->where('ManagerId',$id);
				break;
			case 'user':
				$this->db->where('UserTel',$id);
				break;
			default :
				echo "Please select a table!";
				break;	
		}
		
		$this->db->update($table,$arr);	
	}
	
	function delete($table,$id)
	{
		switch($table)
		{
			case 'user':
				$this->db->where('uid',$id);
				break;
			case 'order':
				$this->db->where('orderid',$id);
				break;
			default :
				echo "Please select a table!";
				break;	
		}
		$this->db->delete('user');	
	}
	
	function select($table,$UserTel)
	{
		$this->db->where('UserTel',$UserTel);
		$this->db->select('*');	
		$query=$this->db->get($table);
		return $query->result();
	}
}
?>