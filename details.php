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

<?php require_once "includes/session.php" ?>
<?php require_once "includes/header.php" ?>

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
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <h1>Profile</h1> <br>
                                        <table class="table table-bordered border-dark">
                                            <?php
                                            require_once "includes/uniquepath.php";


                                            $id = $_GET['id'];
                                            $sqlSelect = "SELECT * FROM measurement WHERE id=:id";
                                            $statement = $connection->prepare($sqlSelect);
                                            $statement->bindValue(":id", $id);
                                            $statement->execute();
                                            $import = $statement->fetch(PDO::FETCH_ASSOC);




                                            ?>
                                            <img src='<?php echo $import['material'] ?>' style="margin-bottom:10px;" width='200px'>

                                            <tr>
                                                <th>Username</th>
                                                <td><?php echo $import['fullname'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td><?php echo $import['email'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Phone Number</th>
                                                <td><?php echo $import['phone'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td><?php echo $import['address'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Style</th>
                                                <td><?php echo $import['style'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Burst</th>
                                                <td><?php echo $import['burst'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Sleeve Length</th>
                                                <td><?php echo $import['sleeve_length'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Shoulder Length</th>
                                                <td><?php echo $import['shoulder_length'] ?></th>
                                            </tr>
                                            <tr>
                                                    <th>Waist</th>
                                                <td><?php echo $import['waist'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Hip</th>
                                                <td><?php echo $import['hip'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Full Length</th>
                                                <td><?php echo $import['full_length'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Half Length</th>
                                                <td><?php echo $import['half_length'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Under Burst</th>
                                                <td><?php echo $import['under_burst'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Shoulder To Hip</th>
                                                <td><?php echo $import['shoulder_to_hip'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Burst Point</th>
                                                <td><?php echo $import['burst_point'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Niple To Niple</th>
                                                <td><?php echo $import['niple_to_niple'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Arm Hole</th>
                                                <td><?php echo $import['arm_hole'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Round Sleeve</th>
                                                <td><?php echo $import['round_sleeve'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Blouse Length</th>
                                                <td><?php echo $import['blouse_length'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Skirt Waist</th>
                                                <td><?php echo $import['skirt_waist'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Skirt Length</th>
                                                <td><?php echo $import['skirt_length'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Round Shoulder</th>
                                                <td><?php echo $import['round_shoulder'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Tigh</th>
                                                <td><?php echo $import['tigh'] ?></th>
                                            </tr>
                                            <tr>
                                                <th>Join Date</th>
                                                <td><?php echo $date_ordered = strftime("%B %d, %Y", strtotime($import['date_ordered'])) ?></td>
                                            </tr>
                                            <tr>
                                                <th></th>

                                                <td>
                                                    <form method="post" action="details.php?id=<?php echo $import['id'] ?>">
                                                        <div class="form-group row">
                                                            <div class="col-sm-10">
                                                                <?php
                                                                if ($_SERVER['REQUEST_METHOD'] === "POST") {
                                                                    if (isset($_POST['btn'])) {
                                                                        $style = $_POST['style'] ?? null;
                                                                        if ($style) {
                                                                            $sqlUpdate = "UPDATE measurement SET order_status=:status WHERE id=:id";
                                                                            $statement = $connection->prepare($sqlUpdate);
                                                                            $statement->bindValue(":status", $style);
                                                                            $statement->bindValue(":id", $id);
                                                                            $statement->execute();
                                                                            echo $result = "<script>  swal({
                                                                                title: \"Status Updated Successfully!!\",
                                                                                type: \"success\",
                                                                                showConfirmButton: true
                                                                              }, function(){
                                                                                    window.location.href = \"management.php\";
                                                                              });
                                                                              </script>";
                                                                        } else {
                                                                            echo "<div class='alert alert-danger text-danger'>You haven't made any selection</div>";
                                                                        }
                                                                    }
                                                                }
                                                                ?>
                                                                <select name="style" class="form-control">
                                                                    <option selected disabled hidden>Update Status</option>
                                                                    <option>Processing</option>
                                                                    <option>Completed</option>
                                                                    <option>Delivered</option>
                                                                    <input type="submit" name="btn" class="btn btn-primary mt-2">
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>


                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js
    "></script>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div id="styleSelector">

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
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
    <?php require_once "includes/footer.php" ?>


</body>

</html>