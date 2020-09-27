<?php 
	include '../class/user.php';
	$index=new admin;
	$index_=new user;
	if(isset($_POST['read']))
	{
		$id=$_POST['read'];
		$read= new admin;
		if($read->read_notification($id))
		{

		}
		else
		{
			?>
			<script type="text/javascript">
				alert('error occur');
			</script>
			<?php
		}
	}
	if($_SESSION['admin'])
	{?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Target Classes | controle panel</title>
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
	  <?php
	  		if(isset($_GET['f']) && $_GET['f']=='success')
	  		{
	  			?>
	  			<script type="text/javascript">
	  				alert('Faculty Added Successfully');
	  			</script>
	  			<?php
	  		}
	  		if(isset($_GET['c_a']) && $_GET['c_a']=='success')
	  		{
	  			?>
	  			<script type="text/javascript">
	  				alert('Course added successfully');
	  			</script>
	  			<?php
	  		}
	  		if($index->course())
	  		{

	  		}
	  		if(isset($_GET['dlt']) && $_GET['dlt']=='success')
	  		{
	  			?>
	  			<script type="text/javascript">
	  				alert('Course Deleted Successfully');
	  			</script>
	  			<?php
	  		}
	  		if(isset($_GET['u']) && $_GET['u']=='success')
	  		{
	  			?>
	  			<script type="text/javascript">
	  				alert('Course Updated successfully');
	  			</script>
	  			<?php
	  		}
	  		if(isset($_GET['mk']) && $_GET['mk']=='success')
	  		{
	  			$p=$_GET['v'];
	  			?>
	  			<script type="text/javascript">
	  				alert(' course already exist in popular course...');
	  			</script>
	  			<?php
	  		}
	  		if(isset($_GET['add']) && $_GET['add']=='success')
	  		{
	  			$q=$_GET['co'];
	  			?>
	  			<script type="text/javascript">
	  				alert('course successfully added into popular course...');
	  			</script>
	  			<?php
	  		}
	  		$pop=new admin;
	  		if($pop->pop_course())
	  		{

	  		}
	  		if(isset($_GET['po_dlt']) && $_GET['po_dlt']=='success')
	  		{
	  			?>
	  			<script type="text/javascript">
	  				alert("one popular courses delete successfully....");
	  			</script>
	  			<?php
	  		}
	  		/*$fac=new admin;
	  		if($fac->faculty_fetch())
	  		{

	  		}
	  		
	  		}*/
	  		$tech=new admin;
	  		if($tech->all_faculty_fetch())
	  		{

	  		}
	  		if(isset($_GET['fdlt']) && $_GET['fdlt']=='success')
	  		{
	  			?>
	  				<script type="text/javascript">
	  					alert('faculty dleted successfully...');
	  				</script>
	  			<?php
	  		}
	  		if(isset($_GET['edit']) && $_GET['edit']=='success')
	  		{
	  			?>
	  			<script type="text/javascript">
	  				alert('Profile edited successfully...');
	  			</script>
	  			<?php
	  		}
	  		if(isset($_GET['admit']) && $_GET['admit']=='cmp')
	  		{
	  			?>
	  			<script type="text/javascript">
	  				alert("Addmition successfull...");
	  			</script>
	  			<?php
	  		}
	  		if(isset($_GET['usr']) && $_GET['usr']=='avlab')
	  		{
	  			?>
	  			<script type="text/javascript">
	  				alert('This User Already exist');
	  			</script>
	  			<?php
	  		}
	  		if(isset($_GET['sid']) && $_GET['sid']=='succ')
	  		{
	  			?>
	  			<script type="text/javascript">
	  				alert("This User Not exist");
	  			</script>
	  			<?php 
	  		}
	   ?>	

<!---------------------Header Start--------------------------->	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <!--<li class="nav-item"><a href="#about-section" class="nav-link"><span>Faculty</span></a></li>-->
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Controles</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Delete Faculty</span></a></li>
	          <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Edit Profile</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Enqueries</span></a></li>
	          <li class="nav-item"><a href="#newuser" class="nav-link"><span>Addmitions</span></a></li>
	          <li class="nav-item"><a href="#usrprofile" class="nav-link"><span>User Profile</span></a></li>
			  <li class="nav-item"><a href="#online-class" class="nav-link"><span>Online Class</span></a></li>
	          <li class="nav-item"><a href="../logout.php" class="nav-link"><span>Logout</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

<!-----------------------Header end------------------------------->

<!-----------------------Home Area Start---------------------------->

	  <section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
	      <div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(adminlogo/admin3.png);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello Mr. Admin</span>
			            <h1 class="mb-4 mt-3">Welcome<span>&nbsp;to</span></h1>
			            <h2 class="mb-4">Controle Panel of Website</h2>
					<span class="subheading">Note:- Use Image resolution 300*300</span>

			            <p><a href="#resume-section" class="btn btn-primary py-3 px-4">Controle</a> <a href="#skills-section" class="btn btn-white btn-outline-white py-3 px-4">Edit Profile</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
    </section>

<!-----------------------------Home Area End----------------------------------->
<!----------------- Add Faculty area Start-------------------------------------->

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    	<div class="container">
    		
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url();">
	    				</div>
    				</div>
    			</div>
    			<form action="php.php" method="post" enctype="multipart/form-data">
    			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">Faculty</h1>
		            <h2 class="mb-4">Faculty</h2>
		            <p>Add New Faculty</p>
		        
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Faculty Name:</span>
		            	 <span>
		            	 	<input type="text" name="f_name" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Faculty Name">
		            	</span></li>
		            	<li class="d-flex"><span>Work:</span> 
		            		<span>
		            			<input type="text" name="f_work" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter Faculty Work">
		            		</span>
		            	</li>
		            	<li class="d-flex"><span>Faculty Email:</span> 
		            		<span>
		            			<input type="email" name="f_email" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter Faculty Email">
		            		</span>
		            	</li>
		            	<li class="d-flex"><span>Phone: </span> 
		            		<span>
		            		<select name="c_code" style="height: 30px; width: 50px; border-radius: 10px 10px 10px 10px; box-shadow: 2px 2px 2px 2px #66066;">
		            			<option value="+91">+91</option>
		            			<option value="+1">+1</option>
		            		</select>
		            		<input type="text" name="f_num" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter Faculty Number">
			            	</span>

			            </li>
			            <li class="d-flex"><span>Faculty Image:</span> 
		            		<span>
		            			<input type="file" name="f_img" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;">
		            		</span>
		            	</li>
			            <li class="d-flex"><span>Query</span>
			            	<textarea name="f_query"  style=" width: 50%; border-radius: 10px 10px 10px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter About Faculty"></textarea>
			            </li>
		            </ul>
		        
		          </div>
		        </div>
		        </form>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
                <p><button type="submit" class="btn btn-primary py-3 px-3" name="add_faculty">Add Faculty</button></p>
                <p><a href="#skills-section" class="btn btn-primary py-3 px-3">Edit Faculty</a></p>
              </div>
	          </div>
	        </div>
	        
        </div>
    	</div>
    </section>

<!-------------------------Add Faculty Area End--------------------------------------->

<!-- Here Starts Controle Area Here you can add courses delete courses and add to popular queue-->
	<!---------------Controle Area start-------------------------------------->

    <section class="ftco-about img ftco-section ftco-no-pb" id="resume-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
	          <div class="col-md-10 heading-section text-center ftco-animate">
	          	<h1 class="big big-2">Controles</h1>
	            <h2 class="mb-4">Controles</h2>
	            <p>Here You can add, delete and update every containt of website</p>
	          </div>
        	</div>
    		<div class="row">

    			<!------------- Add Course And Delete Course Area start--------->
    			<div class="col-md-6">
    				<form action="php.php" method="post" enctype="multipart/form-data">
    				<div class="resume-wrap ftco-animate">

    					<!-----------Add Course Area STart-------------->
    					<span class="date">Courses</span>
    					<center>
    						<h2>Add Course</h2>
    						<hr style="background-color: white;" />
    					</center>
    					
    					<ul class="about-info mt-4 px-md-0 px-2">
			            	<li class="d-flex"><span>Course Name:</span>
			            	 <span>
			            	 	<input type="text" name="c_name" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Faculty Name">
			            	</span></li>
			            	<li class="d-flex"><span>course Fee:</span> 
			            		<span>
			            			<input type="text" name="c_fee" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter Faculty Work">
			            		</span>
			            	</li>
			            	
			            	 <li class="d-flex"><span>Category: </span> 
			            		<span>
			            		<select name="c_cat" style=" height: 30px; border-radius: 10px 10px 10px 10px; box-shadow: 2px 2px 2px 2px #66066;">
									<?php 
										if($tech->fetch_steam()){
											foreach($tech->inst as $key){
												?>
												<option value="<?php echo $key['steam']; ?>"><?php echo $key['steam']; ?></option>
												<?php
											}
										}
									?>
			            			
			            			
			            		</select>
			            		
				            	</span>

				            </li>
				            <li class="d-flex"><span>faculty: </span> 
			            		<span>
			            		<select name="tout" style=" height: 30px; border-radius: 10px 10px 10px 10px; box-shadow: 2px 2px 2px 2px #66066;">
				            		<?php
				            			foreach ($tech->f as $t) 
				            			{
				            				?>
				            					<option value="<?php echo $t['name']; ?>">
				            						<?php echo $t['name']; ?>
				            					</option>
				            				<?php
				            				}
				            		?>
				            	</select>
				            	</span>

				            </li>
				            <li class="d-flex"><span>Course Image:</span> 
			            		<span>
			            			<input type="file" name="c_img" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;">
			            		</span>
			            	</li>
				            <li class="d-flex"><span>Course Query</span>
				            	<textarea name="c_query"  style=" width: 50%; border-radius: 10px 10px 10px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter About Course"></textarea>
				            </li>
				            <li class="d-flex">
			            		<span>
			            			
			            		</span>
			            		<span>
			            			<input type="radio" name="pop" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;">
			            			Make This Course Popular
			            		</span>
			            	</li>
			            </ul>
			            <center><input type="submit" name="add_course" class="btn btn-success" value="ADD COURSE"></center>
    				</div>
    				</form>
    				<!------------ Add Course Area End------------------->

    				<!------------Delete Course Area STart--------------->
    				<form action="php.php" method="post" enctype="multipart/form-data">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">Course</span>
    					<center>
    						<h2>Delete Course</h2>
    						<hr style="background-color: white;">
    					</center>
    					<ul class="about-info mt-4 px-md-0 px-2">
			            	<li class="d-flex"><span>Select Course: </span> 
			            		<span>
			            		<select name="c_opt" style=" height: 30px; border-radius: 10px 10px 10px 10px; box-shadow: 2px 2px 2px 2px #66066;">
			            			<?php 
			            				foreach ($index->course as $dlt) 
			            				{?>
			            					<option value="<?php echo $dlt['cource_title']; ?>">
			            						<?php echo $dlt['cource_title']; ?>		
			            					</option>
			            				 <?php		# code...
			            				}
			            			?>
			            			
			            		</select>
			            		
				            	</span>

				            </li>
			            </ul>
			            <center><input type="submit" name="delete_course" class="btn btn-success" value="DELETE COURSE"></center>
    				</div>
    				</form>
    				<!-----------------Delete course Area end------------------>

    			</div>
    			<!--------------------- Add delete course area end----------------------->

    			<!--------------------Update and popular course area start----------------->
    			<div class="col-md-6">
    				<!-------Update course area start-------->
    				<form action="php.php" method="post" enctype="multipart/form-data">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">Course</span>
    					<center>
    						<h2>Update Course</h2>
    						<hr style="background-color: white;">
    					</center>
    						<ul class="about-info mt-4 px-md-0 px-2">
				            	<li class="d-flex"><span>Select Course: </span> 
				            		<span>
				            		<select name="uc_opt" style=" height: 30px; border-radius: 10px 10px 10px 10px; box-shadow: 2px 2px 2px 2px #66066;">
				            			<?php 
				            				foreach ($index->course as $update) 
				            				{?>
				            					<option value="<?php echo $update['cource_title']; ?>">
				            						<?php echo $update['cource_title']; ?>
				            							
				            					</option>
				            				 <?php		# code...
				            				}
				            			?>

				            			
				            		</select>
					            	</span>
					            </li>
					            <li class="d-flex"><span>Course Name:</span>
				            	 <span>
				            	 	<input type="text" name="uc_name" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Faculty Name">
				            	</span></li>
				            	<li class="d-flex"><span>course Fee:</span> 
				            		<span>
				            			<input type="text" name="uc_fee" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter Faculty Work">
				            		</span>
				            	</li>
				            	
				            	<li class="d-flex"><span>Category: </span> 
				            		<span>
				            		<select name="c_cat" style=" height: 30px; border-radius: 10px 10px 10px 10px; box-shadow: 2px 2px 2px 2px #66066;">
									<?php 
										if($tech->fetch_steam()){
											foreach($tech->inst as $key){
												?>
												<option value="<?php echo $key['steam']; ?>"><?php echo $key['steam']; ?></option>
												<?php
											}
										}
									?>
			            			
			            			
			            		</select>
				            		
					            	</span>

					            </li>
					            <li class="d-flex"><span>Course Image:</span> 
				            		<span>
				            			<input type="file" name="uc_img" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;">
				            		</span>
				            	</li>
					            <li class="d-flex"><span>Course Query</span>
					            	<textarea name="uc_query" style=" width: 50%; border-radius: 10px 10px 10px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter About Faculty"></textarea>
					            </li>
				            </ul>
				            <center>
				            	<input type="submit" name="course_update" class="btn btn-success" value="UPDATE COURSE">
				            </center>          
    				</div>
    				</form>
    				<!----------update course area end------------->

    				<!------------Popular course area start---------->
    				<form action="php.php" method="post" enctype="multipart/form-data">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">Course</span>
    					<center>
    						<h2>Create popular Course</h2>
    						<hr style="background-color: white;">
    					</center>
    					<ul class="about-info mt-4 px-md-0 px-2">
			            	<li class="d-flex"><span>Select Course: </span> 
			            		<span>
			            		<select name="make" style=" height: 30px; border-radius: 10px 10px 10px 10px; box-shadow: 2px 2px 2px 2px #66066;">
			            			<?php
			            				foreach ($index->course as $all) 
			            				{?>
			            					# code...
			            					<option value="<?php echo $all['cource_title']; ?>">
			            						<?php echo $all['cource_title']; ?>
			            							
			            					</option>
			            				 <?php
			            				}
			            			?>
			            			
			            		
			            		</select>
			            		
				            	</span>

				            </li>
			            </ul><br><br>
			            <center><input type="submit" name="mk_popular" class="btn btn-success" value="ADD POPULAR"></center>
    				</div>
    				</form>
    				<!----------popular course area end--------------->
    			</div>
    			<div class="col-md-6">
    				<form action="php.php" method="post" enctype="multipart/form-data">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">Course</span>
    					<center>
    						<h2>Delete popular Course</h2>
    						<hr style="background-color: white;">
    					</center>
    					<ul class="about-info mt-4 px-md-0 px-2">
			            	<li class="d-flex"><span>Select Course: </span> 
			            		<span>
			            		<select name="pop_dlt" style=" height: 30px; border-radius: 10px 10px 10px 10px; box-shadow: 2px 2px 2px 2px #66066;">
			            			<?php
			            				foreach ($pop->g as $p_dlt) 
			            				{?>
			            					# code...
			            					<option value="<?php echo $p_dlt['cource_title']; ?>">
			            						<?php echo $p_dlt['cource_title']; ?>
			            							
			            					</option>
			            				 <?php
			            				}
			            			?>
			            			
			            		
			            		</select>
			            		
				            	</span>

				            </li>
			            </ul><br><br>
			            <center><input type="submit" name="dlt_popular" class="btn btn-success" value="DELETE POPULAR"></center>
    				</div>
    				</form>
    			</div>
    			<!--------------------------update course and popular course area end---------------->
				<div class="col-md-6">
    				<form action="php.php" method="post" enctype="multipart/form-data">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">Course</span>
    					<center>
    						<h2>ADD Course Category</h2>
    						<hr style="background-color: white;">
    					</center>
    					<ul class="about-info mt-4 px-md-0 px-2">
			            	<li class="d-flex"><span>Select Course: </span> 
			            		<span>
			            		<input type="text" class="text-center" name="steam" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter New Steam" require="">
			            		
				            	</span>

				            </li>
			            </ul><br><br>
			            <center><input type="submit" name="add_steam" class="btn btn-success" value="ADD CATEGORY"></center>
    				</div>
    				</form>
    			</div>

    		</div>
    		<div class="row justify-content-center mt-5">
    			<div class="col-md-6 text-center ftco-animate">
    				<p><a href="#home-section" class="btn btn-primary py-4 px-5">Home</a></p>
    			</div>
    		</div>
    	</div>
    </section>
<!---------------------------------Controle Area End-------------------------------------->

<!-------------------------------Faculty Delete Area start----------------------------->

    <section class="ftco-section" id="services-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
	          <div class="col-md-10 heading-section text-center ftco-animate">
	          	<h1 class="big big-2">Delete Faculty</h1>
	            <h2 class="mb-4">Delete Faculty</h2>
	            <p>Delete Any Faculty From Here</p>
	          </div>
        	</div>
	        	<div class="row">
	    			<!------------- Add Course And Delete Course Area start--------->
	    			
	    			<div class="col-md-6">
	    				<form action="php.php" method="post" enctype="multipart/form-data">
	    				<div class="resume-wrap ftco-animate">
	    					<span class="date">Faculty</span>
	    					<center>
	    						<h2>Delete Faculty</h2>
	    						<hr style="background-color: white;">
	    					</center>
	    					<ul class="about-info mt-4 px-md-0 px-2">
				            	<li class="d-flex"><span>Select Faculty: </span> 
				            		<span>
				            		<select name="fac_sel" style=" height: 30px; border-radius: 10px 10px 10px 10px; box-shadow: 2px 2px 2px 2px #66066;">
				            			<?php
				            				foreach ($tech->f as $t) 
				            				{
				            					?>
				            						<option value="<?php echo $t['name']; ?>">
				            							<?php echo $t['name']; ?>
				            						</option>
				            					<?php
				            				}
				            			 ?>
				            		</select>
				            		
					            	</span>

					            </li>
				            </ul>
				            <center><input type="submit" name="delete_faculty" class="btn btn-success" value="DELETE FACULTY"></center>
	    				</div>
	    				</form>
	    			</div>
	    			
	    		</div>

        	<!--==========================================-->
    	</div>
    </section>
<!-------------------------------Faculty delete Area end----------------------------->
		
<!----------------------------Edit Faculty Area start--------------------------->
		<section class="ftco-about img ftco-section ftco-no-pb" id="skills-section">
	    	<div class="container">
	    		<form action="php.php" method="post" enctype="multipart/form-data">
	    		<div class="row d-flex">
	    			<div class="col-md-6 col-lg-5 d-flex">
	    				<div class="img-about img d-flex align-items-stretch">
	    					<div class="overlay"></div>
		    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(adminlogo/faculty.png);">
		    				</div>
	    				</div>
	    			</div>
	    			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate">
			          	<h1 class="big">Edit Profile</h1>
			            <h2 class="mb-4">Edit Profile</h2>
			            <p>Here You can edit Faculty Profile in easy way</p>
			            <ul class="about-info mt-4 px-md-0 px-2">
			            	<li class="d-flex"><span>Faculty Profile:</span>
			            	 <span>
			            	 	<select name="ef_select" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;">
			            	 		<option>Select Faculty Account</option>
			            	 		<?php
				            			foreach ($tech->f as $t) 
				            			{
				            				?>
				            					<option value="<?php echo $t['name']; ?>">
				            						<?php echo $t['name']; ?>
				            					</option>
				            				<?php
				            			}
				            		?>
			            	 	</select>
			            	</span></li>
			            	<li class="d-flex"><span>Name:</span> 
			            		<span>
			            			<input type="text" name="ef_name" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter new name">
			            		</span>
			            	</li>
			            	<li class="d-flex"><span>Faculty Email:</span> 
			            		<span>
			            			<input type="email" name="ef_email" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter new Email">
			            		</span>
			            	</li>
			            	<li class="d-flex"><span>Faculty Work:</span> 
			            		<span>
			            			<input type="text" name="ef_work" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter new Work">
			            		</span>
			            	</li>
			            	<li class="d-flex"><span>Phone: </span> 
			            		<span>
			            		<select name="ecode" style="height: 30px; width: 50px; border-radius: 10px 10px 10px 10px; box-shadow: 2px 2px 2px 2px #66066;">
			            			<option value="+91">+91</option>
			            			<option value="+1">+1</option>
			            		</select>
			            		<input type="text" name="ef_num" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter new Number">
				            	</span>

				            </li>
				            <li class="d-flex"><span>Faculty Image:</span> 
			            		<span>
			            			<input type="file" name="ef_img" class="text-center" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;">
			            		</span>
			            	</li>
				            <li class="d-flex"><span>Query</span>
				            	<textarea name="ef_query" style=" width: 50%; border-radius: 10px 10px 10px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter About Faculty"></textarea>
				            </li>
			            </ul>
			          </div>
			        </div>
		          <div class="counter-wrap ftco-animate d-flex mt-md-3">
	              <div class="text">
	                <p><button type="submit" name="faculty_update" class="btn btn-primary py-3 px-3">Update</button></p>
	                <p><a href="#about-section" class="btn btn-primary py-3 px-3">Add New Faculty</a></p>
	              </div>
		          </div>
		        </div>
		    	</form>
	        </div>
	    	</div>
		</section>
<!--------------------------Edit Faculty area end-------------------->

<!-------------------------Enquery Area start--------------->
    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
	          <div class="col-md-12 heading-section text-center ftco-animate">
	          	<h1 class="big big-2">Latest Enquery</h1>
	            <h2 class="mb-4">Latest Enqueries</h2>
	            <p>Here You can See Latest Enqueries</p>
	            <div class="form-controle  bd-highlight mb-3">
	            	<?php $date=date("d/m/y"); ?>
	            	<div class="p-2 bd-highlight"><h4>Today <?php echo $date; ?> Enqueries</h4></div>
	            	<h4 style="float: right;">See All</h4><br>
	            </div>
	            <ul>
	            <?php
	            	$enquery=new admin;
	            	if($enquery->enquery_fetch())
	            	{
	            		
	            		foreach ($enquery->enq as $enqu) 
	            		{
	            			if($enqu['seen']!=1)
	            			{
	            				?>
	            				<li><?php echo $enqu['name']; ?> &nbsp; | &nbsp; <?php echo $enqu['Email']; ?> &nbsp; | &nbsp; <?php echo $enqu['number']; ?> &nbsp; | &nbsp; <?php echo $enqu['qulification']; ?> &nbsp; | &nbsp; <?php echo $enqu['course']; ?> &nbsp; | &nbsp; <?php echo $enqu['time']; ?> &nbsp; | &nbsp; <?php echo $enqu['date']; ?> <br> <?php echo $enqu['query']; ?><form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"><button type="submit" class="btn btn-dark" name="read" value="<?php  echo $enqu['id']; ?>">Read</button></form></li>
	            				<hr style="background-color: white;" />
	            				<?php
	            			}
	            			
	            		}
	            	}
	            	else
	            	{
	            		?>
	            		<div class="text-center">
	            			<b><h1 style="color: white;">No Enqueries found currently.....</h1></b>
	            		</div>
	            		<?php
	            	}
	             ?>
	         	</ul>
	          </div>
        	</div>

    		
        </div>
    </section>
<!-----------------------------Enquery Area End--------------------->

<!--------------------------New Registration Area start----------------------->
<section class="ftco-section ftco-project" id="newuser">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
	          <div class="col-md-12 heading-section text-center ftco-animate">
	          	<h1 class="big big-2">Student Registration</h1>
	            <h2 class="mb-4">Student Registration</h2>
	            <p>List of Pending Addmition.</p>
	            <div class="form-controle  bd-highlight mb-3">
	            	
	            	<div class="p-2 bd-highlight"><h4>For See All Student <div class="text-center">
						<button class="btn btn-danger">
							<a href="list.php">SHOW ALL STUDENT</a>
						</button>
					</div></h4></div>
	            	
	            </div>

	        	 
					<?php 
						if(isset($_POST['confirm_addmition']))
						{
							extract($_POST);
						
							if($index->confirm_addmition_usr($confirm_addmition)){
								
								//Mail System....



								?>
								<script>
									alert("Addmition Confirmed for a student");
								</script>
								<?php
							}
						}
						if($index->student_fetch()){
							foreach($index->inst as $enqu){
								?>
									<li><?php echo $enqu['name']; ?> &nbsp; | &nbsp; <?php echo $enqu['class']; ?> &nbsp; | &nbsp; <?php echo $enqu['email']; ?> &nbsp; | &nbsp; <?php echo $enqu['mobile']; ?> &nbsp; | &nbsp; <?php echo $enqu['steam']; ?> &nbsp; | &nbsp; <?php echo $enqu['enrolmentid']; ?> &nbsp; | &nbsp; <?php echo $enqu['userid']; ?> &nbsp; | &nbsp; <?php echo $enqu['password']; ?> <br> <?php echo $enqu['dob']; ?><form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"><button type="submit" class="btn btn-dark" name="confirm_addmition" value="<?php echo $enqu['userid']; ?>">Confirm Addmition</button></form></li>
	            				<hr style="background-color: white;" />
								<?php
							}
						}
						else
						{
							echo "No Addmition Pending";
						}
					
					?>
					
	            
	          </div>
        	</div>

    		
        </div>
    </section>
<!--------------------------New Registration Area end------------------------->

<!--------------------------User Profile Area start---------------------------->
<section class="ftco-section ftco-project" id="usrprofile">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
	          <div class="col-md-12 heading-section text-center ftco-animate">
	          	<h1 class="big big-2">User Profile Login</h1>
	            <h2 class="mb-4">User Profile</h2>
	            <p>Login User Profile Through student id and password</p>
	            <div class="form-controle  bd-highlight mb-3">
	            	<?php $date=date("d/m/y"); ?>
	            	<div class="p-2 bd-highlight"><h4>Today <?php echo $date; ?> Add Student</h4></div>
	            	
	            </div>

	            <form action="php.php" method="post">
	            	<div class="d-flex justify-content-center">
	            		<ul style="color: white; list-style: none;">
	            			<li>
	            				<b>Student Id</b> <input type="text" name="sid" class="btn btn-light ml-2 mt-2" placeholder="Enter Student ID">
	            			</li>
	            			<li>
	            				<input type="submit" name="stidlog" value="Login" class="btn btn-primary mt-4">
	            			</li>
	            		</ul>

	            	</div>
	            </form>
	          </div>
        	</div>

    		
        </div>
    </section>
<!--------------------------User Profile Area end------------------------------>


<!------------------------Online Classes Area start------------------------------>
<section class="ftco-about img ftco-section ftco-no-pb" id="online-class">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
	          <div class="col-md-10 heading-section text-center ftco-animate">
	          	<h1 class="big big-2">Online Classes</h1>
	            <h2 class="mb-4">Online Class</h2>
	            <p>Here You can add and Delete Video Tutorials of Course for Student</p>
	          </div>
        	</div>
    		<div class="row">

    			<!------------- Add Course Tutorial Area start--------->
    			<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
						<span class="date">Video Tutorial</span>
						<center>
							<h2>Add Tutorial</h2>
							<hr style="background-color: white;" />
						</center>
						<form action="php.php" method="POST" enctype="multipart/form-data">
							<ul>
								<li class="d-flex"><span>Tutorial title:</span>
								<span>
									<input type="text" name="title" class="text-center mt-3" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Tutorial Title">
								</span></li>
								<li class="d-flex"><span>Tutorial Img:</span>
								<span>
									<input type="file" name="img" class="text-center mt-3" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" >
								</span></li>
								<li class="d-flex"><span>Tutorial(Video):</span>
								<span>
									<input type="file" name="vdo" class="text-center mt-3" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" >
								</span></li>
								<li class="d-flex"><span>Assignment:-</span>
								<span>
									<input type="file" name="asgn" class="text-center mt-3" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" >
								</span></li>

								<li class="d-flex"><span>Select Teacher:</span>
									<span>
										<select name="teacher" class="mt-3" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;">
											<option>Select Teacher</option>
											<?php
												foreach ($tech->f as $t) 
												{
													?>
														<option value="<?php echo $t['name']; ?>">
															<?php echo $t['name']; ?>
														</option>
													<?php
												}
											?>
										</select>
									</span>
								</li>
								<li class="d-flex"><span>SELECT COURSE</span>
								<span>
									<select name="course" class="text-center mt-3" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" >
												<option value="null">SELECT COURSE</option>
										<?php 
											if($index_->courses_fetch()){
												foreach($index_->cources_var as $key){
													?>
														<option value="<?php echo $key['cource_title']; ?>|<?php echo $key['course_cat']; ?>"><?php echo $key['cource_title']; ?></option>
														
													<?php
												}
											}

										?>
										
									</select>
								</span></li>
								<li class="d-flex"><span>Tutorial Duration:</span>
								<span>
									<input type="text" name="durection" class="text-center mt-3" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;"  placeholder="Duration">
								</span></li>
								<li class="d-flex"><span>Description</span>
									<textarea name="desc" class="mt-3"  style=" width: 50%; border-radius: 10px 10px 10px; box-shadow: 2px 2px 2px 2px #660066;" placeholder="Enter About Tutorial"></textarea>
								</li>
							</ul>
							<div class="text-center">
								<input type="submit" name="add_tutorial" class="btn btn-success" value="ADD TUTORIAL">
							</div>
						</form>
						
					</div>

				</div>

				<!---------Delete Tutorial area start------------>
				<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
						<span class="date">Video Tutorial</span>
						<center>
							<h2>Delete Tutorial</h2>
							<hr style="background-color: white;" />
						</center>
						<div class="text-center">
							<form action="php.php" method="POST">
								<select name="title" class="btn btn-light">
									<option value="NULL">SELECT TUTORIAL VIDEO</option>
									<?php 
										if($index->fetch_video()){
											foreach($index->data as $key){
												?>
												<option value="<?php echo $key['title']; ?>"><?php echo $key['title']; ?></option>
												<?php
											}
										}
									
									?>
									
								</select><br>
								<input type="submit" name="dlt_vdo" value="DELETE TUTORIAL" class="btn btn-success mt-3">
							</form>
						</div>
					</div>

				</div>

				<!-----add assignments area---->
				<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
						<span class="date">Assignment</span>
						<center>
							<h2>Add Assignment(PDF FORMATE)</h2>
							<hr style="background-color: white;" />
						</center>
						<div class="text-center">
							<form action="php.php" method="POST" enctype="multipart/form-data">
								<!--<select name="title" class="btn btn-light">
									<option value="NULL">SELECT TUTORIAL VIDEO</option>
									<?php 
										/*if($index->fetch_video()){
											foreach($index->data as $key){
												?>
												<option value="<?php echo $key['title']; ?>"><?php echo $key['title']; ?></option>
												<?php
											}
										}*/
									
									?>
									
								</select><br>
								<input type="submit" name="dlt_vdo" value="DELETE TUTORIAL" class="btn btn-success mt-3">-->
								<input type="text" name="n" placeholder="Assignment Name" class="text-center mt-3 mb-4" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;">
								<input type="file" name="assignment" >
								<li class="d-flex mt-3 mb-3">
								<span>
									<select name="course" class="text-center mt-3" style="border-radius: 15px 15px 15px 15px; box-shadow: 2px 2px 2px 2px #660066;" >
												<option value="null">SELECT COURSE</option>
										<?php 
											#if($index_->courses_fetch()){
												foreach($index_->cources_var as $key){
													?>
														<option value="<?php echo $key['cource_title']; ?>|<?php echo $key['course_cat']; ?>"><?php echo $key['cource_title']; ?></option>
														
													<?php
												}
											#}

										?>
										
									</select>
								</span></li>
								<textarea type="text" name="desc" placeholder="Enter Somthing About Assignment" class="mt-4"></textarea>
								<input type="submit" name="addasign" value="Upload" class="btn btn-success mt-4">
							</form>
						</div>
					</div>

				</div>

				<div class="col-md-6">
					<div class="resume-wrap ftco-animate">
						<span class="date">Assignment</span>
						<center>
							<h2>Delete Assignment</h2>
							<hr style="background-color: white;" />
						</center>
						<div class="text-center">
							<form action="php.php" method="POST">
								<select name="title" class="btn btn-light">
									<option value="NULL">SELECT Assignment</option>
									<?php 
										if($index->assignmet_fetch()){
											foreach($index->asign as $key){
												?>
												<option value="<?php echo $key['name']; ?>"><?php echo $key['name']; ?></option>
												<?php
											}
										}
									
									?>
									
								</select><br>
								<input type="submit" name="dlt_asign" value="DELETE TUTORIAL" class="btn btn-success mt-3">
							</form>
						</div>
					</div>

				</div>

			</div>
		</div>
</section>
<!----------------------------Online Classes area end---------------------------------->

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
		$index->link('../adminlogin.php');
	}
?>
