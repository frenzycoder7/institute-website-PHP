<?php 
    include '../class/user.php';
    $use=new admin;
    if(isset($_SESSION['admin'])){
        ?>
<html>
    <head>
    <title>TARGET CLASSES |  ONLINE CLASS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!---------------Google fonts start------------------>
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
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
    <body style="background-color: snow; padding: 0px; margin: 0px;">
        
       <div class="container">
            <div class="text-center">
                <div style="background-color:#660066; color: white">
                    <h3><b><strong>Search Students<strong></b></h3>
                </div>
                <form action="searchres.php" method="post">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <input type="text" class="btn btn-light mt-5 form-control" name="key" style="border: 1px solid;" placeholder="Enter Mobile/Email ID" require="">
                        <small id="emailHelp" class="form-text text-muted"><b>Search Student By Email ID/MOBILE</b></small>
                    </div>
                    <div class="col-lg-3 text-center">
                        <select class="btn btn-success mt-5 form-control" name="cat" require="">
                            <option value="0">SELECT CATEGORY</option>
                            <option value="1">SEARCH BY MOBILE</option>
                            <option value="2">SEARCH BY EMAIL</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted"><b>Search category</b></small>
                    </div>
                    <div class="col-lg-3 text-center">
                        <input type="submit" name="search" class="btn btn-success mt-5 form-control" value="SEARCH">
                    </div>
                </div>
                </form>
                <hr style="background-color:black;">

                <form action="searchres.php" method="post">
                <div class="row">
                    <div class="col-lg-9">
                        <input type="text" name="key" class="btn btn-light mt-5 form-control" style="border: 1px solid;" placeholder="Enter YEAR" require="">
                        <small id="emailHelp" class="form-text text-muted"><b>SEARCH STUDENT BY YEAR OF ADDMITION</b></small>
                    </div>
                    <div class="col-lg-3 text-center" >
                        <input type="submit" name="yrs" class="btn btn-success mt-5 form-control" value="Search">
                    </div>
                </div>
                </form>
                <hr style="background: black;">
                <div class="row">
                    <div class="col-lg-6 text-center" >
                        <form action="searchres.php" method="post">
                            <input type="submit" class="btn btn-success mt-5 form-control" name="all_list" value="LIST ALL STUDENT">
                        </form>
                    </div>
                    <div class="col-lg-6 text-center" >
                        <form action="searchres.php" method="post">
                            <input type="submit" class="btn btn-success mt-5 form-control" name="pending" value="LIST OF ALL PENDING ADDMITION">
                        </form>
                    </div>
                </div>
                <hr style="background: black;">
                <div class="row">
                    <div class="col-lg-6 text-center" >
                        <form action="searchres.php" method="post">
                            <input type="submit" class="btn btn-success mt-5 form-control" name="all_conf" value="LIST ALL CONFIRMED ADDMITION">
                        </form>
                    </div>
                    
                </div>
                
            </div>
       </div>
	<div classs="text-center mt-5">
		<button class="btn btn-success"><a href="index.php" style="color:white;">Back</a></button>
	</div>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1ad2334d42.js"></script>

    </body>
</html>

        <?php
    }
    else
    {
        $use->link('../index.php');
    }
?>
