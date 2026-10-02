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
        <h4 class="card-title">
          <center>Report
        </h4>
<center>
          <hr>
          <h4 class="card-title">
            <center>Location
          </h4>
<center>
            <p class="card-description"> <code></code>
            </p>
            <div class="table-responsive">
              <table class="table table-bordered" border="1">
                <thead>
                  <tr>

                    <th>Id</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                   <!-- <th>Password</th>-->
                    <th>Location</th>
                    <!--<th>Address</th>-->
                    <th>Capacity</th>
                    <th>Price</th>
                    <!--<th>Details</th>-->
                    <th>Type</th>
                    <th>Photopath</th>
                    <!--<th>Action</th>-->
                  </tr>
                </thead>
                <?php
                echo "Date: " . date('d-m-y');
               
                ?>
                <form method="get">
                  <?php
                  $con = mysqli_connect("localhost", "root", "", "project");
                  $sql = mysqli_query($con, "select* from tbl_location");
                  echo "<select name='scatid'>";
                  echo "<option value='select'>Select Location</option>";
                  while ($row = mysqli_fetch_array($sql)) {
                    
                    echo "<option value='{$row['location_id']}'> {$row['location_name']}</option>";
                  }
                  echo "</select>";
                  ?>
                  <input type="submit" value="search">
                </form>
                <a href="#" onclick="window.print();">Print</a>
                <?php
                $con = mysqli_connect("localhost", "root", "", "project");
                if (isset($_GET['scatid'])) {
                  $scatid = $_GET['scatid'];

                  $q = mysqli_query($con, "select * from tbl_venuemaster where location_id='{$scatid}'");
                  $count = mysqli_num_rows($q);
                  echo "<br>$count Record Found";

                  /*echo "<table border=1>";
 echo "<tr>";
 echo "<td>Id</td>";
 echo "<td>Email</td>";
 echo "<td>Password</td>";*/


                  //echo "</tr>";

                  while ($table = mysqli_fetch_array($q)) {
                    $cq = mysqli_query($con, "select * from tbl_location where location_id='{$table['location_id']}'");
                    $crow = mysqli_fetch_array($cq);
                    $cq1 = mysqli_query($con, "select * from tbl_type where type_id='{$table['type_id']}'");
                    $crow1 = mysqli_fetch_array($cq1);
                    echo "<tr>";
                    echo "<td>{$table['venue_id']}</td>";
                    echo "<td>{$table['venue_title']}</td>";
                    echo "<td>{$table['venue_name']}</td>";
                    echo "<td>{$table['venue_email']}</td>";
                    echo "<td>{$table['venue_mobile']}</td>";
                    //echo "<td>{$table['venue_password']}</td>";
                    echo "<td>{$crow['location_name']}</td>";
                    //echo "<td>{$table['venue_address']}</td>";
                    echo "<td>{$table['venue_capacity']}</td>";
                    echo "<td>{$table['venue_price']}</td>";
                    //echo "<td>{$table['venue_details']}</td>";
                    echo "<td>{$crow1['type_name']}</td>";
                    echo "<td>{$table['venue_photopath']}</td>";
                    //echo "<td><a target='_blank' href='uploads/{$table['venue_photopath']}'><img src='uploads/{$table['venue_photopath']}' width='50'/></a></td>";






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