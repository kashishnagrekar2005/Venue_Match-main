<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Venue Match</title>
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>
<?php
include "main.php";
?>
<?php
include "css.php";
?>
<div class="row">





  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Payment</h4>
        <p class="card-description"> <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>

                <th>Id</th>
                <th>Venue Title</th>
                <th>Amount</th>
                <th>Method</th>
                <th> Payment Status</th>
                <th>Booking</th>
                <th>Action</th>
              </tr>
            </thead>
            <?php

            $con = mysqli_connect("localhost", "root", "", "project");
            if ($con) {
              // echo "Connected";
            }

            $q = mysqli_query($con, "select * from tbl_payment");





            while ($table = mysqli_fetch_array($q)) {

              $cq = mysqli_query($con, "select * from tbl_booking where booking_id='{$table['booking_id']}'");
              $crow = mysqli_fetch_array($cq);
              
              $cq1 = mysqli_query($con, "select * from tbl_venuemaster where venue_id='{$table['venue_id']}'");
              $crow1 = mysqli_fetch_array($cq1); {

                echo "<tr>";
                echo "<td>{$table['payment_id']}</td>";
                echo "<td>{$crow1['venue_title']}</td>";
                echo "<td>{$table['amount']}</td>";
                echo "<td>{$table['payment_method']}</td>";
                echo "<td>{$table['payment_status']}</td>";
                echo "<td>{$crow['booking_status']}</td>";
                echo "<td>" . "<a href='delete_payment.php?did={$table['payment_id']}'>Delete || </a>";
                echo "<a href='edit_payment.php?uid={$table['payment_id']}'> Edit</a>" . "</td>";
              }
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
<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"></span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> </span>
  </div>
</footer>
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/misc.js"></script>
</body>

</html>