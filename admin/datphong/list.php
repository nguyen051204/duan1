<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Danh sách đặt phòng</h3>
                <div class="ml-auto text-right">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="row formtitle">
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th>TÊN KHÁCH HÀNG</th>
                            <!-- <th>ID KHÁCH HÀNG</th> -->
                            <th>EMAIL</th>
                            <th>ID PHÒNG</th>
                            <th>GIÁ PHÒNG</th>
                            <th>ẢNH PHÒNG</th>
                            <th>NGÀY NHẬN</th>
                            <th>NGÀY TRẢ</th>
                            <th>TRẠNG THÁI</th>
                        </tr>
                        <?php
                        foreach ($loaddatphong_admin as $datphong) {
                            extract($datphong);
                            if($datphong['trangthai'] == 0){
                                $trangthai = "Đang xử lí";
                            }
                            else $trangthai = "Đã thanh toán";
                            $hinh_path = "../upload/".$img;
                            $hinh = "<img src = '".$hinh_path."' width = '100' height = '100'>";
                            // var_dump($datphong);
                            $suakh = "index.php?act=suakh&id=" . $id;
                            $xoakh = "index.php?act=xoakh&id=" . $id;
                            echo '   <tr>
                                <td>' . $datphong['name']. '</td>
                                <td>' . $datphong['email'] . '</td>
                                <td>' . $datphong['id'] . '</td>
                                <td>' . $giaPhong . '</td>
                                <td>' . $hinh. '</td>
                                <td>' . $ngayBatDau. '</td>
                                <td>' . $ngayKetThuc. '</td>
                                <td>' . $trangthai. '</td>
                            ';
                        }
                            // <td> 
                                //   <a href="' . $xoakh . '"><input type="button" name="" value="Xóa"></a> 
                                // </td>'
                        ?>
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</div>