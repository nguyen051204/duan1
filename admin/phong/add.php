<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h3 class="page-title">Thêm mới phòng</h3>
                <div class="ml-auto text-right">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="row formtitle">
                <!-- <h1>Thêm mới phòng</h1> -->
            </div>
            <div class="row formcontent">
                <form action="./index.php?act=addphong" enctype="multipart/form-data" method="post">
                    <div class="row mb10">
                        Mã phòng<br>
                        <input type="text" name="maphong" disabled>
                    </div>
                    <div class="row mb10">
                        Tên phòng<br>
                        <input type="text" name="tenphong">
                    </div>
                    <div class="row mb10">
                        Giá phòng<br>
                        <input type="text" name="giaphong">
                    </div>
                    
                    <div class="row mb10">
                        Hình ảnh <br>
                        <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">
                        Mô tả<br>
                        <input type="text" name="mota">
                    </div>
                    <div class="row mb10">
                        Id loại phòng<br>
                        <input type="text" name="idloaiphong">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <a href="index.php?act=listphong"><input type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
