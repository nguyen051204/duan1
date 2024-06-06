<?php
$NameError = "";
$PassError = "";
$isValid = false; // Thêm biến isValid để kiểm tra trạng thái hợp lệ

if (isset($_POST["dangnhap"])) {
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
    }
    if (empty($NameError) && empty($PassError)) {
        $isValid = true;
    }
    $checkname = checkname($name, $pass);
    if ($isValid) {
        if (is_array($checkname)) {
            $_SESSION['name'] = $checkname;
            header('Location: index.php');
            exit();
        } else {
            $thongbao = "Tài khoản không tồn tại . Vui lòng kiểm tra lại hoặc đăng ký !";
        }
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
    <link rel="stylesheet" href="view/css/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    .error {
        color: red;
    }
</style>

<body>
    <div class="container">
        <form action="dkdn.php?act=dangnhap" class="form" method="post" id="form-2">
            <h1>Login</h1>
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
            <div class="remember">
                <a href="dkdn.php?act=quenmk">Đăng kí ngay</a>
                <a href="dkdn.php?act=quenmk">Quên mật khẩu</a>
            </div>
            <input type="submit" value="Đăng Nhập" name="dangnhap">

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


</body>

</html>