<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E fashion berry</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<?php require_once "includes/header.php" ?>
<?php require_once "includes/measurements.php" ?>


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
                        </ul><?php require_once "includes/session_details.php" ?>
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
                                                <h4>Customer Measurement</h4>
                                                <?php
                                                echo $result;
                                                ?>
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">

                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-spinner-alt-5"></i>
                                                        </div>
                                                        <!-- Page body start -->
                                                        <div class="page-wrapper">

                                                            <div class="page-body">
                                                                <div class="row">
                                                                    <div class="orders">

                                                                    </div>
                                                                    <form class="col-sm-12" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="fullname" class="form-control" placeholder="Customer's Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <textarea rows="5" cols="5" name="address" class="form-control" placeholder="Address"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="price" class="form-control" placeholder="Price">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="amount" class="form-control" placeholder="Amount Paid">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <select name="payment" class="form-control">
                                                                                    <option selected disabled hidden>Update Status</option>
                                                                                    <option>Full Payment</option>
                                                                                    <option>Paid Some</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="file" name="image" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <select name="style" class="form-control">
                                                                                    <option selected disabled hidden>Choose Style</option>
                                                                                    <option>Gown</option>
                                                                                    <option>Ankara</option>
                                                                                    <option>Skirt</option>
                                                                                    <option>Plain Gown</option>
                                                                                    <option>Top</option>
                                                                                    <option>Butterfly</option>
                                                                                    <option>Wedding Gown</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="burst" class="form-control" placeholder="Burst">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="sleeve-length" class="form-control" placeholder="Sleeve Length">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="shoulder-length" class="form-control" placeholder="Shoulder Length">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="waist" class="form-control" placeholder="Waist">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="hip" class="form-control" placeholder="Hip">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="full-length" class="form-control" placeholder="Full Length">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="half-length" class="form-control" placeholder="Half Length">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="under-burst" class="form-control" placeholder="Under Burst">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="shoulder-to-hip" class="form-control" placeholder="Shoulder To Hip">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="burst-point" class="form-control" placeholder="Apex Point">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="niple-to-niple" class="form-control" placeholder="Niple To Niple">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="arm-hole" class="form-control" placeholder="Arm Hole">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="round-sleeve" class="form-control" placeholder="Round Sleeve">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="blouse-length" class="form-control" placeholder="Blouse Length">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="skirt-length" class="form-control" placeholder="Skirt Length">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="skirt-waist" class="form-control" placeholder="Skirt Waist">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="round-shoulder" class="form-control" placeholder="Round Shoulder">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="tigh" class="form-control" placeholder="Tigh">
                                                                            </div>
                                                                        </div>
                                                                        <button name="btn" class="btn btn-primary">Create</button>
                                                                </div>

                                                                </form>
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
                <?php endif; ?>
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