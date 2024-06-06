<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Danh sách phòng</h3>
                <div class="ml-auto text-right">
                    <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="row formtitle mb">
            </div>
            <div class="row mb10">
                <a href="index.php?act=addphong"><input type="button" value="Nhập thêm phòng"></a>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th>MÃ PHÒNG</th>
                            <th>TÊN PHÒNG</th>
                            <th>GIÁ PHÒNG</th>
                            <th>ẢNH</th>
                            <th>MÔ TẢ</th>
                            <th>ID LOẠI PHÒNG</th>
                            <th></th>
                        </tr>
                        <?php
                        foreach ($listphong as $phong) {
                            extract($phong);
                            // if ($trangThai == 1) {
                            //     echo "Còn phòng";
                            // } else {
                            //     echo "Hết phòng";
                            // }
                            $suasp = "index.php?act=suaphong&id=" . $id;
                            $xoasp = "index.php?act=xoaphong&id=" . $id;
                            $hinhpath = "../upload/" . $img;
                            if (is_file($hinhpath)) {
                                $hinh = "<img src='" . $hinhpath . "' height = '80'>";
                            } else {
                                $hinh = "No photo";
                            }
                            echo '   <tr>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $giaPhong . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $mota . '</td>
                                <td>' . $idLoaiPhong . '</td>
                                <td> 
                                <a href="' . $suasp . '"> <input type="button" name="" value="Sửa"></a>   <a href="' . $xoasp . '"><input type="button" name="" value="Xóa"></a> 
                                </td>';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>