<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Thêm thương hiệu</h3>                    
                </div>
                <div class="row">

                    <!-- Form nhập -->
                    <div class="col-lg-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nhập thông tin thương hiệu</h4>
                                <form action="index.php?act=add-TH" method="post" enctype="multipart/form-data">
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="tenth">Tên thương hiệu</label>
                                            <div class="input-group-prepend">
                                                <input type="text" name="tenth" id="tendm" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_dm">Danh mục</label>
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="id_dm" id="id_dm">
                                                    <option value="0">Chọn Danh Mục</option>
                                                    <?php
                                                        if(isset($dsdm)){
                                                            foreach ($dsdm as $dm) {
                                                               echo ' <option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                                                            }
                                                         }
                                                    ?>
                                                    <!-- <option value="1">Điện thoại</option>
                                                    <option value="2">Laptop</option>
                                                    <option value="3">Bàn phím</option>
                                                    <option value="4">Chuột</option>
                                                    <option value="4">Tai nghe</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="img">Hình ảnh</label>
                                            <div class="input-group-prepend">
                                                <input type="file" name="logo" id="img" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="visible">Hiển thị</label>
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="visible" id="hienthi">
                                                    <option value="0">Không</option>
                                                    <option value="1">Hiển thị</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input name="addTh" type="submit" class="btn btn-primary mr-2" value="Thêm">
                                        <button type="reset" class="btn btn-success mr-2">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Mẫu -->
                    <div class="col-lg-5 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Mẫu</h4>
                                <div class="forms-sample">
                                    <div class="form-group">
                                        <label for="tensp">Tên thương hiệu</label>
                                        <div class="input-group-prepend">
                                            <input disabled type="text" name="" id="tensp" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="id_dm">Danh mục</label>
                                            <div class="input-group-prepend">
                                                <select disabled class="form-control" name="id_dm" id="id_dm">
                                                    <option value="1">Điện thoại</option>
                                                    <option value="2">Laptop</option>
                                                    <option value="3">Bàn phím</option>
                                                    <option value="4">Chuột</option>
                                                    <option value="4">Tai nghe</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                            <label for="hot">Hiển thị</label>
                                            <div class="input-group-prepend">
                                                <select disabled class="form-control" name="hienthi" id="hienthi">
                                                    <option value="0">Không</option>
                                                    <option value="1">Hiển thị</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>