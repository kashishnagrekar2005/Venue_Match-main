<?php
$con=mysqli_connect("localhost","root","","project");
if(!$con)
{
    //echo " Not connected";
}
else
{
  // echo "Connected";
    //echo "<br>";
}
if(isset($_POST['submit']))
{
  $venue_id=$_POST['txt3'];
  $user_id=$_POST['txt9'];
$date=$_POST['txt1'];
$detail=$_POST['txt2'];

$q1=mysqli_query($con,"insert into tbl_feedback(venue_id,user_id,feedback_date,feedback_details) values ('$venue_id','$user_id','$date','$detail')");
if($q1)
{
   //echo "Inserted";
}
}
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
                    <p class="card-description">Feedback Form</p>
                    <form class="forms-sample" id="myform" method="post">
                    <div class="form-group">
                        <label for="exampleInputName1">Venue Title</label>
                        <br>
                      
                    <?php 
            $dq = mysqli_query($con,"select * from tbl_venuemaster");
            echo "<select name='txt3' required>";
            echo "<option value=''>Select</option>";
            while($drow = mysqli_fetch_array($dq))
            {
                echo "<option value='{$drow['venue_id']}'>{$drow['venue_title']}</option>";
            }
            echo "</select>";
        ?>
        </div>
        <div class="form-group">
                        <label for="exampleInputName1">UserName</label>
                        
                      <br>
                    <?php 
            $dq = mysqli_query($con,"select * from tbl_user");
            echo "<select name='txt9' required>";
            echo "<option value=''>Select</option>";
            while($drow = mysqli_fetch_array($dq))
            {
                echo "<option value='{$drow['user_id']}'>{$drow['user_name']}</option>";
            }
            echo "</select>";
        ?>
        </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Date</label>
                        <input type="date" class="form-control" name="txt1" placeholder="Date"  required/>
                      </div>
                      <div class="form-group">
                        <label>Feedback</label>
                        <input type="text" class="form-control" name="txt2" placeholder="Feedback" required />
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
        $("#myform").validate();
      });
    </script>
    <style>
      .error{
        color:red;
      }
      </style>
  </body>
</html>