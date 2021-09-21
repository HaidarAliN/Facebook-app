<?php
  session_start();
  if(empty($_SESSION["id"])){
    header('location: sign-in.html');
  }

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise-new/profiles.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 21:48:13 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Facebook | Connection Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
<input type="hidden" id="user" value=<?php echo  $_SESSION["id"] ?>>
    <div class="wrapper">
    <header>
            <div class="container">
                <div class="header-data">
                    <div class="logo">
                        <img src="images/logo.png" alt="">
                    </div>
                    <div class="search-bar">
                        
                    </div>
                    <nav>
                        <ul>
                            <li>
                                <a href="index.php" title="">
                                    <span><img src="images/icon1.png" alt=""></span>
                                    Home
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="menu-btn">
                        <a href="#" title=""><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="user-account">
                    <div class="user-info" id="headicon">
                            <img src="images/resources/user.png" alt="">
                            <a href="#" title="">John</a>
                            <i class="la la-sort-down"></i>
                        </div>
                        <div class="user-account-settingss" id="users">
                            <h3 class="tc"><a href="php/logout.php" title="">Logout</a></h3>
                        </div>
                    </div>
                </div>
        </header>
        <section class="companies-info">
            <div class="container">
                <div class="company-title">
                    <h3>All Connections</h3>
                </div>
                <div class="companies-list">
                    <div class="row" id="row">
                        <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="company_profile_info">
                                <div class="company-up-info">
                                    <img src="images/resources/pf-icon1.png" alt="">
                                    <h3>John Doe</h3>
                                    <h4>Graphic Designer</h4>
                                    <ul>
                                        <li><a href="#" title="" class="follow">Follow</a></li>
                                        <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a>
                                        </li>
                                        <li><a href="#" title="" class="hire-us">Hire</a></li>
                                    </ul>
                                </div>
                                <a href="user-profile.html" title="" class="view-more-pro">View Profile</a>
                            </div>
                        </div>
                         -->
                    </div>
                </div>
                <div class="process-comm">
                    <div class="spinner">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                </div>
            </div>
        </section>
       
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/flatpickr.min.js"></script>
    <script type="text/javascript" src="lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/connections.js"></script>

</body>

<!-- Mirrored from gambolthemes.net/workwise-new/profiles.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 21:48:21 GMT -->

</html>