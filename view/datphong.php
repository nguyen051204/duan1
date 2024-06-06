<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demoxml.com/html/hotelbooking/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 12:18:13 GMT -->

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
    <!-- <link rel="stylesheet" href="css/uikit.min.css" /> -->
    <!-- <link rel="stylesheet" href="css/uikit.docs.min.css" /> -->

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

</head>

<body id="booking_page">


    <!-- start header -->
    <header class="header_area">

        <!-- start header top -->
        <div class="header_top_area">
            <div class="container">
            </div>
        </div>
        <!-- end header top  -->

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
                                    <a id="brand" class="clearfix navbar-brand" href="index.php"><img src="img/site-logo.png" alt="Trips"></a>
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
                    <h2>Booking</h2>
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

    <!-- start other detect room section -->
    <section class="booking_area">
        <div class="container">
            <div class="booking">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <h3 style="color: #3ac4fa;  text-align: center;">Xác nhận thông tin đặt phòng</h3>

                    <?php
                    extract($phong);
                    $hinh = $img_path . $img;
                    if (isset($_POST['tong'])) {
                        // var_dump($tong) ;
                    }
                    ?>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" id="personal_info">
                            <div class="personal_info_area">
                                <div class="hotel_booking_area">
                                    <div class="hotel_booking margin-top-70 margin-bottom-125">
                                        <form role="form" action="index.php?act=datphong" method="post">
                                            <div class="row">
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        <input type="hidden" name="idphong" class="form-control" value="<?= $phong['id'] ?>">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="hidden" name="iduser" class="form-control" value="<?= $_SESSION['name']['id'] ?>">
                                                    </div>
                                                    <div class="input-group">
                                                        Họ và Tên<input type="text" name="namekh" class="form-control" value="<?= $_SESSION['name']['name'] ?>" placeholder="Họ và Tên">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        Số điện thoại<input type="phonenumber" name="phonenumber" class="form-control" value="<?= $_SESSION['name']['sdt'] ?>" placeholder="Số điện thoại">
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-4 col-md-4 col-sm-4 icon_arrow">
                                                    <div class="input-group">
                                                        Email <input type="email" name="email" class="form-control" value="<?= $_SESSION['name']['email'] ?>" placeholder="Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                <div class="input-group">
                                                    CMT/CCCD<input type="text" name="cmt" class="form-control" placeholder="CMT/CCCD">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                <div class="input-group">
                                                    Số người<input type="number" min="1" max="5" name="songuoi" class="form-control" placeholder="Tối đa 5 người">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                    Ngày nhận phòng: <input type="date" id="startDate" name="ngaybatdau" min="<?= date('Y-m-d') ?>">                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                    <div class="input-group">
                                                    Ngày trả phòng: <input type="date" id="endDate" name="ngayketthuc" min="<?= date('Y-m-d', strtotime('+1 day')) ?>">                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                                </div>
                                            </div>
                                            <?php
                                            ?>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="booking_next_btn padding-top-30 margin-top-50 clearfix border-top-whitesmoke">
                                                        <input type="submit" name="redirect" class="btn btn-warning btn-sm " value="Thanh toán online">
                                                        <input type="submit" name="datphong" class="btn btn-warning btn-sm floatright" value="Xác nhận đặt " onclick="confirm('Bạn đã đặt phòng thành công!Vui lòng xem phòng ở lịch sử đặt')">
                                                        <input type="hidden" name="idphong" value="<?= $phong['id'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            if (isset($thongbao)) {
                                                echo '<h4>' . $thongbao . '</h4>';
                                            }
                                          
                                            ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end other detect room section -->


    <!-- start contact us area -->
    <section class=" contact_us_area content-left">
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
   
    <script src="js/main.js"></script>

</body>

<!-- Mirrored from demoxml.com/html/hotelbooking/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 12:18:20 GMT -->

</html>
<script>
    function validateDate() {
        var currentDate = new Date().toISOString().split('T')[0];
        var selectedDate = document.getElementById('dateInput').value;

        if (selectedDate < currentDate) {
            alert('Không thể chọn ngày trước hôm nay.');
            document.getElementById('dateInput').value = currentDate;
        }
    }

    // Set min attribute to today's date
    document.getElementById('dateInput').setAttribute('min', new Date().toISOString().split('T')[0]);
</script>