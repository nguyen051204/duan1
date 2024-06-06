<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Danh sách phòng</h3>
                <div class="ml-auto text-right">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            
            
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                <table>
                        <tr>
                            <th>ID Bình luận</th>
                            <th>Nội dung bình luận</th>
                            <th>Tên khách hàng </th>
                            <th>IdPhong</th>
                            <th>Ngày bình luận</th>
                           
                            <th>Hành động</th>
                        </tr>
                        <?php
                            foreach($listbinhluan as $binhluan){
                                    extract($binhluan);
                                $xoabl="index.php?act=xoabl&id=".$binhluan['id'];
                                echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$name.'</td>
                                <td>'.$idPhong.'</td>
                                <td>'.$ngaybinhluan.'</td>
                                <td><a href="'.$xoabl.'"><input type="button" value="Xóa"> </a></td>
                            </tr>';
                        }

                        ?>
  
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>