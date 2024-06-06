<?php
session_start();
include "model/pdo.php";
include "model/phong.php";
include "model/taikhoan.php";
include "model/order.php";
include "./global.php";
$phongnew  = load_all_phong_home();

if (isset($_GET['act']) && ($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'choo':
            $phongnew  = load_all_phong_home();
            include "./view/choo.php";
            break;
        case 'booking':
            if (isset($_GET['idphong']) && ($_GET['idphong'] > 0)) {
                $phong = load_one_phong($_GET['idphong']);
            }
            include "./view/booking.php";
            break;


        case 'xacnhantt':
            $phong = load_one_phong($_GET['idphong']);
            include "./view/datphong.php";
            break;
        case 'datphong':
            if (isset($_POST['datphong']) && ($_POST['datphong'])) {
                $tong = $_SESSION['tong'];
                $iduser = $_POST['iduser'];
                $idphong = $_POST['idphong'];
                $namekh = $_POST['namekh'];
                $phonenumber = $_POST['phonenumber'];
                $email = $_POST['email'];
                $cmt = $_POST['cmt'];
                $songuoi = $_POST['songuoi'];
                $ngaybatdau = $_POST['ngaybatdau'];
                $ngayketthuc = $_POST['ngayketthuc'];
                dat_phong($namekh, $idphong, $ngaybatdau, $ngayketthuc, $songuoi, $iduser);
                $thongbao = "Đặt phòng thành công!";
                $phong = load_one_phong($_POST['idphong']);
                include "./view/datphong.php";
            }
            if (isset($_POST['redirect'])) {
                // $_SESSION['dathanhtoan'] = "Đã thanh toán";
                $iduser = $_POST['iduser'];
                $idphong = $_POST['idphong'];
                $namekh = $_POST['namekh'];
                $phonenumber = $_POST['phonenumber'];
                $email = $_POST['email'];
                $cmt = $_POST['cmt'];
                $songuoi = $_POST['songuoi'];
                $ngaybatdau = $_POST['ngaybatdau'];
                $ngayketthuc = $_POST['ngayketthuc'];
                dat_phong($namekh, $idphong, $ngaybatdau, $ngayketthuc, $songuoi, $iduser);
                $thongbao = "Đặt phòng thành công!";
                $phong = load_one_phong($_POST['idphong']);


                $tong = $_SESSION['tong'];
                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                $vnp_Returnurl = "http://localhost/php/du_an_one/view/hoadon.php";
                $vnp_TmnCode = "CGXZLS0Z"; //Mã website tại VNPAY 
                $vnp_HashSecret = "XNBCJFAKAZQSGTARRLGCHVZWCIOIGSHN"; //Chuỗi bí mật
                $vnp_TxnRef = rand(00, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                $vnp_OrderInfo = $_SESSION['name']['id'];
                $vnp_OrderType = 'billpayment';
                $vnp_Amount = $tong * 100;
                $vnp_Locale = 'vn';
                $vnp_BankCode = 'NCB';
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => $vnp_OrderInfo,
                    "vnp_OrderType" => $vnp_OrderType,
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef,
                    // "vnp_user" => $vnp_user
                );

                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }

                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                $returnData = array(
                    'code' => '00', 'message' => 'success', 'data' => $vnp_Url
                );
                if (isset($_POST['redirect'])) {
                    header('Location: ' . $vnp_Url);
                    die();
                } else {
                    echo json_encode($returnData);
                }
            }
            break;
        case 'hoadon':
            break;
        case 'lichsudat':
            $iduser = $_SESSION['name']['id'];
            $lichsu = load_lichsu($iduser);
            include 'view/lichsudat.php';
            break;
        case 'timphong':
            if (isset($_POST['timphong']) && $_POST['timphong']) {
                $ngayden = $_POST['ngayden'];
                $ngaydi = $_POST['ngaydi'];
                // $danhmuc = $_POST['danhmuc'];
            } else {
                $keyw = "";
                $giaphong = 0;
            }
            $listphong = search_phong($ngayden, $ngaydi);
            include "./view/timphong.php";
            break;

        case 'thanhtoan':
            $phong = load_one_phong($_GET['idphong']);
            include "./view/thanhtoan.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            exit();
            break;
        case "listCart":
            if (!empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                $productId = array_column($cart, 'id');
                $idList = implode(',', $productId);
                $dataDb = loadone_phongCart($idList);
            }
            include "view/listCartOrder.php";
            break;
        case 'lichsudat':
            // $tk = loadtk_đh($_GET['nameuser']);
            $lichsu = load_lichsu($iduser);
            include 'view/lichsudat.php';
            break;
        case "success":
            if (isset($_SESSION['success'])) {
                include 'view/success.php';
            } else {
                header("Location: index.php");
            }
            break;
        case "order":
            if (isset($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];
                if (isset($_POST['order_confirm']) && $_POST['order_confirm']) {
                    $txthoten = $_POST['txthoten'];
                    $txttel = $_POST['txttel'];
                    $txtemail = $_POST['txtemail'];
                    $pttt = $_POST['pttt'];
                    if (isset($_SESSION['user'])) {
                        $id_user = $_SESSION['user']['id'];
                    } else {
                        $id_user = 0;
                    }
                    $idBill = addOrder($id_user, $txthoten, $txttel, $txtemail, $_SESSION['resultTotal'], $pttt);
                    foreach ($cart as $item) {
                        addOrderDetail($idBill, $item['id'], $item['giaPhong'], $item['quantity'], $item['giaPhong'] * $item['quantity']);
                    }
                    unset($_SESSION['cart']);
                    $_SESSION['success'] = $idBill;
                    header("Location: index.php?act=success");
                }
                include "view/order.php";
            } else {
                header("Location: index.php?act=listCart");
            }
            break;
        case 'ttonl':
            if (isset($_POST['order_confirm']) && ($_POST['order_confirm'])) {
                $pttt = $_POST['pttt'];
                $txthoten = $_POST['txthoten'];
                $txttel = $_POST['txttel'];
                $txtemail = $_POST['txtemail'];
                if ($pttt == 2) {

                    $cart = $_SESSION['cart'];
                    $namekh = $_POST['txthoten'];
                    $idphong = $_POST['idphong'];
                    $iduser = $_POST['iduser'];
                    $txtemail = $_POST['txtemail'];
                    $txttel = $_POST['txttel'];
                    $songuoi = 2;
                    $ngaybatdau = $_POST['ngaynhanphong'];
                    $ngayketthuc = $_POST['ngaytraphong'];
                    dat_phong($namekh, $idphong, $ngaybatdau, $ngayketthuc, $songuoi, $iduser);


                    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                    $vnp_Returnurl = "http://localhost/php/du_an_one/view/hoadon.php";
                    $vnp_TmnCode = "CGXZLS0Z"; //Mã website tại VNPAY 
                    $vnp_HashSecret = "XNBCJFAKAZQSGTARRLGCHVZWCIOIGSHN"; //Chuỗi bí mật

                    $vnp_TxnRef = rand(00, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                    $vnp_OrderInfo = $_SESSION['name']['id'];
                    $vnp_OrderType = 'billpayment';
                    $vnp_Amount = 1000000 * 100;
                    $vnp_Locale = 'vn';
                    $vnp_BankCode = 'NCB';
                    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

                    $inputData = array(
                        "vnp_Version" => "2.1.0",
                        "vnp_TmnCode" => $vnp_TmnCode,
                        "vnp_Amount" => $vnp_Amount,
                        "vnp_Command" => "pay",
                        "vnp_CreateDate" => date('YmdHis'),
                        "vnp_CurrCode" => "VND",
                        "vnp_IpAddr" => $vnp_IpAddr,
                        "vnp_Locale" => $vnp_Locale,
                        "vnp_OrderInfo" => $vnp_OrderInfo,
                        "vnp_OrderType" => $vnp_OrderType,
                        "vnp_ReturnUrl" => $vnp_Returnurl,
                        "vnp_TxnRef" => $vnp_TxnRef
                    );

                    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                        $inputData['vnp_BankCode'] = $vnp_BankCode;
                    }
                    ksort($inputData);
                    $query = "";
                    $i = 0;
                    $hashdata = "";
                    foreach ($inputData as $key => $value) {
                        if ($i == 1) {
                            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                        } else {
                            $hashdata .= urlencode($key) . "=" . urlencode($value);
                            $i = 1;
                        }
                        $query .= urlencode($key) . "=" . urlencode($value) . '&';
                    }

                    $vnp_Url = $vnp_Url . "?" . $query;
                    if (isset($vnp_HashSecret)) {
                        $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
                        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                    }
                    $returnData = array(
                        'code' => '00', 'message' => 'success', 'data' => $vnp_Url
                    );
                    if (isset($_POST['order_confirm'])) {
                        header('Location: ' . $vnp_Url);
                        die();
                    } else {
                        echo json_encode($returnData);
                    }
                } else {
                    $cart = $_SESSION['cart'];
                    $namekh = $_POST['txthoten'];
                    $idphong = $_POST['idphong'];
                    $iduser = $_POST['iduser'];
                    $txtemail = $_POST['txtemail'];
                    $txttel = $_POST['txttel'];
                    $iduser = $_POST['iduser'];
                    $songuoi = 2;
                    $ngaybatdau = $_POST['ngaynhanphong'];
                    $ngayketthuc = $_POST['ngaytraphong'];
                    $lichsu = load_lichsu($iduser);
                    dat_phong($namekh, $idphong, $ngaybatdau, $ngayketthuc, $songuoi, $iduser);
                }
                include 'view/lichsudat.php';
            }
            break;
        default:
            include "./view/header.php";
            include "./view/home.php";
            include "./view/footer.php";
    }
} else {
    include "./view/header.php";
    include "./view/home.php";
    include "./view/footer.php";
}
