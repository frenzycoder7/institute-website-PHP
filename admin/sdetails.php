<?php 
	include '../class/user.php';
	$other=new admin();
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
	if(isset($_SESSION['admin'])){
		if(isset($_GET)){
			if(isset($_GET['pro'])=='profile')
			{
				//profile design area.......

?>
<div class="container mt-2">
			<div style="background-color: #660066;" class="text-center">
				<h3 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">STUDNT PROFILE</h3>
			</div>
			<div class="row">

				<div class="col-lg-12">
					<div class="card mb-3" style="max-width: 100%; ">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src="../<?php echo $_GET['i']; ?>" class="card-img" alt="..." style="max-height: 400px; max-width: 400px;">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card-title"><?php echo $_GET['n']; ?></h5>
					        <p class="card-text">TARGET CLASS (PATNA)</p>
					        <h5 class="card-title"><b>Email:-</b> <b><?php echo $_GET['e']; ?></b> </h5>
							<h5 class="card-title"><b>Phone:-</b> <b><?php echo $_GET['m']; ?></b></h5>
							<h5 class="card-title"><b>Date of Birth:-</b> <b><?php echo $_GET['dob']; ?></b></h5>
							<h5 class="card-title"><b>Father:-</b> <b><?php echo $_GET['father']; ?></b></h5>
							<h5 class="card-title"><b>Steam:-</b> <b><?php echo $_GET['steam']; ?></b></h5>
							<h5 class="card-title"><b>Class:-</b> <b><?php echo $_GET['class']; ?></b></h5>
					        <h5 class="card-title"><b>Student ID:-</b> <b><?php echo $_GET['uid']; ?></b></h5>
					        <h5 class="card-title"><b>Password:-</b> <b><?php echo $_GET['pwd']; ?></b></h5>
					        <h5 class="card-title"><b>Address:-</b> <b><?php echo $_GET['addr']; ?></b></h5>
					        <h5 class="card-title"><b>Addmition Status:-</b> <b><?php  if($_GET['status']){
								?>
								<b style="color: green;">Confirm</b>
								<?php
							} 
							else{
								?>
									<b style="color: red;">Pending</b>
								<?php
							}
							?></b></h5>
					        <h5 class="card-title"><b>Date of Addmition Application:-</b> <b><?php echo $_GET['doa']; ?></b></h5>
				
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
<?php



				//Back idea start here.....
				if($_GET['roll']==1){
					?>
					<form action="searchres.php" method="post" class="mt-5 text-center">
						<input class="btn btn-success" type="submit" name="yrs" value="back">
						<input type="hidden" name="cat" value="<?php echo $_GET['c']; ?>">
						<input type="hidden" name="key" value="<?php echo $_GET['key']; ?>">
					</form>
				<?php
				}
				elseif($_GET['roll']==2){
					?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="all_list" value="BACK">
					</form>
					<?php
				}
				elseif ($_GET['roll']==3) 
				{?>
					<form action="searchres.php" method="post" class="text-center">
						<input class="btn btn-success" type="submit" name="pending" value="BACK">
					</form>
					<?php
				}
				elseif ($_GET['roll']==4) {
					
					# code...
					?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="all_conf" value="BACK">
					</form>
					<?php
				}
				
			}
			elseif (isset($_GET['dlt'])=='delete') {
				

				# delete operation
				$id=$_GET['id'];
				if($other->dlt_usr($id)){
					?>
					<h2>STUDENT DELETED SUCCESSFULLY....</h2>
					<?php
				}

				//Back idea for delete
				if($_GET['roll']==1){
					$c=$_GET['c'];
					$key=$_GET['key'];
					?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="yrs" value="back">
						<input type="hidden" name="cat" value="<?php echo $c; ?>">
						<input type="hidden" name="key" value="<?php echo $key; ?>">
					</form>
				<?php
				}
				elseif($_GET['roll']==2){
					?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="all_list" value="BACK">
					</form>
					<?php
				}
				elseif ($_GET['roll']==3) 
				{?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="pending" value="BACK">
					</form>
					<?php
				}
				elseif ($_GET['roll']==4) {
					
					# code...
					?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="all_conf" value="BACK">
					</form>
					<?php
				}
				elseif ($_GET['roll']==5) {
					?>
					<div class="text-center mt-5">
						<button class="btn btn-success"><a href="list.php" style="color: white;">BACK</a></button>
					</div>
					<?php
				}
			}
			elseif(isset($_GET['conf'])=='confirm'){
				
				$id=$_GET['id'];
				if($other->confirm_addmition_usr($id)){
					?>
					<div class="text-center">
						<h2> ADDMITION IS CONFIRMED FOR STUDENT { <?php echo $id; ?> }</h2>
					</div>
					<?php
				}

				if($_GET['roll']==1){
					$c=$_GET['c'];
					$key=$_GET['key'];
					?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="yrs" value="back">
						<input type="hidden" name="cat" value="<?php echo $c; ?>">
						<input type="hidden" name="key" value="<?php echo $key; ?>">
					</form>
				<?php
				}
				elseif($_GET['roll']==2){
					?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="all_list" value="BACK">
					</form>
					<?php
				}
				elseif ($_GET['roll']==3) 
				{?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="pending" value="BACK">
					</form>
					<?php
				}
				elseif ($_GET['roll']==4) {
					
					# code...
					?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="all_conf" value="BACK">
					</form>
					<?php
				}
				elseif ($_GET['roll']==5) {
					$key=$_GET['key'];
					$cat=$_GET['cat'];
					?>
					<form action="searchres.php" method="post" class="text-center mt-5">
						<input class="btn btn-success" type="submit" name="search" value="back">
						<input type="hidden" name="cat" value="<?php echo $cat; ?>">
						<input type="hidden" name="key" value="<?php echo $key; ?>">
					</form>
					<?php
					# code...
				}
			}
			elseif(isset($_GET['access']) && $_GET['access']=='access'){
				if($other->allow_video_access($_GET['id'])){
					?>
					<div class="text-center">
						<h1> Online Class Area is now Activated for This student<h1>
					</div>
					<?php
					if($_GET['roll']==1){
						$c=$_GET['c'];
						$key=$_GET['key'];
						?>
						<form action="searchres.php" method="post" class="text-center mt-5">
							<input class="btn btn-success" type="submit" name="yrs" value="back">
							<input type="hidden" name="cat" value="<?php echo $c; ?>">
							<input type="hidden" name="key" value="<?php echo $key; ?>">
						</form>
					<?php
					}
					elseif($_GET['roll']==2){
						?>
						<form action="searchres.php" method="post" class="text-center mt-5">
							<input class="btn btn-success" type="submit" name="all_list" value="BACK">
						</form>
						<?php
					}
					elseif ($_GET['roll']==3) 
					{?>
						<form action="searchres.php" method="post" class="text-center mt-5">
							<input class="btn btn-success" type="submit" name="pending" value="BACK">
						</form>
						<?php
					}
					elseif ($_GET['roll']==4) {
						
						# code...
						?>
						<form action="searchres.php" method="post" class="text-center mt-5">
							<input class="btn btn-success" type="submit" name="all_conf" value="BACK">
						</form>
						<?php
					}
					elseif ($_GET['roll']==5) {
						$key=$_GET['key'];
						$cat=$_GET['cat'];
						?>
						<form action="searchres.php" method="post" class="text-center mt-5">
							<input class="btn btn-success" type="submit" name="search" value="back">
							<input type="hidden" name="cat" value="<?php echo $cat; ?>">
							<input type="hidden" name="key" value="<?php echo $key; ?>">
						</form>
						<?php
						# code...
					}
				}
			}
			elseif(isset($_GET['disable']) && $_GET['disable']=='disable'){
				#echo "hello";
				#print_r($_GET);
				if($other->disable_live_class($_GET['id'])){
					?>
					<div class="text-center">
						<h1>Live Classes successfully disable for this student</h1>
					</div>
					<?php
					if($_GET['roll']==1){
						$c=$_GET['c'];
						$key=$_GET['key'];
						?>
						<form action="searchres.php" method="post" class="text-center mt-5">
							<input class="btn btn-success" type="submit" name="yrs" value="back">
							<input type="hidden" name="cat" value="<?php echo $c; ?>">
							<input type="hidden" name="key" value="<?php echo $key; ?>">
						</form>
					<?php
					}
					elseif($_GET['roll']==2){
						?>
						<form action="searchres.php" method="post" class="text-center mt-5">
							<input class="btn btn-success" type="submit" name="all_list" value="BACK">
						</form>
						<?php
					}
					elseif ($_GET['roll']==3) 
					{?>
						<form action="searchres.php" method="post" class="text-center mt-5">
							<input class="btn btn-success" type="submit" name="pending" value="BACK">
						</form>
						<?php
					}
					elseif ($_GET['roll']==4) {
						
						# code...
						?>
						<form action="searchres.php" method="post" class="text-center mt-5">
							<input class="btn btn-success" type="submit" name="all_conf" value="BACK">
						</form>
						<?php
					}
					elseif ($_GET['roll']==5) {
						$key=$_GET['key'];
						$cat=$_GET['cat'];
						?>
						<form action="searchres.php" method="post" class="text-center mt-5">
							<input class="btn btn-success" type="submit" name="search" value="back">
							<input type="hidden" name="cat" value="<?php echo $cat; ?>">
							<input type="hidden" name="key" value="<?php echo $key; ?>">
						</form>
						<?php
						# code...
					}
				}
			}
		}
	}else
	{
		echo "ERROR 404! NOT FOUND";
	}
	?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<?php
?>