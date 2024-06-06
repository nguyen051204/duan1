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

<body id="booking_page">
    <main class="catalog  mb ">

        <!-- start header -->
        <header class="header_area">

            <!-- start header top -->
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
                                <?php
                                if (isset($_SESSION['name'])) {
                                    $link_user = "index.php?act=lichsudat&nameuser=" . $_SESSION['name']['name'];
                                }
                                ?>
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
                        <h3 style="color: #3ac4fa;  text-align: center;">Chi tiết phòng khách sạn <? $name ?></h3>
                        <?php
                        extract($phong);
                        $hinh = $img_path . $img;
                        ?>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="booking_info">
                                <div class="booking_info_area">
                                    <div class="facilities_name clearfix margin-bottom-150 margin-top-70">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-5">
                                                <img src="<?= $hinh ?>" alt="">
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-7">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="section_title clearfix margin-bottom-5">
                                                            <h5 class="floatleft"><?= $name ?><span class="price floatright margin-left-15">(<?= $giaPhong . "đ" ?><sup class="day">/Đêm</sup>)</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="star margin-bottom-20">
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star"></i></a>
                                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 no-padding-left">
                                                        <ul class="single_facilities_name clearul">
                                                            <li>
                                                                <img src="img/home-facilities-icon-one.png" alt="">
                                                                <p>Ăn sáng</p>
                                                            </li>
                                                            <li>
                                                                <img src="img/home-facilities-icon-four.png" alt="">
                                                                <p>Dịch vụ phòng</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <ul class="single_facilities_name clearul">
                                                            <li>
                                                                <img src="img/home-facilities-icon-two.png" alt="">
                                                                <p>Điều hòa</p>
                                                            </li>
                                                            <li>
                                                                <img src="img/home-facilities-icon-ten.png" alt="">
                                                                <p>Phòng GYM </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <ul class="single_facilities_name clearul">
                                                            <li>
                                                                <img src="img/home-facilities-icon-eight.png" alt="">
                                                                <p>Bãi đỗ xe</p>
                                                            </li>
                                                            <li>
                                                                <img src="img/home-facilities-icon-five.png" alt="">
                                                                <p>TV LCD</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <ul class="single_facilities_name clearul">
                                                            <li>
                                                                <img src="img/home-facilities-icon-three.png" alt="">
                                                                <p>Vật nuôi</p>
                                                            </li>
                                                            <li>
                                                                <img src="img/home-facilities-icon-twelve.png" alt="">
                                                                <p>Free Wi-fi </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- start hotel booking -->
                                            <div class="hotel_booking_area">
                                                <div class="container">
                                                </div>
                                            </div>
                                            <!-- end hotel booking -->
                                        </div>
                                        <div class="row">
                                            <div class="about_booking_room clearfix margin-top-30">
                                                <div class="col-lg-7 col-md-7 col-sm-6">
                                                    <div class="booking_room_details">
                                                        <p>
                                                            Xin kính chào quý khách, rất hân hạnh được phục vụ quý khách.Tất cả những dịch vụ trên đều là miễn phí khi quý khách đặt phòng
                                                        </p>
                                                        <p>
                                                            Cảm ơn quý khách đã tin tưởng và chọn phòng của chúng tôi.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-6">
                                                    <div class="room_cost">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <tr class="room_table">
                                                                            <td class=""><span class="imp_table_text">1 Phòng</span> <br></td>

                                                                            <td class=""> 1<br>Đêm</td>
                                                                            <td class=""><span class="imp_table_text">Tối đa 5 người</span> <br> </td>
                                                                            <td class=""><span class="imp_table_text"><?= $giaPhong . "đ" ?></span></td>
                                                                        </tr>
                                                                        <tr class="tax_table">
                                                                            <td class=""><span class="imp_table_text">Thuế</span> <br> 10% trên giá trị đặt phòng</td>
                                                                            <!-- <td class=""></td>
                                                                        <td class=""></td> -->
                                                                            <td class="" colspan="3"><span class="imp_table_text"><?php
                                                                                                                                    $gia = $giaPhong / 100 * 10;
                                                                                                                                    echo $gia . "đ";
                                                                                                                                    ?></span></td>
                                                                        </tr>
                                                                        <tr class="total_table">
                                                                            <td class=""><span class="imp_table_text">Tổng tiền</span></td>
                                                                            <!-- <td class=""></td>
                                                                        <td class=""></td> -->
                                                                            <td class="" colspan="3"><span class="imp_table_text">
                                                                                    <?php
                                                                                    $tong = $gia + $giaPhong;
                                                                                    echo $tong . "đ";
                                                                                    ?>
                                                                                </span></td>
                                                                        </tr>
                                                                    </table>
                                                                    <?php
                                                                    $_SESSION['tong'] = $tong;
                                                                    ?>
                                                                    <form action="">
                                                                        <div class="items">
                                                                            <button data-id="<?= $id ?>" class="btn btn-warning btn-sm floatright" onclick="addToCart(<?= $id ?>, '<?= $name ?>', <?= $giaPhong ?>)">Thêm vào giỏ hàng</button>
                                                                        </div>
                                                                    </form>

                                                                    <div class="col-lg-12 col-md-12">
                                                                        <div class="booking_next_btn padding-top-30 margin-top-20 clearfix border-top-whitesmoke">
                                                                            <a href="index.php?act=xacnhantt&idphong=<?= $phong['id'] ?>&tong=<?= $tong ?>" class="btn btn-warning btn-sm floatright">Đặt Phòng Ngay                   .</a>
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
                                </div>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                <script>
                                    $(document).ready(function() {
                                        $("#binhluan").load("view/binhluan/binhluanform.php", {
                                            idPhong: <?= $id ?>
                                        });
                                    });
                                </script>
                                <div class="row" id="binhluan">
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
        <!--
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-modal.js"></script>
        <script src="js/uikit-lightbox.js"></script>
        -->
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
        <script src="
        https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js
        "></script>


        <!-- my js -->
        <script src="js/main.js"></script>
    </main>
</body>


</html>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');

    function addToCart(productId, productName, productgiaPhong) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/addToCart.php',
            data: {
                id: productId,
                name: productName,
                giaPhong: productgiaPhong
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>

<?php

if (!isset($_SESSION['name'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </head>

    <body>
        <?php
        echo '<script>
            Swal.fire({
                title: "Bạn chưa đăng nhập",
                text: "Vui lòng đăng nhập mới có thể đặt phòng",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Đăng nhập!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to dkdn.php?act=dangnhap when "Đăng nhập" is clicked
                    window.location.href = "dkdn.php?act=dangnhap";
                } else {
                    // Redirect to index.php when "Cancel" is clicked
                    window.location.href = "index.php";
                }
            });
        </script>';
        ?>
    </body>

    </html>
<?php
}
?>