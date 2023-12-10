<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Cập nhật danh mục</h3>                    
                </div>
                <div class="row">

                    <!-- Form nhập -->
                    <div class="col-lg-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nhập thông tin mới</h4>
                                <form action="index.php?act=update-TH" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?=$oneth[0]['id']?>">
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="tenth">Tên Thương Hiệu</label>
                                            <div class="input-group-prepend">
                                                <input type="text" name="tenth" id="tenth" class="form-control" value="<?=$oneth[0]['tenth']?>">
                                            </div>
                                        </div>
                                        <input type="hidden" name="tenth_cu" value="<?=$tenth[0]['tenth']?>">
                                        <div class="form-group">
                                            <label for="id_dm">Danh Mục</label>
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="id_dm" id="id_dm">
                                                    <option value="0">Chọn danh mục</option>
                                                    <?php
                                                        foreach ($kq as $dm) {
                                                            echo '<option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tenth">Hình ảnh</label>
                                            <div class="input-group-prepend">
                                                <input type="file" name="logo" id="logo" class="form-control" value="<?=$oneth[0]['logo']?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="visible">Hiển thị</label>
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="visible" id="visible">
                                                    <option value="0">Không</option>
                                                    <option value="1">Hiển thị</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input name="update_th" type="submit" class="btn btn-primary mr-2" value="Cập Nhật">
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
                                        <label for="tensp"></label>
                                        <div class="input-group-prepend">
                                            <input disabled type="text" name="tenth-cu" id="tensp" value="<?=$oneth[0]['tenth']?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="logo">Hình ảnh</label>
                                        <div class="input-group-prepend">
                                            <input disabled type="text" name="logo" value="<?=$oneth[0]['logo']?>">                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="visible">Hiển thị</label>
                                        <div class="input-group-prepend">
                                            <select disabled class="form-control" name="visible" id="visible">
                                                <option value="<?=$oneth[0]['visible']?>"><?=$oneth[0]['visible']?></option>
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