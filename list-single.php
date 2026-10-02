<?php
session_start();
$c = mysqli_connect("localhost", "root", "", "project");
$vid = $_GET['vid'];

$sq = mysqli_query($c, "select * from tbl_venuemaster where venue_id='{$vid}'");

$data = mysqli_fetch_array($sq);

if (isset($_POST['submit'])) {
    $review = $_POST['review'];
    $rating = $_POST['rating'];
    //$rating1 = $_POST['rating1'];
    $vid = $_GET['vid'];
    $uid = $_SESSION['uid'];
    $date = date('Y-m-d');
    $q = mysqli_query($c, "insert into tbl_feedback(venue_id,user_id,feedback_date,feedback_details,feedback_rating) values ('$vid','$uid','$date','$review','$rating')");

    if ($q) {
        echo "<script>alert('Thanks for your Feedback!');</script>";
    }
}

if (isset($_POST['submit1'])) {
    $cdate = date('Y-m-d');
    $date = $_POST['date'];
    $duration = $_POST['duration'];
    $detail = $_POST['details'];
    $vid = $_GET['vid'];
    $uid = $_SESSION['uid'];
    $status = "Pending";

    $q = mysqli_query($c, "insert into tbl_booking(booking_currentdate,booking_date,booking_duration,venue_id,booking_details,booking_status,user_id) 
    values ('{$cdate}','{$date}','{$duration}','{$vid}','{$detail}','{$status}','{$uid}')");

    if ($q) {
        echo "<script>alert('Request for booking done Sucessfully');window.location='thankyou.php';</script>";
        //header("location:thankyou.php");
    }
}


if (!isset($_GET['vid'])) {
    header("location:list-grid-view.php");
}
$id = $_GET['vid'];
$pq = mysqli_query($c, "select * from tbl_venuemaster where venue_id = $id");
$pdata = mysqli_fetch_array($pq);
?>


<!DOCTYPE html> 
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/list-single-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:52 GMT -->

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
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!--jquery-ui  -->
    <link href="css/jquery-ui.css" rel="stylesheet">
    <!--jquery-rateyo  -->
    <link href="css/jquery.rateyo.css" rel="stylesheet">
    <!-- Template magnific popup gallery -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- OwlCarosuel CSS -->
    <link href="css/owl.carousel.css" type="text/css" rel="stylesheet">
    <link href="css/owl.theme.default.css" type="text/css" rel="stylesheet">
    <!-- Favicon icon -->
    <!--<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">-->
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
    <div class="list-single-carousel">
        <div class="owl-carousel owl-theme owl-second">


            <?php

            $imagq = mysqli_query($c, "select * from tbl_venueimages where venue_id = '{$vid}'");
            //$imagedata = mysqli_fetch_array($imagq);
            //$imagedata = print_r($imagedata);
            while ($imagedata = mysqli_fetch_array($imagq)) {
                echo "<div class='item'>
 <img style='width:350px;height:250px;' src='adminpanel/uploads/{$imagedata['venue_imagepath']}' />
    </div>";
            }

            ?>

            <!-- <div class="item">
                <img src="images/vendor-carousel-img-1.jpg" alt="">
            </div>--->


        </div>
    </div>
    <div class="list-single-second">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="vendor-head text-left">
                            <h2 class="mb10"><?php
                                                echo $data['venue_title'];
                                                ?></h2>
                            <p class="vendor-address"><?php echo
                                                        $data['venue_address'];
                                                        ?>
                                <!--<a href="payment.php?vid=<?php //echo $data['venue_id']; ?>">BOOK NOW CLICK HERE</a>-->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="vendor-head text-xl-right">
                            <a href="#" class="btn-default-wishlist"><i class="fa fa-heart"></i> <span class="pl-1">Add To Wishlist</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vendor-meta bg-white border m-0 ">
                <div class="vendor-meta-item vendor-meta-item-bordered">
                    <span class="vendor-price">
                        ₹<?php echo $data['venue_price']; ?>
                    </span>
                    <span class="vendor-text">Start From</span>
                </div>
                <div class="vendor-meta-item vendor-meta-item-bordered">
                    <span class="vendor-guest">
                        <?php echo $data['venue_capacity']; ?> </span>
                    <span class="vendor-text">Guest</span>
                </div>
                <div class="vendor-meta-item vendor-meta-item-bordered">
                    <span class="rating-star">
                        <i class="fa fa-star rated"></i>
                        <i class="fa fa-star rated"></i>
                        <i class="fa fa-star rated"></i>
                        <i class="fa fa-star rated"></i>
                        <i class="fa fa-star rate-mute"></i>
                    </span>
                    <span class="rating-count vendor-text">(20)</span>
                </div>
            </div>
        </div>
    </div>
    <div class="vendor-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                    <!--vendor-details -->


                    <div class="card border card-shadow-none">
                        <h3 class="card-header bg-white">About Venue</h3>
                        <div class="card-body">
                            <!--/.vendor-details -->
                            <!--vendor-description -->
                            <p class="lead"><?php echo $data['venue_details']; ?></p>
                            <!--venue-highlights -->
                            <div class="venue-highlights">
                                <div class=" table-responsive">

                                </div>
                            </div>
                            <!-- /.venue-highlights -->
                        </div>
                    </div>
                    <!--vendor-description -->
                    <!-- aminities-block -->

                    <!-- /.aminities-block -->
                    <!-- review-block -->
                    <div id="reviews">
                        <div class="card border card-shadow-none ">
                            <div class="card-header bg-white">
                                <h3 class="mb0 d-inline-block">Reviews</h3>
                                <a href="feedback-page.php?vid=<?php echo $data['venue_id']; ?>" class="btn btn-default btn-sm float-right d-inline-block">write a review</a>
                            </div>


                            <!-- /.review-block -->
                            <div class="card border card-shadow-none ">

                                <!-- review-user -->

                                <div class="card-header bg-white mb0">
                                    <div class="review-user">

                                        <div class="user-meta">
                                            <h5 class="user-name mb-0">
                                            </h5>
                                        </div><!--<span class="user-review-date">14 March, 2023</span></h5>--->

                                        <!-- /.review-user -->
                                        <div class="card-body">
                                            <!-- review-descripttions -->
                                            <!-- <div class="review-descriptions">-->
                                            <p>
                                                <?php

                                                $fed = mysqli_query($c, "select * from tbl_feedback where venue_id = '{$vid}'");

                                                $i = 0;
                                                while ($feddata = mysqli_fetch_array($fed)) {
                                                    $i++;

                                                    $userq = mysqli_query($c, "select * from tbl_user where user_id='{$feddata['user_id']}' ");

                                                    $udata = mysqli_fetch_array($userq);

                                                    echo "<div class='review-user'>";
                                                    echo "<div class='user-meta'>";
                                                    echo "<h5 class='user-name mb-0'>";
                                                    echo "<b>{$udata['user_name']}</b>";
                                                    echo "</h5 class='user-name mb-0'>";
                                                    echo "</div class='review-user'>";
                                                    echo "</div class='user-meta'>";

                                                    echo "<div class='review-descriptions'>";
                                                    echo "{$feddata['feedback_details']}";
                                                    echo "</div class='review-descriptions'>";

                                                    $rate_id = $feddata["feedback_id"];
                                                    $rate = round($feddata["feedback_rating"]);
                                                    for ($k = 0; $k < $rate; $k++) {
                                                ?>
                                                        <i class="fa fa-star" style="color:orange;" aria-hidden="true"></i>

                                                <?php }
                                                }



                                                ?>






                                        </div>
                                        <!-- /.review-descripttions -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.review-content -->
                    <!-- /.review-block -->

                    <!-- /.review-block -->

                    <!-- /.review-content -->
                    <!-- review-form -->
                    <!-- /.review-block -->
                    

                    <!-- /.review-form -->
                    <!-- location -->
                    <?php
                    if (isset($data['venue_map'])) {

                    ?>
                        <div class="card border card-shadow-none">
                            <div class="card-header bg-white mb0">
                                <h3 class="mb0">Location - Map</h3>
                            </div>
                            <div class="card-body">
                                <!--<div id="map"></div>-->
                                <?php
                                if (isset($data['venue_map'])) {
                                    echo $data['venue_map'];
                                }
                                ?>

                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <!-- /.location -->
                <!-- list-sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                    <div class="sidebar-venue">
                        <div class="card">
                        <div class="card-body">
                                <form method="post" id="myform">
                                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h3 class="mb20">Request Quote<br>
                                            
                                        </h3>
                                        <center><p> Click Here For Booking</p></center><br>
                                        



                        <a href="payment.php?vid=<?php echo $data['venue_id']; ?>"class="btn btn-default btn-block">Book Now</a>
                        </div>
                                    </div>
                                </form>
                        </div>
                        </div>
                        
                            <!--<div class="card-body">
                                <form method="post" id="myform">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h3 class="mb20">Request Quote</h3>
                                        </div>
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only">Date</label>
                                                <input name="date" type="date" placeholder="Select Date" class="form-control input-md" min="<?php //echo date("Y-m-d", strtotime('+1 day')); 
                                                                                                                                            ?>">
                                                <div><i></i></div>
                                            </div>
                                        </div>

                                        

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only">Duration</label>
                                                <input name="duration" type="text" placeholder="Duration" class="form-control input-md" required="">
                                                <div><i></i></div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only">Details</label>
                                                <textarea class="form-control" name="details" rows="5" placeholder="Details"></textarea>
                                            </div>
                                        </div>
                                        <?php
                                        //if (isset($_SESSION['uid'])) {
                                        ?>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <button type="submit" name="submit1" class="btn btn-default btn-block">Submit</button>
                                                <?php
                                                //} //else {
                                                ?>
                                                    <a href="user_login.php">Login is Required</a>
                                                <?php
                                                //}
                                                ?>
                                                </div>
                                            </div>
                                    </div>
                                </form>

                                        </div>
                            venue-admin -->


                            <div class="vendor-owner-profile mb30">
                                <div class="vendor-owner-profile-head">

                                    <h4 class="vendor-owner-name mb0"><?php echo $data['venue_name']; ?></h4>
                                </div>
                                <div class="vendor-owner-profile-content">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="mr-2 text-default"><i class="fas fa-fw fa-map-marker-alt"></i></span><?php echo $data['venue_address']; ?></li>
                                        <li class="list-group-item"><span class="mr-2  text-default"><i class="fas fa-fw fa-phone"></i></span><?php echo $data['venue_mobile']; ?></li>
                                        <li class="list-group-item"><span class="mr-2 text-default"><i class="fas fa-fw fa-envelope"></i></span><?php echo $data['venue_email']; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.venue-admin -->
                            <!-- social-media -->
                            <!-- <div class="mb30">
                            <h4 class="widget-title">Share this </h4>
                            <div class="social-icons">
                                <a href="#" class="icon-square-outline facebook-outline"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon-square-outline twitter-outline"><i class="fab fa-twitter"></i> </a>
                                <a href="#" class="icon-square-outline googleplus-outline"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="icon-square-outline instagram-outline"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="icon-square-outline linkedin-outline"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="icon-square-outline pinterest-outline"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>-->
                            <!-- /.social-media -->
                        </div>
                    </div>
                </div>
                <!-- /.list-sidebar -->
            </div>
        </div>
        <!-- vendor-thumbnail section -->
        <div class="space-small">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2></h2>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.vendor-thumbnail section -->
        <!--<div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 text-right">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
        <?php
        include "Footer.php";
        ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/fastclick.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom-script.js"></script>
        <!-- popup gallery -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script>
            function initMap() {
                var uluru = {
                    lat: 23.0732195,
                    lng: 72.5646902
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    icon: 'images/map-pin.png'
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp;callback=initMap">
        </script>
        <script src="js/jquery.rateyo.min.js"></script>
        <script>
            $(function() {

                $("#rateYo1, #rateYo2, #rateYo3, #rateYo4, #rateYo5 ").rateYo({
                    rating: 3.6
                });

            });
        </script>

        <script>
            $(function() {
                $("#rateYo").rateYo({
                    onSet: function(rating, rateYoInstance) {
                        // alert("Rating is set to: " + rating);
                        $("#set_rate").val(rating);
                    }
                });
            });
        </script>
        <script src="js/return-to-top.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/list-single-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:54 GMT -->

</html>