<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./view/css/giohang.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <h1>Giỏ Hàng</h1>
    <?php
    if (empty($dataDb)) {
        echo '<h1>Chưa có sản phẩm nào trong giỏ hàng</h1>';
    } else {
        foreach ($dataDb as $dt) {
            extract($dt);
            $_SESSION['id_phong'] = $dt['id'];
        }
    ?>
        <table border="1" width="100%" style="margin: 0 auto;">
            <thead>
                <tr align="center">
                    <td>STT</td>
                    <td>Hình ảnh</td>
                    <td>Tên phòng</td>
                    <td>Giá</td>
                    <td>Số đêm</td>
                    <td>Tổng giá</td>
                    <td>Hành động</td>
                </tr>
            </thead>
            <tbody id="order">
                <?php
                $sum_total = 0;
                foreach ($dataDb as $key => $product) :
                    // kiểm tra số lượng sản phẩm trong giỏ hàng
                    $quantityInCart = 0;
                    foreach ($_SESSION['cart'] as $item) {
                        if ($item['id'] == $product['id']) {
                            $quantityInCart = $item['quantity'];
                            break;
                        }
                    }
                ?>
                    <tr align="center">
                        <td><?= $key + 1 ?></td>
                        <td>
                            <img src="<?= $img_path, $product['img'] ?>" alt="<?= $product['name'] ?>" style="width: 100px; height: auto">
                        </td>
                        <td><?= $product['name'] ?></td>
                        <td><?= number_format((int)$product['giaPhong'], 0, ",", ".")  ?> <u>đ</u></td>
                        <td>
                            <input type="number" value="<?= $quantityInCart ?>" min="1" max = "10" id="quantity_<?= $product['id'] ?>" oninput="updateQuantity(<?= $product['id'] ?>, <?= $key ?>)">
                        </td>
                        <td>
                            <?= number_format((int)$product['giaPhong'] * (int)$quantityInCart, 0, ",", ".") ?> <u>đ</u>
                        </td>
                        <td>
                            <button class="dh" onclick="removeFormCart(<?= $product['id'] ?>)">Xóa phòng</button>
                            <form action="index.php?act=order" method="post">
                                <button type="submit" class="dh" name="order" value="Đặt Hàng">Đặt phòng</button>
                                <!-- <input type="submit" class="dh" style="padding:10px;" name="order" value="Đặt Hàng"> -->
                            </form>
                        </td>
                    </tr>
                <?php
                    // Tính tổng giá đơn hàng
                    $sum_total += ((int)$product['giaPhong'] * (int)$quantityInCart);

                    // Lưu tổng giá trị vào sesion
                    $_SESSION['resultTotal'] = $sum_total;
                endforeach;
                ?>

                <!-- <tr>
                    <td colspan="5" align="center">
                        <h2>Tổng tiền hàng:</h2>
                    </td>
                    <td colspan="2" align="center">
                        <h2>
                            <span>
                                <?= number_format((int)$sum_total, 0, ",", ".")  ?> <u>đ</u>
                            </span>
                        </h2>
                    </td>
                </tr> -->
            </tbody>
        </table>
        <br>

    <?php
    }
    ?>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // hàm cập nhật số lượng
    function updateQuantity(id, index) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id).val();
        if (newQuantity <= 0) {
            newQuantity = 1
        }

        // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        $.ajax({
            type: 'POST',
            url: './view/updateQuantity.php',
            data: {
                id: id,
                quantity: newQuantity
            },
            success: function(response) {
                // Sau khi cập nhật thành công
                $.post('view/tableCartOrder.php', function(data) {
                    $('#order').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    }

    function removeFormCart(id) {
        if (confirm("Bạn có đồng ý xóa sản phẩm hay không?")) {
            // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
            $.ajax({
                type: 'POST',
                url: './view/removeFormCart.php',
                data: {
                    id: id
                },
                success: function(response) {
                    // Sau khi cập nhật thành công
                    $.post('view/tableCartOrder.php', function(data) {
                        $('#order').html(data);
                    })
                },
                error: function(error) {
                    console.log(error);
                },
            })
        }
    }
</script>