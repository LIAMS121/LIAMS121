<!DOCTYPE html>
<html lang="en">
<?php require_once "includes/header.php" ?>
<?php require_once "includes/session.php" ?>


<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="assets/images/eFashion.jpg" alt="Theme-Logo" width='80px' />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <?php require_once "includes/session_details.php" ?>
                        <?php if (!isset($_SESSION['fullname'])) : ?>
                            <ul class="nav-right">

                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src=" blank_profile.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>Please login to see your profile</span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="#">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.php">
                                                <i class="ti-layout-sidebar-left"></i> Login
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        <?php else : ?>
                            <ul class="nav-right">

                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src="<?php require_once "includes/session_details.php";
                                                    if ($details['image']) : ?>
                                                <?php echo $details['image'] ?>
                                                <?php else : ?>
                                                    blank_profile.jpg
                                                    <?php endif; ?>" class="img-radius" alt="User-Profile-Image">
                                        <span><?php echo $details['fullname'] ?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li>
                                            <a href="profile.php">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="logout.php">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        <?php endif ?>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php require_once "includes/sidebar.php"; ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">

                                <div class="page-body">
                                    <?php if (!isset($_SESSION['fullname'])) : ?>
                                        <?php require_once "includes/sidebar.php" ?>
                                        <p>You are currently not signed in, please login to continue. <br> <button> <a href="index.php">Login here</a></button></p>
                                    <?php else : ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4>Manage Customer Orders</h4>

                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">

                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-spinner-alt-5"></i>
                                                        </div>
                                                        <div class="page-wrapper">

                                                            <div class="page-body">
                                                                <div class="row">
                                                                    <div class="orders">

                                                                    </div>
                                                                    <table class="table">
                                                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                                                                            <div class="input-group mt-3 mb-3">
                                                                                <input type="text" class="form-control" placeholder="Search Customer" name="search" required>
                                                                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                                                    </svg></button>
                                                                            </div>
                                                                        </form>
                                                                        <thead>
                                                                            <th>Name</th>
                                                                            <th>Phone number</th>
                                                                            <th>Address</th>
                                                                            <th>Date Ordered</th>
                                                                            <th>Material</th>
                                                                            <th>Price</th>
                                                                            <th>Order Status</th>
                                                                            <th>Action</th>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php require_once "includes/managements.php" ?>

                                                                            <?php foreach ($statement as $i => $import) : ?>
                                                                                <tr>
                                                                                    <td><?php echo $import['fullname'] ?></td>
                                                                                    <td><?php echo $import['phone'] ?></td>
                                                                                    <td><?php echo $import['address'] ?></td>
                                                                                    <td><?php echo $date_ordered = strftime("%B %d, %Y", strtotime($import['date_ordered'])) ?></td>
                                                                                    <td><img src="<?php echo $import['material']  ?>" width="75px"></td>
                                                                                    <td>&#8358;<?php echo number_format($import['price'], 2) ?></td>
                                                                                    <td><?php echo $import['order_status'] ?> </td>
                                                                                    <td><button class="btn btn-primary"><a href="details.php?id=<?php echo $import['id'] ?>" class="text-white">View Details</a></button></td>
                                                                                </tr>
                                                                        </tbody>
                                                                    <?php endforeach; ?>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                    <!-- Warning Section Starts -->
                    <!-- Older IE warning message -->
                    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
                    <!-- Warning Section Ends -->
                    <!-- Required Jquery -->
                    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
                    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
                    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
                    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
                    <!-- jquery slimscroll js -->
                    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
                    <!-- modernizr js -->
                    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
                    <!-- am chart -->
                    <script src="assets/pages/widget/amchart/amcharts.min.js"></script>
                    <script src="assets/pages/widget/amchart/serial.min.js"></script>
                    <!-- Todo js -->
                    <script type="text/javascript " src="assets/pages/todo/todo.js "></script>
                    <!-- Custom js -->
                    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
                    <script type="text/javascript" src="assets/js/script.js"></script>
                    <script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
                    <script src="assets/js/pcoded.min.js"></script>
                    <script src="assets/js/demo-12.js"></script>
                    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
                    <script>
                        var $window = $(window);
                        var nav = $('.fixed-button');
                        $window.scroll(function() {
                            if ($window.scrollTop() >= 200) {
                                nav.addClass('active');
                            } else {
                                nav.removeClass('active');
                            }
                        });
                    </script>
</body>

</html>