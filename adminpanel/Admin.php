<?php
$con = mysqli_connect("localhost", "root", "", "project");
if (!$con) {
  //echo " Not connected";
} else {
  //echo "Connected";

}
if (isset($_POST['submit'])) {
  $name = $_POST['txt1'];
  $email = $_POST['txt2'];
  $password = $_POST['txt3'];
  $q1 = mysqli_query($con, "insert into tbl_admin (admin_name,admin_email,admin_password) values ('$name','$email','$password')");
  if ($q1) {
    echo "<script>alert('Inserted Sucessfully');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
include "css.php";
?>
<?php
include "main.php";
?>


<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Admin Form</h4><hr>
      <p class="card-description"></p>
      <form class="forms-sample" id="myform" method="post">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="txt1" onkeyup="Validatestring(this)" placeholder="Name" required />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="txt2" placeholder="Email" required />
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="txt3" placeholder="Password" required />
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

      txt2: {
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