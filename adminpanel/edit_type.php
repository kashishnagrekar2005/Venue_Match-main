<?php
$con=mysqli_connect("localhost","root","","project");
$uid=$_GET['uid'];
$select=mysqli_query($con,"select * from tbl_type where type_id=$uid");
$data=mysqli_fetch_array($select);
if(!$con)
{
    //echo " Not connected";
}
else
{
   //echo "Connected";
    //echo "<br>";
}
if(isset($_POST['submit']))
{
$name=$_POST['txt1'];


$q1=mysqli_query($con,"update tbl_type set type_name='$name' where type_id='$uid'");
if($q1)
{
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
    <title>Breeze Admin</title>
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
                    <p class="card-description"> Type Venue Form</p>
                    <form class="forms-sample" id="form" method="post">
                      
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="txt1" placeholder=" Type name" value="<?php echo $data['type_name'];?>" required/>
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
      $(document).ready(function()
      {
        $("#form").validate();
      });
    </script>
    <style>
      .error{
        color:red;
      }
      </style>
  </body>
</html>