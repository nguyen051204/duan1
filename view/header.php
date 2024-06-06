<?php
    // if(isset($s))
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demoxml.com/html/hotelbooking/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 12:16:21 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon.ico" sizes="16x16">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- uikit -->
    <link rel="stylesheet" href="css/uikit.min.css" />

    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- rev slider -->
    <link rel="stylesheet" href="css/rev-slider/settings.css" />
    <!-- lightslider -->
    <link rel="stylesheet" href="css/lightslider.css">
    <!-- Theme -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <style>
        #totalProduct {
            color: #fff;
            background-color: red;
            font-size: 12px;
            padding: 5px;
            border-radius: 50%;
        }
    </style>

</head>

<body id="home_one">

    <!-- start preloader -->
    <!-- <div id="loader-wrapper">
            <div class="logo"><a href="#"><span>Hotel</span>-Booking</a></div>
            <div id="loader">
            </div>
        </div> -->
    <!-- end preloader -->

    <!-- start header -->
    <header class="header_area">

        <!-- start main header -->
        <div class="main_header_area">
            <div class="container">
                <!-- start mainmenu & logo -->
                <div class="mainmenu">
                    <div id="nav">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="site_logo fix">
                                    <a id="brand" class="clearfix navbar-brand border-right-whitesmoke" href="index.php"><img src="img/site-logo.png" alt="Trips" ></a>
                                    <div class="header_login floatleft">
                                        <ul>
                                            <?php
                                            if (isset($_SESSION['name'])) {
                                                extract($_SESSION['name']);

                                             
                                                    <li>
                                                        <a href="admin">ADMIN</a>
                                                    </li>
                                                <?php } ?>
                                                <li>
                                                     <?="Hello ".$name?>
                                                </li>
                                                <li>
                                                    <a href="index.php?act=thoat">Thoát</a>
                                                </li>
                                            <?php } else { ?>
                                                <li><a href="dkdn.php?act=dangnhap">Đăng nhập</a></li>
                                                <li><a href="dkdn.php?act=dangky">Đăng kí</a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if(isset($_SESSION['name'])){
                               $link_user = "index.php?act=lichsudat&nameuser=". $_SESSION['name']['name'];
                            }
                            ?>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php">Trang chủ</a></li>
                                    <li><a href="index.php?act=choo">Chỗ ở</a></li>
                                    <li><a href="<?=$link_user?>">Lịch sử đặt</a></li>
                                    <li><a href="blog.html">Tin tức</a></li>
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdownbtn" href="index.php?act=listCart">Giỏ hàng</a>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <span id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                                    </li>
                                </ul>

                            </div><!-- /.navbar-collapse -->
                        </nav>
                    </div>
                </div>
                <!-- end mainmenu and logo -->
            </div>
        </div>
        <!-- end main header -->

    </header>
    <!-- end header -->