<?php
$con = mysqli_connect("localhost", "root", "", "project");
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
  $q1 = mysqli_query($con, "insert into tbl_venuemaster(venue_title,venue_name,venue_email,venue_mobile,venue_password,location_id,venue_address,venue_capacity,venue_price,venue_details,type_id,venue_photopath) 
values ('$title','$name','$email','$mobile','$password','$location_id','$address','$capacity','$price','$detail','$type_id','$filename')");

  move_uploaded_file($filesource, "uploads/" . $filename);
  if ($q1) {
    echo "<script>alert('Inserted Sucessfully');</script>";
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
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="assets/vendors/select2/select2.min.css" />
  <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>
<?php
include "main.php";
?>

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Venue Form</h4><hr>
      <p class="card-description"></p>
      <form class="forms-sample" id="myform" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>Title</label>
          <input type="text" class="form-control" name="txt1" onkeyup="Validatestring(this)" placeholder="Title" required />
        </div>
        <div class="form-group">
          <label>VenueOwner Name</label>
          <input type="text" class="form-control" name="txt2" onkeyup="Validatestring(this)" placeholder="VenueOwner Name" required />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="txt3" placeholder="Email" required />
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="number" class="form-control" name="txt4" placeholder="Mobile" required />
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="txt5" placeholder="Password" required />
        </div>
        <div class="form-group">
          <label>Location_id</label>

          <br>
          <?php
          $dq = mysqli_query($con, "select * from tbl_location");
          echo "<select name='txt11' required>";
          echo "<option value=''>Select</option>";
          while ($drow = mysqli_fetch_array($dq)) {
            echo "<option value='{$drow['location_id']}'>{$drow['location_name']}</option>";
          }
          echo "</select>";
          ?>

          <div class="form-group">
            <br>
            <label>Address</label>
            <input type="text" class="form-control" name="txt6"  placeholder="Address" required />
          </div>
          <div class="form-group">
            <label>Capacity</label>
            <input type="number" class="form-control" name="txt7" placeholder="Capacity" required />
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="txt8" placeholder="Price" required />
          </div>
          <div class="form-group">
            <label> VenueDetails</label>
            <input type="text" class="form-control" name="txt9" onkeyup="Validatestring(this)" placeholder="Details" required />
          </div>
          <div class="form-group">
            <label> Type_id</label><br>
            <?php
            $dq = mysqli_query($con, "select * from tbl_type");
            echo "<select name='txt13' required>";
            echo "<option value=''>Select</option>";
            while ($drow = mysqli_fetch_array($dq)) {
              echo "<option value='{$drow['type_id']}'>{$drow['type_name']}</option>";
            }
            echo "</select>";
            ?>
          </div>

          <div class="form-group">
            <label>PhotoPath</label>
            <input type="file" class="form-control" name="txt10" placeholder="PhotoPath" required />
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
  $("#myform").validate({
    rules: {

      txt1: {
        required: true,
        minlength: 3
      },

      txt2: {
        required: true,
        minlength: 3
      },

      txt3: {
        required: true,
        email: true
      },

      txt4: {
        required: true,
        minlength: 10,
        maxlength: 10
      },

      txt5: {
        required: true,
        minlength: 6
      },

      txt6: {
        required: true,
        minlength: 3
      },

      txt7: {
        required: true,
        minlength: 1
      },

      txt8: {
        required: true,
        minlength: 1
      },

      txt9: {
        required: true,
        minlength: 3
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