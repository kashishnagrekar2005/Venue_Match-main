<?php
$con = mysqli_connect("localhost", "root", "", "project");
if (!$con) {
    echo " Not connected";
} else {
    //echo "Connected";
    //echo "<br>";
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $q = mysqli_query($con, "insert into tbl_user(user_name,user_email,user_password,user_mobile) values ('$name','$email','$password','$mobile')");

    if ($q) {
        echo "<script>alert('Registered sucessfully');window.location='user_login.php';</script>";
    }
}

?>




<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:16 GMT -->

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
<!-- couple-sign up -->

<body class="couple-bg-image">
    <?php
    include "Header.php";
    ?>
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
                                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab-1" aria-selected="true">Register</a>
                            </li>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                    <div class="container">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <!-- form-heading-title -->
                                            <!--<h3>Browse 33,000 vendor profile and reviews.</h3>
                                        <p>We don't post anything without your permission.</p>--->
                                            <!-- /.form-heading-title -->
                                            <!-- register-form -->
                                            <form method="post" id="myform">
                                                <!-- form -->
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="control-label sr-only" for="name"></label>
                                                            <input id="name" type="text" name="name" onkeyup="Validatestring(this)" placeholder="Name" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group service-form-group">
                                                            <label class="control-label sr-only" for="email"></label>
                                                            <input id="email" type="email" name="email" placeholder="Email" class="form-control" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group service-form-group">
                                                            <label class="control-label sr-only"></label>
                                                            <input id="passwordregister" type="password" name="password" placeholder="Password" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <!--<label class="control-label sr-only" for="weddingdate"></label>-->
                                                            <input id="mobile" name="mobile" type="text" placeholder="Mobile" onkeyup="Validate(this)" class="form-control input-md" required>
                                                            <!--<div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>-->
                                                        </div>
                                                    </div>
                                                    <!-- Button -->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/.form -->
                                            <!-- <p class="mt-2"> Have you subscribed? <a href="#" class="wizard-form-small-text"> Login</a></p>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.register-form -->

                                <!-- /.couple-sign up -->



                                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

                                <script src="js/jquery.min.js"></script>
                                <!-- Include all compiled plugins (below), or include individual files as needed -->
                                <script src="js/bootstrap.min.js"></script>
                                <!-- jquery-ui -->
                                <script src="js/jquery-ui.js"></script>
                                <script src="js/custom-script.js"></script>

                                <script src="js/jquery-3.1.1.js"></script>
                                <script src="tools/jquery.validate.js"></script>

                                <script>
                                    //$(document).ready(function() {
                                    $("#myform").validate({
                                        rules: {

                                            name: {
                                                required: true,
                                                minlength: 3
                                            },
                                            password: {
                                                required: true,
                                                minlength: 6
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
                                            gender: "required",
                                            agree: "required",
                                            message: "required",
                                            file: "required",


                                        },
                                        messages: {

                                            name: {
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


<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:16 GMT -->

</html>