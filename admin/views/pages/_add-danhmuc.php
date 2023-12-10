<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Thêm danh mục</h3>                    
                </div>
                <div class="row">

                    <!-- Form nhập -->
                    <div class="col-lg-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nhập thông tin danh mục</h4>
                                <form action="index.php?act=add-DM" method="post">
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="tensp">Tên danh mục</label>
                                            <div class="input-group-prepend">
                                                <input type="text" name="tendm" id="tendm" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="hot">Ưu tiên</label>
                                            <div class="input-group-prepend">
                                                <select class="form-control" name="uutien" id="uutien">
                                                    <option value="0">Chọn độ ưu tiên</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input name="addDm" type="submit" class="btn btn-primary mr-2" value="Thêm">
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
                                        <label for="tensp">Tên danh mục</label>
                                        <div class="input-group-prepend">
                                            <input disabled type="text" name="" id="tensp" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="hot">Ưu tiên</label>
                                            <div class="input-group-prepend">
                                                <select disabled class="form-control" name="uutien" id="uutien">
                                                    <option value="0">Chọn độ ưu tiên</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                    <!-- <div class="form-group">
                                        <label for="hot">Hiển thị</label>
                                        <div class="input-group-prepend">
                                            <select disabled class="form-control" name="hienthi" id="hienthi">
                                                <option value="0">Không</option>
                                                <option value="1">Hiển thị</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>