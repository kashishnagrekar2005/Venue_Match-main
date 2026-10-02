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
                    <h4 class="card-title">User</h4>
                    <p class="card-description"> <code></code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                           
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <!--<th>Password</th>-->
                            <th>Action</th>
                          </tr>
                        </thead>
<?php
 
 $con=mysqli_connect("localhost","root","","project");
 if($con)
 {
    // echo "Connected";
 }
 
 $q=mysqli_query($con,"select * from tbl_user");
 
 
 
 echo "</tr>";
 
 while($table=mysqli_fetch_array($q))
 {
     echo "<tr>";
     echo "<td>{$table['user_id']}</td>";
     echo "<td>{$table['user_name']}</td>";
     echo "<td>{$table['user_email']}</td>";
     echo "<td>{$table['user_mobile']}</td>";
     //echo "<td>{$table['user_password']}</td>";
     echo "<td>"."<a href='delete_user.php?did={$table['user_id']}'>Delete </a>";
     //echo "<a href='edit_user.php?uid={$table['user_id']}'>Edit</a>"."</td>";
     
     
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
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">  </span>
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