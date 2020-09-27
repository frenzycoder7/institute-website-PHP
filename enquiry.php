<?php
  include 'class/user.php';
 
  
  $course_=new user;
  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Enquiry</title>
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


    <div data-scroll-index='1' class="admission_area">
        <div class="admission_inner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-7">
                        <div class="admission_form">
                            <h3>Enquiry for Admission</h3>
                            <form action="mail.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Name" name="name" >
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Last Name" >
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Phone Number" name="number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="text" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <select class="boxed-btn5" name="quli">
                                                <option value="NULL">Qualification</option>
                                                <option value="10th">10th</option>
                                                <option value="11th">11th</option>
                                                <option value="12th">12th</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <select class="boxed-btn5" name="course">
                                                <option>Course</option>
                                                <?php
                                                    if($course_->courses_fetch())
                                                    {
                                                        foreach ($course_->cources_var as $key) 
                                                        {
                                                            ?>
                                                                <option value="<?php echo $key['cource_title']; ?>"><?php echo $key['cource_title']; ?> &nbsp; | &nbsp; Rs. <?php echo $key['cource_fee']; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <option>Currently No Course Avaliable</option>
                                                        <?php 
                                                    }

                                                ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_input">
                                            <textarea cols="30" placeholder="Write an Application" rows="10" name="query"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="apply_btn">
                                            <button class="boxed-btn3" type="submit" name="enqu">Enquiry Now</button>
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
</body>
</html>