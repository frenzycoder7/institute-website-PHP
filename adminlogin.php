<!DOCTYPE html>
<html>
<head>
	<title>TARGET CLASSES | Admin Login</title>
	<!--======================== bootstrap  start ====================-->
	<link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
   <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/nice-select/nice-select.css">
    <!--======================== bootstrap end ====================-->


    <!--======================== peg css start ====================-->

    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <!--======================== peg css end ====================-->

    <!--======================== text fonts ====================-->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <!--======================== text fornts end ====================-->
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
<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
<style>
.bg{
background-image: url('img/bbook.jpg');
height:100%;
background-position: center; 
background-size:cover; 
background-repeat: no-repeat;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body style="height:100%;">
	<!--<div class="container-fluid" id="wrapper" style="background: url('img/blackbook.jpg');">
		<?php
			if(isset($_GET['run']) && $_GET['run']=='failed')
			{
				?>
				<script type="text/javascript">
					alert("Wrong Email or Password");
				</script>
				<?php
			}
		 ?>
		<div class="row" >
			<div class="col-lg-12">
				<center> 
					<div id="card" align="text-center">
						<h2 class="text-center" style="font-family: 'Lobster', cursive; color: blue;">
							Admin Login
						</h2>
						<hr style="color: darkblue;">
						<center>
							<form action="admin/admin.php" method="post">
								<br><br>
								<label>User ID</label>&nbsp;
								<input type="text" name="usr_id" placeholder="Enter User Id" class="btn btn-outline-info ">
								<br><br><br>
								<label>Password</label>&nbsp;
								<input type="Password" name="usr_pwd" placeholder="Enter Password" class="btn btn-outline-info ">
								<br><br><br><br>
								<input type="submit" name="submit" value="Log In" class="btn btn-success text-center">
							</form>
						</center>
					</div>
				</center>
			</div>
		</div>
	</div>-->
<?php
			if(isset($_GET['run']) && $_GET['run']=='failed')
			{
				?>
				<script type="text/javascript">
					alert("Wrong Email or Password");
				</script>
				<?php
			}
		 ?>

<div class="hidden-md-down bg">
<div class=" container text-center" style="padding:20%;">
	<div class="text-center " style="background-color: #660066; ">
		<h1 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">ADMIN LOGIN</h1>
	</div>
	<form action="admin/admin.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="exampleInputEmail1">USER ID</label>
			<input type="text" name="usr_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User ID" >
			<small id="emailHelp" class="form-text text-muted">User ID of Admin.</small>
		</div>
		<div class="form-group">
			 <label for="exampleInputPassword1">Password</label>
			 <input type="password" name="usr_pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<input type="submit" name="Login" class="btn btn-primary"/>
	</form>
<hr style="background-color: black;">
</div>
</div>
<div class="hidden-lg-up bg">
<div class=" container text-center" style="padding-top:55%; padding-bottom:55%;">
	<div class="text-center " style="background-color: #660066; ">
		<h1 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">ADMIN LOGIN</h1>
	</div>
	<form action="admin/admin.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="exampleInputEmail1">USER ID</label>
			<input type="text" name="usr_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User ID" >
			<small id="emailHelp" class="form-text text-muted">User ID of Admin.</small>
		</div>
		<div class="form-group">
			 <label for="exampleInputPassword1">Password</label>
			 <input type="password" name="usr_pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<input type="submit" name="Login" class="btn btn-primary"/>

	</form>
<hr style="background-color: black;">
</div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>