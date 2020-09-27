<?php
include 'class/user.php'; 
$log=new user;
extract($_POST);
if($log->student_exist_in_register($sid,$pwd))
{
	$_SESSION['student']=$sid;
	$log->url('stprofile.php');
}
else
{
	$log->url('stlogin.php?run=faild');
}


?>