<?php 
	session_start();
	class user
	{
		public $host="localhost";
		public $user="root";
		public $pas="";
		public $db="target";
		public $con;
		public $cources_var;
		public $comments;
		public $events;
		public $pro_data;
		public $pro_course;
		public $asign;

		public function __construct()
		{
			$this->con=new mysqli($this->host,$this->user,$this->pas,$this->db);
			if($this->con->connect_errno)
			{
				die('connection failed'.$this->con->connect_errno);
			}
		}
		public function url($url)
		{
			header('location:'.$url);
		}
		public function admin_login($e,$p)
		{	
			$work=$this->con->query("SELECT * FROM `admin` WHERE `userid` = '$e AND `password` = '$p'");
			if($work->num_rows>0){
			$_SESSION['admin']=$e;
				return true;
			}
		}
		
		public function courses_fetch()
		{
			$cources=$this->con->query("SELECT * FROM `cources`");
			if($cources)
			{
				if($cources->num_rows>0)
				{	
					while($row=$cources->fetch_array(MYSQLI_ASSOC))
					{
						$this->cources_var[]=$row;
					}
					return $this->cources_var;
				}
			
			}
			

		}
		public function user_enquery($name,$number,$email,$quli,$course,$time,$date,$query)
		{
			$user_enquery=$this->con->query("INSERT INTO `enquery`(`name`, `Email`, `number`, `qulification`, `course`, `time`, `date`, `seen`, `query`) VALUES ('$name','$email','$number','$quli','$course','$time','$date','0','$query')");
			if($user_enquery)
			{
				return true;

			}
			else
			{
				?>
				<script type="text/javascript">
					alert('command error');
				</script>
				<?php
			}
		}
		public function popular_courses_fetch()
		{
			$cources=$this->con->query("SELECT * FROM `popular_courses`");
			if($cources)
			{
				if($cources->num_rows>0)
				{	
					while($row=$cources->fetch_array(MYSQLI_ASSOC))
					{
						$this->cources_var[]=$row;
					}
					return $this->cources_var;
				}
			}
			else
			{
				?>
				<script type="text/javascript">
					alert('command error');
				</script>
				<?php
			}
		}


		/*-------------Feedback Area Start----------------------*/

		public function feedback_submit($eml,$name,$path,$feedback)
		{
			$fb=$this->con->query("INSERT INTO `feedback` (`user_name`, `user_img`, `user_email`, `feedback`) VALUES ('$name','$path','$eml','$feedback')");
			if($fb)
			{
				return true;
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("command error");
				</script>
				<?php
			}
		}
		public function user_avlability_feedback_verification($eml)
		{
			$fb=$this->con->query("SELECT * FROM `feedback` WHERE `user_email`='$eml'");
			if($fb->num_rows>0)
			{
				return true;
			}
		}
		public function update_feedback($eml,$name,$path,$feedback)
		{
			$fb=$this->con->query("UPDATE `feedback` SET `user_name`='$name',`user_img`='$path',`feedback`='$feedback' WHERE `user_email`='$eml'");
			if($fb)
			{
				return true;
			}

		}
		public function feedback_fetch()
		{
			$fb=$this->con->query("SELECT * FROM `feedback`");
			if($fb->num_rows>0)
			{
				while($fb_row=$fb->fetch_array(MYSQLI_ASSOC))
				{
					$this->comments[]=$fb_row;
				}
				return $this->comments;
			}
		}

		/*-----------------Feedback Area End----------------------*/

		/*----------------Trainer fetch area--------------------*/
		public function admin_fetch()
		{
			$admin=$this->con->query("SELECT * FROM `faculty` ");
			if($admin->num_rows>0)
			{
				while($row=$admin->fetch_array(MYSQLI_ASSOC))
				{
					$this->admin[]=$row;
				}
				return $this->admin;
			}
		}
		/*----------------Trainer fetch area end---------------
		public function event_fetch()
		{
			$work=$this->con->query("SELECT * FROM `events`");
			if($work->num_rows>0)
			{
				while($row=$work->fetch_array(MYSQLI_ASSOC))
				{
					$this->events[]=$row;
				}
				return $this->events;
			}
			else
			{
				return false;
			}
		}
		-----------------------student area---------------------*/
		public function student_exist_in_register($sid,$pwd)
		{
			$work=$this->con->query("SELECT * FROM `addmition` WHERE `userid`='$sid' AND `password`='$pwd'");
			if($work->num_rows>0)
			{
				return true;
			}
		}
		public function fetch_student_profile($sid)
		{
			$work=$this->con->query("SELECT * FROM `addmition` WHERE `userid`='$sid'");
			if($work)
			{
				while ($row=$work->fetch_array(MYSQLI_ASSOC)) 
				{
					$this->pro_data[]=$row;
				}
				return $this->pro_data;
			}
		}
		public function fetch_course_through_student_id($sid)
		{	
			$work=$this->con->query("SELECT * FROM `paid_fee` WHERE `userid`='$sid'");
			if($work->num_rows>0)
			{
				while ($row=$work->fetch_array(MYSQLI_ASSOC)) 
				{
					$this->pro_course[]=$row;
				}
				return $this->pro_course;
			}
		}
		public function student_addmition($p,$path)
		{
			extract($p);
			$sid=$sname[0].rand(1000,10000);
			$password=$sname[0].rand(10000,100000);
			$time=date("h:i:sa");
			$date=date("d/m/y");
			$date=$date." | ".$time;
			
			$arr="A"."B"."C"."D"."E"."F"."G"."H"."I".
				"J"."K"."L"."M"."N"."O"."P"."Q"."R".
				"S"."T"."U"."V"."W"."X"."Y"."Z";
			$enrolment=$sname[0];
			for($i=0; $i<14; $i++)
			{	$j=rand(1,25);
				$enrolment=$enrolment.$arr[$j];
			}
			$year=date("Y");
			$work=$this->con->query("INSERT INTO `addmition`(`name`, `father`, `class`, `steam`, `enrolmentid`, `userid`, `password`, `status`, `dob`, `email`, `mobile`, `address`, `doa`, `year`, `img`, `access`) VALUES ('$sname','$fname','$class','$steam','$enrolment','$sid','$password','0','$dob','$email','$mobile','$addr','$date','$year','$path','0')");
			if($work)
			{
				/*$to = $email;
       				 $subject = "ADDMITION-TARGET CLASSES(PATNA)";
        			$cmessage = "Dear Student ".$sname." Welcome to Target CLasses Patna. Your Application for addmition is successfully submitted. Your Student Id:-"."[ ".$sid." ] and Your Password is:- [ ".$password." ] . You can go and and check your profile from this link:- targetclasses.org/stlogin.php . For confirm your addmition print out this mail and submit it with some amount in the office of tagetclasses. Tank You";

    				/*$headers = "From: info@targetclasses.org";
				$headers = "From: info@targetclasses.org \r\n";
				$headers .= "Reply-To: info@targetclasses.org \r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				*/
    				
    				/*$logo = '../logo/target.png';
    				$link = 'tagetclasses.org';

				$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>TARGET CLASSES(PATNA)</title></head><body>";
				$body .= "<table style='width: 100%;'>";
				$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
				$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
				$body .= "</td></tr></thead><tbody><tr>";
				$body .= "<td style='border:none;'><strong>Name:</strong> {$sname}</td>";
				$body .= "<td style='border:none;'><strong>Email:</strong> {$email}</td>";
				$body .= "</tr>";
				$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
				$body .= "<tr><td></td></tr>";
				$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
				$body .= "</tbody></table>";
				$body .= "</body></html>";

    				if(mail($to, $subject, $body)){
					/*----------------Start fee paid area------------*/
						$admin=new admin;
						if($admin->amount_fetch($class))
						{
							foreach ($admin->am as $key) 
							{
								# code...
							}
							$amount=$key['cource_fee'];
							if($admin->student_course($class,$sid,$amount))
							{
								$admin->link('student.php?c_ad=success');
							}
							else
							{
								echo $class;
								echo $sid;
								echo $amount;
								echo "hello";
							}
						}

					/*-----------------end fee paid rea--------------*/
						
					return true;
				/*}*/
			}
		}
		public function verifyEmail($p){
			$work=$this->con->query("SELECT * FROM `addmition` WHERE `email`='$p'");
			if($work->num_rows>0)
			{
			 return true;
			}
			
		}
		public function fetch_course_by_steam($p){
			$work=$this->con->query("SELECT `cource_title` FROM `cources` WHERE `course_cat`='$p'");
			if($work->num_rows>0){
				while($row=$work->fetch_array(MYSQLI_ASSOC)){
					$this->data[]=$row;
				}
				return $this->data;
			}
		}
		public function video_fetch($title){
			$work=$this->con->query("SELECT * FROM `live_class` WHERE `course`='$title'");
			if($work->num_rows>0){
				while($row=$work->fetch_array(MYSQLI_ASSOC)){
					$this->data[]=$row;

				}
				return $this->data;
			}
		}
		public function assignmet_fetch($t){
			$work=$this->con->query("SELECT * FROM `assignment` WHERE `course`='$t'");
			if($work->num_rows>0){
				while($row=$work->fetch_array(MYSQLI_ASSOC)){
					$this->asign[]=$row;
				}
				return $this->asign;
			}
		}

	}
	/**
	 * 
	 */
	class admin
	{
		
		public $host="localhost";
		public $user="root";
		public $pas="";
		public $db="target";
		public $asign;
		public $con;
		public $course;
		public $data;
		public $tmp;
		public $g;
		public $f;
		public $enq;
		public $stu;
		public $scf;
		public $inst;
		public $am;
		public $insta;

		public function __construct()
		{
			$this->con=new mysqli($this->host,$this->user,$this->pas,$this->db);
			if($this->con->connect_errno)
			{
				die('connection failed'.$this->con->connect_errno);
			}
		}
		public function admin_login($e,$p)
		{
			$work=$this->con->query("SELECT * FROM `admin` WHERE `userid` = '$e' AND `password` = '$p'");
			if($work->num_rows>0){
			$_SESSION['admin']=$e;
				return true;
			}
		}
		public function link($url)
		{
			header('location:'.$url);
		}


		public function add_faculty($f_name,$f_work,$f_email,$c_code,$f_num,$path,$f_query)
		{
			$work=$this->con->query("INSERT INTO `faculty`(`name`, `work`, `email`, `code`, `num`, `img`, `query`) VALUES ('$f_name','$f_work','$f_email','$c_code','$f_num','$path','$f_query')");
			if($work)
			{
				return true;
			}
			else
			{
				?>
					<script type="text/javascript">
						alert("eror");
					</script>
				<?php
			}
		}

		public function add_course($c_name,$c_fee,$path,$c_query,$popular,$tout,$cc)
		{
			$work=$this->con->query("INSERT INTO `cources`(`cource_title`, `cource_fee`, `cource_query`, `cource_img`, `faculty`, `course_cat`) VALUES ('$c_name','$c_fee','$c_query','$path','$tout','$cc')");
			if($work)
			{
				if($popular==1)
				{
					
					$work=$this->con->query("INSERT INTO `popular_courses`(`cource_title`, `cource_fee`, `cource_query`, `cource_img`, `faculty`, `course_cat`) VALUES ('$c_name','$c_fee','$c_query','$path','$tout','$cc')");
					if($work)
					{
						return true;
					}
				}
				else
				{
					return true;
				}
			}
		}

		public function course()
		{
			$work=$this->con->query("SELECT `cource_title` FROM `cources`");
			if($work->num_rows>0)
			{
				while($row=$work->fetch_array(MYSQLI_ASSOC))
				{
					$this->course[]=$row;
				}
				return $this->course;
			}
		}

		public function course_delete($c_opt)
		{
			$work=$this->con->query("DELETE FROM `cources` WHERE cource_title='$c_opt'");
			if($work)
			{
				$work=$this->con->query("DELETE FROM `popular_courses` WHERE cource_title='$c_opt'");
				if($work)
				{
					return true;
				}
			}
		}

		public function course_update($uc_name,$uc_fee,$path,$uc_query,$uc_opt)
		{
			$work=$this->con->query("UPDATE `cources` SET `cource_title`='$uc_name',`cource_fee`='$uc_fee',`cource_query`='$uc_query',`cource_img`='$path' WHERE cource_title='$uc_opt'");
			if($work)
			{	
					
				$work=$this->con->query("UPDATE `popular_courses` SET `cource_title`='$uc_name',`cource_fee`='$uc_fee',`cource_query`='$uc_query',`cource_img`='$path' WHERE cource_title='$uc_opt'");
				if($work)
				{
					return true;
				}
			}
		}
		public function popular_verification($make)
		{
			$work=$this->con->query("SELECT * FROM `popular_courses` WHERE `cource_title`='$make'");
			if($work->num_rows>0)
			{
				return true;
			}
		}
		public function add_course_to_popular($make)
		{
			$work=$this->con->query("SELECT * FROM `cources` WHERE `cource_title`='$make'");
			if($work->num_rows>0)
			{
				while ($row=$work->fetch_array(MYSQLI_ASSOC)) 
				{
					$this->tmp[]=$row;
				}
				
				foreach ($this->tmp as $key) 
				{
					
				}
				$n=$key['cource_title'];
				$f=$key['cource_fee'];
				$qu=$key['cource_query'];
				$im=$key['cource_img'];
				

				$work=$this->con->query("INSERT INTO `popular_courses` (`cource_title`, `cource_fee`, `cource_query`, `cource_img`) VALUES ('$n','$f','$qu','$im')");
				if($work)
				{
					return true;
				}
			}
		}

		public function pop_course()
		{
			$work=$this->con->query("SELECT * FROM `popular_courses`");
			if($work->num_rows>0)
			{
				while($row=$work->fetch_array(MYSQLI_ASSOC))
				{
					$this->g[]=$row;
				}
				return $this->g;
			}
		}
		public function delete_popular_course($pop_dlt)
		{
			$work=$this->con->query("DELETE FROM `popular_courses` WHERE `cource_title`='$pop_dlt'");
			if($work)
			{
				return true;
			}
		}
		public function all_faculty_fetch()
		{
			$work=$this->con->query("SELECT * FROM `faculty`");
			if($work->num_rows>0)
			{
				while ($row=$work->fetch_array(MYSQLI_ASSOC)) 
				{
					$this->f[]=$row;
				}
				return $this->f;
			}
		}
		public function delete_faculty($fac_sel)
		{
			$work=$this->con->query("DELETE FROM `faculty` WHERE `name`='$fac_sel'");
			if($work)
			{
				return true;
			}
		}

		public function update_faculty_profile($ef_select,$ef_name,$ef_email,$ef_work,$ecode,$ef_num,$path,$ef_query)
		{
			$work=$this->con->query("UPDATE `faculty` SET `name`='$ef_name',`work`='$ef_work',`email`='$ef_email',`code`='$ecode',`num`='$ef_num',`img`='$path',`query`='$ef_query' WHERE `name`='$ef_select'");
			if($work)
			{
				return true;
			}
		}

		public function enquery_fetch()
		{
			$work=$this->con->query("SELECT * FROM `enquery` ORDER BY `id` desc");
			if($work->num_rows>0)
			{
				while($row=$work->fetch_array(MYSQLI_ASSOC))
				{
					$this->enq[]=$row;
				}
				return $this->enq;
			}
		}
		public function read_notification($id)
		{
			$r=1;
			$work=$this->con->query("UPDATE `enquery` SET `seen`='$r' WHERE `id`='$id'");
			if($work)
			{
				return true;
			}
		}
		public function user_avlibility_verification($email)
		{
			$work=$this->con->query("SELECT * FROM `register` WHERE `email`='$email'");
			if($work->num_rows>0)
			{
				return true;
			}
		}
		/*public function addmition($img,$name,$email,$adhr,$add,$phone)   
		{
			$student_id=strtolower($name[0]).rand(1000,7000);
			$pwd=rand(1000,9000);
			$time=date("h:i:sa");
			$date=date("d/m/y");
			$work=$this->con->query("INSERT INTO `register`(`name`, `address`, `image`, `email`, `phone`, `password`, `date`, `student_id`, `time`) VALUES ('$name','$add','$img','$email','$phone',$pwd,'$date','$student_id','$time')");
			if($work)
			{

									$sender_name = $name;
                           
                          			 $sender_email = "techpatna@techcloud.org.in";
                           
                           			$sender_subject = "ADDMITION TECH CLOUD(PATNA)";
                           
                           			$sender_message = "Dear Student".$name."Thank you for Start Learing with us Your STUDENT ID [".$student_id."] and PASSWORD [".$pwd."] Cheak Your Profile on this link:- wwww.techcloud.org.in/stlogin.php Thank You...";
                           
                           			$receiver_email = $email;
                           
                          			if(mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email))
				{
					
					 /// Auto reply to sender with this ///
					$email = $email;
					 $subject = "Welcome to my website";
					$msg = "Thanks for sending us message. ASAP we will reply your message";
					$from = "techpatna@techcloud.org.in";
					if(mail($email,$subject,$msg,$from))
					{
						return true;
					}
					else
					{
						echo "no";
					}
				}
				else
				{
					echo "not send";
				}
                           						
			}
			else
			{
				echo "failed";
			}
		}*/
		public function student_verification($sid)
		{
			$work=$this->con->query("SELECT `userid` FROM `addmition` WHERE `userid`='$sid'");
			if($work->num_rows>0)
			{
				return true;
			}
		}

		public function student_fetch_by_uid($sid)
		{
			$work=$this->con->query("SELECT * FROM `addmition` WHERE `userid`='$sid'");
			if($work->num_rows>0)
			{
				while($row=$work->fetch_array(MYSQLI_ASSOC))
				{
					$this->stu[]=$row;
				}
				return $this->stu;
			}		
		}
		public function student_course($c_add,$user,$amo)
		{
			/*$work=$this->con->query("INSERT INTO `student_course`(`student_id`, `course` ) VALUES ('$user','$c_add')");
			if($work)
			{*/
				$c_img=$c_add.".jpg";
				$work=$this->con->query("INSERT INTO `paid_fee`(`userid`, `course`, `course_img`, `installement1`, `installement2`, `installement3`, `otp`, `total`) VALUES ('$user','$c_add','$c_img','0','0','0','0','$amo')");
				if($work)
				{
					return true;
				}
			/*}
			else
			{
				?>
				<script type="text/javascript">
					alert('error bhaiya');
				</script>
				<?php
			}*/
		}
		public function amount_fetch($c_add)
		{
			$work=$this->con->query("SELECT `cource_fee` FROM `cources` WHERE `cource_title`='$c_add'");
			if($work->num_rows>0)
			{
				while ($row=$work->fetch_array(MYSQLI_ASSOC)) 
				{
					$this->am[]=$row;
				}
				return $this->am;
			}
		}
		public function student_course_fetch($sid)
		{
			$work=$this->con->query("SELECT * FROM `paid_fee` WHERE `userid`='$sid'");
			if($work->num_rows>0)
			{
				while ($row=$work->fetch_array(MYSQLI_ASSOC)) 
				{
					$this->scf[]=$row;
				}
				return $this->scf;
			}
		}
		public function delete_student_course($user,$dlt)
		{
			$work=$this->con->query("DELETE FROM `paid_fee` WHERE `course`='$dlt'");
			if($work)
			{
				return true;
			}
			else
			{
				?>
				<script type="text/javascript">
					alert('error');
				</script>
				<?php 
			}
		}

		
		public function installement_fetch($sid,$c)
		{
			$work=$this->con->query("SELECT `installement1`, `installement2`, `installement3`, `otp`, `total` FROM `paid_fee` WHERE `userid`='$sid' AND `course`='$c'");
			if($work->num_rows>0)
			{
				while($row=$work->fetch_array(MYSQLI_ASSOC))
				{
					$this->inst[]=$row;
				}
				return $this->insta;
			}
		}
		public function fee_update($instl,$amount,$user,$cour)
		{
			if($instl=='1')
			{
				$work=$this->con->query("UPDATE `paid_fee` SET `installement1`='$amount' WHERE `userid`='$user' AND `course`='$cour'");
				if($work)
				{
					return true;
				}

			}
			elseif($instl=='4')
			{
				$work=$this->con->query("UPDATE `paid_fee` SET `otp`='$amount' WHERE `userid`='$user' AND course='$cour'");
				if($work)
				{
					return true;
				}

			}
			elseif($instl=='2')
			{
				$work=$this->con->query("UPDATE `paid_fee` SET `installement2`='$amount' WHERE `userid`='$user' AND `course`='$cour'");
				if($work)
				{
					return true;
				}

			}
			elseif ($instl=='3') 
			{
				$work=$this->con->query("UPDATE `paid_fee` SET `installement3`='$amount' WHERE `userid`='$user' AND `course`='$cour'");
				if($work)
				{
					return true;
				}
			}
			else
			{
				?>
				<script type="text/javascript">
					alert('error');
				</script>
				<?php 
			}
		}
		public function add_steam($p){
			extract($p);
			$work=$this->con->query("INSERT INTO `steam`(`steam`) VALUES ('$steam')");
			if($work){
				return true;
			}
		}
		public function fetch_steam(){
			$work=$this->con->query("SELECT * FROM `steam`");
			if($work)
			{
				while($row=$work->fetch_array(MYSQLI_ASSOC))
				{
					$this->inst[]=$row;
				}
				return $this->inst;
			}
		}
		public function student_fetch(){
			$work=$this->con->query("SELECT * FROM `addmition` WHERE `status`='0'");
			if($work->num_rows>0){
				while($row=$work->fetch_array(MYSQLI_ASSOC)){
					$this->inst[]=$row;
				}
				return $this->inst;
			}
		}
		public function confirm_addmition_usr($p){
			$work=$this->con->query("UPDATE `addmition` SET `status`='1' WHERE `userid`='$p'");
			if($work){
				return true;
			}
		}
		public function add_online_course($p,$c,$s,$img_path,$vdo_path,$asgn_path){
			ini_set('post_max_size', '2024M');
			ini_set('upload_max_size', '2048M');
			extract($p);
			$upload_time=date("Y/m/d")." ".date("h:i:sa");
			echo $upload_time.$img_path.$vdo_path.$teacher.$c.$s.$title.$desc.$durection.$upload_time;
			$work=$this->con->query("INSERT INTO `live_class`(`video_img`, `video_link`, `Teacher_name`, `course`, `steam`, `title`, `discription`, `durection`, `upload_time`, `assignment`) VALUES ('$img_path','$vdo_path','$teacher','$c','$s','$title','$desc','$durection','$upload_time','$asgn_path')");
			if($work)
			{
				return true;
			}
		}
		public function fetch_video(){
			$work=$this->con->query("SELECT `title` FROM `live_class`");
			if($work->num_rows>0){
				while($row=$work->fetch_array(MYSQLI_ASSOC)){
					$this->data[]=$row;
				}
				return $this->data;
			}
		}
		public function dlt_vdo_frm_db($title){
			$work=$this->con->query("DELETE FROM `live_class` WHERE `title`='$title'");
			if($work){
				return true;
			}
		}
		public function search_area($key, $cat){
			if($cat==1){
				$work = $this->con->query("SELECT * FROM `addmition` WHERE `mobile`='$key'");
				if($work->num_rows>0){
					while($row=$work->fetch_array(MYSQLI_ASSOC)){
						$this->data[]=$row;
					}
					return $this->data;
				}
			}
			elseif($cat==2){
				$work = $this->con->query("SELECT * FROM `addmition` WHERE `email`='$key'");
				if($work->num_rows>0){
					while($row=$work->fetch_array(MYSQLI_ASSOC)){
						$this->data[]=$row;
					}
					return $this->data;
				}
			}
			elseif ($cat==3) {
				$work = $this->con->query("SELECT * FROM `addmition` WHERE `year`='$key'");
				if($work->num_rows>0){
					while($row=$work->fetch_array(MYSQLI_ASSOC)){
						$this->data[]=$row;
					}
					return $this->data;
				}
			}
		}
		public function fetch_all_student(){
			$work = $this->con->query("SELECT * FROM `addmition`");
				if($work->num_rows>0){
					while($row=$work->fetch_array(MYSQLI_ASSOC)){
						$this->data[]=$row;
					}
					return $this->data;
				}
		}
		public function conf_student_fetch(){
			$work=$this->con->query("SELECT * FROM `addmition` WHERE `status`='1'");
			if($work->num_rows>0){
				while($row=$work->fetch_array(MYSQLI_ASSOC)){
					$this->data[]=$row;
				}
				return $this->data;
			}
		}
		public function dlt_usr($id){
			$work = $this->con->query("DELETE FROM `addmition` WHERE `userid`='$id'");
			if($work){
				return true;
			}
		}
		public function add_assignment($path, $n, $desc){
			$time=date("h:i:sa");
			$date=date("d/m/y");
			$date=$date." | ".$time;
			$work=$this->con->query("INSERT INTO `assignment`(`name`, `path`, `disc`, `uploadon`, `course`) VALUES ('$n','$path','$desc','$date','$course')");
			if($work){
				return true;
			}
		}
		public function assignmet_fetch(){
			$work=$this->con->query("SELECT * FROM `assignment`");
			if($work->num_rows>0){
				while($row=$work->fetch_array(MYSQLI_ASSOC)){
					$this->asign[]=$row;
				}
				return $this->asign;
			}
		}
		public function dlt_asign($title){
			$work=$this->con->query("DELETE FROM `assignment` WHERE `name`='$title'");
			if($work){
				return true;
			}
		}
		public function allow_video_access($id){
			$work=$this->con->query("UPDATE `addmition` SET `access`='1' WHERE `userid`='$id'");
			if($work){
				return true;
			}
		}
		public function disable_live_class($id){
			$work=$this->con->query("UPDATE `addmition` SET `access`='0' WHERE `userid`='$id'");
			if($work){
				return true;
			}
		}

	}

?>