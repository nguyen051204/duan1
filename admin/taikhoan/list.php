<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Danh sách tài khoản</h3>
                <div class="ml-auto text-right">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row">
    <div class="row formtitle">
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
                <?php
                foreach ($listnguoidung as $nguoidung) {
                    extract($nguoidung);
                    if($role ==1 ){
                        $role = "Admin";
                    }
                    else $role =  "Khách hàng";
                    $suakh = "index.php?act=suakh&id=" . $id;
                    $xoakh = "index.php?act=xoakh&id=" . $id;
                    echo '   <tr>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $pass . '</td>
                                <td>' . $email . '</td>
                                <td>' . $sdt . '</td>
                                <td>' . $role . '</td>
                                <td> 
                                  <a href="' . $xoakh . '"><input type="button" name="" value="Xóa"></a> 
                                </td>';
                }
              
                ?>

            </table>
        </div>
        <!-- <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div> -->
    </div>
</div>
    </div>
</div>
