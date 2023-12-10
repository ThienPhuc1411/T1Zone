<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Thêm Tin Tức</h3>                    
                </div>
                <div class="row">
                    <!-- Form nhập -->
                    <div class="col-lg-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Nhập Thông Tin Post</h4>
                                <form action="add-post" method="post" enctype="multipart/form-data">
                                    <div class="forms-sample">
                                        <div class="form-group">
                                            <label for="ten_post">Tên Tin Tức</label>
                                            <div class="input-group-prepend">
                                                <input type="text" name="ten_post" id="ten_post" class="form-control">
                                            </div>
                                        </div>
                                        <input type="hidden" name="id_User" value="<?=$_SESSION['id']?>">                                        
                                        <div class="form-group">
                                            <label for="img">Hình đại diện</label>
                                            <div class="input-group-prepend">
                                                <input type="file" name="img" id="img" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="noidung_ngan">Nội dung ngắn</label>
                                            <div class="input-group-prepend">
                                                <textarea class="form-control" name="noidung_ngan" id="noidung_ngan" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="noi_dung">Nội dung</label>
                                            <div class="input-group-prepend">
                                                <textarea class="form-control" name="noi_dung" id="noi_dung" rows="4"></textarea>
                                            </div>
                                        </div>
                                        <input name="addPost" type="submit" class="btn btn-primary mr-2" value="Thêm">
                                        <button type="reset" class="btn btn-success mr-2">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Mẫu -->
                    
                </div>
            </div>
        </div>
    </div>
</div>