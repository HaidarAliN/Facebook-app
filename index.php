<?php
  session_start();
  if(empty($_SESSION["id"])){
    header('location: sign-in.html');
  }

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/workwise-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 21:47:11 GMT -->

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
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
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
                        <form>
                            <input type="text" name="search" id="search" placeholder="Search...">
                            <button type="button" id="searchbtn"><i class="la la-search"></i></button>
                        </form>
                    </div>
                    <nav>
                        <ul>
                            <li>
                                <a href="index.php" title="">
                                    <span><img src="images/icon1.png" alt=""></span>
                                    Home
                                </a>
                            </li>

                            <li>
                                <a href="#" title=""  class="not-box-open">
                                    <span id="not"><img src="images/icon7.png" alt=""></span>
                                    Notification
                                </a>
                                <div class="notification-box noti" id="notification">
                                    <div class="nott-list" id="notlist">
                                            <div class="notification-info">
                                                
                                            </div>
                                    </div>
                                </div>
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
        <!-- main -->
        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                                <div class="main-left-sidebar no-margin">
                                    <div class="user-data full-width">
                                        <div class="user-profile">
                                            <div class="username-dt">
                                                <div class="usr-pic" id="imageinfo">
                                                    <img src="images/resources/pf-icon1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="user-specs">
                                                <h3 id="nameinfo">John Doe</h3>
                                                <span id="bioinfo">Graphic Designer at Self Employed</span>
                                            </div>
                                        </div>
                                        <ul class="user-fw-status">
                                            <li>
                                                <h4>Connections</h4>
                                                <span id="coninfo">34</span>
                                            </li>
                                            <li id="hrefinfo">
                                               
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="suggestions full-width">
                                        <div class="sd-title">
                                            <h3>List of pending friends</h3>
                                            <span><i class="la la-refresh" id="refresh"></i></span>
                                        </div>
                                        <div class="suggestions-list" id="sug">

                                            

                                         
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8 no-pd">
                                <div class="main-ws-sec">
                                    <div class="posts-section">
                                        
                                    <div class="top-profiles">
                                            <div class="pf-hd text-center">
                                                <h3 class="text-center">Search for Connections</h3>
                                            </div>
                                            <div class="profiles-slider " id="searchd" >
    
            
                                        </div>
                                        </div>


                                        <div class="process-comm">
                                            <div class="spinner">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 pd-right-none no-pd">
                                <div class="right-sidebar">
                                    <div class="widget widget-about">
                                        <img src="images/wd-logo.png" alt="">
                                        <h3>List off all friend</h3>
                                        <div class="sign_link">
                                            <a href="all-connections.php" title="">Go to Connections list</a>
                                        </div>
                                    </div>

                                    <!-- <div class="widget suggestions full-width">

                    <div class="suggestions-list">

                    <div class="view-more">
                        <a href="#" title="">View More</a>
                    </div>
                    </div>
                    </div> -->
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
        <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
        <script type="text/javascript" src="lib/slick/slick.min.js"></script>
        <script type="text/javascript" src="js/scrollbar.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
</body>

<!-- Mirrored from gambolthemes.net/workwise-new/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 21:47:29 GMT -->

</html>