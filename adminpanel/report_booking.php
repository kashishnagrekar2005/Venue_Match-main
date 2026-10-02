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
  <link rel="stylesheet" href="assets/css/style.css" />
  
</head>

<div class="row">
  





  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><center>Report</h4><center><hr>
        <h4 class="card-title"><center>Booking</h4><center>
        <p class="card-description"> <code></code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered" border="1">
            <thead>
              <tr>

              <th>Id</th>
              <th>Date</th>
              <th>Duration</th>
              <th>VenueTitle</th>
              <th>Details</th>
              <th>Status</th>
              <th>UserName</th>
              <tr>
            </thead>
            <?php
            echo "Date: " . date('d-m-y');
            ?>
            <form method="get">
             
            <input type="date" name="sdate"/>
             <input type="date" name="edate"/>
              <input type="submit" value="search">
            </form>
            <a href="#" onclick="window.print();">Print</a>
            
            <?php
            $con = mysqli_connect("localhost", "root", "", "project");
            if (isset($_GET['sdate'])) {
             
              $sdate = $_GET['sdate'];
              $edate = $_GET['edate'];

              $q = mysqli_query($con, "select * from tbl_booking where  booking_date between '{$sdate}' and '{$edate}'  ");
              $count = mysqli_num_rows($q);
              echo "<br>$count Record Found";

              /*echo "<table border=1>";
 echo "<tr>";
 echo "<td>Id</td>";
 echo "<td>Email</td>";
 echo "<td>Password</td>";*/


              //echo "</tr>";
              

              while ($table = mysqli_fetch_array($q)) {
                $cq = mysqli_query($con, "select * from tbl_venuemaster where venue_id='{$table['venue_id']}'");
                $crow = mysqli_fetch_array($cq);
                $cq1 = mysqli_query($con, "select * from tbl_user where user_id='{$table['user_id']}'");
                $crow1 = mysqli_fetch_array($cq1);
    
                echo "<tr>";
                echo "<td>{$table['booking_id']}</td>";
                echo "<td>{$table['booking_date']}</td>";
                echo "<td>{$table['booking_duration']}</td>";
                echo "<td>{$crow['venue_title']}</td>";
                echo "<td>{$table['booking_details']}</td>";
                echo "<td>{$table['booking_status']}</td>";
                echo "<td>{$crow1['user_name']}</td>";
               
                
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

</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
</body>

</html>