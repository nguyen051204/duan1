<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/css/order.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    if (isset($_SESSION['name'])) {
    }
    ?>
    <div class="page-order">
        <div class="form-order">
            <form action="index.php?act=ttonl" method="post">
                <h2>Thông tin khách hàng</h2>
                <input type="hidden" name="idphong" value="<?= $_SESSION['id_phong'] ?>">
                <input type="hidden" name="iduser" value="<?= $_SESSION['name']['id'] ?>">
                <div>Họ và tên<input type="text" name="txthoten" value="<?= $_SESSION['name']['name'] ?>" placeholder="Họ và tên" required></div>
                <div>Số điện thoại<input type="tel" name="txttel" value="<?= $_SESSION['name']['sdt'] ?>" placeholder="Số điện thoại" required></div>
                <div>Email<input type="email" name="txtemail" value="<?= $_SESSION['name']['email'] ?>" placeholder="Email" required></div>
                <div>Ngày nhận phòng <input type="date" name="ngaynhanphong" onchange="validateDate()" required></div>
                <div>Ngày trả phòng<input type="date" name="ngaytraphong" onchange="validateDate()" required></div>
                <h3>Phương thức thanh toán</h3>
                <p><input type="radio" name="pttt" id="" value="1" required> Thanh toán sau</p>
                <p><input type="radio" name="pttt" id="" value="2" required> Chuyển khoản ngân hàng</p>
                <input type="submit" onclick="" value="Xác nhận đặt hàng" name="order_confirm">
            </form>
        </div>
        <div class="sub-order">
            <h2>Thông tin phòng</h2>
            <table>
                <tr>
                    <th>Phòng</th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                foreach ($cart as $item) {
                ?>
                    <tr>
                        <td>
                            <?php echo $item['name']; ?><br>
                            <small>SL: <?php echo $item['quantity']; ?></small>
                        </td>
                        <td><?php echo number_format($item['quantity'] * $item['giaPhong'], 0, ",", "."); ?> ₫</td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td><b>Tổng tiền</b></td>
                    <td><b><?php echo number_format($_SESSION['resultTotal'], 0, ",", "."); ?> ₫</b></td>
                </tr>
            </table>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
<script>
    function validateDate() {
        var ngayNhanPhong = new Date(document.getElementsByName("ngaynhanphong")[0].value);
        var ngayTraPhong = new Date(document.getElementsByName("ngaytraphong")[0].value);

        if (ngayNhanPhong > ngayTraPhong) {
            alert("Ngày trả phòng phải sau ngày nhận phòng");
            return false;
        }

        return true;
    }
</script>
<?php
$homnay = date("d/m/Y");

?>