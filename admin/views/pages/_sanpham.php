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
                                <th class="ngay_nhap">Ngày Nhập</th>
                                <th class="dm">Danh Mục</th>
                                <th class="th">Thương Hiệu</th>                                
                                <th class="tensp">Tên sản phẩm</th>                                
                                <th class="price">Giá</th>
                                <th class="price_sale">Giá Sale</th>
                                <th class="img">hình ảnh</th>
                                <th class="chitiet">Chi Tiết</th>
                                <th class="thong_so">Thông số cơ bản</th>
                                <th class="hanhdong">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            if (isset($kq) && count($kq) > 0) {
                              $i = 1;
                              foreach ($kq as $sp) {
                                
                                if ($sp['visible'] == 1) {
                                  $hienthi = 'Đang hiển thị';
                                  $change = '<a href="index.php?act=hide-San-Pham&id=' . $sp['id'] . '" class="btn btn-warning btn-md">Ẩn</a>';
                                } else {
                                  $hienthi = 'Đang Ẩn';
                                  $change = '<a href="index.php?act=show-San-Pham&id=' . $sp['id'] . '" class="btn btn-success btn-md">Hiện</a>';
                                }
                                if ($sp['hot'] == 1) {
                                  $hot = 'Có';
                                } else {
                                  $hot = 'Không';
                                }
                                echo '  <tr>
                                <td class="checkbox">
                                    <input class="form-check-input checkItem" type="checkbox" name="" id="">
                                </td>
                                <td class="ngay_nhap">
                                    <div class="table-td-content">' . $sp['ngay_nhap'] . '</div>
                                </td>
                                <td class="dm">
                                    <div class="table-td-content">' . $sp['tendm'] . '</div>
                                </td>
                                <td class="th">
                                    <div class="table-td-content">' . $sp['tenth'] . '</div>
                                </td>
                                <td class="tensp"><div class="table-td-content">' . $sp['tensp'] . '</div></td>
                                <td class="price">' . number_format($sp['price']) . '</td>
                                <td class="price_sale">' . number_format($sp['price_sale']) . '</td>
                                <td class="img">
                                    <img src="../Assets/uploads/sanpham/' . $sp['img'] . '" alt="">
                                </td>
                                <td class="chitiet"> 
                                    <div class="table-td-content" id="detail">' . htmlspecialchars($sp['detail']) . '</div>
                                </td>
                                <td class="thong_so">
                                  <p>Lượt yêu thích: ' . $sp['yeuthich'] . '</p>
                                  <p>Độ Hot: ' . $hot . '</p>
                                  <p>Lượt truy cập: ' . $sp['truycap'] . '</p>
                                  <p>Lượt bán: ' . $sp['sell'] . '</p>
                                  <p>Trạng thái: ' . $hienthi . '</p>
                                </td>
                                <td class="hanhdong">
                                    <div class="table-td-button">
                                        <div>'.$change.'</div>
                                        <a href="edit-San-Pham&id=' . $sp['id'] . '" class="btn btn-primary btn-md">Sửa</a>
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
                                        <a href="xoa-San-Pham&id=' . $sp['id'] . '" class="btn btn-danger btn-md">Xóa</a>
                                      
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