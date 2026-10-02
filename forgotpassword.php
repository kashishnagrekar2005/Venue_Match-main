<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$connection = mysqli_connect("localhost", "root", "", "project");

if ($_POST) {
    $email = $_POST['email'];
    $q = mysqli_query($connection, "select * from tbl_user where user_email='{$email}'");
    $data = mysqli_fetch_array($q);
    $count = mysqli_num_rows($q);
    if ($count == 1) {
        //New Password Generate 
        $otp = rand(1111, 9999);
        mysqli_query($connection, "update tbl_user set user_password='{$otp}' where user_email='{$email}' ");

        $msg = "Hi {$data['user_email']},<br/> your temp password is " . $otp . " <br/>Kindly change once you logged in with this password";
        //Load Composer's autoloader
        require 'vendor/autoload.php';
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'venuelocator123@gmail.com';                     //SMTP username
            $mail->Password   = 'kcmflmzoqtjfupgz';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            //Recipients
            $mail->setFrom('venuelocator123@gmail.com', 'VenueQuest');
            $mail->addAddress($email, 'User');     //Add a recipient
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Forgot Password';
            $mail->Body    = $msg;
            $mail->AltBody = $msg;
            $mail->send();
            echo "<script>alert('Password is sent on email id');window.location='user_login.php';</script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<script>alert('User Not Found')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:16 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VenueQuest</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body class="couple-bg-image">
<?php
include "Header.php"
?>
   

        <!--/.header-top -->
      <!--  <div class="container">
            <div class="header-bottom">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                    </div>
                        <div class="header-logo">
                            <a class="navbar-brand">Venue Match
                               <img src="images/logo.png"  style="width:100px;height:80px;margin-right:300px;"   alt="Venue Match">

                                
                            </a>
                        </div>
                        
                        
                </div>
            </div>
        </div>-->
        <!-- navigation start -->
        <!--<div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <nav class="navbar navbar-expand-lg navbar-classic navbar-second">
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mt-0"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar-classic">
                            <ul class="navbar-nav mt-2 mt-lg-0 mr-3">
                                <li class="nav-item dropdown">
                                    <a class="nav-link  " href="index.html" id="menu-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Homepage
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link  " href="#" id="menu-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Venues
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link  " href="index.html" id="menu-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Contact Us
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link  " href="about_us.php">
                                        About Us
                                    </a>

                                </li>

                                    <ul class="dropdown-menu" aria-labelledby="menu-2">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Listing</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="list-grid-view.html">
                                                        List Grid View</a>
                                                </li>
                                                <li><a class="dropdown-item" href="list-view-sidebar.html">
                                                        List View Sidebar</a>
                                                </li>
                                                <li><a class="dropdown-item" href="list-half-screen-map.html">
                                                        List Half Screen Map</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">List Single</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="list-single-1.html">
                                                        List Single 1</a>
                                                </li>
                                                <li><a class="dropdown-item" href="list-single-2.html">
                                                        List Single 2</a>
                                                </li>
                                                <li><a class="dropdown-item" href="list-single-3.html">
                                                        List Single With Video</a>
                                                </li>
                                                <li><a class="dropdown-item" href="list-single-4.html">
                                                        List Single With Gallery</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="vendor-category.html">
                                                Vendor By Categories</a>
                                        </li>
                                        <li><a class="dropdown-item" href="vendor-location.html">
                                                Vendor By Locations</a>
                                        </li>
                                    </ul>
                                </li>
                               <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Supplier
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-3">
                                        <li><a class="dropdown-item" href="supplier-dresses-list.html" title="">Dresses</a></li>
                                        <li><a class="dropdown-item" href="supplier-cake-list.html" title="">Cakes</a></li>
                                        <li><a class="dropdown-item" href="supplier-florist-list.html" title="">Florist</a></li>
                                        <li><a class="dropdown-item" href="supplier-photographer-list.html" title="">Photographers</a></li>
                                        <li><a class="dropdown-item" href="supplier-videographer-list.html" title="">Videographer</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-4">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Real Weddings</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="real-wedding-list.html" title="">Real Weddings List</a></li>
                                                <li><a class="dropdown-item" href="real-wedding-single.html" title="">Real Weddings Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Forms</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="vendor-form.html" title="">Vendors Form</a></li>
                                                <li><a class="dropdown-item" href="couple-form.html" title="">Couple Form</a></li>
                                                <li><a class="dropdown-item" href="forgot-password.html" title="">Forgot Password</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Help Center</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="help-center.html" title="">Help Center</a></li>
                                                <li><a class="dropdown-item" href="help-category-list.html" title="">Help Category List</a></li>
                                                <li><a class="dropdown-item" href="help-category-single.html" title="">Help Category Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Email Template</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="email-template/new-id-password.html" title="">New ID/Password</a></li>
                                                <li><a class="dropdown-item" href="email-template/reset-password.html" title="">Reset Password</a></li>
                                                <li><a class="dropdown-item" href="email-template/forgot-password.html" title="">Forgot Password</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">About <span class="badge badge-success">New</span></a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="about-us.html" title="">About v1</a></li>
                                                <li><a class="dropdown-item" href="about-us-2.html" title="">About v2</a></li>
                                                <li><a class="dropdown-item" href="about-us-3.html" title="">About v3 </a></li>
                                                <li><a class="dropdown-item" href="about-us-4.html" title="">About v4 </a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="team-page.html" title="">Meet the Team</a></li>
                                        <li><a class="dropdown-item" href="pricing.html" title="">Pricing</a></li>
                                        <li><a class="dropdown-item" href="error-404.html" title="">404</a></li>
                                        <li><a class="dropdown-item" href="faq.html" title="">FAQ's</a></li>
                                        <li><a class="dropdown-item" href="contact-us.html" title="">Contact us</a></li>
                                        <li><a class="dropdown-item" href="vendor-location.html" title="">Vendor Locations</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-5">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Blog Listing</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="blog-listing.html" title="">Listing</a></li>
                                                <li><a class="dropdown-item" href="blog-classic.html" title="">Classic</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">List Single</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="blog-single.html" title="">Blog Single</a></li>
                                                <li><a class="dropdown-item" href="blog-full-screen-single.html" title="">Blog Single Full Screen</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Elements <span class="badge badge-success">New</span>
                                    </a>
                                    <ul class="dropdown-menu mega-dropdown-menu" aria-labelledby="menu-6">
                                        <li class="row">
                                            <ul class="col">
                                                <li><a class="dropdown-item" href="shortcode-tabs.html">
                                                        Tabs</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-accordions.html">
                                                        Accordions</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-alerts.html">
                                                        Alerts</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-bullet-list.html">
                                                        Bullet List</a>
                                                </li>

                                            </ul>
                                            <ul class="col">

                                                <li><a class="dropdown-item" href="shortcode-dropcap.html">
                                                        Drop Cap</a>
                                                </li>

                                                <li><a class="dropdown-item" href="shortcode-buttons.html">
                                                        Buttons</a>
                                                </li>

                                                <li><a class="dropdown-item" href="shortcode-blockquote.html">
                                                        Blockquotes</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-email-subscriber.html">
                                                        Email Subscriber</a>
                                                </li>
                                            </ul>
                                            <ul class="col">

                                                <li><a class="dropdown-item" href="shortcode-socialmedia.html">
                                                        Social Media</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-typography.html">
                                                        Typography</a>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </li>
                               <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        User Panel
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-7">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Vendor Dashboard </a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="vendor-dashboard-overview.html" title="">Dashboard</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-listing.html" title="">Listing</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-add-listing.html" title="">Add Listing</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-pricing.html" title="">Pricing</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-request-quote.html" title="">Request Quote</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-reviews.html" title="">Reviews</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-profile.html" title=""> Profile</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Couple Dashboard</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="couple-dashboard-overview.html" title="">Dashboard</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-mywishlist.html" title="">My Listing</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-todolist.html" title="">To Do List</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-budget.html" title="">Budget</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-guest-manager.html" title="">Guest Manager</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-add-new-guest.html" title="">Add New Guest</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-table-planner.html" title="">Seating Table</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-profile.html" title=""> Profile</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="couple-rsvp-page.html" title="">RSVP</a></li>
                                    </ul>
                                </li>-->
                            </ul>
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- navigation close -->
    </div>
    <!-- /.header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="mb30 card">
                        <div class="card-body">
                            <h1>Lost Password</h1>
                            <p>Follow these simple steps to reset your account:</p>
                            <ul class="list-unstyled mb30">
                                <li>1. Enter your email address</li>
                                <li>2. Wait for your recovery details to be sent.</li>
                                <li>3. Follow as given instructions in your mail account.</li>
                            </ul>
                            <form method="post">
                                <div class="forgot-form">
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-default btn-block">Get New Password</button>
                                </div>
                            </form>
                            <div class="mt30">
                                <a href="user_login.php" class="btn-primary-link mr-3">Login </a> <a href="registration.php" class="btn-primary-link">Register </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- social-media-section
    <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="footer-widget">Venue Match
                            <a href="#"><img src="images/logo.png"  style="width:100px;height:80px;margin-right:300px;" alt="Venue" class="mb20"></a>
                            <p class="mb10">Effortless event planning. Discover, book top venues.
                                User-friendly, secure payments, responsive design.</p>
                            <p>Your go-to for seamless venue experiences.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">
                                Contact Address
                            </h3>
                            <p>Ahemdabad, Gujarat</p>
                            <p class="mb0 text-default">+0-800-1234-123</p>
                            <p class="mb0 text-default">info@venues.com</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">
                                About Company
                            </h3>
                            <ul class="listnone">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Meet The Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">
                                List you Business
                            </h3>
                            <p>Are you vendor ? List your venue and service get more from listing business.</p>
                            <a href="#" class="btn btn-default">List your Business</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tiny-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>-->
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/custom-script.js"></script>
        <!-- nice-select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/fastclick.js"></script>
        <script src="js/return-to-top.js"></script>
    </body>


    <!-- Mirrored from jituchauhan.com/real-wed/realwed/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:38 GMT -->

</html>