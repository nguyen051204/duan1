
<div class="row">
            <div class="row formtitle">
                <h1>THỐNG KÊ SẢN PHẨM</h1>
            </div>
            <div class="row formcontent">
                <div class="row mb10 formdsloai">
                    <table>
                        <tr>
                            <th>MÃ DANH MỤC</th>
                            <th>TÊN DANH MỤC</th>
                            <th>SỐ LƯỢNG</th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ TRUNG BÌNH</th>
                            <th>GIÁ THẤP NHẤT</th>
                        </tr>
                        <?php
                            foreach($listthongke as $thongke){
                                extract($thongke);
                                echo '   <tr>
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxprice.'</td>
                                <td>'.$avgprice.'</td>
                                <td>'.$minprice.'</td>
                                </tr>';
                            }
                        ?>
                    </table>
                </div>
            </div>
            <a href="index.php?act=bieudo"><input type="submit" value="Biểu đồ thống kê" name="bieudo"></a>
        </div>