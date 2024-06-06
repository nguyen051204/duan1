
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="container">
    <form action="dkdn.php?act=quenmk" method="post">
        <h1>Quên mật khẩu</h1>
        <div class="input-box">
            Email
            <input type="email" name="email">
        </div>
        <div class="input-box">
            <input type="submit" value="Gửi" name="guiemail">
            
        </div>
        <div>
        <input type="reset" value="Nhập lại">
        </div>
    </form>
    <h2 class="thongbao">
        <?php

        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }

        ?>
    </h2>

</div>
    
</body>
</html>