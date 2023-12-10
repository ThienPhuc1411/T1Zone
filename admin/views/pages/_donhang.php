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
                                <th class="thongtinkh">Thông Tin Khách Hàng</th>
                                <th class="sdt">Mã HD</th>
                                <th class="ngay_nhap">Ngày Đặt</th>
                                <th class="hienthi">PTTT</th>
                                <th class="hienthi">vận chuyển</th>
                                <th class="hienthi">trạng thái</th>
                                <th class="price">tổng tiền</th>
                                <th class="hanhdong">hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            foreach ($kq as $hd) {
                              if($hd['duyet'] == 0){
                                $duyet = '<a href="update_DonHang&id='.$hd['id'].'" class="btn btn-danger btn-md">Duyệt</a>';
                              }else{
                                $duyet = '<div btn btn-primary btn-md>Đã duyệt</div>';
                              }
                              if($hd['trangthai'] == 0){
                                $trangthai = "Chưa Thanh Toán";
                              }else{
                                $trangthai = "Đã Thanh Toán";
                              }
                              echo '  <tr>
                                        <td class="checkbox">
                                            <input class="form-check-input checkItem" type="checkbox" name="" id="">
                                        </td>
                                      
                                        <td class="thongtinkh"> 
                                            <div class="kh">
                                                <div>Tên người nhận: '.$hd['ten_nguoi_nhan'].'</div>
                                                <div>Địa chỉ: '.$hd['diachi_nguoi_nhan'].'</div>
                                                <div>Số điện thoại: '.$hd['sdt_nguoi_nhan'].'</div>
                                            </div>
                                        </td>
                                        <td>
                                          #'.$hd['ma_hd'].'
                                        </td>
                                        <td class="">'.$hd['ngay'].'</td>
                                        <td class="">'.$hd['phuongthuc'].'</td>
                                        <td class="">'.$hd['hinhthuc'].'</td>
                                        <td class="">'.$trangthai.'</td>
                                        <td class="price">'.number_format($hd['tongtien']).' Đ</td>
                                        <td class="hanhdong">
                                            <div class="table-td-button">
                                                <a href="donhangchitiet&id='.$hd['id'].'" class="btn btn-primary btn-md">Xem Chi Tiết</a>
                                                '.$duyet.'
                                            </div>
                                        </td>
                                      </tr>';
                            }
                          ?>                            
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