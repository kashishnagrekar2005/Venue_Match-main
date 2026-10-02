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
  <link rel="shortcut icon" href="logo.jpeg" />
</head>

<?php
include "main.php";
$con = mysqli_connect("localhost", "root", "", "project");
if (isset($_GET['did'])) {
  $did = $_GET['did'];
  $q = mysqli_query($con, "delete from tbl_admin where admin_id=$did");

  if ($q) 
  {
    echo "<script>alert(' Deleted Successfully');window.location='display_admin.php';</script>";
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