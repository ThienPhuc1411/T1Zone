<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Thêm sản phẩm</h3>                    
                </div>
                <div class="row">

                    <!-- Form nhập -->
                    <div class="col-lg-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nhập thông tin sản phẩm</h4>
                                <form action="index.php?act=add-Sp" method="post" enctype="multipart/form-data">
                                    <div class="forms-sample">
                                        <input type="hidden" name="ngay_nhap" value="<?=$ngay_nhap?>">
                                        <div class="form-group">
                                            <label for="tensp">Tên sản phẩm</label>
                                            <div class="input-group-prepend">
                                                <input type="text" name="tensp" id="tensp" class="form-control">
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
                                            <label for="id_th">Thương hiệu</label>
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="id_th" id="id_th">
                                                    <option value="0">Chọn Thương Hiệu</option>
                                                    <?php
                                                        if(isset($dsth)){
                                                            foreach ($dsth as $th) {
                                                                echo '<option value="'.$th['id'].'">'.$th['tenth'].'</option>';
                                                            }
                                                        }
                                                    ?>
                                                    <!-- <option value="1">ASUS</option>
                                                    <option value="2">Cooler Master</option>
                                                    <option value="3">Corsair</option>
                                                    <option value="4">Logitech</option>
                                                    <option value="5">Steelseries</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="price">Giá Sản Phẩm</label>
                                            <div class="input-group-prepend">
                                                <input type="text" name="price" id="price" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="price_sale">Giá khuyến mãi</label>
                                            <div class="input-group-prepend">
                                                <input type="text" name="price_sale" id="price_sale" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="img">Hình ảnh</label>
                                            <div class="input-group-prepend">
                                                <input type="file" name="img" id="img" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="detail">Chi tiết</label>
                                            <div class="input-group-prepend">
                                                <textarea class="form-control" name="detail" id="detail" rows="4"></textarea>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="hot">Hot</label>
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="hot" id="hot">
                                                    <option value="0">Không</option>
                                                    <option value="1">Hot</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="hot">Hiển thị</label>
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="visible" id="hienthi">
                                                    <option value="0">Không</option>
                                                    <option value="1">Hiển thị</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input name="addSp" type="submit" class="btn btn-primary mr-2" value="Thêm">
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
                                        <label for="tensp">Tên sản phẩm</label>
                                        <div class="input-group-prepend">
                                            <input disabled type="text" name="" id="tensp" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price_sale">Giá khuyến mãi</label>
                                        <div class="input-group-prepend">
                                            <input disabled type="text" name="" id="price_sale" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá</label>
                                        <div class="input-group-prepend">
                                            <input disabled type="text" name="" id="price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Hình ảnh</label>
                                        <div class="input-group-prepend">
                                            <input disabled type="file" name="" id="img" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail">Chi tiết</label>
                                        <div class="input-group-prepend">
                                            <textarea disabled class="form-control" name="" id="detail" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_th">Thương hiệu</label>
                                        <div class="input-group-prepend">
                                            <select disabled class="form-control" name="" id="id_th">
                                                <option value="1">ASUS</option>
                                                <option value="2">Cooler Master</option>
                                                <option value="3">Corsair</option>
                                                <option value="4">Logitech</option>
                                                <option value="4">Steelseries</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_dm">Danh mục</label>
                                        <div class="input-group-prepend">
                                            <select disabled class="form-control" name="" id="id_dm">
                                                <option value="1">Điện thoại</option>
                                                <option value="2">Laptop</option>
                                                <option value="3">Bàn phím</option>
                                                <option value="4">Chuột</option>
                                                <option value="4">Tai nghe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="hot">Hot</label>
                                        <div class="input-group-prepend">
                                            <select disabled class="form-control" name="" id="hot">
                                                <option value="1">Không</option>
                                                <option value="2">Hot</option>
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