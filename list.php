<!DOCTYPE html>
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

</head>
<body style="background-color: black; padding: 0px; margin: 0px;">

    <div class="container">
        <div style="background-color: #660066;" class="text-center">
			<h3 class="" style="font-family: 'Fredericka the Great', cursive; color: white;">LIST OF TUTORIALS </h3>
        </div>
        <div class="card bg-light mb-3" style="max-width: 100%;">
		  <div class="card-header text-center">TUTORIALS</div>
		    <div class="card-body row">
            <?php 
                include "class/user.php";
                if(isset($_SESSION['student'])){
                    $list=new user;
                    if(isset($_POST['online'])){
                        extract($_POST);
                        if($list->video_fetch($title)){
                            foreach($list->data as $cours){
                                ?>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="<?php echo $cours['video_img']; ?>" >
                                    <div class="card-body">
					
                                        <h5 class="card-title"><?php echo $cours['title']; ?></h5>
                                        
                                        <h5 class="card-title">Course:- <?php echo $cours['course']; ?> </h5>
                                        <h5 class="card-title">Steam:- <?php echo $cours['steam']; ?> </h5>
                                        <h5 class="card-title">BY:- <?php echo $cours['Teacher_name']; ?></h5>
                                        <h5 class="card-title">Duration:- <?php echo $cours['durection']; ?></h5>
                                        <h5 class="card-title">Uploaded on:- <?php echo $cours['upload_time']; ?></h5>
                                        <h5 class="card-title">Description:- <?php echo $cours['discription']; ?></h5>

                                        <div class="text-center">
                                            <a href="buffer.php?i=<?php echo $cours['video_img']; ?>&t=<?php echo $cours['title']; ?>&c=<?php echo $cours['course']; ?>&s=<?php echo $cours['steam']; ?>&teach=<?php echo $cours['Teacher_name']; ?>&d=<?php echo $cours['durection']; ?>&u=<?php echo $cours['upload_time']; ?>&desc=<?php echo $cours['discription']; ?>&verify=ok&path=<?php echo $cours['video_link']; ?>&ass=<?php echo $cours['assignment']; ?>" class="btn btn-primary">PLAY NOW</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <?php
                            }
                            
                        }
                        if($list->assignmet_fetch($title)){
                            ?>
                            <div style="background-color: #660066;" class="text-center">
                                <h3  style="font-family: 'Fredericka the Great', cursive; color: white;">Assignments </h3>
                            </div>
                            <?php
                            foreach($list->asign as $ass){
                                ?>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                    <div class="card-body">
					
                                        <h5 class="card-title"><?php echo $ass['name']; ?></h5>
                                        
                                        <h5 class="card-title">Uploaded On:- <?php echo $ass['uploadon']; ?> </h5>
                                        <h5 class="card-title">Steam:- <?php echo $cours['steam']; ?> </h5>
                                    </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    if(isset($_GET['online'])){
                       $title=$_GET['online'];
                        if($list->video_fetch($title)){
                            foreach($list->data as $cours){
                                ?>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="<?php echo $cours['video_img']; ?>" >
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $cours['title']; ?></h5>
                                        
                                        <h5 class="card-title">Course:- <?php echo $cours['course']; ?> </h5>
                                        <h5 class="card-title">Steam:- <?php echo $cours['steam']; ?> </h5>
                                        <h5 class="card-title">BY:- <?php echo $cours['Teacher_name']; ?></h5>
                                        <h5 class="card-title">Duration:- <?php echo $cours['durection']; ?></h5>
                                        <h5 class="card-title">Uploaded on:- <?php echo $cours['upload_time']; ?></h5>
                                        <h5 class="card-title">Description:- <?php echo $cours['discription']; ?></h5>
    
                                        <div class="text-center">
                                            <a href="buffer.php?i=<?php echo $cours['video_img']; ?>&t=<?php echo $cours['title']; ?>&c=<?php echo $cours['course']; ?>&s=<?php echo $cours['steam']; ?>&teach=<?php echo $cours['Teacher_name']; ?>&d=<?php echo $cours['durection']; ?>&u=<?php echo $cours['upload_time']; ?>&desc=<?php echo $cours['discription']; ?>&verify=ok&path=<?php echo $cours['video_link']; ?>" class="btn btn-primary">PLAY NOW</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        if($list->assignmet_fetch($title)){
                            ?>
                            <div style="background-color: #660066;" class="text-center">
                                <h3  style="font-family: 'Fredericka the Great', cursive; color: white;">Assignments </h3>
                            </div>
                            <?php
                            foreach($list->asign as $ass){
                                ?>
                                <div class="col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                    <div class="card-body">
					
                                        <h5 class="card-title"><?php echo $ass['name']; ?></h5>
                                        
                                        <h5 class="card-title">Uploaded On:- <?php echo $ass['uploadon']; ?> </h5>
                                        <h5 class="card-title">Steam:- <?php echo $cours['steam']; ?> </h5>
                                        <a href="<?php echo $ass['path']; ?>"><button class="btn btn-primary">Download</button></a>
                                    </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        
                    }
                }
                
            
            ?>
           
            </div>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1ad2334d42.js"></script>
<body>
</html>