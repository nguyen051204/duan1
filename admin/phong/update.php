<?php
if (is_array($phong)) {
    extract($phong);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $img = "<img src='" . $hinhpath . "' height = '80'>";
} else {
    $img = "No photo";
}

?>


<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Cập nhật phòng</h3>
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
    <div class="row formtitle">
       
    </div>
    <div class="row formcontent">
        <form action="./index.php?act=updatephong" enctype="multipart/form-data" method="post">
            <div class="row mb10">
                <!-- <select name="iddm"> -->
                <!-- <option value="0" selected>Tất cả</option> -->
                <?php
                // foreach ($listdanhmuc as $danhmuc) {
                //     extract($danhmuc);
                //     if($iddm == $id )
                //     echo '<option value ="'. $danhmuc['id'] .'" selected>' . $danhmuc['name'] . '</option>';
                //     else  echo '<option value ="' . $danhmuc['id'] . '">' . $danhmuc['name'] . '</option>';
                // }
                ?>
                <!-- </select> -->
            </div>
            <div class="row mb10">
                Tên phòng <br>
                <input type="text" name="tenphong" value="<?= $phong['name'] ?>">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giaphong" value="<?= $giaPhong ?>">
            </div>
            
            <div class="row mb10">
                Hình ảnh <br>
                <input type="file" name="hinh">
                <?= $img ?>
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                ID Loại Phòng <br>
                <input type="text" name ="idloaiphong" value="<?=$idLoaiPhong?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $phong['id'] ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listphong"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>
    </div>
</div>