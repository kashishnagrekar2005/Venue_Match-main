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
?>
<body style="background-color: #F89880;">
<style>
    /* Style for form container */
    .leave-review {
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 20px;
        margin: 20px auto;
        max-width: 600px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Style for form header */
    .leave-review h3 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Style for form input fields */
    .form-control {
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    /* Style for submit button */
    .btn-default {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }

    /* Style for link */
    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
 }
</style>
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
<?php
include "Header.php";
?>
<div class="card border card-shadow-none leave-review">
    <div class="card-header bg-white mb0">
        <h3 class="mb0"><FONT COLOR="red">Write Your Reviews</FONT></h3>
    </div>
    <div class="card-body">

        <form method="post">

            <div class="review-rating-select" style="margin-left:100px;">



            </div>
            <div class="row">
                <!-- Textarea -->

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt30">
                    <div class="form-group">
                    <label class="mb0" class="form-control"><h3>Overall Experience:</h3></label>

                        <div id="rateYo"></div><br>

                        <input type="hidden" name="rating" id="set_rate" value="0">

                        <!--<label class="mb0" class="form-control">Give us rating</label>
                        <div id="rateYo"></div>
                       
                        <input type="hidden" name="rating1" id="set_rate1" value="0">--->






                        <textarea class="form-control" name="review" rows="5" placeholder="Write Review"></textarea>
                    </div>
                </div>
                <!-- Text input-->

            </div>
            <!-- Text input-->

    </div>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
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
    <?php
    if (isset($_SESSION['uid'])) {
    ?>

        <!-- Button -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="form-group">
                <button id="submit" name="submit" class="btn btn-default">Submit review</button>
            <?php
        } else {
            ?>
                <a href="user_login.php">Login is Required</a>
            <?php
        }
            ?>
            </div>
        </div>
</div>
</form>
