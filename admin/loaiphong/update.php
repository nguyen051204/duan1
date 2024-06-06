<?php
if (is_array($loaiphong)) {
    extract($loaiphong);
}
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Quản lí loại phòng</h3>
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
                <form action="./index.php?act=updatedm" method="post">
                    <div class="row mb10"> Mã loại <br> <input type="text" name="maloai" disabled> </div>
                    <div class="row mb10"> Tên loại <br> <input type="text" name="name" value="<?php if (isset($name) && $name != "") echo "$name" ?>"> </div>
                    <div class="row mb10"> <input type="hidden" name="id" value="<?php if (isset($id) && $id != "") echo "$id" ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <a href="index.php?act=lisdm"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php if (isset($thongbao) && $thongbao != "") {
                        echo $thongbao;
                    } ?>
                </form>
            </div>
        </div>
    </div>

</div>
