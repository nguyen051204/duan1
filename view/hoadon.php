<!DOCTYPE html>
<html>

<head>
    <title>Hóa đơn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            color: #666;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        .customer-info,
        .invoice-details {
            margin-bottom: 20px;
        }

        .customer-info p,
        .invoice-details p {
            margin: 5px 0;
        }

        .total-row {
            font-weight: bold;
        }

        .container {
            box-sizing: border-box;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        p {
            font-size: 14px;
            line-height: 1.5;
        }

        table {
            margin-bottom: 30px;
        }

        th,
        td {
            padding: 12px 10px;
        }

        th {
            font-weight: bold;
        }

        .total-row td {
            font-weight: bold;
            color: #ff0000;
        }

        /* Responsive CSS */
        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }

            h1 {
                font-size: 20px;
                margin-bottom: 20px;
            }

            h2 {
                font-size: 16px;
                margin-bottom: 8px;
            }

            p {
                font-size: 12px;
            }

            th,
            td {
                padding: 8px;
            }

            body {
                background-image: linear-gradient(to bottom, #f5f5f5, #dddddd);
            }
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hóa đơn thanh toán</h1>
        <?php
        include "../model/pdo.php";
        $iduser = $_GET['vnp_OrderInfo'];
        function load_bill($iduser)
        {
            $sql = "SELECT phong.name,phong.giaPhong,phong.img, datphong.ngayBatDau, datphong.ngayKetThuc, nguoidung.email,nguoidung.sdt FROM phong 
            inner join datphong on phong.id = datphong.idPhong 
            join nguoidung on nguoidung.id = datphong.iduser where datphong.iduser = $iduser order by datphong.id desc;
            ";
            $bill = pdo_query_one($sql);
            return $bill;
        }
        $thongtin = load_bill($_GET['vnp_OrderInfo']);
        ?>
        <div class="customer-info">
            <h2>Thông tin khách hàng</h2>
            <p><strong>Tên khách hàng:</strong> Nguyễn Văn A</p>
            <p><strong>Số điện thoại:</strong> <?= $thongtin['sdt'] ?></p>
            <p><strong>Email:</strong> <?= $thongtin['email'] ?></p>
        </div>

        <div class="invoice-details">
            <h2>Thông tin hóa đơn</h2>
            <p><strong>Số hóa đơn:</strong> INV-20231211-<?= $_GET['vnp_TxnRef'] ?></p>
            <p><strong>Ngày tạo hóa đơn:</strong> <?= date('d-m-Y') ?></p>
        </div>

        <table>
            <tr>
                <th>Tên phòng</th>
                <th>Ngày nhận phòng</th>
                <th>Ngày kết thúc</th>
                <th>Đơn giá</th>
                <th>Tổng cộng</th>
                <th>Hành động</th>
            </tr>
            <tr>
                <td><?= $thongtin['name'] ?></td>
                <td><?= $thongtin['ngayBatDau'] ?></td>
                <td><?= $thongtin['ngayKetThuc'] ?></td>
                <td><?= $_GET['vnp_Amount'] / 100 ?></td>
                <td><?= $_GET['vnp_Amount'] / 100 ?></td>
                <td style="color: green">Đã thanh toán</td>
            </tr>
        </table>
            <BUTton name = "dathanhtoan"><a href="../index.php">OK</a></BUTton>
    </div>

</body>

</html>