<?php 
	include '../class/user.php'; 
	if(isset($_GET['c_ad']) && $_GET['c_ad']=='success')
	{
		?>
		<script type="text/javascript">
			alert("Course Added Success Fully to student <?php echo $_SESSION['sid']; ?>...");
		</script>
		<?php
	}
	if(isset($_GET['dlt']) && $_GET['dlt']=='success')
	{
		?>
		<script type="text/javascript">
			alert('Course Deleted From Student <?php echo $_SESSION['sid']; ?>...');
		</script>
		<?php
	}
	if(isset($_GET['course']) && $_GET['course']=='paid')
	{
		?>
		<script type="text/javascript">
			alert("Fee Updated Successfully...");
		</script>
		<?php
	}
?>
<?php 
	$stud=new admin;
	$course=new user;
	if (isset($_SESSION['sid'])) 
	{	
		/*--------------------------Fetch Area start--------------------------*/
		$sid=$_SESSION['sid'];
				//------------Student Profile Fetch start----------------------//
				$stud->student_fetch_by_uid($sid);
				foreach ($stud->stu as $pro) 
				{
					
				}
				//-----------Student Profile fetch end-----------------------//

				//-----------Course fetch start----------------------//
				$course->courses_fetch();
				//-----------Course fetch end-----------------------.//

				//-----------Student course fetch start-------------------//
				$stud->student_course_fetch($sid);
				//-----------student course fetch end---------------------//
		/*--------------------------Fetch Area End----------------------------*/
		?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tech cloud | controle panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <!---------------------Header Start--------------------------->   
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
          <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
              <li class="nav-item"><a href="#home-section" class="nav-link"><span>Profile</span></a></li>
              <li class="nav-item"><a href="#about-section" class="nav-link"><span>Edit Profile Details</span></a></li>
              <li class="nav-item"><a href="#updtcourse" class="nav-link"><span>Update Course</span></a></li>
              <li class="nav-item"><a href="#updtfee" class="nav-link"><span>Update Fee</span></a></li>
              <li class="nav-item"><a href="stdlogout.php" class="nav-link"><span>Logout</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-----------------------Header end------------------------------->

    <!------------------------Session Variables for mail sending-------------------->
    	<?php $_SESSION['sname']=$pro['name']; $_SESSION['sphone']=$pro['mobile']; $_SESSION['semail']=$pro['email'] ?>
    <!------------------------Session Variable for Mail sending end------------------->

    <!-----------------------Home Area Start---------------------------->
      <section id="home-section" class="hero">
          <div class="home-slider  owl-carousel">
          <div class="slider-item ">
            <div class="overlay"></div>
            <div class="container">
              <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                <div class="one-third js-fullheight order-md-last img" style="background-image:url('../img/student/<?php echo $pro['image']; ?>');">
                    <div class="overlay"></div>
                </div>
                  <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="text">
                        <span class="subheading">Welcome to user profile controle area</span>
                        <ul style="list-style: none;">
                            <li><b>Name</b><span class="ml-2 mt-2"><b><?php echo $pro['name']; ?></b></span></li>
                            <li><b>Email</b><span class="ml-2 mt-2"><b><?php echo $pro['email']; ?></b></span></li>
                            <li><b>Phone</b><span class="ml-2 mt-2"><b><?php echo $pro['mobile']; ?></b></span></li>
                            <li><b>Student ID</b><span class="ml-2 mt-2"><b><?php echo $pro['userid']; ?></b></span></li> 
                            <li><b>Steam</b><span class="ml-2 mt-2"><b><?php echo $pro['steam']; ?></b></span>               
                        </ul>
                    </div>
                  </div>
                </div>
            </div>
          </div>
    </section>
    <!-----------------------------Home Area End----------------------------------->
    <!--------------------------course Area start---------------------------->
    <section class="ftco-section ftco-project" id="updtcourse">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5">
              <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Update Course</h1>
                <h2 class="mb-4">Update Course</h2>
                <p>Here You can Add And Remove course of student</p>
                <div class="form-controle  bd-highlight mb-3">
                    <!-- <?php #$date=date("d/m/y"); ?>
                    <div class="p-2 bd-highlight"><h4>Today <?php# echo $date; ?> Add Student</h4></div> -->
                    
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="resume-wrap ftco-animate">

                            <!-----------Add Course Area STart-------------->
                            <span class="date">Courses</span>
                            <center>
                                <h2>Add Course</h2>
                                <hr style="background-color: white;" />
                            </center>
                            Select Course Name
                            <form action="php.php" method="post" enctype="multipart/form-data">
	                            <select class="btn btn-light" name="c_add">
	                            	<option value="N/A">Select Course</option>
	                            	<?php 
		                            	foreach ($course->cources_var as $key) 
		                            	{
		                            		?>
		                            		<option  value="<?php echo $key['cource_title']; ?>">
		                            			<?php echo $key['cource_title']; ?>&nbsp;&nbsp;|&nbsp;&nbsp; Rs.<?php echo $key['cource_fee']; ?>
		                            		</option>
		                            		<?php
		                            	}
		                            ?>
	                            </select>
                            	<center><button class="btn btn-success mt-4" type="submit" value="submit" name="scadd">ADD COURSE</button></center>
                            	
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="resume-wrap ftco-animate">

                            <!-----------Add Course Area STart-------------->
                            <span class="date">Courses</span>
                            <center>
                                <h2>Delete Course</h2>
                                <hr style="background-color: white;" />
                            </center>
                            Select Course Name
                            <form action="php.php" method="post" enctype="multipart/form-data">
	                            <select class="btn btn-light" name="dlt">
	                            	<option value="N/A">Select Course</option>
	                                <?php 
	                                	foreach ($stud->scf as $key) 
	                                	{
	                                		?>
	                                		<option value="<?php echo $key['course']; ?>"><?php echo $key['course']; ?></option>
	                                		<?php 
	                                	}
	                                ?>
	                            </select>
	                            
	                            <center><input type="submit" name="dsc" class="btn btn-success mt-4" value="DELETE COURSE"></center>
                        	</form>
                        </div>
                    </div>
                </div>
              </div>
            </div>

            
        </div>
    </section>
    <!--------------------------User Profile Area end------------------------------>


    <!--------------------------course Area start---------------------------->
    <section class="ftco-section ftco-project" id="updtfee">
        <div class="container">
            <div class="row justify-content-center py-5 mt-5">
              <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Update Fee</h1>
                <h2 class="mb-4">Update Fee</h2>
                <p>Here You Update Fee paid by student of student</p>
                <div class="form-controle  bd-highlight mb-3">
                    <?php $date=date("d/m/y"); ?>
                    <div class="p-2 bd-highlight"><h4>Today <?php echo $date; ?> Add Student</h4></div>
                    
                </div>
                <?php 
                	if(isset($_GET['course']))
                	{	$c=$_GET['course'];
                		if($stud->installement_fetch($sid,$c))
                		{
                			
							foreach ($stud->insta as $key) 
							{
								
							}
                		}
                		
                		?>
                		<hr style="background-color: white;">
                		<div class="row">
                			|<div class="col-lg-2">
                				<ul>
                					<li><b>1st Installement</b></li>
                					<li><b><?php echo $key['installement1']; ?></b></li>
                				</ul>
                			</div>
                			|<div class="col-lg-2">
                				<ul>
                					<li><b>2st Installement</b></li>
                					<li><b><?php echo $key['installement2']; ?></b></li>
                				</ul>
                			</div>
                			|<div class="col-lg-2">
                				<ul>
                					<li><b>3st Installement</b></li>
                					<li><b><?php echo $key['installement3']; ?></b></li>
                				</ul>
                			</div>
                			|<div class="col-lg-2">
                				<ul>
                					<li><b>One Time Payment</b></li>
                					<li><b><?php echo $key['otp']; ?></b></li>
                				</ul>
                			</div>
                			|<div class="col-lg-2">
                				<ul>
                					<li><b>Total Amount</b></li>
                					<li><b><?php echo $key['total']; ?></b></li>
                				</ul>
                			</div>
                			<div class="col-lg-2">
                				<ul>
                					<li><b>Total Duese</b></li>
                					<li>
                						<b>
                							<?php echo $key['total']-($key['installement1']+$key['installement2']+$key['installement3']+$key['otp']); ?>
                								
                						</b>
                					</li>
                				</ul>
                			</div>

                		</div>
                		<hr style="background-color:white;">
                		<div class="mt-2 text-center">
                			Paid Fee
                			<form action="php.php" method="post" enctype="multipart/form-data">
	                			<ul>
	                				<li>
	                					<b>SELECT INSTALLEMENT</b>
	                					<select name="instl" class="btn btn-light">
	                						<?php
	                						if($key['otp']>0)
	                						{
	                							?>
	                							<option>
		                							Payment Completed of this student
		                						</option>
	                							<?php
	                						} 
	                						elseif($key['installement1']==0)
	                						{?>
		                						<option value="1">
		                							1st Installement
		                						</option>
		                						<option value="4">
		                							ONE TIME PAYMENT
		                						</option>
		                					 <?php
	                						}
	                						elseif($key['installement2']==0)
	                						{
	                							?>
	                							<option value="2">
		                							2nd Installement
		                						</option>
	                							<?php
	                						}
	                						elseif($key['installement3']==0)
	                						{
	                							?>
	                							<option value="3">
		                							3rd Installement
		                						</option>
	                							<?php
	                						}
	                						else
	                						{
	                							?>
	                							<option>Payment Completed For This Course</option>
	                							<?php 
	                						}

	                						?>
	                						
	                					</select>
	                				</li>
	                				<li><b>Enter Amount</b><input type="number" name="amount" placeholder="Enter Amount" class="btn btn-light mt-2 ml-2" require="" /></li>
	                				<li class="mt-3"><b>Course</b>

	                					<select name="cour" class="btn btn-light">
	                						<option value="<?php echo $c; ?>"><?php echo $c; ?></option>
	                					</select>
	                				</li>

	                			</ul>
	                			<?php if(($key['installement1']==0 || $key['installement2']==0 || $key['installement3']==0 || $key['otp']!=0) && ($key['otp']==0 || $key['installement1']!=0 || $key['installement2']!=0 || $key['installement3']!=0 ))
	                				{
	                					?>
	                					<button type="submit" name="uam" class="btn btn-success" value="UPDATE AMOUNT">UPDATE AMOUNT</button>
	                					<?php
	                				}
	                				else
	                				{
	                					?>
	                					<a href="student.php" class="btn btn-success">Back</a>
	                					<a href="stdlogout.php" class="btn btn-success">Logout</a>

	                					<?php
	                				}
	                			?>
	                			
	                		</form>
                		</div>
                		<?php 
                	}
                	else
                	{
                		?>
                			<div class="row">
			                    <div class="col-lg-12">
			                        <div class="resume-wrap ftco-animate">

			                            <!-----------Add Course Area STart-------------->
			                            <span class="date">Fee</span>
			                            <center>
			                                <h2>Update Fee</h2>
			                                <hr style="background-color: white;" />
			                            </center>
			                            Select Course Name
			                            <form action="php.php" method="post" enctype="multipart/form-data">
				                            <select class="btn btn-light" name="ssc">
				                            	<option value="N/A">Select Course</option>
				                                <?php 
				                                	foreach ($stud->scf as $key) 
				                                	{
				                                		?>
				                                		<option value="<?php echo $key['course']; ?>"><?php echo $key['course']; ?></option>
				                                		<?php 
				                                	}
				                                ?>
				                            </select>
				                            
				                            <center><input type="submit" name="slsc" class="btn btn-success mt-4" value="Next"></center>
			                        	</form>
			                        </div>
			                    </div>
			                </div>
                		<?php
                	}
                ?>
              </div>
            </div>

            
        </div>
    </section>
    <!--------------------------User Profile Area end------------------------------>

    <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>
		<?php
	}
	else
	{
		$stud->link('index.php');
	}
?>
