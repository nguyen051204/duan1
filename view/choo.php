<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demoxml.com/html/hotelbooking/accomodation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 12:18:28 GMT -->

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body id="accomodation_page">


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
                                    <a id="brand" class="clearfix navbar-brand border-right-whitesmoke" href="index.php"><img src="img/site-logo.png" alt="Trips"></a>
                                    <div class="header_login floatleft">
                                        <ul>
                                            <?php
                                            if (isset($_SESSION['name'])) {
                                                extract($_SESSION['name']);

                                                if ($role == 1) {
                                            ?>
                                                    <li>
                                                        <a href="admin">ADMIN</a>
                                                    </li>
                                                <?php } ?>
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

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php">Trang chủ</a></li>
                                    <li><a href="index.php?act=choo">Chỗ ở</a></li>
                                    <li><a href="<?= $link_user ?>">Lịch sử đặt</a></li>
                                    <li><a href="blog.html">Tin tức</a></li>
                                    <li role="presentation" class="dropdown">
                                        <a class="dropdownbtn" href="index.php?act=listCart">Giỏ hàng</a>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <span id="totalProduct"><?= !empty($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
                <!-- end mainmenu and logo -->
            </div>
        </div>
        <!-- end main header -->

    </header>
    <!-- end header -->

    <!-- start breadcrumb -->
    <section class="breadcrumb_main_area margin-bottom-80">
        <div class="container-fluid">
            <div class="row">
                <div class="breadcrumb_main nice_title">
                    <h2>Chỗ ở</h2>
                    <!-- special offer start -->
                    <div class="special_offer_main">
                        <div class="container">
                            <div class="special_offer_sub">
                                <img src="img/special-offer-yellow-main.png" alt="imf">
                            </div>
                        </div>
                    </div>
                    <!-- end offer start -->
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrunb -->

    <?php
    foreach ($phongnew as $phong) {
        extract($phong);
        $hinh = $img_path . $img;
        $link_booking = "index.php?act=booking&idphong=" . $phong['id'];
    }

    ?>
    <!-- start Hotel Facilities section -->
    <section class="select_room_area padding-top-5 margin-bottom-90">
        <div class="container">
            <div class="row">
                <div class="select_room clearfix">
                    <div class="section_title nice_title text-center">
                        <h3>Phòng đặc biệt</h3>
                    </div>
                    <?php
                    foreach ($phongnew as $phong) {
                        extract($phong);
                        $hinh = $img_path . $img;
                        $link_book = "index.php?act=booking&idphong=" . $phong['id'];
                    }
                    // echo '';
                    ?>
                    <div class="select_room_content clearfix">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="room_thumb">
                                <a href="<?=$link_book?>"><img src="img/room-thumb-one.jpg" alt=""></a>
                                <div class="room_details">
                                    <div class="about_room floatleft">
                                        <div class="room_quality floatleft">
                                            <h5><?= $name ?></h5>
                                        </div>
                                        <div class="room_rent floatleft">
                                            <p><?= $giaPhong ?><span> / đêm</span></p>
                                        </div>
                                    </div>
                                    <div class="room_block floatright">
                                        <a href="<?=$link_book?>" class="btn btn-black">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-sx-12">
                            <div class="room_thumb small_room_thumb margin-bottom-35">
                                <a href="#"><img src="img/room-thumb-two.jpg" alt=""></a>
                                <div class="room_details">
                                    <div class="about_room floatleft">
                                        <div class="room_quality floatleft">
                                            <h5>NCQ vip2</h5>
                                        </div>
                                        <div class="room_rent floatleft">
                                            <p>1000000<span> / đêm</span></p>
                                        </div>
                                    </div>
                                    <div class="room_block floatright">
                                        <a href="#" class="btn btn-black">Book</a>
                                    </div>
                                </div>
                            </div>
                            <div class="room_thumb small_room_thumb">
                                <a href="#"><img src="img/room-thumb-three.jpg" alt=""></a>
                                <div class="room_details">
                                    <div class="about_room floatleft">
                                        <div class="room_quality floatleft">
                                            <h5>NCQ vip3</h5>
                                        </div>
                                        <div class="room_rent floatleft">
                                            <p>1500000<span> / đêm</span></p>
                                        </div>
                                    </div>
                                    <div class="room_block floatright">
                                        <a href="#" class="btn btn-black">Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Hotel Facilities section -->


    <!-- start other detect room section -->
    <section class="other_room_area">
        <div class="container">
            <div class="row">
                <div class="other_room">
                    <div class="section_title nice_title content-center">
                        <h3>Phòng tuyệt vời khác</h3>
                    </div>
                    <div class="section_content">
                        <!-- start hotel booking -->
                        <div class="hotel_booking_area">
                            <div class="container">
                                <!-- <div class="hotel_booking margin-bottom-30">
                                    <form id="form1" role="form" action="#" class="">
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                            <div class="room_book border-right-dark-1">
                                                <h6>Book Your</h6>
                                                <p>Rooms</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="room" id="room">
                                                            <option selected="selected" disabled="disabled">Rooms</option>
                                                            <option value="Single">2 Room</option>
                                                            <option value="Double">3 Room</option>
                                                            <option value="Deluxe">4 Room</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="room" id="adult">
                                                            <option selected="selected" disabled="disabled">Rating</option>
                                                            <option value="Single">One Star</option>
                                                            <option value="Double">Two Star</option>
                                                            <option value="Deluxe">three Star</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group border-bottom-dark-2">
                                                        <select class="form-control" name="room" id="child">
                                                            <option selected="selected" disabled="disabled">Beds</option>
                                                            <option value="Single">Single Bed</option>
                                                            <option value="Double">3 Beds</option>
                                                            <option value="Deluxe">5 Beds</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-2 col-md-2 col-sm-2">
                                            <div class="input-group range_slider">
                                                <div data-role="rangeslider">
                                                    <span>Price:</span>
                                                    <label>range:</label>
                                                    <div class="range">
                                                        <span class="floatleft">50$</span><span class="floatright">5000$</span>
                                                        <input class="margin-rl-5" type="range" name="price-min" id="price-min" value="200" min="0" max="1000">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 clearfix">
                                            <a class="btn btn-warning btn-md floatright">Filter</a>
                                        </div>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                        <!-- end hotel booking -->

                        <!-- start single room details -->
                        <div class="accomodation_single_room">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    foreach ($phongnew as $phong) {
                                        extract($phong);
                                        $hinh = $img_path . $img;
                                        $link_book = "index.php?act=booking&idphong=" . $phong['id'];
                                        echo '
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                            <div class="single_room_wrapper clearfix padding-bottom-30">
                                                <figure class="uk-overlay uk-overlay-hover">
                                                    <div class="room_media">
                                                        <a href="' . $link_book . '"><img src="' . $hinh . '" alt=""></a>
                                                    </div>
                                                    <div class="room_title border-bottom-whitesmoke clearfix">
                                                        <div class="left_room_title floatleft">
                                                            <h6>' . $name . '</h6>
                                                            <p>' . $giaPhong . '/ <span>đêm</span></p>
                                                        </div>
                                                        <div class="left_room_title floatright">
                                                            <a href="' . $link_book . '" class="btn">Book</a>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                            ';
                                    }
                                    ?>
                                    <!-- <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="img/room-image-nineteen.png" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>Single Room</h6>
                                                        <p>$140/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Single Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$140/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="img/room-image-thirteen.jpg" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>DoubleRoom</h6>
                                                        <p>$200/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Double Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$200/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="img/room-image-fourteen.jpg" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>ChildRoom</h6>
                                                        <p>$100/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Child Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$100/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="img/room-image-fifteen.png" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>CoupleRoom</h6>
                                                        <p>$160/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Couple Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$160/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="img/room-image-twenty.png" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>ElegantRoom</h6>
                                                        <p>$250/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Elegant Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$250/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="img/room-image-seventeen.png" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>PersonalRoom</h6>
                                                        <p>$170/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Personal Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$170/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single_room_wrapper clearfix padding-bottom-30">
                                            <figure class="uk-overlay uk-overlay-hover">
                                                <div class="room_media">
                                                    <a href="#"><img src="img/room-image-eighteen.png" alt=""></a>
                                                </div>
                                                <div class="room_title border-bottom-whitesmoke clearfix">
                                                    <div class="left_room_title floatleft">
                                                        <h6>Deluxe Room</h6>
                                                        <p>$190/ <span>night</span></p>
                                                    </div>
                                                    <div class="left_room_title floatright">
                                                        <a href="#" class="btn">Book</a>
                                                    </div>
                                                </div>
                                                <div class="uk-overlay-panel uk-overlay-background single_wrapper_details clearfix animated bounceInDown">
                                                    <div class="border-dark-1 padding-22 clearfix single_wrapper_details_pad">
                                                        <h5>Deluxe Room</h5>
                                                        <p>
                                                            Semper ac dolor vitae accumsan. interdum hendrerit lacinia.
                                                        </p>
                                                        <p>
                                                            Phasellus accumsan urna vitae molestie interdum.
                                                        </p>
                                                        <div class="single_room_cost clearfix">
                                                            <div class="floatleft">
                                                                <p>$190/ <span>night</span></p>
                                                            </div>
                                                            <div class="floatright">
                                                                <a href="#" class="btn">Book</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <nav class="text-center margin-top-65 margin-bottom-75">
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <i class="fa fa-angle-left"></i>prev
                                                </a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">next
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- end single room details -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end other detect room section -->


    <!-- start contact us area -->
    <section class="contact_us_area content-left">
        <div class="container">
            <div class="contact_us clearfix">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="call clearfix">
                        <h6>Liên hệ</h6>
                        <p>0365 133 833</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="email_us clearfix">
                        <h6>Email liên hệ</h6>
                        <p>ncq@hotelbooking.com</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="news_letter clearfix">
                        <input type="text" placeholder="Nhập ID cho Thư Tin Tức">
                        <a href="#" class="btn btn-blue">go</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="social_icons clearfix">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact us area -->



    <!-- start footer -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer">
                <div class="footer_top padding-top-80 clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#"><img src="img/footer-logo-one.png" alt=""></a>
                            </div>
                            <p>Xin chân thành cảm ơn quý khách hàng vì đã tin tưởng và lựa chọn dịch vụ của chúng tôi. Chúng tôi rất trân trọng sự ủng hộ của quý khách.</p>
                            <ul>
                                <li>
                                    <P><i class="fa fa-map-marker"></i>Tòa nhà FPT, <br> Trịnh Văn Bô, Nam Từ Liêm, Hà Nội.</P>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="row">
                            <div class="footer_widget clearfix">
                                <h5 class="padding-left-15">Đường dẫn nhanh</h5>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul>
                                        <li><a href="#">Phòng</a></li>
                                        <li><a href="#">Đồ uống & Thực phẩm</a></li>
                                        <li><a href="#">Địa điểm bãi biển</a></li>
                                        <li><a href="#">Tiện Nghi</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 sol-sm-6">
                                    <ul>
                                        <li><a href="#">Đặc trưng</a></li>
                                        <li><a href="#">Sức khỏe</a></li>
                                        <li><a href="#">Tin tức</a></li>
                                        <li><a href="#">Liên hệ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget">
                            <h5>Chúng tôi toàn cầu</h5>
                            <div class="footer_map">
                                <a href="#"><img src="img/footer-map-two.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="footer_copyright margin-tb-50 content-center">
                            <p>© 2015 <a href="#">Đặt phòng khách sạn</a>. Đã đăng ký bản quyền</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->



    <!-- jquery library -->
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- uikit -->
    <script src="js/uikit.min.js"></script>
    <!-- easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/datepicker.js"></script>
    <!-- scroll up -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- owlcarousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- lightslider -->
    <script src="js/lightslider.js"></script>
    <!-- wow Animation -->
    <script src="js/wow.min.js"></script>
    <!--Activating WOW Animation only for modern browser-->
    <!--[if !IE]><!-->
    <script type="text/javascript">
        new WOW().init();
    </script>
    <!--<![endif]-->

    <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
    <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->

    <!--Opacity & Other IE fix for older browser-->
    <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->



    <!-- my js -->
    <script src="js/main.js"></script>

</body>

<!-- Mirrored from demoxml.com/html/hotelbooking/accomodation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 12:18:32 GMT -->

</html>