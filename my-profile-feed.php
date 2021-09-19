<?php
  session_start();
  if(empty($_SESSION["id"])){
    header('location: sign-in.html');
  }

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise-new/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 21:48:21 GMT -->

<head>
    <meta charset="UTF-8">
    <title>WorkWise Html Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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

        <section class="cover-sec">
            <img src="images/resources/cover-img.jpg" alt="">
        </section>
        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="main-left-sidebar">
                                    <div class="user_profile">
                                        <div class="user-pro-img" id="userimage">
                                            <img src="images/resources/user-pro-img.png" alt="">
                                        </div>
                                        <div class="user_pro_status">
                                            <ul class="flw-status">
                                                <li><span> <b id="biop"></b></span></li>
                                            </ul>
                                            <ul class="flw-status">
                                                <li>
                                                    <span>Connections</span>
                                                    <b id="connumber"></b>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="suggestions full-width">
                                        <div class="sd-title">
                                            <h3>Suggestions</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-ws-sec">
                                    
                                        <div class="product-feed-tab current" id="feed-dd">
                                            <div class="posts-section">
                                                <div class="post-bar">


                                                        <div class="acc-settig">
                                                            <h3>Account Details</h3>
                                                                    <div class="cp-field">
                                                                        <h5>Name:</h5>
                                                                        <div class="cpp-fiel">
                                                                            <input type="text" id="name" placeholder="Name:">
                                                                            <i class="la la-user"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cp-field">
                                                                        <h5>Bio:</h5>
                                                                        <div class="cpp-fiel">
                                                                            <input type="text" id="bio" placeholder="Bio">
                                                                            <i class="la la-newspaper-o"></i>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    <div class="save-stngs pd2 text-center">
                                                                        <ul>
                                                                            <li><button id="updatebtn">Update info</button></li>
                                                                        </ul>
                                                                    </div>
                                                        </div>

                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="right-sidebar">
                                    <div class="widget widget-portfolio">
                                        <div class="wd-heady">
                                            <hspan id="proid">Portfolio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/profile.js"></script>

</body>

<!-- Mirrored from gambolthemes.net/workwise-new/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 21:48:21 GMT -->

</html>