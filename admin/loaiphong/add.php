<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h3 class="page-title">Thêm mới loại phòng</h3>
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
                    <!-- <div class="row formtitle">
                        <h1>Thêm mới loại phòng</h1>
                    </div> -->
                    <div class="row formcontent">
                        <form action="./index.php?act=adddm" method="post">
                            <div class="row mb10">
                                Mã phòng <br>
                                <input type="text" name="maloai" disabled>
                            </div>
                            <div class="row mb10">
                                Tên loại phòng <br>
                                <input type="text" name="name">
                            </div>
                            <div class="row mb10">
                              
                            <div class="row mb10">
                                <input type="submit" name="themmoi" value="Thêm mới">
                                <a href="index.php?act=lisdm"><input type="button" value="Danh sách"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>