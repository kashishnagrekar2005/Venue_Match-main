<?php 
session_start();
 $c = mysqli_connect("localhost","root","","project");
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/about-us-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Venue Match</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="wedding-icon-font/flaticon.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!-- Favicon icon -->
    <!--<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">-->
       <link rel="stylesheet" type="text/css" href="css/dzsparallaxer.css">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
     <!-- header -->
   <?php
   include "Header.php";
   ?>
    <!-- /.header -->
     <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">About Us</h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            
                           <!-- <li class="breadcrumb-item active text-white" aria-current="page">About us</li>-->
                        </ol>
                    </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->     
    </div>
   
    <!-- about-descriptions -->
    <div class="space-medium pb-0">
        <div class="container">
            <div class="row">
                <!--  about-details  -->
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 mb60">
                    <div class="about-descriptions text-center">
                        
                        <h2>Who we are</h2>
                        <p class="lead">Welcome to Venue Match, your go-to destination for seamless venue location and booking services. 
                            We understand that finding the perfect venue for your events can be a daunting task, and that's where we come in.
                             Our platform is designed to simplify the entire process,  making it easy for you to discover and reserve the ideal
                              space for your gatherings.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-xl-0 pr-xl-0">
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body metrics-v3 metrics">
                                <div class="metrics-icon"><img src="images/metrics-icon-1.png" alt="" class="img-fluid"></div>
                                <h1 class="metrics-title">Our Mission</h1>
                                <h2 class="metrics-subtitle"></h2>
                                <p>At Venue Match, our mission is to connect individuals and businesses with the perfect venues that suit
                                     their unique needs and preferences.
                                     <!--We strive to make the venue selection and booking process hassle-free, efficient, and enjoyable.--></p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body metrics metrics-v3">
                                  <div class="metrics-icon"><img src="images/metrics-icon-2.png" alt="" class="img-fluid"></div>
                                <h1 class="metrics-title ">Our Purpose</h1>
                                <h2 class="metrics-subtitle "></h2>
                                 <p>Our user-friendly platform is designed with you in mind. Easily search, compare, and book venues with just a few clicks.
                                     <!--We believe in providing a seamless and intuitive experience for our users.--></p>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-body metrics metrics-v3">
                                  <div class="metrics-icon"><img src="images/metrics-icon-3.png" alt="" class="img-fluid"></div>
                                <h1 class="metrics-title">Our Vision</h1>
                                <h2 class="metrics-subtitle"></h2>
                                <p> All our venue listings provide detailed information, including photos, amenities, pricing, and reviews, empowering you
                                     to make informed decisions.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- /.venue-categoris-section-->
      <div class="dzsparallaxer auto-init out-of-bootstrap" data-options='{ direction: "normal"}' style="height: 553px;">
         <div class="divimage dzsparallaxer--target" style="width: 100%; height: 900px; background-image: url(images/parallax-img-2.jpg)">
         </div>
         
      </div>
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="section-title">
                        <h2>What we do</h2>
                        <p>Our Website provides a wide list of options tailored to your desires</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card service-block">
                                <div class="card-body p-5 ">
                                <div class="card-img">
                                    <div class="service-img">
                                        <img src="images/service-img-1.png" alt="" class="img-fluid">
                                    </div>
                                    

                                </div>
                                <h3 class="service-title">Grow your business </h3>
                                <p> </p>
                                <a href="../vendor/template/registration.php" class="btn btn-outline-default btn-lg">Start Business Listing</a>
                            </div>

                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card service-block">
                                <div class="card-body p-5 ">
                                <div class="card-img">
                                    <div class="service-img">
                                        <img src="images/service-img-2.png" alt="" class="img-fluid">
                                    </div>
                                    

                                </div>
                                <h3 class="service-title">Wedding planning starts </h3>
                                <p></p>
                                <a href="registration.php" class="btn btn-outline-default btn-lg">Start Your Planning</a>
                            </div>

                            </div>

                        </div>
                    </div>
                </div>
                  
            </div>
        </div>
    </div>
    <!-- /.feature-section -->
  <!--  <div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12 ">
                    <div class="section-title">
                        <h2>Core Values</h2>
                        <p>Sed iaculis elit sed lectus molestie dictum.Integer vehicula malesuada euismod.
                            <br> Vivamus tellus tortor, accumsan id massa quis.</p>
                    </div>
                </div>
            </div>
           <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12 ">
                    <ul class="list-group list-group-flush value-section">
                        <li class="list-group-item pl-0 pr-0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <h3 class="heading-btm-line">Leadership</h3>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                    <p><strong>The courage to shape a better future.</strong> Phasellus efficitur auctor felis, sit amet aliquet metus ullamcorper at. Aliquam rhoncus tempor erat quis accumsan.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <h3 class="heading-btm-line">Perfactions</h3>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                    <p>Phasellus efficitur auctor felis, <strong>sit amet aliquet metus ullamcorper at</strong>. Aliquam rhoncus tempor erat quis accumsan.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <h3 class="heading-btm-line">Focus on Impact</h3>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                    <p>Fusce nec arcu ipsum. Aenean sit amet ante ante. <strong>Nulla ultricies vehicula purus id malesuada</strong>.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <h3 class="heading-btm-line">Create a Cluture</h3>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                    <p>Phasellus efficitur auctor felis, sit <strong>amet aliquet metus ullamcorper at</strong>. Aliquam rhoncus tempor erat quis accumsan.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <h3 class="heading-btm-line">Supporting Sustainability</h3>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                    <p>Maecenas commodo erat sit amet luctus aliquet. <strong>Maecenas ut mauris id orci lobortis tincidunt</strong>.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <h3 class="heading-btm-line">Passion</h3>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                    <p>Nullam placerat, leo at vulputate iaculis, <strong>arcu dolor eleifend lorem, sed sodales</strong> ligula sem ornare ligula.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="space-medium">
        <div class="container ">
            <div class="row ">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="">Work with us - Career</h3>
                            <div class="mb20">
                                <img src="images/workplace-img-1.jpg" alt="" class="img-fluid">
                            </div>
                            <p>Nullam placerat, leo at vulputate iaculis, arcu dolor eleifend lorem, sed sodales ligula sem ornare ligula.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn-default-link">Our Open Position</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="">Our Leadership Principles</h3>
                            <div class="mb20">
                                <img src="images/workplace-img-2.jpg" alt="" class="img-fluid">
                            </div>
                            <p>Arcu dolor eleifend loremullam placerat, leo at vulputat a sed sodales ligula sem ornare ligulaculis.</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn-default-link">Meet The Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
   
    <?php
    include "Footer.php";
    ?>