<?php
$con = mysqli_connect("localhost", "root", "", "project");
include "css.php";
?>
<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    <span class="menu-title">Admin</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="Admin.php"> Add </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display_admin.php"> Display </a>
      </li>
    </ul>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    <span class="menu-title">Location</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="Location.php"> Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display_location.php"> Display </a>
      </li>
    </ul>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    <span class="menu-title">VenueOwner</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="Venuemaster.php"> Add </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display_venuemaster.php"> Display </a>
      </li>
    </ul>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    <span class="menu-title">Type Of Venue</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="Type.php"> Add </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display_type.php"> Display </a>
      </li>
    </ul>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    <span class="menu-title">VenueImages</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="Venueimages.php"> Add </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display_venueimages.php"> Display </a>
      </li>
    </ul>
  </div>
</li>



<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    <span class="menu-title">User</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="display_user.php"> Display</a>
      </li>

    </ul>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    <span class="menu-title">Booking</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="display_booking.php"> Display</a>
      </li>

    </ul>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    <span class="menu-title">Payment</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="display_payment.php"> Display</a>
      </li>

    </ul>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    <span class="menu-title">Feedback</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="display_feedback.php"> Display </a>
      </li>



    </ul>
  </div>
</li>

<br>

<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
    <i class="mdi mdi-chart-bar menu-icon"></i>
    <span class="menu-title">Reports</span>
    <i class="menu-arrow"></i>
  </a>
  <div class="collapse" id="ui-basic">
    <ul class="nav flex-column sub-menu">
      <li class="nav-item">
        <a class="nav-link" href="report_type.php">Category </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="report_location.php"> Location </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="report_booking.php"> Booking </a>
      </li>




    </ul>
  </div>
</li>
<br><br>

<li class="nav-item">
  <a class="nav-link" href="changepassword.php">
    <i class="mdi mdi-file-document-box menu-icon"></i>
    <span class="menu-title">ChangePassword</span>
  </a>
</li>