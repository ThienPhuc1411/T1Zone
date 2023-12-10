<div class="container-scroller">
  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">CHI TIẾT ĐƠN HÀNG</h3>
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
                                <th class="stt">STT</th>
                                <th class="tensp">tên sản phẩm</th>
                                <th class="img">hình ảnh</th>
                                <th class="price">đơn giá</th>
                                <th class="yeuthich">số lượng</th>
                                <th class="price">thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                            foreach ($hdct as $hdct) {
                              $thanhtien = $hdct['so_luong']* $hdct['gia'];
                              echo '  <tr>
                                        <td class="checkbox">
                                            <input class="form-check-input checkItem" type="checkbox" name="" id="">
                                        </td>
                                        <td>'.$i.'</td>
                                        <td><div class="table-td-content">'.$hdct['tensp'].'</div></td>
                                        <td class="img">
                                            <img src="../Assets/uploads/sanpham/'.$hdct['img'].'" alt="" width="150">
                                        </td>
                                        <td class="price">'.number_format($hdct['gia']).'</td>
                                        <td>'.$hdct['so_luong'].'</td>
                                        <td class="price">'.number_format($thanhtien).' Đ</td>
                                      </tr>';
                            }
                            $i++;
                          ?>
                            
                  </table>
                  <div class="col-lg-12 grid-margin btn-s">
                      <a href="don-hang" class="btn btn-md btn-primary">Quay Lại</a>
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