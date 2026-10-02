<?php
session_start();
$c = mysqli_connect("localhost", "root", "", "project");
$vid = $_GET['vid'];

$sq = mysqli_query($c, "select * from tbl_venuemaster where venue_id='{$vid}'");

$data = mysqli_fetch_array($sq);



if (isset($_POST['submit1'])) {
  $cdate = date('Y-m-d');
  $date = $_POST['date'];
  $duration = $_POST['duration'];
  $detail = $_POST['details'];
  $vid = $_GET['vid'];
  $uid = $_SESSION['uid'];
  $status = "Pending";

  $method = $_POST['paymentoption'];
  $q = mysqli_query($c, "insert into tbl_booking(booking_currentdate,booking_date,booking_duration,venue_id,booking_details,booking_status,user_id) 
    values ('{$cdate}','{$date}','{$duration}','{$vid}','{$detail}','{$status}','{$uid}')");

  $bookingid = mysqli_insert_id($c);

  mysqli_query($c, "INSERT INTO `tbl_payment`( `amount`, `payment_method`, `payment_status`, `booking_id`) VALUES ('1000','$method','Deposit','{$bookingid}')");
  if ($q) {
    echo "<script>alert('Request for booking done Sucessfully');window.location='thankyou.php';</script>";
    //header("location:thankyou.php");
  }
}




?>




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

<body style="background-color: #F89880;">
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
                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab-1" aria-selected="true">Booking request</a>
              </li>

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                  <div class="container">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="width: 428px;">
                      <!-- form-heading-title -->
                      <!--<h3>Browse 33,000 vendor profile and reviews.</h3>
                                        <p>We don't post anything without your permission.</p>--->
                      <!-- /.form-heading-title -->
                      <!-- register-form -->
                      <div class="card-body">
                        <form method="post" id="myform">
                          <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <h3 class="mb20">Request Quote</h3>
                            </div>
                            <!-- Text input-->

                            <!-- Text input-->

                            <!-- Text input-->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label sr-only">Date</label>
                                <input name="date" type="date" placeholder="Select Date" class="form-control input-md" min="<?php echo date("Y-m-d", strtotime('+1 day')); ?>">
                                <div><i></i></div>
                              </div>
                            </div>

                            <!-- Text input-->

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label sr-only">Duration</label>
                                <input name="duration" type="text" placeholder="Duration" class="form-control input-md" required="">
                                <div><i></i></div>
                              </div>
                            </div>
                            <!-- Textarea -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="form-group">
                                <label class="control-label sr-only">Details</label>
                                <textarea class="form-control" name="details" rows="5" placeholder="Details"></textarea>
                              </div>
                            </div>

                          </div>


                      </div>
                      <!--<form method="POST" id="myform"  class="aa-login-form">-->


                      <br />
                      <h3> Payment Option</h3><br>
                      <h3>For Booking Request Token ₹1000 Will Be Required</h3>
                      <input type="radio" id="pupi" value="UPI" name="paymentoption" /> <b>UPI</b>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="radio" id="pcard" value="Card" name="paymentoption" /> <b>CreditCard / Debitcard</b>
                      <div class="icon-container" style="margin-left: 190px;">
                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                      </div>


                      <div id="upiimg">
                        <img src="images/UPI.jpg" style="width:100px;height:100px;">
                        Either Scan Image or Enter UPI No
                      </div>
                      <div class="form-group" id="upitxt">
                        <label for="">UPI<span>*</span></label>
                        <input class="form-control" type="varchar" name="txt" placeholder="Name">
                      </div>

                      <div class="form-group" id="txt1">

                        <label for="">Name<span>*</span></label>
                        <input class="form-control" type="varchar" name="txt1" placeholder="Name">
                      </div>
                      <div class="form-group" id="txt2">
                        <label for="">Card No<span>*</span></label>
                        <input class="form-control" type="number" name="txt2" placeholder="4134 - 1024 - 3640">
                      </div>
                      <div class="form-group" id="txt3">
                        <label for="">CVV<span>*</span></label>
                        <input class="form-control" type="number" name="txt3" placeholder="Card No">
                      </div>


                      <?php
                      if (isset($_SESSION['uid'])) {
                      ?>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <div class="form-group">
                            <button type="submit" name="submit1" class="btn btn-default btn-block">Submit</button>
                          <?php
                        } else {
                          ?>
                            <a href="user_login.php">Login is Required</a>
                          <?php
                        }
                          ?>
                          </div>
                        </div>
                        </form>



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


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script type="text/javascript">
  $(function() {
    $("input[name='paymentoption']").click(function() {
      if ($("#pcard").is(":checked")) {
        $("#txt1").show();
        $("#txt2").show();
        $("#txt3").show();
        $("#upitxt").hide();
        $("#upiimg").hide();
      } else if ($("#pupi").is(":checked")) {

        $("#txt1").hide();
        $("#txt2").hide();
        $("#txt3").hide();
        $("#upitxt").show();
        $("#upiimg").show();
      } else {
        $("#txt1").hide();
        $("#txt2").hide();
        $("#txt3").hide();
        $("#upitxt").hide();
        $("#upiimg").hide();
      }
    });
  });

  $(document).ready(function() {
    $("#txt1").hide();
    $("#txt2").hide();
    $("#txt3").hide();
    $("#upitxt").hide();
    $("#upiimg").hide();
  });
</script>

<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:16 GMT -->

</html>