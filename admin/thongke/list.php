
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Bảng thông kê loại phòng</h3>
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
                            <th>Mã danh mục </th>
                            <th>Loại Phòng</th>
                            <th>Số lượng </th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình </th>

                        </tr>
                        <?php
                        foreach ($listtk as $thongke) {
                            extract($thongke);


                            echo
                            '<tr>
                  
                            <td>' . $malp . '</td>
                            <td>' . $tenlp . '</td>
                            <td>' . $countp . '</td>
                            <td>' . $maxgia . '</td>
                            <td>' . $mingia . '</td>
                            <td>' . $avggia . '</td>
                            
                            
                        </tr>';
                        }


                        ?>
                    </table>
                    <div class="row mb10">
                        <a href="index.php?act=addphong"><input type="button" value="Nhập thêm"></a>
                    </div>

            </div>
        </div>
    </div>
</div>