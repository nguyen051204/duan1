<?php
$NameError = "";
$PassError = "";
$EmailError = "";
$SdtError = "";
$isValid = false; // Thêm biến isValid để kiểm tra trạng thái hợp lệ

if (isset($_POST["dangky"])) {
    if (empty($_POST['name'])) {
        $NameError = "Hãy nhập tài khoản";
    } else {
        $Name = $_POST['name'];
        if (!preg_match("/^[A-Za-z]*$/", $Name)) {
            $NameError = "Vui lòng không có kí tự đặc biệt";
        }
    }

    if (empty($_POST['pass'])) {
        $PassError = "Bạn chưa nhập mật khẩu";
    } else {
        $Pass = $_POST['pass'];
        if (!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $Pass)) {
            $PassError = "Mật khẩu phải viết hoa phải có số và kí tự đặc biệt";
        }
    }

    if (empty($_POST['email'])) {
        $EmailError = "Bạn chưa nhập Email";
    } else {
        $Email = $_POST['email'];
        if (!preg_match("/^\\S+@\\S+\\.\\S+$/", $Email)) {
            $EmailError = "Email sai";
        }
    }

    if (empty($_POST['sdt'])) {
        $SdtError = "Bạn chưa nhập số Phone";
    }


    // Kiểm tra nếu không có lỗi thì đặt isValid là true
    if (empty($NameError) && empty($PassError) && empty($EmailError) && empty($SdtError)) {
        $isValid = true;
    }
    if ($isValid) {
        header('location:dkdn.php?act=dangnhap');
        exit(); // Đảm bảo kết thúc script sau khi chuyển hướng
    }
}

// In ra thông báo tùy thuộc vào trạng thái hợp lệ

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="dkdn.php?act=dangky" class="form" method="post" id="form-1">
            <div class="spacer"></div>
            <h1>Đăng ký</h1>
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Tên tài khoản" class="form-control">
                <i class='bx bx-user'></i>
                <?php echo "<span class='error'> $NameError </span>" ?>
            </div>

            <div class="form-group">
                <input type="password" id="pass" name="pass" placeholder="Mật khẩu" class="form-control">
                <i class='bx bx-lock-alt'></i>
                <?php echo "<span class='error'> $PassError </span>" ?>
            </div>
            <!-- <div class="form-group">
                    <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
                    <i class='bx bx-lock-alt'></i>
                    </div> -->
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Email" class="form-control">
                <i class='bx bx-envelope'></i>
                <?php echo "<span class='error'> $EmailError </span>" ?>
            </div>
            <div class="form-group">
                <input type="number" id="sdt" name="sdt" placeholder="Số điện thoại" class="form-control">
                <i class='bx bx-phone'></i>
                <?php echo "<span class='error'> $SdtError </span>" ?>
            </div>


            <input type="submit" value="Đăng ký" name="dangky">

        </form>

        <h2 class="thongbao">
            <?php

            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }

            ?>
        </h2>

    </div>

    <script src="./view/taikhoan/validator.js"></script>
    <script>
        const form = document.getElementById('form')
    </script>


</body>

</html>