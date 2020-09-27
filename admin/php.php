<?php
	include '../class/user.php';
	$admin=new admin;
	if(isset($_SESSION['admin']))
	{
		if(isset($_POST['add_faculty']))
		{
			extract($_POST);
			$img_tmp=$_FILES['f_img']['tmp_name'];
			$path="../img/faculty/".$f_name.".jpg";
			if(move_uploaded_file($img_tmp, $path))
			{
				$path=$f_name.".jpg";
				if($admin->add_faculty($f_name,$f_work,$f_email,$c_code,$f_num,$path,$f_query))
				{
					$admin->link('index.php?f=success');
				}
			}
		}


		if(isset($_POST['add_course']))
		{	extract($_POST);
			
			$img_tmp=$_FILES['c_img']['tmp_name'];
			$path="../img/course/".$c_name.".jpg";
			if(move_uploaded_file($img_tmp,$path))
			{
				$popular=0;
				if($pop)
				{
					$popular=1;
				}
				$path=$c_name.".jpg";
				if($admin->add_course($c_name,$c_fee,$path,$c_query,$popular,$tout,$c_cat))
				{
					$admin->link('index.php?c_a=success');
				}
			}
			else
			{
				echo "img error";
			}
		}
		if(isset($_POST['delete_course']))
		{
			extract($_POST);
			echo $c_opt;
			if($admin->course_delete($c_opt))
			{
				$admin->link('index.php?dlt=success');
			}
		}
		if(isset($_POST['course_update']))
		{	extract($_POST);
			$img_tmp=$_FILES['uc_img']['tmp_name'];
			$path="../img/course/".$uc_name.".jpg";
			if(move_uploaded_file($img_tmp, $path))
			{	$path=$uc_name.".jpg";
				if($admin->course_update($uc_name,$uc_fee,$uc_cat,$path,$uc_query,$uc_opt))
				{
					$admin->link('index.php?u=success');
				}
			}
		}
		if(isset($_POST['mk_popular']))
		{
			extract($_POST);
			echo $make;
			if($admin->popular_verification($make))
			{
				$admin->link('index.php?mk=success&v='.$make.'');
			}
			else
			{
				if($admin->add_course_to_popular($make))
				{
					$admin->link('index.php?add=success&co='.$make.'');
				}
			}
		}
		if(isset($_POST['dlt_popular']))
		{
			extract($_POST);
			$pop_dlt;
			if($admin->delete_popular_course($pop_dlt))
			{
				$admin->link('index.php?po_dlt=success');
			}
		}
		if(isset($_POST['delete_faculty']))
		{	extract($_POST);
			if($admin->delete_faculty($fac_sel))
			{
				$admin->link('index.php?fdlt=success');
			}
		}
		if(isset($_POST['faculty_update']))
		{
			extract($_POST);
			$img_tmp=$_FILES['ef_img']['tmp_name'];
			$path="../img/faculty/".$ef_name.".jpg";
			if(move_uploaded_file($img_tmp, $path))
			{	$path=$ef_name.".jpg";
				if($admin->update_faculty_profile($ef_select,$ef_name,$ef_email,$ef_work,$ecode,$ef_num,$path,$ef_query))
				{
					$admin->link('index.php?edit=success');
				}
			}

		}
		
		if(isset($_POST['stidlog']))
		{
			extract($_POST);
			echo $sid;
			if($admin->student_verification($sid))
			{	$_SESSION['sid']=$sid;
				$admin->link('student.php?sid='.$sid.'');
			}
			else
			{
				$admin->link('index.php?sid=succ');
			}
		}
		if(isset($_POST['scadd']))
		{
			extract($_POST);
			$user=$_SESSION['sid'];
			if($admin->amount_fetch($c_add))
			{
				foreach ($admin->am as $key) 
				{
					# code...
				}
				$amount=$key['cource_fee'];
				if($admin->student_course($c_add,$user,$amount))
				{
					$admin->link('student.php?c_ad=success');
				}
				else
				{
					echo $c_add;
					echo $user;
					echo $amount;
					echo "hello";
				}
			}
			
		}
		if(isset($_POST['dsc']))
		{
			extract($_POST);
			$user=$_SESSION['sid'];
			if($admin->delete_student_course($user,$dlt))
			{
				$admin->link('student.php?dlt=success');
			}
		}
		if(isset($_POST['slsc']))
		{
			extract($_POST);
			$admin->link('student.php?course='.$ssc.'');
		}
		if(isset($_POST['uam']))
		{
			extract($_POST);
			$user=$_SESSION['sid'];
			echo $user;
			if($admin->fee_update($instl,$amount,$user,$cour))
			{
				/*$sender_name = "TECH CLOUD";
                           
                          			 $sender_email = "techpatna@techcloud.org.in";
                           
                           			$sender_subject = "FEE STRUCTURE";
                           
                           			$sender_message = "Dear Student".$_SESSION['sname']."Thank you for Pay ".$instl." Amount of ".$amount." for ".$update_amount." TECH CLOUDE(PATNA).";
                           
                           			$receiver_email = $_SESSION['semail'];
                           
                          			if(mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email))
				{
					*/
					$admin->link('student.php?course='.$cour.'');
				/*}
				else
				{
					echo "not send";
				}*/
				
			}
			else
			{
				$admin->link('student.php?=notSubmit');
			}
		}
		if(isset($_POST['add_steam'])){
			if($admin->add_steam($_POST)){
				$admin->link('index.php?steam=success');
			}
		}
		if(isset($_POST['add_tutorial'])){
			$val=$_POST['course'];
			$res=explode('|', $val);
			echo $res[0];
			echo $res[1];
			$name=$_POST['title'];
			$img_tmp=$_FILES['img']['tmp_name'];
			$img_path="../tutorials/img/".$name.".jpg";
			$vdo_tmp=$_FILES['vdo']['tmp_name'];
			$vdo_path="../tutorials/videos/".$name.".mp4";
			$asgn_tmp=$_FILES['asgn']['tmp_name'];
			$asgn_path="../tutorials/assignment/".$name.".pdf";
			if(move_uploaded_file($img_tmp,$img_path) && move_uploaded_file($vdo_tmp,$vdo_path)){
				if(move_uploaded_file($asgn_tmp,$asgn_path)){
					$img_path="tutorials/img/".$res[0].".jpg";
					$vdo_path="tutorials/videos/".$name.".mp4";
					$asgn_path="tutorials/assignment/".$name.".pdf";
					if($admin->add_online_course($_POST,$res[0],$res[1],$img_path,$vdo_path,$asgn_path)){
						$admin->link('index.php?vdo=success');
					}
					else
					{
						echo "database error";
					}
				}
				else{
					$img_path="tutorials/img/".$res[0].".jpg";
					$vdo_path="tutorials/videos/".$name.".mp4";
					$asgn_path="tutorials/assignment/".$name.".pdf";
					if($admin->add_online_course($_POST,$res[0],$res[1],$img_path,$vdo_path,$asgn_path)){
						$admin->link('index.php?vdo=success');
					}
					else
					{
						echo "database error";
					}
				}
			}
			else
			{
				echo "uploading error";
			}

		}
		if(isset($_POST['dlt_vdo'])){
			extract($_POST);
			$img_path="../tutorials/img/".$title.".jpg";
			unlink($img_path);
			$vdo_path="../tutorials/videos/".$title.".mp4";
			unlink($vdo_path);
			$pdf="../tutorials/assignment/".$title.".pdf";
			unlink($pdf);
			if($admin->dlt_vdo_frm_db($title)){
				$admin->link('index.php?vdo=deleted');
			}
		}
		if(isset($_POST['addasign'])){
			extract($_POST);
			print_r($_POST);
			$tmp_file=$_FILES['assignment']['tmp_name'];
			$path="../tutorials/assignment/".$n.".pdf";
			if(move_uploaded_file($tmp_file, $path)){
				$path="tutorials/assignment/".$n.".pdf";
				if($admin->add_assignment($path, $n, $desc, $course)){
					$admin->link('index.php?assign=success');
				}
			}
		}
		if(isset($_POST['dlt_asign'])){
			extract($_POST);
			$pdf="../tutorials/assignment/".$title.".pdf";
			unlink($pdf);
			if($admin->dlt_asign($title)){
				$admin->link('index.php?assign_dlt=success');
			}
		}
		
		
	}
	else
	{
		$admin->link('index.php');
	}
	
?>