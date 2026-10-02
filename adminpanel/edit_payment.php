<?php
$con = mysqli_connect("localhost", "root", "", "project");
$uid = $_GET['uid'];
$select = mysqli_query($con, "select * from tbl_payment where payment_id=$uid");
$data = mysqli_fetch_array($select);
if (!$con) {
  //echo " Not connected";
} else {
  //echo "Connected";
  //echo "<br>";
}
if (isset($_POST['submit'])) {

  //$venue_id = $_POST['txt5'];
  //$amount = $_POST['txt1'];
  //$method = $_POST['txt2'];
  $status = $_POST['txt3'];
  //$bstatus = $_POST['txt4'];


  $q1 = mysqli_query($con, "update tbl_payment set payment_status='$status' where payment_id='$uid'");
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
      <p class="card-description">Payment Form</p>
      <form class="forms-sample" id="myform" method="post">
        <div class="form-group">

        </div>
        <!--<div class="form-group">
          <label> VenueTitle</label></label>
          <br>
          <?php
          /*$dq = mysqli_query($con, "select * from tbl_venuemaster");
          echo "<select name='txt5' required>";
          echo "<option value=''>Select</option>";
          while ($drow = mysqli_fetch_array($dq)) {
            $selected = ($drow['venue_id'] == $data['venue_id']) ? "selected" : "";
            echo "<option value='{$drow['venue_id']}' $selected>{$drow['venue_title']}</option>";
          }
          echo "</select>";*/
          ?>
        </div>
        <div class="form-group">
          <label>Amount</label>
          <input type="number" class="form-control" name="txt1" placeholder="Amount" value="<?php //echo $data['amount']; ?>" required />
        </div>
        <div class="form-group">
          <label>Payment Method</label>
          <input type="text" class="form-control" name="txt2" placeholder="Paymnet Method" value="<?php //echo $data['payment_method']; ?>" required />
        </div>-->
        <div class="form-group">
          <label>Payment Status</label>
          <input type="text" class="form-control" name="txt3" placeholder="Paymnet Status" value="<?php echo $data['payment_status']; ?>" required />
        </div>

       <!-- <div class="form-group">
          <label>Booking Status</label></label>
          <br>
          <?php
          /*$dq = mysqli_query($con, "select * from tbl_booking");
          echo "<select name='txt4' required>";
          echo "<option value=''>Select</option>";
          while ($drow = mysqli_fetch_array($dq)) {
            $selected = ($drow['booking_id'] == $data['booking_id']) ? "selected" : "";
            echo "<option value='{$drow['booking_id']}' $selected>{$drow['booking_status']}</option>";
          }
          echo "</select>";*/
          ?>
        </div>-->


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
      txt3: {
        required: true,
        minlength: 6
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

      title: {
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

</html>