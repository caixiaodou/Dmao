<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Order extends MY_Controller
{
	private $OrderNumber;
	var $OrderStatus;
	var $OrderAmount;
	var $UserName;
	var $OrderDate;
	var $OrderTime;

	function __construct($OrderNumber)
	{
			parent::__construct();
			$this->OrderNumber=$OrderNumber;
			
	}
	
	function getOrderNumber()
	{
		return $this->OrderNumber;	
	}
}
