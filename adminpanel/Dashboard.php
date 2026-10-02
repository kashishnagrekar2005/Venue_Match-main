<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "project");
if (!isset($_SESSION['uid'])) {
  echo "<script>alert('Login Required');window.location='adminlogin.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Venue Match</title>
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<?php
include "main.php"
?>
<h1>Hii Welcome Back Admin!!!</h1>


<div class="container">
  <div class="row">
    <div class="col-xl-3 col-md-3 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
      <div class="card bg-warning">
        <div class="card-body px-3 py-4">
          <div class="d-flex justify-content-between align-items-start">
            <div class="color-card">
              <p class="mb-0 color-card-head">Venues</p>
              <?php
              $venue = mysqli_query($con, "select *from tbl_venuemaster");
              $count_venue = mysqli_num_rows($venue);
              ?>
              <h2 class="text-white">
                <?php
                echo $count_venue;
                ?>
              </h2>
            </div>
            <i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-3 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
      <div class="card bg-danger">
        <div class="card-body px-3 py-4">
          <div class="d-flex justify-content-between align-items-start">
            <div class="color-card">
              <p class="mb-0 color-card-head">Category</p>
              <?php
              $type = mysqli_query($con, "select *from tbl_type");
              $count_type = mysqli_num_rows($type);
              ?>
              <h2 class="text-white">
                <?php
                echo $count_type;
                ?>
              </h2>
            </div>
            <i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-3 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
      <div class="card bg-primary">
        <div class="card-body px-3 py-4">
          <div class="d-flex justify-content-between align-items-start">
            <div class="color-card">
              <p class="mb-0 color-card-head">Booking</p>
              <?php
              $booking = mysqli_query($con, "select *from tbl_booking");
              $count_booking = mysqli_num_rows($booking);
              ?>
              <h2 class="text-white">
                <?php
                echo $count_booking;
                ?>
              </h2>
            </div>
            <i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-3 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
      <div class="card bg-success">
        <div class="card-body px-3 py-4">
          <div class="d-flex justify-content-between align-items-start">
            <div class="color-card">
              <p class="mb-0 color-card-head">Feedback</p>
              <?php
              $feedback = mysqli_query($con, "select *from tbl_feedback");
              $count_feedback = mysqli_num_rows($feedback);
              ?>
              <h2 class="text-white">
                <?php
                echo $count_feedback;
                ?>
              </h2>
            </div>
            <i class="card-icon-indicator mdi mdi-account-circle bg-inverse-icon-success"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-400 stretch-card grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="col-sm-12">
          <h4 class="card-title pl-8">Booking History</h4>
          <div class="table-responsive">
            <table class="table">
              <thead class="bg-light">
                <tr>
                  <th>Vender</th>
                  <th>Date</th>
                  <th>Duration</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($row = mysqli_fetch_array($booking)) {
                  $venue = mysqli_query($con, "select *from tbl_venuemaster where venue_id = {$row['venue_id']}");
                  $venue_details = mysqli_fetch_assoc($venue);
                ?>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="uploads/<?php echo $venue_details['venue_photopath'] ?>" alt="image" />
                        <div class="table-user-name ml-3">
                          <p class="mb-0 font-weight-medium"><?php echo $venue_details['venue_title'] ?></p>
                          <small><?php echo $venue_details['venue_name'] ?></small>
                        </div>
                      </div>
                    </td>
                    <td><?php echo $row['booking_date'] ?></td>
                    <td><?php echo $row['booking_duration'] ?></td>
                    <td><?php echo $row['booking_details'] ?></td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</html>






<!---<div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Hi, welcome back Admin! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block"></span>
              </h3>
             <div class="d-flex">
                <button type="button" class="btn btn-sm bg-white btn-icon-text border">
                  <i class="mdi mdi-email btn-icon-prepend"></i> Email </button>
                <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                  <i class="mdi mdi-printer btn-icon-prepend"></i> Print </button>
                <button type="button" class="btn btn-sm ml-3 btn-success"> Add User </button>
              </div>-->
</div>




<footer class="footer">

</footer>
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="assets/vendors/flot/jquery.flot.js"></script>
<script src="assets/vendors/flot/jquery.flot.resize.js"></script>
<script src="assets/vendors/flot/jquery.flot.categories.js"></script>
<script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
<script src="assets/vendors/flot/jquery.flot.stack.js"></script>
<script src="assets/vendors/flot/jquery.flot.pie.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>

</html>