<?php 
	include 'class/user.php';
	$prodata=new user;
	$course=new user;
	$certificates=new user;
	if(isset($_SESSION['student']))
	{	$sid=$_SESSION['student'];
				
		if($prodata->fetch_student_profile($sid))
		{

		}
		foreach ($prodata->pro_data as $profile) 
		{
			# code...
		}
		
	}
	else
	{
		$prodata->url('stlogin.php?log=failed');
	}
	


?>

<!DOCTYPE html>
<html>
<head>
	<title>TARGET CLASSES |  <?php echo $profile['name'];  ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!---------------Google fonts start------------------>
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
	<!---------------Google font end--------------------->
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">

	<style type="text/css">
.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}

#list ul li
{
  float: left;
  padding: 5px;
  list-style: none;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
#list ul li a {
  color: #fff;
  
  text-decoration: none;
  display: inline-block;
  position: relative;
  font-family: 'Dosis', sans-serif;
}
/*effect-underline*/
a.effect-underline:after {
  content: '';
  position: absolute;
  left: 0;
  display: inline-block;
  height: 1em;
  width: 100%;
  border-bottom: 1px solid;
  margin-top: 10px;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  transform: scale(0,1);
}

a.effect-underline:hover:after {
  opacity: 1;
  -webkit-transform: scale(1);
  transform: scale(1);
}

/*effect-box*/
a.effect-box:after,
a.effect-box:before {
  content: '';
  position: absolute;
  left: 0;
  display: inline-block;
  height: 1em;
  width: 100%;
  margin-top: 10px;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  
}

a.effect-box:before {
  border-left: 1px solid;
  border-right: 1px solid;
  -webkit-transform: scale(1,0);
  transform: scale(1,0);
}

a.effect-box:after {
  border-bottom: 1px solid;
  border-top: 1px solid;
  -webkit-transform: scale(0,1);
  transform: scale(0,1);
}

a.effect-box:hover:after,
a.effect-box:hover:before {
  opacity: 1;
  -webkit-transform: scale(1);
  transform: scale(1);
}

/* effect-shine */
a.effect-shine:hover {
  -webkit-mask-image: linear-gradient(-75deg, rgba(0,0,0,.6) 30%, #000 50%, rgba(0,0,0,.6) 70%);
  -webkit-mask-size: 200%;
  animation: shine 2s infinite;
}

@-webkit-keyframes shine {
  from {
    -webkit-mask-position: 150%;
  }
  
  to {
    -webkit-mask-position: -50%;
  }
}
}
a
{
	color: white;
}

	</style>
</head>
<body style="background-color: black; padding: 0px; margin: 0px;">
<!------------Header Start------------------->
<!-----------For Larg screen start--------------->
<div class="hidden-md-down">
	<!-- <div class="container-fluid"> -->
		<div class="header sticky-top" id="myHeader">
			<div class="row">
				<div class="col-lg-3">
					<div class="text-uppercase">
					  	<div class="badge badge-success text-wrap">
					  		<h5><i class="fas fa-user-tie"></i>&nbsp;&nbsp;Welcome</h5>
					  	</div>
					  	 <?php echo $profile['name'];  ?>
					</div>
				</div>
				<div class="col-lg-9 d-flex justify-content-end" id="list">
					<ul>
						<li><i class="fa fa-user"></i>&nbsp;&nbsp;<a href="#profile" class="effect-underline"> PROFILE</a></li>
						<li><i class="fas fa-tachometer-alt">&nbsp;&nbsp;</i><a href="#dashboard" class="effect-underline">DASHBOARD</a></li>
						<li><i class="fas fa-cog">&nbsp;&nbsp;</i><a href="#online" class="effect-underline">ONLINE CLASS</a></li>
						<li><i class="fas fa-cog">&nbsp;&nbsp;</i><a href="#setting" class="effect-underline">SETTING</a></li>
						<li><i class="fas fa-sign-out-alt">&nbsp;&nbsp;</i><a href="logout.php" class="effect-underline">LOGOUT</a></li>
					</ul>

				</div>
			</div>
		</div>	

		<script>
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() {
		  if (window.pageYOffset > sticky) {
		    header.classList.add("sticky");
		  } else {
		    header.classList.remove("sticky");
		  }
		}
		</script>
	<!-- </div> -->
</div>
<!--------For Larg screen end--------------------->

<!------For Medium And Small Screen start------------>
<div class="hidden-lg-up">
	<div class="pos-f-t" id="myHeader">
	  <div class="collapse" id="navbarToggleExternalContent">
	    <div class="bg-dark p-4">
	      <ul style="color: white;" id="list">
			<li><i class="fa fa-user"></i>&nbsp;&nbsp;<a href="#profile" class="effect-underline"> PROFILE</a></li>
			<li><i class="fas fa-tachometer-alt">&nbsp;&nbsp;</i><a href="#dashboard" class="effect-underline">DASHBOARD</a></li>
			<li><i class="fas fa-cog">&nbsp;&nbsp;</i><a href="#online" class="effect-underline">ONLINE CLASS</a></li>
			<li><i class="fas fa-cog">&nbsp;&nbsp;</i><a href="#setting" class="effect-underline">SETTINGS</a></li>
			<li><i class="fas fa-sign-out-alt">&nbsp;&nbsp;</i><a href="logout.php" class="effect-underline">LOGOUT</a></li>
		  </ul>
	    </div>
	  </div>
	  <nav class="navbar navbar-dark bg-dark">
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	  </nav>
	</div>
	<script>
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() {
		  if (window.pageYOffset > sticky) {
		    header.classList.add("sticky");
		  } else {
		    header.classList.remove("sticky");
		  }
		}
		</script>
</div>
<!-------For Medium and Small screen end-------------->
<!------------Header end--------------------->
<section id="profile" class="section-padding">
<!----------------For Larg screen start------------------->
	<div class="hidden-md-down">
		<div class="container mt-2">
			<div style="background-color: #660066;" class="text-center">
				<h3 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">STUDNT PROFILE</h3>
			</div>
			<div class="row">

				<div class="col-lg-12">
					<div class="card mb-3" style="max-width: 100%; max-height: 400px; height: 400px;">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src="<?php echo $profile['img']; ?>" class="card-img" alt="..." style="max-height: 400px; max-width: 400px;">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card-title"><?php echo $profile['name']; ?></h5>
					        <p class="card-text">TARGET CLASS (PATNA)</p>
					        <h5 class="card-title"><b>Email:-</b> <b><?php echo $profile['email']; ?></b> </h5>
							<h5 class="card-title"><b>Phone:-</b> <b><?php echo $profile['mobile']; ?></b></h5>
							<h5 class="card-title"><b>Date of Birth:-</b> <b><?php echo $profile['dob']; ?></b></h5>
							<h5 class="card-title"><b>Father:-</b> <b><?php echo $profile['father']; ?></b></h5>
							<h5 class="card-title"><b>Stream:-</b> <b><?php echo $profile['steam']; ?></b></h5>
							<h5 class="card-title"><b>Course:-</b> <b><?php echo $profile['class']; ?></b></h5>
					        <h5 class="card-title"><b>Student ID:-</b> <b><?php echo $profile['userid']; ?></b></h5>
					        <h5 class="card-title"><b>Address:-</b> <b><?php echo $profile['address']; ?></b></h5>
					        <h5 class="card-title"><b>Addmition Status:-</b> <b><?php  if($profile['status']){
								?>
								<b style="color: gree;">Confirm</b>
								<?php
							} 
							else{
								?>
									<b style="color: red;">Pending</b>
								<?php
							}
							?></b></h5>
					        <h5 class="card-title"><b>Date of Addmition Application:-</b> <b><?php echo $profile['doa']; ?></b></h5>
				
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-------------------For Larg screen end-------------------->

<!-------------------For small screen start----------------->
<div class="hidden-lg-up">
	<div style="background-color: #660066;" class="text-center">
		<h3 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">STUDNT PROFILE</h3>
	</div>

	<div class="card mt-2" style="width: 100%;">
	  <img class="card-img-top" src="<?php echo $profile['img']; ?>" alt="Card image cap" height="400px;">
	  <div class="card-body text-center">
	  <h5 class="card-title"><?php echo $profile['name']; ?></h5>
					        <p class="card-text">TARGET CLASS (PATNA)</p>
					        <h5 class="card-title"><b>Email:-</b> <b><?php echo $profile['email']; ?></b> </h5>
							<h5 class="card-title"><b>Phone:-</b> <b><?php echo $profile['mobile']; ?></b></h5>
							<h5 class="card-title"><b>Date of Birth:-</b> <b><?php echo $profile['dob']; ?></b></h5>
							<h5 class="card-title"><b>Father:-</b> <b><?php echo $profile['father']; ?></b></h5>
							<h5 class="card-title"><b>Stream:-</b> <b><?php echo $profile['steam']; ?></b></h5>
							<h5 class="card-title"><b>Course:-</b> <b><?php echo $profile['class']; ?></b></h5>
					        <h5 class="card-title"><b>Student ID:-</b> <b><?php echo $profile['userid']; ?></b></h5>
					        <h5 class="card-title"><b>Address:-</b> <b><?php echo $profile['address']; ?></b></h5>
					        <h5 class="card-title"><b>Addmition Status:-</b> <b><?php  if($profile['status']){
								?>
								<b style="color: gree;">Confirm</b>
								<?php
							} 
							else{
								?>
									<b style="color: red;">Pending</b>
								<?php
							}
							?></b></h5>
					        <h5 class="card-title"><b>Date of Addmition Application:-</b> <b><?php echo $profile['doa']; ?></b></h5>
	  </div>
	</div>
</div>
<!-------------------For small screen end------------------->
</section>
<section id="dashboard">
<!------------------Larg Screen start---------------------------------------------->

	<div class="container hidden-md-down">
		<div style="background-color: #660066;" class="text-center">
			<h3 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">DASHBOARD</h3>
		</div>
		<div class="card bg-light mb-3" style="max-width: 100%;">
		  <div class="card-header text-center">COURSES</div>
		  <div class="card-body">
		    <!------------------Course Start--------------------->
		    <div class="row">
		    	<?php 
		    		$scf=$course->fetch_course_through_student_id($sid);
		    		if($scf)
					{
						foreach ($course->pro_course as $cours) 
						{
							?>
							<div class="col-lg-4">
							    <div class="card" style="width: 18rem;">
								  <img class="card-img-top" src="img/course/<?php echo $cours['course_img']; ?>" alt="Card image cap">
								  <div class="card-body">
								    <h5 class="card-title"><?php echo $cours['course']; ?></h5>
								    <p class="card-text">Fee Paid for This course by student</p>
								    <h5 class="card-title">1st Installemnt:- <?php echo $cours['installement1']; ?> Rs.</h5>
								    <h5 class="card-title">2st Installemnt:- <?php echo $cours['installement2']; ?> Rs.</h5>
								    <h5 class="card-title">3st Installemnt:- <?php echo $cours['installement3']; ?> Rs.</h5>
								    <h5 class="card-title">ONE TIME PAYMENT:- <?php echo $cours['otp']; ?> Rs.</h5>
								    <h5 class="card-title">Total Amount:- <?php echo $cours['total']; ?> Rs.</h5>
								    <h5 class="card-title">Dues:- <?php echo $cours['total']-($cours['installement1']+$cours['installement2']+$cours['installement3']+$cours['otp']); ?> Rs.</h5>

								    <div class="text-center">
								    	<a href="#" class="btn btn-primary">Download PDF</a>
								    </div>
								  </div>
								</div>
							</div>
							<?php
						}
					}
					else
					{
						echo "Currently No Courses Avaliable";
					}
		    	?>
		    <!------------------Course end----------------------->
		  </div>
		</div>
	</div>
</div>
<!-----------------------For Larg end---------------------------------------------->


<!--------------For Small screen start--------------------------------------------->
<div class=" mt-2 hidden-lg-up" style="background-color: white;">
	<div style="background-color: #660066;" class="text-center">
		<h3 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">DASHBOARD</h3>
	</div>
	<div class="container">
		
		<div class="d-flex justify-content-center">
			<!----------------Course start------------->
			<?php 
				if($scf)
					{
						foreach ($course->pro_course as $cours) 
						{
							?>
							<div class="col-lg-4">
							    <div class="card" style="width: 18rem;">
								  <img class="card-img-top" src="img/course/<?php echo $cours['course_img']; ?>" alt="Card image cap">
								  <div class="card-body">
								    <h5 class="card-title"><?php echo $cours['course']; ?></h5>
								    <p class="card-text">Fee Paid for This course by student</p>
								    <h5 class="card-title">1st Installemnt:- <?php echo $cours['installement1']; ?> Rs.</h5>
								    <h5 class="card-title">2st Installemnt:- <?php echo $cours['installement2']; ?> Rs.</h5>
								    <h5 class="card-title">3st Installemnt:- <?php echo $cours['installement3']; ?> Rs.</h5>
								    <h5 class="card-title">ONE TIME PAYMENT:- <?php echo $cours['otp']; ?> Rs.</h5>
								    <h5 class="card-title">Total Amount:- <?php echo $cours['total']; ?> Rs.</h5>
								    <h5 class="card-title">Dues:- <?php echo $cours['total']-($cours['installement1']+$cours['installement2']+$cours['installement3']+$cours['otp']); ?> Rs.</h5>

								    <div class="text-center">
								    	<a href="#" class="btn btn-primary">Download PDF</a>
								    </div>
								  </div>
								</div>
							</div>
							<?php
						}
					}
					else
					{
						echo "Currently No Courses Avaliable";
					}



			?>
			<!-----------------Course end--------------->
		</div>
	</div>
</div>
<!-------------For Small Screen end------------------------------------------------>
</section>
<section id="online">
<!------------------Larg Screen start---------------------------------------------->

	<div class="container hidden-md-down">
		<div style="background-color: #660066;" class="text-center">
			<h3 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">ONLINE CLASS</h3>
		</div>
		<div class="card bg-light mb-3" style="max-width: 100%;">
		  <div class="card-header text-center">Join Online Class</div>
		  <div class="card-body text-center">
			<!------------------Course Start--------------------->
			<?php 
				if($profile['status'] && $profile['access']){
					
					?>
						<form action="list.php" method="POST">
							<select name="title">
								<?php 
									if($course->fetch_course_through_student_id($sid)){
										$r=1;
										
										foreach($course->pro_course as $key){
											?>
											<option value="<?php echo $key['course']; ?>"><?php echo $key['course']; ?></option>
											<?php
										}
									}
									else
									{
										?>
										<?php
										
									}
								?>
								<option>SELECT COURSE FOR CLASS</option>
								
							</select>
							<input type="hidden" name="stream" value="<?php echo $profile['steam'];  ?>">
							<?Php 
								if($r){
									?>
									<input type="submit" class="btn btn-success" name="online" value="JOIN ONLINE CLASS">
									<?php
								}
							?>
						</form>
							<?php
						?>
						
					<?php
				}
				elseif($profile['status']==2){
						?>
							<b style="color:red;">Dear Student Your have pending/Dues of any Course</b>
						<?php
				}
				else{
					?>
					<div class="text-center">
					<b style="color:red;">Dear Student Your Addmition Status is pending/Dues of any Course</b><br>
						<b style="color:green;">You can access this features when your addmition status/Dues pending cofirmed.</b>
					</div>
					<?php
				}
			?>
		    	
		    	
		    <!------------------Course end----------------------->
		  </div>
		</div>
	</div>
</div>
<!-----------------------For Larg end---------------------------------------------->


<!--------------For Small screen start--------------------------------------------->
<div class=" mt-2 hidden-lg-up" style="background-color: white;">
	<div style="background-color: #660066;" class="text-center">
		<h3 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">ONLINE CLASS</h3>
	</div>
	<div class="card bg-light mb-3" style="max-width: 100%;">
		  <div class="card-header text-center">Join Online Class</div>
		  <div class="card-body text-center">
		    <!------------------Course Start--------------------->
			<?php 
				if($profile['status'] && $profile['access']){
					
					?>
						<form action="list.php" method="POST">
							<select name="title">
								<?php 
									if($course->fetch_course_through_student_id($sid)){
										$r=1;
										
										foreach($course->pro_course as $key){
											?>
											<option value="<?php echo $key['course']; ?>"><?php echo $key['course']; ?></option>
											<?php
										}
									}
									else
									{
										?>
										<?php
										
									}
								?>
								<option>SELECT COURSE FOR CLASS</option>
								
							</select>
							<input type="hidden" name="stream" value="<?php echo $profile['steam'];  ?>">
							<?Php 
								if($r){
									?>
									<input type="submit" class="btn btn-success" name="online" value="JOIN ONLINE CLASS">
									<?php
								}
							?>
						</form>
							<?php
						?>
						
					<?php
				}
				elseif($profile['status']==2){
						?>
							<b style="color:red;">Dear Student Your have pending/Dues of any Course</b>
						<?php
				}
				else{
					?>
					<div class="text-center">
					<b style="color:red;">Dear Student Your Addmition Status is pending/Dues of any Course</b><br>
						<b style="color:green;">You can access this features when your addmition status/Dues pending cofirmed.</b>
					</div>
					<?php
				}
			?>
		    <!------------------Course end----------------------->
		  </div>
	</div>
</div>
<!-------------For Small Screen end------------------------------------------------>
</section>



<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1ad2334d42.js"></script>
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>
</html>