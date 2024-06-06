<?php
function insert_phong($tenphong,$giaphong,$hinh,$mota,$idloaiphong){
    $sql = "insert into phong(name,giaPhong,img,mota,idLoaiPhong) values ('$tenphong','$giaphong','$hinh','$mota','$idloaiphong')";
    pdo_execute($sql);
}
function load_all_phong(){
    $sql = "SELECT * FROM phong";
    $listphong = pdo_query($sql);
    return $listphong;
}
function load_all_phong_home(){
    $sql = "SELECT * FROM phong ORDER BY id desc limit 3,9";
    $listphong = pdo_query($sql);
    return $listphong;
}
function load_one_phong($id){
    $sql = "SELECT * FROM phong where id =".$id;
    $phong = pdo_query_one($sql);
    return $phong;
}
function update_phong($id,$tenphong,$giaphong,$hinh,$mota,$idloaiphong){
    if($hinh != ""){
    $sql = "UPDATE phong SET name = '$tenphong',giaPhong = '$giaphong',img = '$hinh', mota= '$mota ',idLoaiPhong = '$idloaiphong' where id=".$id;
    }
    else{
    $sql = "UPDATE phong SET name = '$tenphong',giaPhong = '$giaphong ', mota= '$mota ',idLoaiPhong = '$idloaiphong' where id=".$id;
    }
    pdo_execute($sql);
}
function delete_phong($id){
    $sql = "DELETE FROM phong where id=".$id;
    pdo_execute($sql);
}
//Đặt phòng
function dat_phong($namekh,$idphong,$ngaybatdau,$ngayketthuc,$songuoi,$iduser){
    $sql = "insert into datphong(namekh,idPhong,ngayBatDau,ngayKetThuc,soLuong,iduser) values ('$namekh','$idphong','$ngaybatdau','$ngayketthuc','$songuoi','$iduser')";
    pdo_execute($sql);
}
//Tìm Phòng
function search_phong($ngayden,$ngaydi){
    $sql = "SELECT phong.* FROM phong LEFT JOIN datphong on phong.id = datphong.idPhong 
    WHERE datphong.idPhong IS NULL 
    OR ('$ngayden' NOT BETWEEN datphong.ngayBatDau AND datphong.ngayKetThuc AND '$ngaydi' 
    NOT BETWEEN datphong.ngayBatDau AND datphong.ngayKetThuc);";
    // if($danhmuc != ""){
    //     $sql .= " and  where "
    // }
    $sql .= " ORDER BY id DESC ";
    $listphong = pdo_query($sql);
    return $listphong;
}
// function search_danhmuc($id){
//     $sql = "SELECT phong.* FROM phong left join loaiphong on phong.idLoaiPhong = loaiphong.id where loaiphong.id = $id";
//     $listphong1 = pdo_query($sql);
//     return $listphong1;
// }

function loadone_phongCart ($idList) {
    $sql = 'SELECT * FROM phong WHERE id IN ('. $idList . ')';
    $sanpham = pdo_query($sql);
    return $sanpham;
}

function load_lichsu($iduser) {
   $sql = "SELECT phong.name,phong.giaPhong,phong.img, datphong.ngayBatDau, datphong.ngayKetThuc, datphong.trangthai FROM phong 
   inner join datphong on phong.id = datphong.idPhong 
   join nguoidung on nguoidung.id = datphong.iduser where datphong.iduser = $iduser order by datphong.id desc;
";
   $lichsu = pdo_query($sql);
   return $lichsu;
}
function loadall_phongdat_admin() {
    $sql = "SELECT phong.id,phong.giaPhong,phong.img, datphong.trangthai, datphong.ngayBatDau, datphong.ngayKetThuc,nguoidung.name,nguoidung.email  FROM phong 
    inner join datphong on phong.id = datphong.idPhong 
    join nguoidung on nguoidung.id = datphong.iduser order by datphong.id desc;";
    $lichsu = pdo_query($sql);
    return $lichsu;
 }
?>