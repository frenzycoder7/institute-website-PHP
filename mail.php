<?php
	include 'class/user.php';
	$enquery=new user;
	if(isset($_POST['enqu']))
	{
		extract($_POST);
		$time=date("h:i:sa");
		$date=date("d/m/y");
		if($enquery->user_enquery($name,$number,$email,$quli,$course,$time,$date,$query))
		{
			#$enquery->url('index.php?e=s');

			/*$to="srivastava616@gmail.com";
		
			$message=$_POST['name'];
			$message=$_POST['email'];
			$message='New Enquery';
			$message="Dear Admin New Enquery";
			$message=$_POST['number'];
			$header = "From:gs9178449@gmail.com\r\n";
			$header = "MIME-Version: 1.0\r\n";
	   	 	$header = "Content-type: text/html\r\n";
			$sucess=mail($to,$message,$header);
			if($sucess)
			{
				$enquery->url('index.php');
			}*/
			$enquery->url('index.php?enqu=success');
		} 
		else
		{
			$enquery->url('index.php?enquery=faild');
		}
	}
	
?>