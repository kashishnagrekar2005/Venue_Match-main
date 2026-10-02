<?php
 session_start();
 $c = mysqli_connect("localhost","root","","project");

/*$con = mysqli_connect("localhost", "root", "", "venuebk");
if (!$con) {
    //echo " Not connected";
} else {
    //echo "Connected";
    //echo "<br>";
}
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $purpose = $_POST['purpose'];
    $message = $_POST['message'];
    $q = mysqli_query($con, "insert into tbl_contactus(contact_fname,contact_lname,contact_email,contact_mobile,contact_purpose,contact_message) values
     ('$fname','$lname','$email','$mobile','$purpose','$message')");

    if ($q) {
        //echo "<script>alert('Registered sucessfully');window.location='user_login.php';</script>";
        //echo "inserted";
    } 

}*/
?>
<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$connection = mysqli_connect("localhost", "root", "", "project");
$msg ="";
if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    
    
    $msg = "FirstName: " . $fname . 
    "<br>"."Lastname: " . $lname . 
    "<br>"."Email: " . $email . 
    "<br>"."Mobile: " . $mobile .
    "<br>"."Message: " . $message;
    
}


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
    $mail->setFrom('venuelocator123@gmail.com', 'Venue Match');
    $mail->addAddress('venuelocator123@gmail.com', 'User');     //Add a recipient
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Us Information';
    $mail->Body    = $msg;
    $mail->AltBody = $msg;
    $mail->send();
    echo "<script>alert('Contact Us information is been send')</script>";
        
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:42 GMT -->
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
    <!-- Favicon icon -->
    
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
                        <h1 class="page-title">Contact us</h1>
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
    <!-- contact-form -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 mb60">
                    <!-- contact-section-title -->
                    <div class="text-center">
                        <p class="lead">We would like to talk with you, Talk to us and we'll show you what we’ve done, and what we can do for you.
                        </p>
                    </div>
                    <!-- /.contact-section-title -->
                </div>
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <form method="post" id="myform">
                        <!-- form -->
                        <div class="contact-form">
                            <div class="row">
                              
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                    <!-- Text input-->
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only"></label>
                                        <input type="text" name="fname" onkeyup ="Validatestring(this)" placeholder="First Name" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only"></label>
                                        <input  type="text" name="lname"  onkeyup ="Validatestring(this)" placeholder="Last Name" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only"></label>
                                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group service-form-group">
                                        <label class="control-label sr-only" for="phone"></label>
                                        <input type="text" name="mobile" placeholder="Phone" class="form-control" required>
                                    </div>
                                </div>
                                <!-- select -->
                               <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="form-group">
                                        <select class="wide mb20" name="purpose">
                                            <option value="Vendor Purpose">Vendor Purpose</option>
                                            <option value="Couple">Couple</option>
                                            <option value="Pricing">Pricing</option>
                                            <option value="Vendor">Vendor</option>
                                            <option value="Advertise with us">Advertise with us</option>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label class="control-label sr-only"></label>
                                        <textarea class="form-control" name="message" rows="3" placeholder="Messages"></textarea>
                                    </div>
                                </div>
                                <!--button -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.form -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.contact-form -->
    <!-- contact-map -->
    <!--<div id="map"></div>-->
    <!-- /.contact-map -->
    <!-- contact-block-section -->
    <div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <!-- contact-block -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="contact-block">
                        <div class="contact-icon"><i class="far fa-user-circle"></i></div>
                        <div class="contact-content">
                            <h3>Customer Support</h3>
                            <p>Call our 24-hour helpline.</p>
                            <p><strong>Phone number:</strong><span class="text-default"> +91-6354500231

</span>
                                <br> <strong>Email Us:</strong><span class="text-default"> venuelocator123@gmail.com</span></p>
                        </div>
                    </div>
                </div>
                <!-- /.contact-block -->
                <!-- contact-block -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="contact-block">
                        <div class="contact-icon"><i class="fa fa-map-marker-alt"></i></div>
                        <div class="contact-content">
                            <h3>Our Address</h3>
                            <p>K/8, Shree Krishna Centre Above Crossword Library,
Mithakhali Six Road, Navrangpura, Ahmedabad-380009. </p>
                           
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.contact-block -->
                <!-- contact-block -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="contact-block">
                        <div class="contact-icon"><i class="far fa-envelope"></i></div>
                        <div class="contact-content">
                            <h3>Other Enquiries</h3>
                            <p>Please contact us at the email below for all other inquiries.</p>
                            <p><strong>Email Us:</strong> <span class="text-default">venuelocator123@gmail.com</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.contact-block -->
            </div>
        </div>
    </div>
    <!-- /.contact-block-section -->
    <!-- social-media-section -->
    <div class="social-media-block">
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
    </div>
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
       
       
    <script src="tools/jquery-3.7.1.min.js"></script>
    <script src="tools/jquery.validate.js"></script>
    <script>
    $("#myform").validate({
                                        rules: {

                                            fname: {
                                                required: true,
                                                minlength: 3
                                            },
                                            lname: {
                                                required: true,
                                                minlength: 3
                                            },

                                            email: {
                                                required: true,
                                                email: true
                                            },

                                            mobile: {
                                                required: true,
                                                minlength: 10,
                                                maxlength: 10
                                            },
                                            message:{
                                                required: true,
                                                minlength: 5,

                                            },
                                            
                                            gender: "required",
                                            agree: "required",
                                            message: "required",
                                            file: "required",


                                        },
                                        messages: {

                                            lname: {
                                                required: "Please Enter Name",
                                                minlength: "Your name must consist of at least 3 characters"
                                            },
                                            
                                            mobile: {
                                                required: "Please Enter Your Mobile no.",
                                                minlength: "Enter Your 10 digit Mobile no. only",
                                                maxlength: "Enter Your 10 digit Mobile no. only",
                                            },


                                            password: {
                                                required: "Please Enter Password",
                                                minlength: "Your password must be at least 6 characters long"
                                            },

                                            email: "Please enter a valid email address",

                                            gender: "Please Select Gender",
                                            agree: "Please accept our policy",
                                            message: "Please Enter Message",
                                            user_sem: "Please Select Semester",
                                            file: "Please Select Image",


                                        }
                                    });


                                    function Validate(no) {
                                        no.value = no.value.replace(/[^ 0-9\n\r]+/g, '');
                                    }

                                    function Validatestring(no) {
                                        no.value = no.value.replace(/[^ a-z A-Z\n\r]+/g, '');
                                    }

                                </script>
                                
                                <style>
                                    .error {
                                        color: red;
                                    }
                                </style>

</body>

    <!-- /.social-media-section -->
    <!-- footer-section -->
  <?php
  include "Footer.php";
  ?>