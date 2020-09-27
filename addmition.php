<?php include 'class/user.php'; 
    $wrk=new admin;
    $status=0;
	if(isset($_POST['apply_now']) && $_POST['apply_now']=='apply')
	{	
            $add=new user;
            if($add->verifyEmail($_POST['email'])){
               $status=1;
            }
            else
            {
		$tmp_img=$_FILES['img']['tmp_name'];
		$n=rand(1000,99999);
		$img_path="img/".$n.".jpg";
		if(move_uploaded_file($tmp_img, $img_path)){

                	if($add->student_addmition($_POST,$img_path))
                	{
                    		$add->url('addmition.php?addmition=success');
               		 }
                	else
                	{
                    		echo "Somthing Went wrong";
                	}
		}
		else
		{
			echo "uploading image error";
		}
                
            }
			
	}
	elseif(isset($_GET['addmition']) && $_GET['addmition']=='success')
	{
		?>
		<script type="text/javascript">
			alert("Dear Student Your Registration Successfully completed. We contact with you soon.");
		</script>
		<?php
	}
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
    
<?php include "header.php"; ?>
    <!-- latest_coures_area_start  -->
    <div class="admission_area">
        <div class="admission_inner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-7">
                        <div class="admission_form">
                            <h3>Apply for Admission</h3>
                            <?php if($status==1){
                                ?>
                                    <h5 style="color:white;">This Email Already register with another student.</h5>

                                <?php

                            }
                            ?>
                            <form action="addmition.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Student Name" name="sname" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Father's Name" name="fname" required="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="single_input">
						<small style="color:white;">Date of Birth</small>
                                            <input type="date" class="boxed-btn5"  name="dob" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="email" placeholder="Email Address" name="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Mobile" name="mobile" required="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Permanent Address" name="addr" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <select class="boxed-btn5" name="steam" required="">
                                            <option value="NULL">STREAM</option>
                                            <?php 
                                                if($wrk->fetch_steam()){
                                                    foreach($wrk->inst as $key){
                                                        ?>
                                                        <option value="<?php echo $key['steam']; ?>"><?php echo $key['steam']; ?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <select class="boxed-btn5" name="class" required="">
                                                <option value="NULL">COURSE</option>
						<?php 
							$c=new user;
							if($c->courses_fetch()){
								foreach($c->cources_var as $cor){
									?>
										<option value="<?php echo $cor['cource_title']; ?>"><?php echo $cor['cource_title']; ?></option>

									<?php
								}
							}
						?>
                                            </select>
                                        </div>
                                    </div>
				    <div class="col-md-6">
                                        <div class="single_input mt-4">
						<small style="color:white;">Your Image</small>
                                            <input type="file" class="boxed-btn5 " placeholder="IMAGE" name="img" required="">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="apply_btn mt-5">
                                            <button class="boxed-btn3" type="submit" name="apply_now" value="apply">Apply Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ latest_coures_area_end -->


    

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