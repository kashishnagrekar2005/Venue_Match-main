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
                    <h4 class="card-title">Feedback</h4>
                    <p class="card-description"> <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                           
                            <th>Id</th>
                            <th>Venue Title</th>
                            <th>UserName</th>
                            <th>Date</th>
                            <th>Details</th>
                            <th>Rating</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
<?php
 
 $con=mysqli_connect("localhost","root","","project");
 if($con)
 {
    // echo "Connected";
 }
 
 $q=mysqli_query($con,"select * from tbl_feedback");
 /*echo "<table border=1>";
 echo "<tr>";
 echo "<td>Id</td>";
 echo "<td>Email</td>";
 echo "<td>Password</td>";*/
 
 
 echo "</tr>";
 
 while($table=mysqli_fetch_array($q))
 {
  $cq = mysqli_query($con,"select * from tbl_venuemaster where venue_id='{$table['venue_id']}'");
  $crow = mysqli_fetch_array($cq);
  $cq1 = mysqli_query($con,"select * from tbl_user where user_id='{$table['user_id']}'");
  $crow1 = mysqli_fetch_array($cq1);
 
  $data = substr_replace($table['feedback_details'], "...", 50);

     echo "<tr>";
     echo "<td>{$table['feedback_id']}</td>";
     echo "<td>{$crow['venue_title']}</td>";
     echo "<td>{$crow1['user_name']}</td>";
     echo "<td>{$table['feedback_date']}</td>";
     echo "<td>{$data}</td>";
     echo "<td>{$table['feedback_rating']}</td>";
     echo "<td>"."<a href='delete_feedback.php?did={$table['feedback_id']}'>Delete</a>"."</td>";
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