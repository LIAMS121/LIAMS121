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
                                        <?php
                                        require_once "includes/session.php";
                                        require_once "includes/database.php";
                                        require_once "includes/uniquepath.php";
                                        $result = "";

                                        if ($_SERVER['REQUEST_METHOD'] === "POST") {
                                            $image = $_FILES["image"];
                                            $id = $_SESSION['id'];
                                            $username = $_POST['username'];
                                            $email = $_POST['email'];


                                            $imagepath = "";

                                            if (!is_dir("images")) {
                                                mkdir("images");
                                            }
                                            if ($image && $image['name']) {
                                                $imagepath = "images/" . uniquePath(9) . "/" . $image['name'];
                                                if (!is_dir(dirname($imagepath))) {
                                                    mkdir(dirname($imagepath));
                                                }
                                                move_uploaded_file($image['tmp_name'], $imagepath);
                                            }

                                            if ($imagepath === null || empty($imagepath)) {
                                                $result = "<div class=' text-white'><p style='font-size:20px; background-color:#ff000080; padding:20px'> Please choose an image</div>";
                                            } else {
                                                $sqlupdate = "UPDATE admins SET image=:image, fullname=:username, email=:email WHERE id=:id";
                                                $start = $connection->prepare($sqlupdate);
                                                $start->bindValue(":image", $imagepath);
                                                $start->bindValue(":id", $id);
                                                $start->bindValue(":email", $email);
                                                $start->bindValue(":username", $username);
                                                $start->execute();
                                                echo "<script>  
                                                swal({
                                                title: \"Profile updated successfully\",
                                                type: \"success\",
                                                showConfirmButton: true
                                            }, function(){
                                                    window.location.href = \"profile.php\";
                                            });
                                        </script>";
                                            }
                                        }
                                        $id = $_SESSION['id'];

                                        $sql = "SELECT * FROM admins WHERE id=:id";
                                        $start = $connection->prepare($sql);
                                        $start->bindValue(":id", $id);
                                        $start->execute();
                                        $details = $start->fetch(PDO::FETCH_ASSOC);
                                        ?>


                                        <?php
                                        if (isset($_POST['btn'])) {
                                            echo $result;
                                        }
                                        ?>
                                        <h1 class="mb-4">Update profile</h1>
                                        <?php
                                        if ($details['image']) :
                                        ?>
                                            <img src="<?php echo $details['image'] ?>" width="120px" ">
                                        <?php
                                        else :
                                        ?>
                                            <img src=" blank_profile.jpg" width="120px">
                                        <?php
                                        endif
                                        ?>
                                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <div class="col-sm-10 mt-3">
                                                    <input type="file" class="profile" name="image">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <input type="text" name="username" class="form-control" placeholder="Full-name" value="<?php echo $_SESSION['fullname'] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $details['email'] ?>">
                                                </div>
                                            </div>
                                            <button name=" btn" class="btn btn-primary mb-2">Update profile</button>
                                        </form>
                                        <button class="btn btn-danger"><a class=" text-white" href="delete_image.php?id=<?php echo $details['id'] ?>">Remove image</a></button>
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