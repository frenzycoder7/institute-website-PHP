<?php 
	include '../class/user.php';
	$s=new admin();

if(isset($_SESSION['admin']))
{
        ?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	
	<!---------------Google fonts start------------------>
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
		<title>SEARCH RESULT</title>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">

	</head>
	<body>

	
	<?php
	if(isset($_POST['search'])){
		extract($_POST);
		
		if($s->search_area($key, $cat)){
			foreach ($s->data as $profile) {
				
				# code...
			}
?>
<div class="container mt-2">
			<div style="background-color: #660066;" class="text-center">
				<h3 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">STUDENT PROFILE</h3>
			</div>
			<div class="row">

				<div class="col-lg-12">
					<div class="card mb-3" style="max-width: 100%; ">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src="../<?php echo $profile['img']; ?>" class="card-img" alt="..." style="max-height: 400px; max-width: 400px;">
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
						<h5 class="card-title"><b>Password:-</b> <b><?php echo $profile['password']; ?></b></h5>
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
	<div class="text-center mt-5">
		<button class="btn btn-success"><a href="list.php" style="color: white;">BACK</a></button>
		<?php 
		if($profile['status']==0)
		{
			?>
				<button class="btn btn-primary"><a href="sdetails.php?conf=confirm&roll=5&id=<?php echo $profile['userid']; ?>&key=<?php echo $key; ?>&cat=<?php echo $cat; ?>" style="color: white;">Confirm Addmition</a></button>
			<?php
		}
		if($profile['access']==0){
			?>
				<button class="btn btn-dark"><a href="sdetails.php?access=access&roll=5&id=<?php echo $profile['userid']; ?>&key=<?php echo $key; ?>&cat=<?php echo $cat; ?>" style="color: white;">Allow Online Class Access</a></button>
			<?php
		}
		if($profile['access']==1){
			?>
				<button class="btn btn-dark"><a href="sdetails.php?disable=disable&roll=5&id=<?php echo $profile['userid']; ?>&key=<?php echo $key; ?>&cat=<?php echo $cat; ?>" style="color: white;">Disable Live Classes</a></button>
			<?php
		}
		?>
		<button class="btn btn-danger"><a href="sdetails.php?dlt=delete&roll=5&id=<?php echo $profile['userid']; ?>" style="color: white;">Delete Student</a></button>
	</div>
<?php
		}
		else
		{
			"No Data Found From ".$key;
		}
		
		
	}
	if(isset($_POST['yrs']))
	{
			extract($_POST);
			$cat=3;

			if($s->search_area($key, $cat)){
				$r=$key;
				$c=$cat;
				?>
				<div style="background: #660066;" class="text-center">
					<h3><b><strong style="color: white;">LIST OF ALL STUDENT <?php echo $key; ?></strong></b></h3>
				</div>
<div class="list-group">
	<?php 
			foreach ($s->data as $key) {
					
					if($key['status']==1){
						?>
							<div class="list-group-item list-group-item-action list-group-item-success">
								<?php echo "name:-> ".$key['name']." | Email:-> ".$key['email']." | Mobile:-> ".$key['mobile']." | DOB:-> ".$key['dob']." | Userid:-> ".$key['userid']." | Status:- Addmition Confirmed"; ?><br>
								<button class=" ml-1 btn btn-primary">
									<a href="sdetails.php?pro=profile&i=<?php echo $key['img']; ?>&n=<?php echo $key['name']; ?>&e=<?php echo $key['email']; ?>&m=<?php echo $key['mobile']; ?>&dob=<?php echo $key['dob']; ?>&uid=<?php echo $key['userid']; ?>&status=<?php echo $key['status']; ?>&pwd=<?php echo $key['password']; ?>&steam=<?php echo $key['steam']; ?>&class=<?php echo $key['class']; ?>&father=<?php echo $key['father']; ?>&addr=<?php echo $key['address']; ?>&doa=<?php echo $key['doa']; ?>&y<?php echo $key['year']; ?>&key=<?php echo $r; ?>&c=<?php echo $c; ?>&roll=1 " style="color: white;">
										Profile
									</a>
								</button>
								<button class="ml-1 btn btn-danger">
									
										<a href="sdetails.php?dlt=delete&roll=1&key=<?php echo $r; ?>&c=<?php echo $c; ?>&id=<?php echo $key['userid']; ?>" style="color: white;">
										Delete Student
									</a>
									
								</button>
								<?php 
									if($key['access']==0){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?access=access&roll=1&id=<?php echo $key['userid']; ?>&key=<?php echo $r; ?>&c=<?php echo $c; ?>&id=<?php echo $key['userid']; ?>" style="color: white;">Allow Online Class Access</a></button>
										<?php
									}
									if($key['access']==1){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?disable=disable&roll=1&id=<?php echo $key['userid']; ?>&key=<?php echo $r; ?>&c=<?php echo $c; ?>&id=<?php echo $key['userid']; ?>" style="color: white;">Disable Live Classes</a></button>
										<?php
									}
								?>
							</div>
							<hr style="background-color:black;">
						<?php
					}
					else
					{

						?>
							<div class="list-group-item list-group-item-action list-group-item-danger">
								<?php echo "name:-> ".$key['name']." | Email:-> ".$key['email']." | Mobile:-> ".$key['mobile']." | DOB:-> ".$key['dob']." | Userid:-> ".$key['userid']." | Status:- Addmition Not Confirmed"; ?> <br>
								<button class=" ml-1 btn btn-primary">
									<a href="sdetails.php?pro=profile&i=<?php echo $key['img']; ?>&n=<?php echo $key['name']; ?>&e=<?php echo $key['email']; ?>&m=<?php echo $key['mobile']; ?>&dob=<?php echo $key['dob']; ?>&uid=<?php echo $key['userid']; ?>&status=<?php echo $key['status']; ?>&pwd=<?php echo $key['password']; ?>&steam=<?php echo $key['steam']; ?>&class=<?php echo $key['class']; ?>&father=<?php echo $key['father']; ?>&addr=<?php echo $key['address']; ?>&doa=<?php echo $key['doa']; ?>&y<?php echo $key['year']; ?>&key=<?php echo $r; ?>&c=<?php echo $c; ?>&roll=1 " style="color: white;">
										Profile
									</a>
								</button>
								<button class="ml-1 btn btn-danger">
									<a href="sdetails.php?conf=confirm&roll=1&key=<?php echo $r; ?>&c=<?php echo $c; ?>&id=<?php echo $key['userid']; ?>" style="color: white;">
										Confirm Addmition
									</a>
								</button>
								<button class="ml-1 btn btn-danger">
									<a href="sdetails.php?dlt=delete&roll=1&key=<?php echo $r; ?>&c=<?php echo $c; ?>&id=<?php echo $key['userid']; ?>" style="color: white;">
										Delete Student
									</a>
								</button>
								<?php 
									if($key['access']==0){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?access=access&roll=1&id=<?php echo $key['userid']; ?>&key=<?php echo $r; ?>&c=<?php echo $c; ?>&id=<?php echo $key['userid']; ?>" style="color: white;">Allow Online Class Access</a></button>
										<?php
									}
									if($key['access']==1){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?disable=disable&roll=1&id=<?php echo $key['userid']; ?>&key=<?php echo $r; ?>&c=<?php echo $c; ?>&id=<?php echo $key['userid']; ?>" style="color: white;">Disable Live Classes</a></button>
										<?php
									}
								?>
							</div>
						<?php
					}
				}
	?>
	
  	
</div>
<div class="text-center">
	<button class="btn btn-success mt-5"><a href="list.php" style="color: white;">Back</a></button>
</div>
				<?php
				
			}
			else
			{
				"No Data Found From ".$key;
			}
	}
	if(isset($_POST['all_list'])){
		?>
		<div style="background: #660066;" class="text-center">
					<h3><b><strong style="color: white;">LIST OF ALL STUDENT</strong></b></h3>
				</div>
		<?php
		if($s->fetch_all_student()){
			?>
<div class="list-group">
	<?php 
			foreach ($s->data as $key) {
					
					if($key['status']==1){
						?>
							<div class="list-group-item list-group-item-action list-group-item-success">
								<?php echo "name:-> ".$key['name']." | Email:-> ".$key['email']." | Mobile:-> ".$key['mobile']." | DOB:-> ".$key['dob']." | Userid:-> ".$key['userid']." | Status:- Addmition Confirmed"; ?><br>
								<button class=" ml-1 btn btn-primary">
									<a href="sdetails.php?pro=profile&i=<?php echo $key['img']; ?>&n=<?php echo $key['name']; ?>&e=<?php echo $key['email']; ?>&m=<?php echo $key['mobile']; ?>&dob=<?php echo $key['dob']; ?>&uid=<?php echo $key['userid']; ?>&status=1&pwd=<?php echo $key['password']; ?>&steam=<?php echo $key['steam']; ?>&class=<?php echo $key['class']; ?>&father=<?php echo $key['father']; ?>&addr=<?php echo $key['address']; ?>&doa=<?php echo $key['doa']; ?>&y<?php echo $key['year']; ?>&roll=2 " style="color: white;">
										Profile
									</a>
								</button>
								<button class="ml-1 btn btn-danger">
									<a href="sdetails.php?dlt=delete&roll=2&id=<?php echo $key['userid']; ?>" style="color: white;">
										Delete Student
									</a>
								</button>
								<?php 
									if($key['access']==0){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?access=access&roll=2&id=<?php echo $key['userid']; ?>" style="color: white;">Allow Online Class Access</a></button>
										<?php
									}
									if($key['access']==1){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?disable=disable&roll=2&id=<?php echo $key['userid']; ?>" style="color: white;">Disable Live Classes</a></button>
										<?php
									}
								?>
							</div>
							<hr style="background-color:black;">
						<?php
					}
					else
					{

						?>
							<div class="list-group-item list-group-item-action list-group-item-danger">
								<?php echo "name:-> ".$key['name']." | Email:-> ".$key['email']." | Mobile:-> ".$key['mobile']." | DOB:-> ".$key['dob']." | Userid:-> ".$key['userid']." | Status:- Addmition Not Confirmed"; ?> <br>
								<button class=" ml-1 btn btn-primary">
									<a href="sdetails.php?pro=profile&i=<?php echo $key['img']; ?>&n=<?php echo $key['name']; ?>&e=<?php echo $key['email']; ?>&m=<?php echo $key['mobile']; ?>&dob=<?php echo $key['dob']; ?>&uid=<?php echo $key['userid']; ?>&status=<?php echo $key['status']; ?>&pwd=<?php echo $key['password']; ?>&steam=<?php echo $key['steam']; ?>&class=<?php echo $key['class']; ?>&father=<?php echo $key['father']; ?>&addr=<?php echo $key['address']; ?>&doa=<?php echo $key['doa']; ?>&y<?php echo $key['year']; ?>&roll=2 " style="color: white;">
										Profile
									</a>
								</button>
								<button class="ml-1 btn btn-danger">
									<a href="sdetails.php?conf=confirm&roll=2&id=<?php echo $key['userid']; ?>" style="color: white;">
										Confirm Addmition
									</a>
								</button>
								<button class="ml-1 btn btn-danger">
									<a href="sdetails.php?dlt=delete&roll=2&id=<?php echo $key['userid']; ?>" style="color: white;">
										Delete Student
									</a>
								</button>
								<?php 
									if($key['access']==0){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?access=access&roll=2&id=<?php echo $key['userid']; ?>" style="color: white;">Allow Online Class Access</a></button>
										<?php
									}
									if($key['access']==1){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?disable=disable&roll=2&id=<?php echo $key['userid']; ?>" style="color: white;">Disable Live Classes</a></button>
										<?php
									}
								?>
							</div>
							<hr style="background-color:black;">
						<?php
					}
				}
	?>
	
  	
</div>
<div class="text-center">
	<button class="btn btn-success mt-5"><a href="list.php" style="color: white;">Back</a></button>
</div>
			<?php
		}
	}
	if(isset($_POST['pending'])){
		if($s->student_fetch()){
			?>
			<div style="background: #660066;" class="text-center">
					<h3><b><strong style="color: white;">ALL PENDING ADDMITION</strong></b></h3>
				</div>
			<?php
			foreach ($s->inst as $key) 
			{
				?>
				<div class="list-group">
					<div class="list-group-item list-group-item-action list-group-item-danger">
								<?php echo "name:-> ".$key['name']." | Email:-> ".$key['email']." | Mobile:-> ".$key['mobile']." | DOB:-> ".$key['dob']." | Userid:-> ".$key['userid']." | Status:- Addmition Not Confirmed"; ?><br>
									<button class=" ml-1 btn btn-primary">
										<a href="sdetails.php?pro=profile&i=<?php echo $key['img']; ?>&n=<?php echo $key['name']; ?>&e=<?php echo $key['email']; ?>&m=<?php echo $key['mobile']; ?>&dob=<?php echo $key['dob']; ?>&uid=<?php echo $key['userid']; ?>&status=<?php echo $key['status']; ?>&pwd=<?php echo $key['password']; ?>&steam=<?php echo $key['steam']; ?>&class=<?php echo $key['class']; ?>&father=<?php echo $key['father']; ?>&addr=<?php echo $key['address']; ?>&doa=<?php echo $key['doa']; ?>&y<?php echo $key['year']; ?>&roll=3 " style="color: white;">
											Profile
										</a>
									</button>
								<button class="ml-1 btn btn-danger">
									<a href="sdetails.php?conf=confirm&roll=3&id=<?php echo $key['userid']; ?>" style="color: white;">
										Confirm Addmition
									</a>
								</button>
								<button class="ml-1 btn btn-danger">
									<a href="sdetails.php?dlt=delete&roll=3&id=<?php echo $key['userid']; ?>" style="color: white;">
										Delete Student
									</a>
								</button>
							</div>
							<?php 
									if($key['access']==0){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?access=access&roll=3&id=<?php echo $key['userid']; ?>" style="color: white;">Allow Online Class Access</a></button>
										<?php
									}
									if($key['access']==1){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?disable=disable&roll=3&id=<?php echo $key['userid']; ?>" style="color: white;">Disable Live Classes</a></button>
										<?php
									}
								?>
				</div>
				<hr style="background-color:black;">
				<?php
			}
			?>
			<div class="text-center">
				<button class="btn btn-success mt-5"><a href="list.php" style="color: white;">Back</a></button>
			</div>
			<?php
		}
		else{
			?>
			<div class="list-group-item list-group-item-action list-group-item-success">No Pending Addmition Found</div>
			<?php
		}
	}
	if(isset($_POST['all_conf'])){
		if($s->conf_student_fetch()){
			?>
			<div style="background: #660066;" class="text-center">
					<h3><b><strong style="color: white;">ALL CONFIRMED ADDMITION</strong></b></h3>
				</div>
			<?php
			foreach ($s->data as $key ) {
				?>
				
				<div class="list-group-item list-group-item-action list-group-item-success">
								<?php echo "name:-> ".$key['name']." | Email:-> ".$key['email']." | Mobile:-> ".$key['mobile']." | DOB:-> ".$key['dob']." | Userid:-> ".$key['userid']." | Status:- Addmition Confirmed"; ?>
								<br>
								<button class=" ml-1 btn btn-primary">
										<a href="sdetails.php?pro=profile&i=<?php echo $key['img']; ?>&n=<?php echo $key['name']; ?>&e=<?php echo $key['email']; ?>&m=<?php echo $key['mobile']; ?>&dob=<?php echo $key['dob']; ?>&uid=<?php echo $key['userid']; ?>&status=1&pwd=<?php echo $key['password']; ?>&steam=<?php echo $key['steam']; ?>&class=<?php echo $key['class']; ?>&father=<?php echo $key['father']; ?>&addr=<?php echo $key['address']; ?>&doa=<?php echo $key['doa']; ?>&y<?php echo $key['year']; ?>&roll=4 " style="color: white;">
											Profile
										</a>
									</button>
								<button class="ml-1 btn btn-danger">
									<a href="sdetails.php?dlt=delete&roll=4&id=<?php echo $key['userid']; ?>" style="color: white;">
										Delete Student
									</a>
								</button>
								<?php 
									if($key['access']==0){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?access=access&roll=4&id=<?php echo $key['userid']; ?>" style="color: white;">Allow Online Class Access</a></button>
										<?php
									}
									if($key['access']==1){
										?>
											<button class="btn btn-dark"><a href="sdetails.php?disable=disable&roll=4&id=<?php echo $key['userid']; ?>" style="color: white;">Disable Live Classes</a></button>
										<?php
									}
								?>
							</div>
							<hr style="background-color:black;">
				<?php
				# code...
			}
			?>
			<div class="text-center">

				<button class="btn btn-success mt-5"><a href="list.php" style="color: white;">Back</a></button>
			</div>
			<?php
		}
		else
		{
			echo "No confirmed addmition";
		}
	}
	?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	</body>
	</html>
	<?php
}
else
{
	$use->link('../index.php');
}
?>