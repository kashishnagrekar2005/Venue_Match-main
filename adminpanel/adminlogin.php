<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project");
if ($_POST) {
    $email = $_POST['email'];
    $passwordlogin = $_POST['passwordlogin'];
    $selectquery = mysqli_query($con, "select * from tbl_admin where admin_email='{$email}' and admin_password	='{$passwordlogin}'");
    $count = mysqli_num_rows($selectquery);
    $row = mysqli_fetch_array($selectquery);
    print_r($row);

    if ($count == 1) {
        $_SESSION['uname'] = $row['admin_email'];
        $_SESSION['uid'] = $row['admin_id'];
        echo "<script>alert('Login Sucessfully');window.location='Dashboard.php';</script>";
    } else {
        echo "<script>alert('username and password not match.')</script>";
    }
}


?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:16 GMT -->

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
    <!--jquery-ui  -->
    <link href="css/jquery-ui.css" rel="stylesheet">
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

<body class="couple-bg-image">
    <div class="couple-form">
        <div class="container">
            <div class="row ">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12  ">
                    <!-- couple-head -->
                    <div class="couple-head">
                        <!--<a href="index.html"><img src="images/logo.png" alt="Wedding Vendor & Supplier Directory HTML Template "></a>-->
                    </div>
                    <!-- /.couple-head -->
                    <!-- st-tab -->
                    <div class="st-tab">
                        <ul class="nav nav-tabs nav-justified" id="Mytabs" role="tablist">


                            <li class="nav-item">
                                <center> <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab-2" aria-selected="false">Login</a></center>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                <div class="container">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <!-- form-heading-title -->
                                        <!--<h3>Browse 33,000 vendor profile and reviews.</h3>
                                        <p>We don't post anything without your permission.</p>--->
                                        <!-- /.form-heading-title -->
                                        <!--<div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">-->
                                        <div class="container">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- login-form-heading-title  -->
                                                <h3>Sign In to Your Account</h3>
                                                <!--<p>Sign in to plan your perfect day with our planning tools and inspiration more...</p>-->
                                                <!-- /.login-form-heading-title  -->
                                                <!-- login-form-->
                                                <form method="post" id="myform">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                                <label class="control-label sr-only" for="username"></label>
                                                                <input type="text" name="email" placeholder="Email" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <!-- Text input-->
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                            <div class="form-group service-form-group">
                                                                <label class="control-label sr-only" for="passwordlogin"></label>
                                                                <input type="password" name="passwordlogin" placeholder="Password" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <!--  Buttons -->
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                            <button type="submit" name="submit1" class="btn btn-default">Login</button>
                                                        </div>
                                                    </div>
                                                    <br>

                                                </form>


                                                <!-- /.login-form -->
                                                <p class="mt-2"> <a href="forgotpassword.php"> ForgotPassword?Click here</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.login-form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.couple-sign up -->



            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

            <script src="js/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <!-- jquery-ui -->
            <script src="js/jquery-ui.js"></script>
            <script src="js/custom-script.js"></script>

            <script src="tools/jquery-3.7.1.min.js"></script>
            <script src="tools/jquery.validate.js"></script>

            <script>
                $(document).ready(function() {
                    $("#myform").validate();
                });
            </script>
            <style>
                .error {
                    color: red;
                }
            </style>

</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:16 GMT -->

</html>