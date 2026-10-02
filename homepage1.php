<?php
session_start();
$c = mysqli_connect("localhost", "root", "", "project");
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:29:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="wedding vendor directory HTML template">

    <title> Venue Match </title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
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

    <?php
    include "Header.php";
    ?>

    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head">
                            <h1 class="search-head-title">Find Local Various Venues</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Browse the best venues in your area</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        <div class="search-form">
                            <form class="form-row" action="../User Panel/list-grid-view.php">
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <select class="wide" name="t">
                                        <option value="Venue Type">Venue Type</option>

                                        <?php
                                        $q = mysqli_query($c, "select * from tbl_type ");
                                        while ($data = mysqli_fetch_array($q)) {
                                            echo "<option value='{$data['type_id']}'>{$data['type_name']}</option>";
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <select class="wide" name="a">
                                        <option value="Location">Location</option>
                                        <?php
                                        $q1 = mysqli_query($c, "select * from tbl_location ");
                                        while ($data1 = mysqli_fetch_array($q1)) {
                                            echo "<option value='{$data1['location_id']}'>{$data1['location_name']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <!-- button -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <button class="btn btn-default btn-block" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-section -->
    <!-- feature-section -->

    <!-- /.feature-section -->

    <!-- /. venue-thumbnail-section-->
    <!-- venue-categoris-section-->
    <div class="space-small">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Venues by Category</h2>
                        <p>You can browse all venues by category with thumbnail image and category name.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- venue-categoris-block-->
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img"> <a href="#"><img src="images/partyplot.jpeg" alt="" style=height:200px class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Party Plot</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="images/farmhouse.jpeg" style=height:200px; alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Farm House</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="images/showcase.jpeg" style=height:200px alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Art Gallery</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block ">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="images/banquet.jpeg" style=height:200px alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Banquet Hall</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block ">
                        <div class="venue-categories-img zoomimg"> <a href="#"><img src="images/hall.jpeg" style=height:200px alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Conference Hall</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- venue-categoris-block-->
                    <div class="venue-categories-block">
                        <div class="venue-categories-img zoomimg "> <a href="#"><img src="images/rooftop.jpeg" alt="" style=height:200px class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="#" class="venue-categories-title">Roof Top</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>
            </div>
            <!-- venue-categoris-btn -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt60"><a href="#" class="btn btn-default btn-lg">View All category</a></div>
            </div>
            <!-- /.venue-categoris-btn -->
        </div>
        <!-- /.venue-categoris-section-->
        <!-- real-wedding-section-->
        <div class="space-small">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb40">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="section-title text-center">
                            <!-- section title start-->
                            <h2 class="mb10">Real Events</h2>
                            <p>Real inspiration from the real wedding couple. Get ideas for grooms and brides.</p>
                        </div>
                        <!-- /.section title start-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="real-wedding-block">
                            <!-- real wedding block -->
                            <div class="real-wedding-img zoomimg">
                                <!-- real wedding img -->
                                <a href="#"><img src="images/birthday.jpeg" alt="Wedding Vendor & Supplier Directory HTML Template " style=height:320px class="img-fluid"></a>
                            </div>
                            <!-- /.real wedding img -->
                            <div class="real-wedding-content ">
                                <!-- real wedding content -->
                                <h3 class="real-wedding-title"><a href="#" class="title">Riya's Birthday</a></h3>
                                <div class="real-wedding-meta"><span class="real-wedding-date">07 May, 2023</span>
                                    <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>Satellite</span>
                                </div>
                            </div>
                            <!-- /.real wedding img -->
                        </div>
                        <!-- /.real wedding block -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="real-wedding-block">
                            <!-- real wedding block -->
                            <div class="real-wedding-img zoomimg">
                                <!-- real wedding img -->
                                <a href="#"><img src="images/realwedding.jpeg" alt="Wedding Vendor & Supplier Directory HTML Template " style=height:320px class="img-fluid"></a>
                            </div>
                            <!-- /.real wedding img -->
                            <div class="real-wedding-content">
                                <!-- real wedding content -->
                                <h3 class="real-wedding-title"><a href="#" class="title">Rahul & Pooja Wedding</a></h3>
                                <div class="real-wedding-meta"><span class="real-wedding-date">10 December, 2023</span>
                                    <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>Bopal</span>
                                </div>
                            </div>
                            <!-- /.real wedding img -->
                        </div>
                        <!-- /.real wedding block -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="real-wedding-block">
                            <!-- real wedding block -->
                            <div class="real-wedding-img zoomimg">
                                <!-- real wedding img -->
                                <a href="#"><img src="images/garba.jpeg" alt="Wedding Vendor & Supplier Directory HTML Template " style=height:320px class="img-fluid"></a>
                            </div>
                            <!-- /.real wedding img -->
                            <div class="real-wedding-content">
                                <!-- real wedding content -->
                                <h3 class="real-wedding-title"><a href="#" class="title">Garba Night</a></h3>
                                <div class="real-wedding-meta"><span class="real-wedding-date">12 October, 2023</span>
                                    <span class="real-wedding-place pl-3"><i class="fas fa-map-marker-alt pr-1"></i>Sindhu Bhavan</span>

                                </div>
                            </div>
                            <!-- /.real wedding img -->
                        </div>
                        <!-- /.real wedding block -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <a href="#" class="btn btn-default btn-lg">See more Real Weddings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.real-wedding-section-->
    <!-- feature-section-->
    <div class="bg-white space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">How it Works</h2>
                        <p>Simple and easy step to get Your dream Venue </p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"><i class="icon icon-017-location icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Search Location</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"> <i class="icon icon-004-chat icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">View 360°</h3>
                            <p> </p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"><i class="icon icon-025-groom icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Book Perfect Venue</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
            </div>
        </div>
    </div>
    <!-- /.feature-section-->
    <!-- Testimonial-section -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Feedback From Our real Client</h2>
                        <p>Find out what about what they want to say about Our Venues</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                        <h3 class="testimonial-name">Drashti Patel</h3>
                        <p class="testimonial-text">“The ambience of this Vince cafe is so good and the space where cafe is located is nice and they have a lot more options in coffee. I tried Java Choco and it's so amazing, I highly recommend this coffee.
                            ”</p>
                        <div class="testimonial-pic"><img src="" class="rounded-circle" alt=""></div>
                        <div class="testimonial-meta">
                            <h5 class="mb0">Mocha Cafe</h5>
                            <p class="testimonial-small-text mb0">C.G.ROAD </p>
                            <span class="rating-star">
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                            </span>
                        </div>
                        <!-- /.testimonial block -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                        <h3 class="testimonial-name">Shreya Vyas</h3>
                        <p class="testimonial-text">“Great experience here..
                            Much attractive places for marriage, or any family function..
                            Staff are also good behaviour and supportive..
                            Well maintained party plot.. entrance is also very good. ”</p>
                        <div class="testimonial-pic"><img src="" class="rounded-circle" alt=""></div>
                        <div class="testimonial-meta">
                            <h5 class="mb0">Baghban PartyPlot</h5>
                            <p class="testimonial-small-text mb0">Thaltej</p>
                            <span class="rating-star">
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                            </span>
                        </div>
                        <!-- /.testimonial block -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="testimonial-block">
                        <!-- testimonial block -->
                        <div class="testimonial-icon"> <i class="fa fa-quote-right fa-default"></i></div>
                        <h3 class="testimonial-name">Jay Sharma</h3>
                        <p class="testimonial-text">“Rooms, services and location were awesome. It will give you relaxation I would definitely recommend going next time too.The rooms are cleaned thoroughly and nicely” </p>
                        <div class="testimonial-pic"><img src="" class="rounded-circle" alt=""></div>
                        <div class="testimonial-meta">
                            <h5 class="mb0">Vissamo Resort</h5>
                            <p class="testimonial-small-text mb0">Bavla</p>
                            <span class="rating-star">
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                                <i class="fa fa-star rated"></i>
                            </span>
                        </div>
                        <!-- /.testimonial block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Testimonial-section -->
    <!-- blog-post-section -->
    <!--<div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                     section title start
                        <h2 class="mb10"></h2>
                        <p> </p>
                    </div>
                /.section title start
                </div>
            </div><
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg rounded">
                            <a href="#"><img src="images/post-img-1.jpg" alt="" class="img-fluid "></a>
                        </div>
                        <h4><a href="#" class="title">Top 10 Wedding Tips for Groom & Bride</a></h4>
                    
                        <div class="meta">
                            <span class="meta-category">Photography</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 rounded">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg rounded">
                            <a href="#"><img src="images/post-img-2.jpg" alt="" class="img-fluid "></a>
                        </div>
                        <h4><a href="#" class="title">Top 10 Wedding Dress Expert Collections</a></h4>
                        
                        <div class="meta">
                            <span class="meta-category">Wedding Planning</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg  rounded">
                            <a href="#"><img src="images/post-img-3.jpg" alt="" class="img-fluid  "></a>
                        </div>
                        <h4><a href="#" class="title">Best Wedding Destination & Venues 2019</a></h4>
                        
                        <div class="meta">
                            <span class="meta-category">Flowers</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                    <div class="post-block-small text-center">
                        <div class="post-img mb30 zoomimg  rounded">
                            <a href="#"><img src="images/post-img-4.jpg" alt="" class="img-fluid "></a>
                        </div>
                        <h4><a href="#" class="title">Happy Wedding Couple  Smile Enjoying  Wine</a></h4>
                        
                        <div class="meta">
                            <span class="meta-category">Catering</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <!-- /.blog-post-section -->
    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12 text-right">
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
    </div>
    <!-- /.social-media-section -->
    <!-- footer-section -->
    <?php
    include "Footer.php";
    ?>

    <!-- owl-carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- nice-select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/return-to-top.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:13 GMT -->

</html>