<div class="header">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                    <div class="header-text">
                        <p class="wlecome-text">Welcome to Venue Match</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                    <div class="header-text text-right">
                        <p>Are You Vendor?<a href="../vendor/template/registration.php" class="text-white">List Your Business</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.header-top -->
    <!-- navigation start -->
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <nav class="navbar navbar-expand-lg navbar-classic">
                    <a class="navbar-brand" href=""> <img src="images/logo.png" style=height:70px;></a>
                    <FONT COLOR=red>Venue Match</FONT>

                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar top-bar mt-0"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-classic">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="homepage1.php">
                                    Home
                                </a>
                            </li>



                            <li class="nav-item dropdown">
                                <a class="nav-link  " href="about_us.php">
                                    About 

                                </a>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  " href="contact-us.php">
                                    Contact
                                </a>
                            </li>
                            
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="menu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="menu-2">

                                  

                                            <?php
                                            $c = mysqli_connect("localhost", "root", "", "project");

                                            $cq = mysqli_query($c, "select * from tbl_type");
                                            while ($cdata = mysqli_fetch_array($cq)) {
                                                echo "<li><a href='list-grid-view.php?tid={$cdata['type_id']}'>{$cdata['type_name']}</a></li>";
                                            }
                                            ?>
                                   

                                    <!--<li><a class="dropdown-item" href="list-grid-view.php">
                                                Listing Of Venues</a>
                                        </li>
                                        <li><a class="dropdown-item" href="list-single.php">
                                                Listing of Single Venues</a>
                                        </li>-->



                                </ul>
                            </li>
                           
                            <!--
                                    <ul class="dropdown-menu" aria-labelledby="menu-3">
                                        <li><a class="dropdown-item" href="supplier-dresses-list.html" title="">Dresses</a></li>
                                        <li><a class="dropdown-item" href="supplier-cake-list.html" title="">Cakes</a></li>
                                        <li><a class="dropdown-item" href="supplier-florist-list.html" title="">Florist</a></li>
                                        <li><a class="dropdown-item" href="supplier-photographer-list.html" title="">Photographers</a></li>
                                        <li><a class="dropdown-item" href="supplier-videographer-list.html" title="">Videographer</a></li>
                                    </ul>-->
                            </li>

                            <!--
                                    <ul class="dropdown-menu" aria-labelledby="menu-4">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Real Weddings</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="real-wedding-list.html" title="">Real Weddings List</a></li>
                                                <li><a class="dropdown-item" href="real-wedding-single.html" title="">Real Weddings Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Forms</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="vendor-form.html" title="">Vendors Form</a></li>
                                                <li><a class="dropdown-item" href="couple-form.html" title="">Couple Form</a></li>
                                                <li><a class="dropdown-item" href="forgot-password.html" title="">Forgot Password</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Help Center</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="help-center.html" title="">Help Center</a></li>
                                                <li><a class="dropdown-item" href="help-category-list.html" title="">Help Category List</a></li>
                                                <li><a class="dropdown-item" href="help-category-single.html" title="">Help Category Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Email Template</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="email-template/new-id-password.html" title="">New ID/Password</a></li>
                                                <li><a class="dropdown-item" href="email-template/reset-password.html" title="">Reset Password</a></li>
                                                <li><a class="dropdown-item" href="email-template/forgot-password.html" title="">Forgot Password</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">About <span class="badge badge-success">New</span></a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="about-us.html" title="">About v1</a></li>
                                                <li><a class="dropdown-item" href="about-us-2.html" title="">About v2</a></li>
                                                <li><a class="dropdown-item" href="about-us-3.html" title="">About v3 </a></li>
                                                <li><a class="dropdown-item" href="about-us-4.html" title="">About v4 </a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="team-page.html" title="">Meet the Team</a></li>
                                        <li><a class="dropdown-item" href="pricing.html" title="">Pricing</a></li>
                                        <li><a class="dropdown-item" href="error-404.html" title="">404</a></li>
                                        <li><a class="dropdown-item" href="faq.html" title="">FAQ's</a></li>
                                        <li><a class="dropdown-item" href="contact-us.html" title="">Contact us</a></li>
                                        <li><a class="dropdown-item" href="vendor-location.html" title="">Vendor Locations</a></li>
                                    </ul>-->
                            </li>
                            <!--
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="menu-5">
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">Blog Listing</a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="blog-listing.html" title="">Listing</a></li>
                                                <li><a class="dropdown-item" href="blog-classic.html" title="">Classic</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item dropdown-toggle" href="#">List Single</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="blog-single.html" title="">Blog Single</a></li>
                                                <li><a class="dropdown-item" href="blog-full-screen-single.html" title="">Blog Single Full Screen</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="menu-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Elements <span class="badge badge-success">New</span>
                                    </a>
                                    <ul class="dropdown-menu mega-dropdown-menu" aria-labelledby="menu-6">
                                        <li class="row">
                                            <ul class="col">
                                                <li><a class="dropdown-item" href="shortcode-tabs.html">
                                                        Tabs</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-accordions.html">
                                                        Accordions</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-alerts.html">
                                                        Alerts</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-bullet-list.html">
                                                        Bullet List</a>
                                                </li>
                                                
                                            </ul>
                                            <ul class="col">
                                                
                                                <li><a class="dropdown-item" href="shortcode-dropcap.html">
                                                        Drop Cap</a>
                                                </li>
                                                
                                                <li><a class="dropdown-item" href="shortcode-buttons.html">
                                                        Buttons</a>
                                                </li>

                                                <li><a class="dropdown-item" href="shortcode-blockquote.html">
                                                        Blockquotes</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-email-subscriber.html">
                                                        Email Subscriber</a>
                                                </li>
                                            </ul>
                                            <ul class="col">
                                              
                                                <li><a class="dropdown-item" href="shortcode-socialmedia.html">
                                                        Social Media</a>
                                                </li>
                                                <li><a class="dropdown-item" href="shortcode-typography.html">
                                                        Typography</a>
                                                </li>
                                            </ul>
                                            
                                        </li>
                                    </ul>
                                </li>-->
                            <?php

                            if (isset($_SESSION['uid'])) {

                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Hi, <?php echo $_SESSION['uname']; ?></a>


                                    <ul class="dropdown-menu">

                                        <!--  <li><a class="dropdown-item" href="registration.php" title="">Registration</a></li>-->
                                        <!-- <a  href="registration.php">Registration </a>
                                            <ul class="dropdown-menu ">
                                                <li><a class="dropdown-item" href="vendor-dashboard-overview.html" title="">Dashboard</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-listing.html" title="">Listing</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-add-listing.html" title="">Add Listing</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-pricing.html" title="">Pricing</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-request-quote.html" title="">Request Quote</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-reviews.html" title="">Reviews</a></li>
                                                <li><a class="dropdown-item" href="vendor-dashboard-profile.html" title=""> Profile</a></li>
                                            </ul>-->




                                        <!--<li><a class="dropdown-item" href="user_login.php">Login</a></li>-->
                                        
                                        <li><a class="dropdown-item" href="changepassword.php">ChangePassword</a></li>
                                        <li><a class="dropdown-item" href="Booking_detail.php">Booking History</a></li>
                                        <li><a class="dropdown-item" href="feedback_details.php">My Feedback</a></li>

                                        <!--
                                                <li><a class="dropdown-item" href="couple-dashboard-todolist.html" title="">To Do List</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-budget.html" title="">Budget</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-guest-manager.html" title="">Guest Manager</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-add-new-guest.html" title="">Add New Guest</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-table-planner.html" title="">Seating Table</a></li>
                                                <li><a class="dropdown-item" href="couple-dashboard-profile.html" title=""> Profile</a></li>-->



                                        <li><a class="dropdown-item" href="logout.php" title="">LogOut</a></li>
                                    </ul>
                                </li>
                        </ul>
                    <?php





                            } else {
                                
                                ?>
                                <li><a class="dropdown-item" href="user_login.php">Login</a></li>
                                <?php
                            }
                    ?>
                    <a href="list-grid-view.php" class="btn btn-default btn-sm">Find Venue</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- navigation close -->
</div>