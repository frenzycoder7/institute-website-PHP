
<?php include 'class/user.php'; 
$allcourses=new user;
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education</title>
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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Our Best Faculties</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- popular_program_area_start  -->
    <div class="popular_program_area section__padding program__page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>OUR Best Faculties</h3>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php 
            	if($allcourses->admin_fetch())
            	{
            		foreach ($allcourses->admin as $ad) 
              					{ ?>
			                        <div class="col-lg-4 col-md-6">
			                            <div class="single__program">
			                                <div class="program_thumb">
			                                    <img src="img/faculty/<?php echo $ad['img']; ?>" alt="">
			                                </div>
			                                <div class="program__content">
			                                    <span><?php echo $ad['name']; ?></span>
			                                    <h4><?php echo $ad['work']; ?></h4>
                                                <h5><?php echo $ad['email']; ?></h5>
                                                <h5><?php echo $ad['code']." ".$ad['num']; ?></h5>
			                                    <p><?php echo $ad['query']; ?></p>
			                                    <a href="#" class="boxed-btn5">Contact</a>
			                                </div>
			                            </div>
			                        </div>
			                       <?php
			                    }
            	}
            	else
            	{
            		?>
            				<div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <h3>No Cources Found Currently..</h3>
                                </div>
                            </div>
                    <?php
            	}
           	?>
           </div>
            
        </div>
    </div>
    <!-- popular_program_area_end -->

    <!-- footer start -->
	<?php include "footer.php"; ?>    
    <!-- footer end  -->


    <!-- JS here -->
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