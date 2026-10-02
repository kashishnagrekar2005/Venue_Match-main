<?php
$con = mysqli_connect("localhost", "root", "", "project");
$uid = $_GET['uid'];
$select = mysqli_query($con, "select * from tbl_venuemaster where venue_id=$uid");
$data = mysqli_fetch_array($select);
if (!$con) {
  //echo " Not connected";
} else {
  //echo "Connected";
  //echo "<br>";
}
if (isset($_POST['submit'])) {
  $filename = $_FILES['txt10']['name'];
  $filesource = $_FILES['txt10']['tmp_name'];

  $title = $_POST['txt1'];
  $name = $_POST['txt2'];
  $email = $_POST['txt3'];
  $mobile = $_POST['txt4'];
  $password = $_POST['txt5'];
  $location_id = $_POST['txt11'];
  $address = $_POST['txt6'];
  $capacity = $_POST['txt7'];
  $price = $_POST['txt8'];
  $detail = $_POST['txt9'];
  $type_id = $_POST['txt13'];
  //$photopath=$_POST['txt10'];
  $q1 = mysqli_query($con, "update tbl_venuemaster set venue_title='$title',venue_name='$name',venue_email='$email',venue_mobile='$mobile',venue_password='$password',venue_address='$address',venue_capacity='$capacity',venue_price='$price',venue_details='$detail'");

  move_uploaded_file($filesource, "uploads/" . $filename);
  if ($q1) {
    echo "<script>alert('Updated Sucessfully');</script>";
  }
}
?>
<?php
include "css.php";
?>


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
  <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css" />
  <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>
<?php
include "main.php";
?>

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Form</h4>
      <p class="card-description">Venue Form</p>
      <form class="forms-sample" id="myform" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="txt1" placeholder="Title" value="<?php echo $data['venue_title']; ?>" required />
        </div>
        <div class="form-group">
          <label>VenueOwner Name</label>
          <input type="text" class="form-control" name="txt2" placeholder="VenueOwner Name" value="<?php echo $data['venue_name']; ?>" required />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="txt3" placeholder="Email" value="<?php echo $data['venue_email']; ?>" required />
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="number" class="form-control" name="txt4" placeholder="Mobile" value="<?php echo $data['venue_mobile']; ?>" required />
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="txt5" placeholder="Password" value="<?php echo $data['venue_password']; ?>" required />
        </div>
        <div class="form-group">
          <label>Location name</label>

          <br>
          <?php
          $dq = mysqli_query($con, "select * from tbl_location");
          echo "<select name='txt11' required>";
          echo "<option value=''>Select</option>";
          while ($drow = mysqli_fetch_array($dq)) {
            $selected = ($drow['location_id'] == $data['location_id']) ? "selected" : "";
            echo "<option value='{$drow['location_id']}' $selected>{$drow['location_name']}</option>";
          }
          echo "</select>";
          ?>

          <div class="form-group">
            <br>
            <label>Address</label>
            <input type="text" class="form-control" name="txt6" placeholder="Address" value="<?php echo $data['venue_address']; ?>" required />
          </div>
          <div class="form-group">
            <label>Capacity</label>
            <input type="number" class="form-control" name="txt7" placeholder="Capacity" value="<?php echo $data['venue_capacity']; ?>" required />
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="txt8" placeholder="Price" value="<?php echo $data['venue_price']; ?>" required />
          </div>
          <div class="form-group">
            <label> VenueDetails</label>
            <input type="text" class="form-control" name="txt9" placeholder="Details" value="<?php echo $data['venue_details']; ?>" required />
          </div>
          <div class="form-group">
            <label> Type name</label><br>
            <?php
            $dq = mysqli_query($con, "select * from tbl_type");
            echo "<select name='txt13' required>";
            echo "<option value=''>Select</option>";
            while ($drow = mysqli_fetch_array($dq)) {
              $selected = ($drow['type_id'] == $data['type_id']) ? "selected" : "";
              echo "<option value='{$drow['type_id']}' $selected>{$drow['type_name']}</option>";
            }
            echo "</select>";
            ?>
          </div>

          <div class="form-group">
            <label>PhotoPath</label>
            <input type="file" class="form-control" value="<?php echo $data['venue_photopath']; ?>">


          </div>


          <button type="submit" class="btn btn-primary mr-2" name="submit"> Submit </button>
          <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
  </form>
</div>
</div>
</div>
<!---<footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
        </div>-->
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<script src="../../assets/vendors/select2/select2.min.js"></script>
<script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="../../assets/js/off-canvas.js"></script>
<script src="../../assets/js/hoverable-collapse.js"></script>
<script src="../../assets/js/misc.js"></script>
<script src="../../assets/js/file-upload.js"></script>
<script src="../../assets/js/typeahead.js"></script>
<script src="../../assets/js/select2.js"></script>

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

</html>