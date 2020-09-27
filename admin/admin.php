<?php
include('../class/user.php');
$admin=new admin;
extract($_POST);
if($admin->admin_login($usr_id,$usr_pwd))
{
	$admin->link('index.php');
} 
else
{
	$admin->link('../adminlogin.php?run=failed');
	# code...
}
?>