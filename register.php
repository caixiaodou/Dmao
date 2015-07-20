<?php
	/**
	 * Example Application
	 *
	 * @package Example-application
	 */
	
	require 'smarty/Smarty.class.php';
	require_once 'DB/user.php';
	require_once 'DB/userOperation.php';
	
	
	$smarty = new Smarty;
	
	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 120;
	$smarty->left_delimiter="{";
	$smarty->right_delimiter="}";
	//$smarty->template_dir="html";
	////$smarty->compile_dir="smarty";
	//$smarty->compile_dir="template_c";
	//$smarty->cache_dir="cache";
	
	$Info=new User();
	
	$Info->UserName=$_POST['UserName'];
	$Info->UserTel=$_POST['UserTel'];
	$Info->Email=$_POST['Email'];
	$Info->UserPassword=sha1($_POST['UserPassword']);
	$Info->Sex="保密";
	
	$user=new UserOperation();
	$user->addUser($Info);
	
	
	$smarty->display('caixiaodou.html');
	
	?>
