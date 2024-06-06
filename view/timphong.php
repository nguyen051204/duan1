<?php
    include "header.php";
?>
<div class="main_slider_area">
    <div class="main_slider" id="slider_rev">
        <!-- start hotel booking -->
        <div class="hotel_booking_area">
            <div class="container">
                <div class="hotel_booking">
                <form id="form1" role="form" action="index.php?act=timphong" method="post">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="room_book border-right-dark-1">
                                <h6>Book Your</h6>
                                <p>Rooms</p>
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2">
                            <div class="input-group border-bottom-dark-2">
                                <input class="date-picker" id="datepicker" placeholder="Ngày nhận phòng" name="ngayden" type="text" />
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2">
                            <div class="input-group border-bottom-dark-2">
                                <input class="date-picker" id="datepicker1" placeholder="Ngày trả phòng" name="ngaydi" type="text" />
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="row">
                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                    <div class="input-group border-bottom-dark-2">
                                        <select class="form-control" name="room" id="room">
                                            <option selected="selected" disabled="disabled">1 Phòng</option>
                                            <option value="Single">1 Phòng</option>
                                            <option value="Double">2 Phòng</option>
                                            <option value="Deluxe">3 Phòng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                    <div class="input-group border-bottom-dark-2">
                                        <select class="form-control" name="room" id="adult">
                                            <option selected="selected" disabled="disabled">1 Người lớn</option>
                                            <option value="Single">1 Người lớn</option>
                                            <option value="Double">2 Người lớn</option>
<option value="Deluxe">3 Người lớn</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-3 col-md-3 col-sm-3 icon_arrow">
                                    <div class="input-group border-bottom-dark-2">
                                        <select class="form-control" name="room" id="child">
                                            <option selected="selected" disabled="disabled">0 Trẻ em</option>
                                            <option value="Double">1 Trẻ em</option>
                                            <option value="Deluxe">2 Trẻ em</option>
                                            <option value="Single">3 Trẻ em</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <!-- <a class="btn btn-primary floatright">Book</a> -->
                                    <input type="submit" class="btn btn-primary floatright" value="Book" name="timphong">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- special offer start -->
                    <div class="special_offer_main">
                        <img src="img/special-offer-main.png" alt="">
                    </div>
                    <!-- end offer start -->
                </div>
            </div>
        </div>
        <!-- end hotel booking -->
        <div class="fullwidthbanner-container">
            <div class="fullwidth_home_banner">
                <ul>

                    <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                        <img src="img/rev-slider/slider-one.jpg" alt="slide">
                        <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack" style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                            A brand New Hotel
                        </div>
                        <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack" style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                            Beyond Ordinary
                        </div>
                        <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" style="background: #f7c411; padding: 10px; cursor: pointer;">
<a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">Explore IT</a>
                        </div>
                    </li>

                    <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                        <img src="img/rev-slider/slider-one.jpg" alt="slide">
                        <div class="tp-caption large_black sfr" data-x="105" data-y="197" data-speed="1200" data-start="1100" data-easing="easeInOutBack" style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                            Book Your Summer Holidays
                        </div>
                        <div class="tp-caption large_black sfr" data-x="105" data-y="255" data-speed="1500" data-start="1400" data-easing="easeInOutBack" style="font-family: 'Playfair Display', serif; font-size: 48px;color: #131e2a; margin-bottom: 23px; text-transform: uppercase; line-height: 40px;">
                            With HOTEL BOOKING Template
                        </div>
                        <div class="tp-caption lfb carousel-caption-inner" data-x="105" data-y="313" data-speed="1300" data-start="1700" data-easing="easeInOutBack" style="background: #f7c411; padding: 10px; cursor: pointer;">
                            <a href="#" class="" style="background: #f7c411; border-radius: 0; color: #313a45; display: inline-block;  font-size: 18px; padding: 8px 34px; text-transform: uppercase; border: 1px solid #9e811a;">Explore IT</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end main slider -->

<!-- start welcome section -->
<section class="welcome_area">
    <div class="container">
        <div nice_title content-centeriv class="welcome">
            <div class="section_title nice_title content-center">
                <h3>Phòng bạn đang muốn tìm ở đây</h3>
            </div>
            <div class="row">
                <?php
                foreach ($listphong as $phong) {
                    extract($phong);
                    $hinh = $img_path . $img;
                    $link_booking = "index.php?act=booking&idphong=".$phong['id'];
                    echo '
                        <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="single_room_wrapper clearfix">
                            <figure class="uk-overlay uk-overlay-hover">
                                <div class="room_media">
                                    <a href="#"><img src="' . $hinh . '" ></a>
                                </div>
                                <div class="room_title border-bottom-whitesmoke clearfix">
                                    <div class="left_room_title floatleft">
<h6>' . $name . '</h6>
                                        <p>' . $giaPhong . 'đ/ <span?>night</span></p>
                                    </div>
                                    <div class="left_room_title floatright">
                                        <a href="'.$link_booking.'" class="btn">Book</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                        ';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- end welcome section -->

<!-- start Hotel Facilities section -->
<section class="hotel_facilities_area margin-top-115 margin-bottom-100">
    <div class="container">
        <div class="hotel_facilities">
            <div class="section_title nice_title content-center">
                <h3>Cơ sở khách sạn</h3>
            </div>
            <div class="hotel_facilities_content">
                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#restaurant" aria-controls="restaurant" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-eleven.png" alt="restaurant"><span>Nhà hàng</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#sports-club" aria-controls="sports-club" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-seven.png" alt="sports-club"><span>Thể thao</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#pick-up" aria-controls="pick-up" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-eight.png" alt="pick-up"><span>pick-up</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#bar" aria-controls="bar" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-nine.png" alt="bar"><span>bar</span></a>
                        </li>
                        <li role="presentation">
                            <a href="#gym" aria-controls="gym" role="tab" data-toggle="tab"><img src="img/home-facilities-icon-ten.png" alt="gym"><span>gym</span></a>
                        </li>
                    </ul>


                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="restaurant">
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="co-lg-5 col-md-5 col-sm-6">
                                        <div class="single-tab-image">
<a href="#"><img src="img/hotel-facility-one.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="co-lg-7 col-md-7 col-sm-6">
                                        <div class="single-tab-details">
                                            <!-- <h6>The world class</h6> -->
                                            <h3>NHÀ HÀNG & TIỆC</h3>
                                            <p>
                                                Luôn luôn và lớp đau của cuộc sống. Ngày mai đôi khi hendrerit lacinia. Đôi khi là lớp lớp của cuộc đời người lao động. Vì anh ta đầu tư thoải mái nhưng gánh nặng không được khấu trừ.
                                            </p>
                                            <p>
                                                Ngày mai và công bằng và ủng hộ euismod hoặc cần giường. Hiện nay các xe đã có cánh cung, không có cửa hay lớp gối. Hãy sống lâu cùng con cháu chúng ta.
                                            </p>
                                            <div class="our_services">
                                                <a href="#" class="margin-right-33">Giờ dịch vụ 19.00-22:00 </a>
                                                <a href="#">Phi dịch vụ : $15</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="sports-club">
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="co-lg-5 col-md-5">
                                        <div class="single-tab-image">
                                            <a href="#"><img src="img/hotel-facility-three.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="co-lg-7 col-md-7">
                                        <div class="single-tab-details">
                                            <h6>The world class</h6>
                                            <h3>Sports Club</h3>
                                            <p>
                                                Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                            </p>
                                            <p>
                                                Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
</p>
                                            <div class="our_services">
                                                <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                <a href="#">service charge : $15</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="pick-up">
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="co-lg-5 col-md-5">
                                        <div class="single-tab-image">
                                            <a href="#"><img src="img/hotel-facility-one.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="co-lg-7 col-md-7">
                                        <div class="single-tab-details">
                                            <h6>The world class</h6>
                                            <h3>Pick Up</h3>
                                            <p>
                                                Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                            </p>
                                            <p>
                                                Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                            </p>
                                            <div class="our_services">
                                                <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                <a href="#">service charge : $15</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="bar">
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="co-lg-5 col-md-5">
                                        <div class="single-tab-image">
                                            <a href="#"><img src="img/hotel-facility-three.jpg" alt=""></a>
                                        </div>
                                    </div>
<div class="co-lg-7 col-md-7">
                                        <div class="single-tab-details">
                                            <h6>The world class</h6>
                                            <h3>Bar</h3>
                                            <p>
                                                Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                            </p>
                                            <p>
                                                Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                            </p>
                                            <div class="our_services">
                                                <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
                                                <a href="#">service charge : $15</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="gym">
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="co-lg-5 col-md-5">
                                        <div class="single-tab-image">
                                            <a href="#"><img src="img/hotel-facility-one.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="co-lg-7 col-md-7">
                                        <div class="single-tab-details">
                                            <h6>The world class</h6>
                                            <h3>Gym</h3>
                                            <p>
                                                Semper ac dolor vitae accumsan. Cras interdum hendrerit lacinia. Phasellus accumsan urna vitae molestie interdum. Nam sed placerat libero, non eleifend dolor.
                                            </p>
                                            <p>
                                                Cras ac justo et augue suscipit euismod vel eget lectus. Proin vehicula nunc arcu, pulvinar accumsan nulla porta vel. Vivamus malesuada vitae sem ac pellentesque.
                                            </p>
                                            <div class="our_services">
                                                <a href="#" class="margin-right-33">Service Hours; 19.00-22:00 </a>
<a href="#">service charge : $15</a>
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
</section>
<!-- end Hotel Facilities section -->

<!-- start About Us section -->
<section class="about_us_area margin-bottom-128">
    <div class="container">
        <div class="about_us clearfix">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-left-0">
                <div class="news">
                    <div class="section_title margin-bottom-50">
                        <h5>Tin tức</h5>
                    </div>
                    <div class="section_description">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single_content clearfix border-bottom-whitesmoke">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                        <div class="post_media">
                                            <a href="#"><img src="img/news-one.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                        <div class="post_title clearfix">
                                            <h6>MỌI NGƯỜI TẠI FELIS PORT TITORDGA</h6>
                                        </div>
                                        <div class="post_content  margin-bottom-35">
                                            <p>14 May 2014</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_content clearfix margin-top-35 border-bottom-whitesmoke">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                        <div class="post_media">
                                            <a href="#"><img src="img/news-two.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                        <div class="post_title clearfix">
                                            <h6>Donec scelerisque vulputate</h6>
                                        </div>
                                        <div class="post_content margin-bottom-35">
                                            <p>15 May 2014</p>
                                        </div>
</div>
                                </div>
                                <div class="single_content clearfix margin-bottom-35 margin-top-35">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-4 padding-left-0">
                                        <div class="post_media">
                                            <a href="#"><img src="img/news-three.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-8 padding-left-0">
                                        <div class="post_title clearfix">
                                            <h6>Curabitur varius quam lorem</h6>
                                        </div>
                                        <div class="post_content">
                                            <p>17 May 2014</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="showcase">
                    <div class="section_title margin-bottom-50">
                        <h5>Trình bày khách sạn</h5>
                    </div>
                    <div class="section_description">
                        <div class="clearfix demo">
                            <ul id="vertical" class="gallery list-unstyled">
                                <li data-thumb="img/lightslider-img/cS-18.jpg">
                                    <img alt="slider" src="img/lightslider-img/cS-18.jpg" />
                                </li>
                                <li data-thumb="img/lightslider-img/cS-21.jpg">
                                    <img alt="slider" src="img/lightslider-img/cS-21.jpg" />
                                </li>
                                <li data-thumb="img/lightslider-img/cS-22.jpg">
                                    <img alt="slider" src="img/lightslider-img/cS-22.jpg" />
                                </li>
                                <li data-thumb="img/lightslider-img/cS-23.jpg">
                                    <img alt="slider" src="img/lightslider-img/cS-23.jpg" />
                                </li>
                                <li data-thumb="img/lightslider-img/cS-24.jpg">
                                    <img alt="slider" src="img/lightslider-img/cS-24.jpg" />
                                </li>
                                <li data-thumb="img/lightslider-img/cS-25.jpg">
                                    <img alt="slider" src="img/lightslider-img/cS-25.jpg" />
                                </li>
                                <li data-thumb="img/lightslider-img/cS-26.jpg">
<img alt="slider" src="img/lightslider-img/cS-26.jpg" />
                                </li>
                                <li data-thumb="img/lightslider-img/cS-27.jpg">
                                    <img alt="slider" src="img/lightslider-img/cS-27.jpg" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer_says">
                    <div class="section_title margin-bottom-50">
                        <h5>Khách hàng nói</h5>
                    </div>
                    <div class="section_description">
                        <div id="customer_says_slider" class="carousel slide" data-ride="carousel" data-pause="none">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="single_says">
                                        <div class="customer_comment">
                                            <p>
                                                Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan urna vitae molestie interdum.
                                            </p>
                                            <p>
                                                Nam sed placerat libero, non eleifend dolor.
                                            </p>
                                        </div>
                                        <div class="customer_detail clearfix">
                                            <div class="customer_pic alignleft-20">
                                                <a href="#"><img src="img/customer-says-one.png" alt=""></a>
                                            </div>
                                            <div class="customer_identity floatleft">
                                                <h6>John Doe</h6>
                                                <p>www.john.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single_says">
                                        <div class="customer_comment">
                                            <p>
                                                Semper ac dolor vitae msan. Cras interdum hendreritnia Phasellus accumsan urna vitae molestie interdum.
                                            </p>
                                            <p>
                                                Nam sed placerat libero, non eleifend dolor.
</p>
                                        </div>
                                        <div class="customer_detail clearfix">
                                            <div class="customer_pic alignleft-20">
                                                <a href="#"><img src="img/customer-says-one.png" alt=""></a>
                                            </div>
                                            <div class="customer_identity floatleft">
                                                <h6>John Doe</h6>
                                                <p>www.john.com</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="slider_says left" href="#customer_says_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="slider_says right" href="#customer_says_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end About Us section -->

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
<?php
    include "footer.php";
?>