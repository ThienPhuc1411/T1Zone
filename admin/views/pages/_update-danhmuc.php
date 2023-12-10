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
                                <form action="update-DM" method="post">
                                    <input type="hidden" name="id" value="<?=$onedm[0]['id']?>">
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="tendm">Tên danh mục</label>
                                            <div class="input-group-prepend">
                                                <input type="text" name="tendm" id="tendm" class="form-control" value="<?=$onedm[0]['tendm']?>">
                                            </div>
                                        </div>
                                        <input type="hidden" name="tendm_cu" value="<?=$onedm[0]['tendm']?>">
                                        <div class="form-group">
                                            <label for="uutien">Ưu tiên</label>
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="uutien" id="uutien">
                                                    <option value="0">Mức ưu tiên</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
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
                                        <input name="update_dm" type="submit" class="btn btn-primary mr-2" value="Cập Nhật">
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
                                            <input disabled type="text" name="tendm-cu" id="tensp" value="<?=$onedm[0]['tendm']?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="uutien">Hiển thị</label>
                                        <div class="input-group-prepend">
                                            <select disabled class="form-control" name="uutien" id="uutien">
                                                <option value="<?=$onedm[0]['uutien']?>"><?=$onedm[0]['uutien']?></option>
                                                <option value="1">Hiển thị</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="visible">Hiển thị</label>
                                        <div class="input-group-prepend">
                                            <select disabled class="form-control" name="visible" id="visible">
                                                <option value="<?=$onedm[0]['visible']?>"><?=$onedm[0]['visible']?></option>
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