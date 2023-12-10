<div class="container-scroller">
  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">Tất cả sản phẩm</h3>
        </div>
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                <form action="" method="post">
                  <table id="example" class="table table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox sorting_disabled sorting_asc_disabled sorting_desc_disabled" id="checkbox"></th>
                                <th class="tensp">tên sản phẩm</th>
                                <th class="tenkh">người bình luận</th>
                                <th class="ngaybl">ngày bình luận</th>
                                <th class="chitiet">nội dung</th>
                                <th class="hienthi">hiển thị</th>
                                <th class="hanhdong">hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            
                            if(isset($kq) && count($kq) > 0){
                              foreach ($kq as $bl) {
                                if($bl['visible'] == 0){
                                  $hienthi = 'Chưa hiển thị';
                                  $duyet = '<a href="update_BinhLuan&id='.$bl['id'].'" class="btn btn-primary btn-md">Duyệt</a>';
                                }else{
                                  $duyet = '<a href="#" class="btn btn-primary btn-md">Đã Duyệt</a>';
                                  $hienthi = 'Đã hiển thị';
                                }
                                echo '  <tr>
                                          <td class="checkbox">
                                              <input class="form-check-input checkItem" type="checkbox" name="" id="">
                                          </td>
                                          <td>
                                            <div class="table-td-content">'.$bl['tensp'].'</div>
                                          </td>
                                          <td class="">
                                            <div class="table-td-content">'.$bl['username'].'
                                            </div>
                                          </td>
                                          <td>'.$bl['ngay'].'</td>
                                          <td class="chitiet"> 
                                              <div class="table-td-content">'.$bl['noidung'].'</div>
                                          </td>
                                          <td class="hienthi">'.$hienthi.'</td>
                                          <td class="hanhdong">
                                              <div class="table-td-button">
                                                  '.$duyet.'
                                                  <a href="#" class="btn btn-danger btn-md">Xoa</a>
                                              </div>
                                          </td>
                                        </tr>';
                              }
                            }
                          ?>                            
                        </tbody>                        
                  </table>
                  <div class="col-lg-12 grid-margin btn-s">
                      <input class="btn btn-md btn-primary" id="checkAll" type="button" value="Chọn tất cả">
                      <input class="btn btn-md btn-success" id="UncheckAll" type="button" value="Bỏ chọn tất cả">
                      <input class="btn btn-md btn-danger" type="submit" value="Xóa mục đã chọn">
                  </div>
              </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>