<?php

function addOrder($id_user, $hoten, $sdt, $email, $tongtien, $pttt){
    $sql="INSERT INTO tbl_order (id_user, hoten, sdt, email, tongtien, pttt) VALUES ($id_user, '$hoten', '$sdt', '$email', $tongtien, $pttt);";
    $id=pdo_executeid($sql);
    return $id;
}

function addOrderDetail($id_order, $id_pro, $giaPhong, $soluong, $thanhtien){
    $sql="INSERT INTO order_detail (id_order, id_pro, giaPhong, soluong, thanhtien) VALUES ($id_order, $id_pro, $giaPhong, $soluong, $thanhtien );";
    pdo_execute($sql);
}
?>