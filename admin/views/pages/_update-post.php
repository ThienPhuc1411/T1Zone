<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Cập nhật sản phẩm</h3>                    
                </div>
                <div class="row">

                    <!-- Form nhập -->
                    <div class="col-lg-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nhập thông tin mới</h4>
                                <form action="update_post" method="post" enctype="multipart/form-data">
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="ten_post">Tên Tin Tức</label>
                                            <div class="input-group-prepend">
                                                <input type="text" name="ten_post" id="ten_post" class="form-control" value="<?=$onePost[0]['ten_post']?>">
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?=$onePost[0]['id']?>">                                      
                                        <div class="form-group">
                                            <label for="img">Hình đại diện</label>
                                            <div class="input-group-prepend">
                                                <input type="file" name="img" id="img" class="form-control" value="<?=$onePost[0]['img']?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="noidung_ngan">Nội dung ngắn</label>
                                            <div class="input-group-prepend">
                                                <textarea class="form-control" name="noidung_ngan" id="noidung_ngan" rows="4" value="<?=$onePost[0]['noidung_ngan']?>"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="noi_dung">Nội dung</label>
                                            <div class="input-group-prepend">
                                                <textarea class="form-control" name="noi_dung" id="noi_dung" rows="4" value="<?=$onePost[0]['noi_dung']?>"></textarea>
                                            </div>
                                        </div>
                                        <input name="UpdatePost" type="submit" class="btn btn-primary mr-2" value="Cập Nhật">
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
                                <h4 class="card-title">Thông tin cũ</h4>
                                <div class="forms-sample">
                                    <div class="form-group">
                                        <label for="tensp">Tên sản phẩm</label>
                                        <div class="input-group-prepend">
                                            <input type="text" name="" id="tensp" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price_sale">Giá khuyến mãi</label>
                                        <div class="input-group-prepend">
                                            <input type="text" name="" id="price_sale" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Giá</label>
                                        <div class="input-group-prepend">
                                            <input type="text" name="" id="price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Hình ảnh</label>
                                        <div class="input-group-prepend">
                                            <input type="file" name="" id="img" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail">Chi tiết</label>
                                        <div class="input-group-prepend">
                                            <textarea class="form-control" name="" id="detail" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="id_th">Thương hiệu</label>
                                        <div class="input-group-prepend">
                                            <select class="form-control" name="" id="id_th">
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
                                            <select class="form-control" name="" id="id_dm">
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
                                            <select class="form-control" name="" id="hot">
                                                <option value="1">Không</option>
                                                <option value="2">Hot</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="hot">Hiển thị</label>
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="hienthi" id="hienthi">
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