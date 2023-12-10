<div class="container-scroller">
  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">Tất cả Tin Tức</h3>
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
                                <th class="ngay_nhap">Ngày Nhập</th>
                                <th class="dm">Tên Tin Tức</th>
                                <th class="th">Người nhập</th>
                                <th class="img">hình ảnh</th>
                                <th class="chitiet_ngan" style="width:200px;">Chi tiết Ngắn</th>
                                <th class="chitiet">Chi Tiết</th>
                                <th class="dm">Trạng Thái</th>
                                <th class="hanhdong">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                
                            if (isset($kq) && count($kq) > 0) {
                              $i = 1;
                              foreach ($kq as $post) {
                                
                                if ($post['visible'] == 1) {
                                  $hienthi = 'Đang hiển thị';
                                  $change = '<a href="hide-post&id=' . $post['id'] . '" class="btn btn-warning btn-md">Ẩn</a>';
                                } else {
                                  $hienthi = 'Đang Ẩn';
                                  $change = '<a href="show-post&id=' . $post['id'] . '" class="btn btn-success btn-md">Hiện</a>';
                                }
                                echo '  <tr>
                                <td class="checkbox">
                                    <input class="form-check-input checkItem" type="checkbox" name="" id="">
                                </td>
                                <td class="ngay_nhap">
                                    <div class="table-td-content">' .$post['ngay_nhap'].'</div>
                                </td>
                                <td class="dm">
                                    <div class="table-td-content">' . $post['ten_post'] . '</div>
                                </td>
                                <td class="th">
                                    <div class="table-td-content">' . $post['username'] . '</div>
                                </td>
                                <td class="img">
                                    <img src="../Assets/uploads/post/' . $post['img'] . '" alt="">
                                </td>
                                <td class="chitiet">
                                  <div class="table-td-content" id="detail">' .$post['noidung_ngan'] . '</div>
                                </td>
                                <td class="chitiet"> 
                                    <div class="table-td-content" id="detail">' . htmlspecialchars($post['noi_dung']) . '</div>
                                </td>
                                <td class="">'.$hienthi.'</td>
                                <td class="hanhdong">
                                    <div class="table-td-button">
                                        <div>'.$change.'</div>
                                        <a href="cap-nhat-post&id=' . $post['id'] . '" class="btn btn-primary btn-md">Sửa</a>
                                        <div class="topbar-content register-container" style="margin: 10px 0px; ">
                                          <button class="btn btn-danger btn-md" onclick="document.getElementById(`id'.$i.'`).style.display=`block`" style="width:auto; font-size: 18px;">Xóa</button>
                                          <div class="register-outline"></div>
                                        </div>
                                        
                                    </div>
                                </td>                                                          
                            </tr>
                            ';
                                echo '<div id="id'.$i.'" class="modal">
                                <div class="modal-content animate">
                                  <div class="container" style="background-color:white">
                                      <h3 class="login"style="color:black;padding:20px;text-align:center">Bạn có chắc muốn xóa? </h3>
                                      <div style="display:flex;justify-content:center;gap:20px;"> 
                                        <button class="btn btn-primary btn -md" onclick="document.getElementById(`id'.$i.'`).style.display=`none`" style="width:auto;">Không</button>
                                        <a href="del-post&id=' . $post['id'] . '" class="btn btn-danger btn-md">Xóa</a>
                                      
                                      </div>
                                      
                                      <input class="login" type="text" name="username" required>
                                      
                                    
                                  </div>
                                
                                </div>
                              </div>';
                                $i++;
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