<?php
function insert_binhluan($noidung, $name, $idPhong, $ngaybinhluan)
{
    $sql = "insert into binhluan(noidung,iduser,idPhong,ngaybinhluan) values('$noidung','$name','$idPhong','$ngaybinhluan') ";
    pdo_execute($sql);
}
function loadall_binhluan($idPhong)
{
    $sql = "SELECT binhluan.noidung, binhluan.ngaybinhluan, nguoidung.name FROM binhluan join nguoidung on nguoidung.id = binhluan.iduser ";
    if ($idPhong > 0)
        $sql .= " AND idPhong='" . $idPhong . "'";

    $sql .= " order by binhluan.id desc";
    $listbl = pdo_query($sql);
    return  $listbl;
}
function loadbl_all_admin()  {
    $sql = "SELECT binhluan.idPhong,binhluan.id, binhluan.noidung, nguoidung.name,binhluan.ngaybinhluan from binhluan join nguoidung on nguoidung.id = binhluan.iduser join phong on binhluan.idPhong = phong.id";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}
// function load_binhluan(){
//     $sql = "SELECT nguoidung.name,binhluan.noidung,binhluan.ngaybinhluan"
// }
