<?php
session_start();
$c = mysqli_connect("localhost", "root", "", "project");
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/list-view-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:48 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title>Venue Match</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
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
    <div class="page-header1">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title"></h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">


                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <!-- vendor-section -->
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                    <?php
                    if(isset($_GET['t']) && isset($_GET['a']))
                    {
                        $t = $_GET['t'];
                        $a = $_GET['a'];
                        $q = mysqli_query($c, "select * from tbl_venuemaster  where type_id='{$t}' and location_id='{$a}'");
                    }
                   else if (isset($_GET['tid'])) {
                        $tid = $_GET['tid'];
                        $q = mysqli_query($c, "select * from tbl_venuemaster  where type_id='{$tid}'");
                    } else {
                        $q = mysqli_query($c, "select * from tbl_venuemaster");
                    }
                    $count  = mysqli_num_rows($q);

                    while ($data = mysqli_fetch_array($q)) {
                    ?>

                        <div class="vendor-thumbnail list-view">
                            <!-- Vendor thumbnail -->
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 border-right pr-0">
                                    <div class="vendor-img">
                                        <!-- Vendor img -->
                                        <a href="#">
                                            <div class="zoomimg"><img src="adminpanel/uploads/<?php echo $data['venue_photopath']; ?>" style=height:200px; class="img-fluid"></div>
                                        </a>
                                        <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                    </div>
                                </div>
                                <!-- /.Vendor img -->
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 pl-0">
                                    <div class="vendor-content">
                                        <!-- Vendor Content -->
                                        <h2 class="vendor-title"><a href="list-single.php?vid=<?php echo $data['venue_id']; ?>"><?php echo $data['venue_title']; ?></a></h2>
                                        <p class="vendor-address"><?php echo $data['venue_address']; ?></p>
                                        <!-- /.Vendor meta -->
                                    </div>
                                    <div class="vendor-meta m-0">
                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                            <span class="vendor-price">
                                                ₹<?php echo $data['venue_price']; ?>
                                            </span>
                                            <span class="vendor-text">Start From</span>
                                        </div>
                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                            <span class="vendor-guest">
                                                <?php echo $data['venue_capacity']; ?>
                                            </span>
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
                                    <!-- /.Vendor Content -->
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- /.Vendor thumbnail -->

                    <!-- paginations -->

                    
                    <!-- /.paginations -->
                </div>
                <!-- sidebar-section -->
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                    <div class="filter-form">
                        <form class="form-row">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="widget-title">Filter</h3>
                            </div>


                           <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <select class="wide">
                                    <option value="Venue Type">Venue Type</option>
                                    <option>
                                        <li>
                                         
                                        <li>
                                    </option>
                                </select>
                            </div>-->
                            <!--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <select class="wide">
                                    <option value="Price">Price</option>
                                    <option value="$100 tp $500">$100 to $500</option>
                                    <option value="$500 tp $2000">$500 to $2000</option>
                                    <option value="$2000 tp $3500">$2000 to $3500</option>
                                    <option value="$3500 tp $4500">$3500 to $4500</option>
                                    <option value="$4500 tp $5500">$4500 to $5500</option>
                                </select>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb20">
                                aminites -->

                                <!-- /.aminites
                            </div>-->
                            <!--<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <button class="btn btn-default btn-block" type="submit">Find Venue</button>
                            </div>-->
                            <ul>Venue Category
                                <?php

                                $cq = mysqli_query($c, "select * from tbl_type");
                                while ($cdata = mysqli_fetch_array($cq)) {
                                    echo "<li><a href='list-grid-view.php?tid={$cdata['type_id']}'>{$cdata['type_name']}</a></li>";
                                }
                                ?>
                            </ul>
                        </form>
                    </div>
                </div>
                <!-- /.sidebar-section -->
            </div>

        </div>
    </div>
    <!-- social-media-section -->
    <?php
    include "Footer.php";
    ?>
    <!-- /.social-media-section -->
    <!-- footer-section -->

    <!-- tiny-footer-section -->

    <!-- /.tiny-footer-section -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/return-to-top.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/list-view-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:48 GMT -->

</html>